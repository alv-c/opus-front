<?php require_once "./includes/navbar.php"; ?>
<?php require_once "./includes/modal_video.php"; ?>

<section class="urbanismo-primaria">
    <div class="container">
        <div class="breadcrumb-inc">
            <a href="index.php" class="init">Home</a>
            <div class="ico">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 10 11" fill="none">
                    <mask id="mask0_11_443" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="10" height="11">
                        <rect x="10" y="10.5" width="10" height="10" transform="rotate(-180 10 10.5)" fill="#D9D9D9" />
                    </mask>
                    <g>
                        <path d="M3.33333 1.3334L7.5 5.50006L3.33333 9.66673L2.59375 8.92715L6.02083 5.50006L2.59375 2.07298L3.33333 1.3334Z" fill="#1C1B1F" />
                    </g>
                </svg>
            </div>
            <span class="atual">Urbanismo</span>
        </div>
        <div class="titulo">
            <span>Urbanismo</span>
        </div>
    </div>
</section>
<section class="urbanismo-banner">
    <div class="banner">
        <img class="mx-auto desktop" src="./img/urbanismo/banner_desktop.png" alt="Opus Incorporação">
        <img class="mx-auto tablet" src="./img/urbanismo/banner_tablet.png" alt="Opus Incorporação">
        <img class="mx-auto mobille" src="./img/urbanismo/banner_mobille.png" alt="Opus Incorporação">
    </div>
</section>
<section class="urbanismo-info">
    <div class="container">
        <div class="grid">
            <div class="left">
                <span>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries,
                </span>
            </div>
            <div class="right">
                <span>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
                </span>
                <span>
                    discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </span>
                <span>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum.
                </span>
            </div>
        </div>
        <div class="contain-media-urbanismo">
            <button type="button" class="btn-media" onclick="iniciarModalYt('https://www.youtube.com/watch?v=TwTYv1RXE90&list=RDKaty60hSU3c&index=5')" data-bs-toggle="modal" data-bs-target="#dynamicVideoModal">
                <!-- IMAGEM DESKTOP -->
                <img class="mx-auto desktop" src="./img/urbanismo/media_lg.png" alt="Imóvel Opus">
                <!-- IMAGEM MOBILLE E TABLET -->
                <img class="mx-auto tablet-mobille" src="./img/urbanismo/media_md.png" alt="Imóvel Opus">
            </button>
        </div>
    </div>
</section>
<?php require_once "./includes/footer.php"; ?>