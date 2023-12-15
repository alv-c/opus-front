//***************************** PAGINA INCORPORACAO *************************/
// 
let disabledBtnFilterTop = (btn) => {
    let btns = document.getElementsByClassName('btn-filter-top')
    for (let i = 0; i < btns.length; i++) {
        btns[i].className = 'btn-filter-top'
    }
    btn.className = 'btn-filter-top active'
}

let disabledBtnFilterContains = (btn, year, boll, all = false) => {
    let btns = document.getElementsByClassName('btn-linha-tempo')
    let contains = Array.from(document.getElementsByClassName('contain-filter'))
    for (let i = 0; i < btns.length; i++) {
        if (boll) btns[i].className = 'btn-linha-tempo'
        if (!boll) document.getElementById('span-btn-filter-mobille').innerHTML = ''
        if (!boll) document.getElementById('span-btn-filter-mobille').innerHTML = year
    }
    if (boll) btn.className = 'btn-linha-tempo active'
    if (all == false) year = String(year)

    for (let i = 0; i < contains.length; i++) {
        if (contains[i].getAttribute('data-year') == year && all == false) {
            contains[i].className = 'contain-filter contain-filter-conheca card-revista d-block'
        } else if (all == false) {
            contains[i].className = 'contain-filter contain-filter-conheca card-revista d-none'
        } else {
            contains[i].className = 'contain-filter contain-filter-conheca card-revista d-block'
        }
    }
}

// EXPANDIR INPUT SEARCH NAVBAR SUPERIOR
$("button.btn-expand-search").click(function () {
    $('input.search-click').focus();
});


//CARREGAR MAIS ITENS
let carregarMais = (id, num = 0) => {
    let itens = document.getElementById(id).children 
    let inicial = 0;
    for(let i = 0; i < itens.length; i++) {
        if (window.getComputedStyle(itens[i]).display == 'block') inicial += 1
    }
    inicial += num;
    for(let i = 0; i < inicial; i++) {
        if(itens[i] != undefined) itens[i].style.display = 'block';
    }
}

$(document).ready(function () {
    function lightGallery(content,itens) {
        // LIGHTGALLERY SWIPE
        const $galeriaSessaoImagens =  document.getElementById(content);
        const galeriaSessaoImagens = window.lightGallery($galeriaSessaoImagens, {
            dynamic: true,
            plugins: [lgZoom, lgVideo, lgThumbnail],
            dynamicEl: itens
        });

        galeriaSessaoImagens.openGallery(0);
    }
    window.openGalleryModal = (id,itens) => lightGallery(id,itens);
})

//***************************** YOUTUBE MODAL *************************/
var player
var videoId
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: videoId,
        playerVars: {
            'playsinline': 1
        },
        events: {
            'onReady': onPlayerReady,
        }
    })
}

function onPlayerReady(event) {
    event.target.playVideo() // autostart
}

var done = false;
function stopVideo() {
    player.stopVideo()
}

function loadYouTubeVideo(videoId) {
    if (player) player.loadVideoById(videoId);
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}

let iniciarModalYt = (url) => {
    videoId = youtube_parser(url)
    loadYouTubeVideo(videoId)
}

function youtube_parser(url) {
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
    var match = url.match(regExp);
    return (match && match[7].length == 11) ? match[7] : false;
}

var pauseBtn = document.getElementById('pauseBtn')
pauseBtn.addEventListener('click', function (event) {
    player.pauseVideo()
})
//***************************** FIM YOUTUBE MODAL *************************/



//***************************** SCROLL SUAVE *************************/
let scrollSuave = (event, link) => {
    event.preventDefault();
    $("html, body").animate({
        scrollTop: $(`#${link}`).offset().top - 100
    }, 600, function () { });
}

//***************************** PAGINA IMOVEL *************************/
class Dial {
    constructor(container) {
        this.container = container;
        this.size = this.container.dataset.size;
        this.strokeWidth = this.size / 8;
        this.radius = this.size / 2 - this.strokeWidth / 2;
        this.value = this.container.dataset.value;
        this.direction = this.container.dataset.arrow;
        this.svg;
        this.defs;
        this.slice;
        this.overlay;
        this.text;
        this.arrow;
        this.create();
    }

    create() {
        this.createSvg();
        this.createDefs();
        this.createSlice();
        this.createOverlay();
        this.createText();
        this.createArrow();
        this.container.appendChild(this.svg);
    }

    createSvg() {
        let svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute("width", `${this.size}px`);
        svg.setAttribute("height", `${this.size}px`);
        this.svg = svg;
    }

    createDefs() {
        var defs = document.createElementNS("http://www.w3.org/2000/svg", "defs"),
            linearGradient = document.createElementNS(
                "http://www.w3.org/2000/svg",
                "linearGradient"
            ),
            stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop"),
            stop2 = document.createElementNS("http://www.w3.org/2000/svg", "stop"),
            linearGradientBackground = document.createElementNS(
                "http://www.w3.org/2000/svg",
                "background"
            );
        linearGradient.setAttribute("id", "gradient");
        stop1.setAttribute("stop-color", "#000");
        stop1.setAttribute("offset", "0%");
        linearGradient.appendChild(stop1);
        stop2.setAttribute("stop-color", "#000");
        stop2.setAttribute("offset", "100%");
        linearGradient.appendChild(stop2);
        linearGradientBackground.setAttribute("id", "gradient-background");
        var stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
        stop1.setAttribute("stop-color", "rgba(0,0,0,0.2)");
        stop1.setAttribute("offset", "0%");
        linearGradientBackground.appendChild(stop1);
        var stop2 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
        stop2.setAttribute("stop-color", "rgba(0,0,0,0.5)");
        stop2.setAttribute("offset", "1000%");
        linearGradientBackground.appendChild(stop2);
        defs.appendChild(linearGradient);
        defs.appendChild(linearGradientBackground);
        this.svg.appendChild(defs);
        this.defs = defs;
    }

