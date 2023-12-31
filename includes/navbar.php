<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opus - Incorporadora</title>
    <meta name="author" content="Álvaro Carvalho">

    <!-- bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- ESTILOS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- SLICK CAROUSEL CSS -->
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css" />

    <!-- PHOTOSWIPE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css">

    <!-- MAPBOX -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet'>

    <!-- LIGHTGALLERY SWIPE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.1.5/css/lightgallery-bundle.css">
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.1.5/lightgallery.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.1.5/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.1.5/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.1.5/plugins/video/lg-video.umd.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="129" height="49" viewBox="0 0 129 49" fill="none">
                    <g clip-path="url(#clip0_9_210)">
                        <path d="M108.46 21.1718C105.284 20.2158 102.542 19.3907 102.542 17.1417C102.542 15.2977 104.402 14.0575 107.17 14.0575C110.154 14.0575 112.221 14.9782 113.875 17.0386L114.142 17.3706L117.689 13.8311L117.505 13.5695C115.524 10.7544 111.813 9.20228 107.059 9.20228C100.028 9.20228 96.8269 13.3179 96.8269 17.1392C96.8269 22.7818 101.745 24.3415 106.083 25.7176C109.396 26.7691 112.257 27.6748 112.257 30.1502C112.257 32.3665 110.419 33.6897 107.344 33.6897C103.991 33.6897 101.218 32.4797 99.3275 30.1929L99.0452 29.8508L95.5715 33.7174L95.7757 33.9689C98.1654 36.9173 102.151 38.5424 107.003 38.5424C113.704 38.5424 118.032 35.2041 118.032 30.037C118.032 24.0497 112.728 22.4523 108.463 21.1693L108.46 21.1718ZM19.0573 0C8.54807 0 0 8.6589 0 19.3001C0 29.9414 8.54807 38.5449 19.0573 38.5449C29.5666 38.5449 38.1701 29.9363 38.1701 19.358C38.1701 8.77965 29.5968 0 19.0573 0ZM19.0573 32.7262C11.9839 32.7262 6.23145 26.7037 6.23145 19.3001C6.23145 11.8966 11.9865 5.81872 19.0573 5.81872C26.1282 5.81872 31.9412 11.8915 31.9412 19.358C31.9412 26.8245 26.161 32.7262 19.0573 32.7262ZM54.7546 9.20479C51.1044 9.20479 47.903 10.6538 45.6292 13.3078V9.88654H39.7986V49H45.6292V34.5928C47.8778 37.1512 51.0767 38.5449 54.7546 38.5449C62.5363 38.5449 68.4022 32.2507 68.4022 23.9038C68.4022 15.5568 62.5338 9.20479 54.7546 9.20479ZM54.1269 33.0683C49.2819 33.0683 45.6267 29.1288 45.6267 23.9038C45.6267 18.6788 49.2793 14.6839 54.1269 14.6839C58.9744 14.6839 62.5691 18.6486 62.5691 23.9038C62.5691 29.159 58.9391 33.0683 54.1269 33.0683ZM95.1707 9.88654H89.3401V25.3251C89.3401 29.9263 86.6958 32.8973 82.6045 32.8973C78.5132 32.8973 75.9848 29.9238 75.9848 25.3251V9.88654H70.1542V25.7226C70.1542 33.2922 75.158 38.3764 82.607 38.3764C90.056 38.3764 95.1732 33.2922 95.1732 25.7226V9.88654H95.1707Z" fill="#231F20" />
                        <path d="M122.355 38.3764C123.533 38.3764 124.488 37.4235 124.488 36.2481C124.488 35.0728 123.533 34.1199 122.355 34.1199C121.177 34.1199 120.223 35.0728 120.223 36.2481C120.223 37.4235 121.177 38.3764 122.355 38.3764Z" fill="#BE1E2D" />
                        <path d="M126.87 38.3764C128.048 38.3764 129.003 37.4235 129.003 36.2481C129.003 35.0728 128.048 34.1199 126.87 34.1199C125.692 34.1199 124.737 35.0728 124.737 36.2481C124.737 37.4235 125.692 38.3764 126.87 38.3764Z" fill="#BE1E2D" />
                        <path d="M122.355 33.8708C123.533 33.8708 124.488 32.918 124.488 31.7426C124.488 30.5672 123.533 29.6143 122.355 29.6143C121.177 29.6143 120.223 30.5672 120.223 31.7426C120.223 32.918 121.177 33.8708 122.355 33.8708Z" fill="#BE1E2D" />
                        <path d="M126.87 33.8708C128.048 33.8708 129.003 32.918 129.003 31.7426C129.003 30.5672 128.048 29.6143 126.87 29.6143C125.692 29.6143 124.737 30.5672 124.737 31.7426C124.737 32.918 125.692 33.8708 126.87 33.8708Z" fill="#BE1E2D" />
                    </g>
                    <defs>
                        <clipPath id="clip0_9_210">
                            <rect width="129" height="49" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <div class="contain-search-navbar">
                <input type="text" class="search-click" name="" placeholder="Pesquise aqui" />
                <button type="button" class="btn-expand-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <mask id="mask0_263_1543" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="26">
                            <rect width="26" height="26" fill="#D9D9D9" />
                        </mask>
                        <g>
                            <path d="M21.1084 21.8334L14.325 15.05C13.7834 15.5111 13.1604 15.8681 12.4563 16.1209C11.7521 16.3736 11.0445 16.5 10.3334 16.5C8.59822 16.5 7.12971 15.8994 5.92784 14.6982C4.72596 13.497 4.12502 12.0293 4.12502 10.2951C4.12502 8.56087 4.72562 7.09203 5.92684 5.88856C7.12806 4.68508 8.59577 4.08334 10.33 4.08334C12.0642 4.08334 13.533 4.68428 14.7365 5.88615C15.94 7.08801 16.5417 8.55653 16.5417 10.2917C16.5417 11.0445 16.4084 11.7729 16.1417 12.4771C15.875 13.1813 15.525 13.7833 15.0917 14.2834L21.8751 21.0667L21.1084 21.8334ZM10.3334 15.4167C11.7709 15.4167 12.9844 14.9219 13.974 13.9323C14.9636 12.9427 15.4584 11.7292 15.4584 10.2917C15.4584 8.85419 14.9636 7.64065 13.974 6.65106C12.9844 5.66147 11.7709 5.16668 10.3334 5.16668C8.89586 5.16668 7.68232 5.66147 6.69273 6.65106C5.70316 7.64065 5.20838 8.85419 5.20838 10.2917C5.20838 11.7292 5.70316 12.9427 6.69273 13.9323C7.68232 14.9219 8.89586 15.4167 10.3334 15.4167Z" fill="#231F20" />
                        </g>
                    </svg>
                </button>
            </div>

            <button style="outline: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação"></button>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="conheca.php">Institucional</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Empreendimentos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="incorporacao.php">Incorporadora</a>
                            <a class="dropdown-item" href="urbanismo.php">Urbanismo</a>
                            <a class="dropdown-item" href="#">Decorados</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="revista.php">Revista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Opus Revendas</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-navbar" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <a href="" class="btn-right">
                        <div class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_9_219" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M11 10.4359C10.2438 10.4359 9.59639 10.1666 9.05785 9.62809C8.51931 9.08955 8.25004 8.44216 8.25004 7.68591C8.25004 6.92964 8.51931 6.28224 9.05785 5.7437C9.59639 5.20515 10.2438 4.93588 11 4.93588C11.7563 4.93588 12.4037 5.20515 12.9422 5.7437C13.4808 6.28224 13.75 6.92964 13.75 7.68591C13.75 8.44216 13.4808 9.08955 12.9422 9.62809C12.4037 10.1666 11.7563 10.4359 11 10.4359ZM4.58337 17.0641V15.5551C4.58337 15.1767 4.69355 14.8227 4.9139 14.493C5.13425 14.1634 5.4307 13.9075 5.80325 13.7253C6.6682 13.3105 7.53374 12.9993 8.39987 12.7919C9.26601 12.5845 10.1327 12.4808 11 12.4808C11.8673 12.4808 12.7341 12.5845 13.6002 12.7919C14.4663 12.9993 15.3319 13.3105 16.1968 13.7253C16.5694 13.9075 16.8658 14.1634 17.0862 14.493C17.3065 14.8227 17.4167 15.1767 17.4167 15.5551V17.0641H4.58337ZM5.50004 16.1474H16.5V15.5551C16.5 15.3518 16.4345 15.1608 16.3035 14.9822C16.1724 14.8036 15.9912 14.6526 15.7596 14.5292C15.0052 14.1637 14.2273 13.8837 13.4259 13.6892C12.6246 13.4947 11.8159 13.3974 11 13.3974C10.1841 13.3974 9.37551 13.4947 8.57417 13.6892C7.77282 13.8837 6.99491 14.1637 6.24043 14.5292C6.00891 14.6526 5.82763 14.8036 5.6966 14.9822C5.56556 15.1608 5.50004 15.3518 5.50004 15.5551V16.1474ZM11 9.51924C11.5042 9.51924 11.9358 9.33973 12.2948 8.9807C12.6539 8.62167 12.8334 8.19007 12.8334 7.68591C12.8334 7.18174 12.6539 6.75014 12.2948 6.39111C11.9358 6.03209 11.5042 5.85257 11 5.85257C10.4959 5.85257 10.0643 6.03209 9.70525 6.39111C9.34622 6.75014 9.16671 7.18174 9.16671 7.68591C9.16671 8.19007 9.34622 8.62167 9.70525 8.9807C10.0643 9.33973 10.4959 9.51924 11 9.51924Z" fill="#231F20" />
                                </g>
                            </svg>
                        </div>
                        <span>Portal do corretor</span>
                    </a>
                    <a href="" class="btn-right">
                        <div class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_14_1157" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.0658 13.2917H11.9343L11.4249 10.4588C11.6952 10.3648 11.9182 10.1991 12.0939 9.9617C12.2696 9.72432 12.3574 9.45931 12.3574 9.16668C12.3574 8.79178 12.2249 8.47182 11.9599 8.20681C11.6949 7.9418 11.3749 7.8093 11 7.8093C10.6251 7.8093 10.3052 7.9418 10.0402 8.20681C9.77517 8.47182 9.64266 8.79178 9.64266 9.16668C9.64266 9.45931 9.73051 9.72432 9.90621 9.9617C10.0819 10.1991 10.3049 10.3648 10.5752 10.4588L10.0658 13.2917ZM11 19.2148C9.15847 18.6683 7.62864 17.5527 6.41054 15.868C5.19243 14.1834 4.58337 12.2857 4.58337 10.175V5.21795L11 2.82053L17.4167 5.21795V10.175C17.4167 12.2857 16.8076 14.1834 15.5895 15.868C14.3714 17.5527 12.8416 18.6683 11 19.2148ZM11 18.2417C12.5889 17.7375 13.9028 16.7292 14.9417 15.2167C15.9806 13.7042 16.5 12.0236 16.5 10.175V5.84376L11 3.79888L5.50004 5.84376V10.175C5.50004 12.0236 6.01949 13.7042 7.05837 15.2167C8.09726 16.7292 9.41115 17.7375 11 18.2417Z" fill="#231F20" />
                                </g>
                            </svg>
                        </div>
                        <span>Portal do cliente</span>
                    </a>
                </form>
            </div>
        </div>
    </nav>