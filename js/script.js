//***************************** PAGINA INCORPORACAO *************************/
// 
let disabledBtnFilterTop = (btn) => {
    let btns = document.getElementsByClassName('btn-filter-top')
    for (let i = 0; i < btns.length; i++) {
        btns[i].className = 'btn-filter-top'
    }
    btn.className = 'btn-filter-top active'
}

let disabledBtnFilterLinhaTempo = (btn, year, boll) => {
    let btns = document.getElementsByClassName('btn-linha-tempo')
    let contains = Array.from(document.getElementsByClassName('contain-filter'))
    for (let i = 0; i < btns.length; i++) {
        if (boll) btns[i].className = 'btn-linha-tempo'
        if(!boll) document.getElementById('span-btn-filter-mobille').innerHTML = ''
        if(!boll) document.getElementById('span-btn-filter-mobille').innerHTML = year
        contains[i].className = 'contain-filter d-none'        
    }
    if (boll) btn.className = 'btn-linha-tempo active'
    year = String(year)
    document.querySelector(`div.contain-filter[data-year='${year}']`).className = 'contain-filter d-block'
}

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
    }, 600, function() {});
}


//***************************** MODAL SLICK INLINE *************************/

let openModalSlickInline = (idMedida) => {
    $('.container-slick-modal').slick({
        dots: false,
        arrows: false,
    });

    // trocar imagens aqui, vindas de um array
    let imgs = document.getElementsByClassName('contain-img-modal-slick-inline')
    for(let i = 0; i < imgs.length; i++) {
        let dataId = parseInt(imgs[i].getAttribute('data-id'))
        if (dataId != idMedida) {
            $('.container-slick-modal').slick('slickRemove', i);
        }
    }

    $('#modal-slick-inline').modal('show')
}

let closeModalSlickInline = () => {
    $('.container-slick-modal').slick('unslick');
    $('#modal-slick-inline').modal('hide')
}

$('#modal-slick-inline').on('shown.bs.modal', function (e) {
    $('.container-slick-modal').slick('setPosition');
    $('.wrap-modal-slider').addClass('open');
})