    createSlice() {
        let slice = document.createElementNS("http://www.w3.org/2000/svg", "path");
        slice.setAttribute("fill", "none");
        slice.setAttribute("stroke", "url(#gradient)");
        slice.setAttribute("stroke-width", this.strokeWidth);
        slice.setAttribute(
            "transform",
            `translate(${this.strokeWidth / 2},${this.strokeWidth / 2})`
        );
        slice.setAttribute("class", "animate-draw");
        this.svg.appendChild(slice);
        this.slice = slice;
    }

    createOverlay() {
        const r = this.size - this.size / 2 - this.strokeWidth / 2;
        const circle = document.createElementNS(
            "http://www.w3.org/2000/svg",
            "circle"
        );
        circle.setAttribute("cx", this.size / 2);
        circle.setAttribute("cy", this.size / 2);
        circle.setAttribute("r", r);
        circle.setAttribute("fill", "url(#gradient-background)");
        circle.setAttribute("class", "animate-draw");
        this.svg.appendChild(circle);
        this.overlay = circle;
    }

    createText() {
        const fontSize = this.size / 3.5;
        let text = document.createElementNS("http://www.w3.org/2000/svg", "text");
        text.setAttribute("x", this.size / 2 + fontSize / 7.5);
        text.setAttribute("y", this.size / 2 + fontSize / 4);
        text.setAttribute("font-family", "grotesk");
        text.setAttribute("font-weight", "600");
        text.setAttribute("font-size", 14);
        text.setAttribute("fill", "#000");
        text.setAttribute("text-anchor", "middle");
        const tspanSize = 16 / 3;
        text.innerHTML = `${0}% `;
        this.svg.appendChild(text);
        this.text = text;
    }

    createArrow() {
        var arrowSize = this.size / 10;
        var mapDir = {
            up: [(arrowYOffset = arrowSize / 2), (m = -1)],
            down: [(arrowYOffset = 0), (m = 1)]
        };
        function getDirection(i) {
            return mapDir[i];
        }
        var [arrowYOffset, m] = getDirection(this.direction);

        let arrowPosX = this.size / 2 - arrowSize / 2,
            arrowPosY = this.size - this.size / 3 + arrowYOffset,
            arrowDOffset = m * (arrowSize / 1.5),
            arrow = document.createElementNS("http://www.w3.org/2000/svg", "path");
        arrow.setAttribute(
            "d",
            `M 0 0 ${arrowSize} 0 ${arrowSize / 2} ${arrowDOffset} 0 0 Z`
        );
        arrow.setAttribute("fill", "none");
        arrow.setAttribute("opacity", "0.6");
        arrow.setAttribute("transform", `translate(${arrowPosX},${arrowPosY})`);
        this.svg.appendChild(arrow);
        this.arrow = arrow;
    }

    animateStart() {
        let v = 0;
        const intervalOne = setInterval(() => {
            const p = +(v / this.value).toFixed(2);
            const a = p < 0.95 ? 2 - 2 * p : 0.05;
            v += a;
            if (v >= +this.value) {
                v = this.value;
                clearInterval(intervalOne);
            }
            this.setValue(v);
        }, 10);
    }

    polarToCartesian(centerX, centerY, radius, angleInDegrees) {
        const angleInRadians = ((angleInDegrees - 180) * Math.PI) / 180.0;
        return {
            x: centerX + radius * Math.cos(angleInRadians),
            y: centerY + radius * Math.sin(angleInRadians)
        };
    }

    describeArc(x, y, radius, startAngle, endAngle) {
        const start = this.polarToCartesian(x, y, radius, endAngle);
        const end = this.polarToCartesian(x, y, radius, startAngle);
        const largeArcFlag = endAngle - startAngle <= 180 ? "0" : "1";
        const d = [
            "M",
            start.x,
            start.y,
            "A",
            radius,
            radius,
            0,
            largeArcFlag,
            0,
            end.x,
            end.y
        ].join(" ");
        return d;
    }

    setValue(value) {
        let c = (value / 100) * 360;
        if (c === 360) c = 359.99;
        const xy = this.size / 2 - this.strokeWidth / 2;
        const d = this.describeArc(xy, xy, xy, 180, 180 + c);
        this.slice.setAttribute("d", d);
        const tspanSize = this.size / 3.5 / 3;
        this.text.innerHTML = `${Math.floor(value)}% `;
    }

    animateReset() {
        this.setValue(0);
    }
}

let showChart = () => {
    const chartItems = document.getElementsByClassName("chart");
    for (let i = 0; i < chartItems.length; i++) {
        let chartProjetos = new Dial(chartItems[i]);
        chartProjetos.animateStart();
    }
}