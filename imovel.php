<?php require_once "./includes/navbar.php"; ?>
<?php require_once "./includes/modal_video.php"; ?>
<?php require_once "./includes/modal_slick_inline.php"; ?>

<section>
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
            <span class="atual">Opus Nido</span>
        </div>
    </div>
</section>
<section class="imovel-primaria" id="imovel-primaria">
    <div class="row no-margin-padding row-imovel-primaria">
        <div class="col-lg-6 col-md-12 col-sm-12 no-margin-padding col-imovel-primaria">
            <div class="media">
                <button type="button" class="btn-media" onclick="iniciarModalYt('https://www.youtube.com/watch?v=RqlvAIlAwmw&t=7s')" data-bs-toggle="modal" data-bs-target="#dynamicVideoModal">
                    <img class="d-block mx-auto" src="./img/imovel/imovel.png" alt="Imóvel Opus">
                </button>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 no-margin-padding col-imovel-primaria">
            <div class="right">
                <span class="titulo">Opus Nido</span>
                <span class="desc">
                    O Opus Nido é um abrigo particular e intimista, que traz o aconchego de uma
                    casa. Ambientes com dimensões relevantes valorizam integração e o convívio.
                </span>
                <div class="contain-unidades">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <circle cx="7" cy="7" r="6.5" fill="white" stroke="#231F20" />
                            <circle cx="7" cy="7" r="3" fill="#231F20" />
                        </svg>
                    </div>
                    <span>Unidades disponíveis</span>
                </div>
                <div class="itens">
                    <span class="item">Lançamento | Reserva Ybiti</span>
                    <span class="item">Residências de 100 a 139m²</span>
                    <span class="item">3 suítes</span>
                </div>
                <div class="contain-btns">
                    <button type="button">Fale com o corretor</button>
                    <button type="button">Acompanhe a obra</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="imovel-redirect" id="imovel-redirect">
    <div class="container">
        <div class="redirect">
            <button type="button" onclick="disabledBtnFilterTop(this), scrollSuave(event,'imovel-localizacao')" class="btn-filter-top active">Localização</button>
            <button type="button" onclick="disabledBtnFilterTop(this), scrollSuave(event,'imovel-imagens')" class="btn-filter-top">Imagens</button>
            <button type="button" onclick="disabledBtnFilterTop(this), scrollSuave(event,'imovel-plantas')" class="btn-filter-top">Plantas</button>
            <button type="button" onclick="disabledBtnFilterTop(this), scrollSuave(event,'imovel-carrossel')" class="btn-filter-top">Decorado</button>
            <button type="button" onclick="disabledBtnFilterTop(this), scrollSuave(event,'imovel-mapa')" class="btn-filter-top">Vista das unidades</button>
            <button type="button" onclick="disabledBtnFilterTop(this), scrollSuave(event,'imovel-diferenciais')" class="btn-filter-top">Diferenciais</button>
            <button type="button" onclick="disabledBtnFilterTop(this), scrollSuave(event,'imovel-primaria')" class="btn-filter-top">Ficha técnica</button>
        </div>
    </div>
</section>
<section class="imovel-localizacao" id="imovel-localizacao">
    <div class="container">
        <div class="row no-margin-padding">
            <div class="col-lg-6 no-margin-padding">
                <div class="left">
                    <span class="titulo">Localização</span>
                    <span class="subtitulo">
                        O melhor endereço na região do Alto do Bueno, a Reserva Ybiti
                    </span>
                    <span class="desc">
                        Acesso fácil e rápido para as principais localizações da cidade. Próximo ao Parque Vaca Brava e ao lado do futuro Parque da Serrinha.
                    </span>
                    <div class="bottom">
                        <div class="contain-endereco">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <mask id="mask0_99_388" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                        <rect width="18" height="18" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M9 16.5C7.675 16.5 6.59375 16.2906 5.75625 15.8719C4.91875 15.4531 4.5 14.9125 4.5 14.25C4.5 13.8125 4.68125 13.4313 5.04375 13.1063C5.40625 12.7812 5.90625 12.525 6.54375 12.3375L6.975 13.7625C6.7625 13.825 6.56875 13.9031 6.39375 13.9969C6.21875 14.0906 6.1 14.175 6.0375 14.25C6.2 14.45 6.575 14.625 7.1625 14.775C7.75 14.925 8.3625 15 9 15C9.6375 15 10.2531 14.925 10.8469 14.775C11.4406 14.625 11.8188 14.45 11.9813 14.25C11.9188 14.175 11.8 14.0906 11.625 13.9969C11.45 13.9031 11.2563 13.825 11.0438 13.7625L11.475 12.3375C12.1125 12.525 12.6094 12.7812 12.9656 13.1063C13.3219 13.4313 13.5 13.8125 13.5 14.25C13.5 14.9125 13.0813 15.4531 12.2437 15.8719C11.4062 16.2906 10.325 16.5 9 16.5ZM9 11.4937C9.225 11.0813 9.4625 10.7031 9.7125 10.3594C9.9625 10.0156 10.2063 9.6875 10.4438 9.375C10.9062 8.775 11.275 8.23438 11.55 7.75313C11.825 7.27188 11.9625 6.675 11.9625 5.9625C11.9625 5.1375 11.675 4.4375 11.1 3.8625C10.525 3.2875 9.825 3 9 3C8.175 3 7.475 3.2875 6.9 3.8625C6.325 4.4375 6.0375 5.1375 6.0375 5.9625C6.0375 6.675 6.175 7.27188 6.45 7.75313C6.725 8.23438 7.09375 8.775 7.55625 9.375C7.79375 9.6875 8.0375 10.0156 8.2875 10.3594C8.5375 10.7031 8.775 11.0813 9 11.4937ZM9 14.25C8.8625 14.25 8.7375 14.2094 8.625 14.1281C8.5125 14.0469 8.43125 13.9375 8.38125 13.8C8.09375 12.9125 7.73125 12.1687 7.29375 11.5688C6.85625 10.9688 6.43125 10.3938 6.01875 9.84375C5.61875 9.29375 5.27188 8.725 4.97812 8.1375C4.68437 7.55 4.5375 6.825 4.5375 5.9625C4.5375 4.7125 4.96875 3.65625 5.83125 2.79375C6.69375 1.93125 7.75 1.5 9 1.5C10.25 1.5 11.3063 1.93125 12.1688 2.79375C13.0312 3.65625 13.4625 4.7125 13.4625 5.9625C13.4625 6.825 13.3188 7.55 13.0312 8.1375C12.7437 8.725 12.3938 9.29375 11.9813 9.84375C11.5813 10.3938 11.1594 10.9688 10.7156 11.5688C10.2719 12.1687 9.90625 12.9125 9.61875 13.8C9.56875 13.9375 9.4875 14.0469 9.375 14.1281C9.2625 14.2094 9.1375 14.25 9 14.25ZM9 7.55625C9.4375 7.55625 9.8125 7.4 10.125 7.0875C10.4375 6.775 10.5938 6.4 10.5938 5.9625C10.5938 5.525 10.4375 5.15 10.125 4.8375C9.8125 4.525 9.4375 4.36875 9 4.36875C8.5625 4.36875 8.1875 4.525 7.875 4.8375C7.5625 5.15 7.40625 5.525 7.40625 5.9625C7.40625 6.4 7.5625 6.775 7.875 7.0875C8.1875 7.4 8.5625 7.55625 9 7.55625Z" fill="#1C1B1F" />
                                    </g>
                                </svg>
                            </div>
                            <span>R. Samuel Morse - Serrinha, Goiânia - GO, 74835-080</span>
                        </div>
                        <div class="contain-btn">
                            <button type="button" class="rota">Rota no Google</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 no-margin-padding">
                <div class="right">
                    <button type="button" class="btn-media" onclick="iniciarModalYt('https://www.youtube.com/watch?v=1HN6bhAmQMc')" data-bs-toggle="modal" data-bs-target="#dynamicVideoModal">
                        <img class="d-block mx-auto" src="./img/imovel/loca.png" alt="Imóvel Opus">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="imovel-mapa" id="imovel-mapa">
    <div class="row no-margin-padding">
        <div class="col-lg-6 no-margin-padding">
            <div class="contain-mapa">
                <div class="top-mobille">
                    <span class="titulo">Em um raio de 1km</span>
                    <span class="desc">
                        Os principais pontos de convivência e conveniência da cidade.
                    </span>
                </div>
                <div id='map' class="map"></div>
            </div>
        </div>
        <div class="col-lg-6 no-margin-padding">
            <div class="contain-sanfona">
                <div class="top">
                    <span class="titulo">Em um raio de 1km</span>
                    <span class="desc">
                        Os principais pontos de convivência e conveniência da cidade.
                    </span>
                </div>
                <fieldset class="acordeom" id="acordeom">

                    <div class="acordeom-item" id="acordeom-1">
                        <div class="contain-acordeom">
                            <div class="contain-btn-acordeom" id="heading-1">
                                <button class="btn-acordeom" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    <span>Shoppings</span>
                                    <div class="ico">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                            <mask id="mask0_182_1557" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="22">
                                                <rect x="0.5" width="22" height="22" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M11.0417 15.125H11.9583V11.4583H15.625V10.5417H11.9583V6.875H11.0417V10.5417H7.375V11.4583H11.0417V15.125ZM11.5031 19.25C10.3622 19.25 9.28966 19.0335 8.28534 18.6006C7.28103 18.1676 6.4074 17.58 5.66448 16.8378C4.92156 16.0955 4.33342 15.2227 3.90005 14.2194C3.46668 13.216 3.25 12.1439 3.25 11.0031C3.25 9.86223 3.46648 8.78966 3.89944 7.78534C4.33241 6.78103 4.92001 5.90741 5.66223 5.16448C6.40446 4.42156 7.27725 3.83342 8.28062 3.40005C9.284 2.96669 10.3561 2.75 11.4969 2.75C12.6378 2.75 13.7103 2.96648 14.7147 3.39944C15.719 3.83241 16.5926 4.42001 17.3355 5.16223C18.0784 5.90446 18.6666 6.77725 19.0999 7.78062C19.5333 8.784 19.75 9.85611 19.75 10.9969C19.75 12.1378 19.5335 13.2103 19.1006 14.2147C18.6676 15.219 18.08 16.0926 17.3378 16.8355C16.5955 17.5784 15.7227 18.1666 14.7194 18.5999C13.716 19.0333 12.6439 19.25 11.5031 19.25ZM11.5 18.3333C13.5472 18.3333 15.2812 17.6229 16.7021 16.2021C18.1229 14.7812 18.8333 13.0472 18.8333 11C18.8333 8.95278 18.1229 7.21875 16.7021 5.79792C15.2812 4.37708 13.5472 3.66667 11.5 3.66667C9.45278 3.66667 7.71875 4.37708 6.29792 5.79792C4.87708 7.21875 4.16667 8.95278 4.16667 11C4.16667 13.0472 4.87708 14.7812 6.29792 16.2021C7.71875 17.6229 9.45278 18.3333 11.5 18.3333Z" fill="#1C1B1F" />
                                            </g>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div id="collapse-1" class="collapse div-colapso" aria-labelledby="heading-1" data-parent="#acordeom">
                                <span>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="acordeom-item" id="acordeom-2">
                        <div class="contain-acordeom">
                            <div class="contain-btn-acordeom" id="heading-2">
                                <button class="btn-acordeom" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                    <span>Gastronomia</span>
                                    <div class="ico">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                            <mask id="mask0_182_1557" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="22">
                                                <rect x="0.5" width="22" height="22" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M11.0417 15.125H11.9583V11.4583H15.625V10.5417H11.9583V6.875H11.0417V10.5417H7.375V11.4583H11.0417V15.125ZM11.5031 19.25C10.3622 19.25 9.28966 19.0335 8.28534 18.6006C7.28103 18.1676 6.4074 17.58 5.66448 16.8378C4.92156 16.0955 4.33342 15.2227 3.90005 14.2194C3.46668 13.216 3.25 12.1439 3.25 11.0031C3.25 9.86223 3.46648 8.78966 3.89944 7.78534C4.33241 6.78103 4.92001 5.90741 5.66223 5.16448C6.40446 4.42156 7.27725 3.83342 8.28062 3.40005C9.284 2.96669 10.3561 2.75 11.4969 2.75C12.6378 2.75 13.7103 2.96648 14.7147 3.39944C15.719 3.83241 16.5926 4.42001 17.3355 5.16223C18.0784 5.90446 18.6666 6.77725 19.0999 7.78062C19.5333 8.784 19.75 9.85611 19.75 10.9969C19.75 12.1378 19.5335 13.2103 19.1006 14.2147C18.6676 15.219 18.08 16.0926 17.3378 16.8355C16.5955 17.5784 15.7227 18.1666 14.7194 18.5999C13.716 19.0333 12.6439 19.25 11.5031 19.25ZM11.5 18.3333C13.5472 18.3333 15.2812 17.6229 16.7021 16.2021C18.1229 14.7812 18.8333 13.0472 18.8333 11C18.8333 8.95278 18.1229 7.21875 16.7021 5.79792C15.2812 4.37708 13.5472 3.66667 11.5 3.66667C9.45278 3.66667 7.71875 4.37708 6.29792 5.79792C4.87708 7.21875 4.16667 8.95278 4.16667 11C4.16667 13.0472 4.87708 14.7812 6.29792 16.2021C7.71875 17.6229 9.45278 18.3333 11.5 18.3333Z" fill="#1C1B1F" />
                                            </g>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div id="collapse-2" class="collapse div-colapso" aria-labelledby="heading-2" data-parent="#acordeom">
                                <span>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="acordeom-item" id="acordeom-3">
                        <div class="contain-acordeom">
                            <div class="contain-btn-acordeom" id="heading-3">
                                <button class="btn-acordeom" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                    <span>Parques</span>
                                    <div class="ico">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                            <mask id="mask0_182_1557" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="22">
                                                <rect x="0.5" width="22" height="22" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M11.0417 15.125H11.9583V11.4583H15.625V10.5417H11.9583V6.875H11.0417V10.5417H7.375V11.4583H11.0417V15.125ZM11.5031 19.25C10.3622 19.25 9.28966 19.0335 8.28534 18.6006C7.28103 18.1676 6.4074 17.58 5.66448 16.8378C4.92156 16.0955 4.33342 15.2227 3.90005 14.2194C3.46668 13.216 3.25 12.1439 3.25 11.0031C3.25 9.86223 3.46648 8.78966 3.89944 7.78534C4.33241 6.78103 4.92001 5.90741 5.66223 5.16448C6.40446 4.42156 7.27725 3.83342 8.28062 3.40005C9.284 2.96669 10.3561 2.75 11.4969 2.75C12.6378 2.75 13.7103 2.96648 14.7147 3.39944C15.719 3.83241 16.5926 4.42001 17.3355 5.16223C18.0784 5.90446 18.6666 6.77725 19.0999 7.78062C19.5333 8.784 19.75 9.85611 19.75 10.9969C19.75 12.1378 19.5335 13.2103 19.1006 14.2147C18.6676 15.219 18.08 16.0926 17.3378 16.8355C16.5955 17.5784 15.7227 18.1666 14.7194 18.5999C13.716 19.0333 12.6439 19.25 11.5031 19.25ZM11.5 18.3333C13.5472 18.3333 15.2812 17.6229 16.7021 16.2021C18.1229 14.7812 18.8333 13.0472 18.8333 11C18.8333 8.95278 18.1229 7.21875 16.7021 5.79792C15.2812 4.37708 13.5472 3.66667 11.5 3.66667C9.45278 3.66667 7.71875 4.37708 6.29792 5.79792C4.87708 7.21875 4.16667 8.95278 4.16667 11C4.16667 13.0472 4.87708 14.7812 6.29792 16.2021C7.71875 17.6229 9.45278 18.3333 11.5 18.3333Z" fill="#1C1B1F" />
                                            </g>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div id="collapse-3" class="collapse div-colapso" aria-labelledby="heading-3" data-parent="#acordeom">
                                <span>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="acordeom-item" id="acordeom-4">
                        <div class="contain-acordeom">
                            <div class="contain-btn-acordeom" id="heading-4">
                                <button class="btn-acordeom" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                    <span>Academias</span>
                                    <div class="ico">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                            <mask id="mask0_182_1557" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="22">
                                                <rect x="0.5" width="22" height="22" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M11.0417 15.125H11.9583V11.4583H15.625V10.5417H11.9583V6.875H11.0417V10.5417H7.375V11.4583H11.0417V15.125ZM11.5031 19.25C10.3622 19.25 9.28966 19.0335 8.28534 18.6006C7.28103 18.1676 6.4074 17.58 5.66448 16.8378C4.92156 16.0955 4.33342 15.2227 3.90005 14.2194C3.46668 13.216 3.25 12.1439 3.25 11.0031C3.25 9.86223 3.46648 8.78966 3.89944 7.78534C4.33241 6.78103 4.92001 5.90741 5.66223 5.16448C6.40446 4.42156 7.27725 3.83342 8.28062 3.40005C9.284 2.96669 10.3561 2.75 11.4969 2.75C12.6378 2.75 13.7103 2.96648 14.7147 3.39944C15.719 3.83241 16.5926 4.42001 17.3355 5.16223C18.0784 5.90446 18.6666 6.77725 19.0999 7.78062C19.5333 8.784 19.75 9.85611 19.75 10.9969C19.75 12.1378 19.5335 13.2103 19.1006 14.2147C18.6676 15.219 18.08 16.0926 17.3378 16.8355C16.5955 17.5784 15.7227 18.1666 14.7194 18.5999C13.716 19.0333 12.6439 19.25 11.5031 19.25ZM11.5 18.3333C13.5472 18.3333 15.2812 17.6229 16.7021 16.2021C18.1229 14.7812 18.8333 13.0472 18.8333 11C18.8333 8.95278 18.1229 7.21875 16.7021 5.79792C15.2812 4.37708 13.5472 3.66667 11.5 3.66667C9.45278 3.66667 7.71875 4.37708 6.29792 5.79792C4.87708 7.21875 4.16667 8.95278 4.16667 11C4.16667 13.0472 4.87708 14.7812 6.29792 16.2021C7.71875 17.6229 9.45278 18.3333 11.5 18.3333Z" fill="#1C1B1F" />
                                            </g>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div id="collapse-4" class="collapse div-colapso" aria-labelledby="heading-4" data-parent="#acordeom">
                                <span>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="acordeom-item" id="acordeom-5">
                        <div class="contain-acordeom">
                            <div class="contain-btn-acordeom" id="heading-5">
                                <button class="btn-acordeom" type="button" data-toggle="collapse" data-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                    <span>Escolas</span>
                                    <div class="ico">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                            <mask id="mask0_182_1557" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="22">
                                                <rect x="0.5" width="22" height="22" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M11.0417 15.125H11.9583V11.4583H15.625V10.5417H11.9583V6.875H11.0417V10.5417H7.375V11.4583H11.0417V15.125ZM11.5031 19.25C10.3622 19.25 9.28966 19.0335 8.28534 18.6006C7.28103 18.1676 6.4074 17.58 5.66448 16.8378C4.92156 16.0955 4.33342 15.2227 3.90005 14.2194C3.46668 13.216 3.25 12.1439 3.25 11.0031C3.25 9.86223 3.46648 8.78966 3.89944 7.78534C4.33241 6.78103 4.92001 5.90741 5.66223 5.16448C6.40446 4.42156 7.27725 3.83342 8.28062 3.40005C9.284 2.96669 10.3561 2.75 11.4969 2.75C12.6378 2.75 13.7103 2.96648 14.7147 3.39944C15.719 3.83241 16.5926 4.42001 17.3355 5.16223C18.0784 5.90446 18.6666 6.77725 19.0999 7.78062C19.5333 8.784 19.75 9.85611 19.75 10.9969C19.75 12.1378 19.5335 13.2103 19.1006 14.2147C18.6676 15.219 18.08 16.0926 17.3378 16.8355C16.5955 17.5784 15.7227 18.1666 14.7194 18.5999C13.716 19.0333 12.6439 19.25 11.5031 19.25ZM11.5 18.3333C13.5472 18.3333 15.2812 17.6229 16.7021 16.2021C18.1229 14.7812 18.8333 13.0472 18.8333 11C18.8333 8.95278 18.1229 7.21875 16.7021 5.79792C15.2812 4.37708 13.5472 3.66667 11.5 3.66667C9.45278 3.66667 7.71875 4.37708 6.29792 5.79792C4.87708 7.21875 4.16667 8.95278 4.16667 11C4.16667 13.0472 4.87708 14.7812 6.29792 16.2021C7.71875 17.6229 9.45278 18.3333 11.5 18.3333Z" fill="#1C1B1F" />
                                            </g>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div id="collapse-5" class="collapse div-colapso" aria-labelledby="heading-5" data-parent="#acordeom">
                                <span>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="acordeom-item" id="acordeom-6">
                        <div class="contain-acordeom">
                            <div class="contain-btn-acordeom" id="heading-6">
                                <button class="btn-acordeom" type="button" data-toggle="collapse" data-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                                    <span>Supermercados</span>
                                    <div class="ico">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                            <mask id="mask0_182_1557" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="22">
                                                <rect x="0.5" width="22" height="22" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M11.0417 15.125H11.9583V11.4583H15.625V10.5417H11.9583V6.875H11.0417V10.5417H7.375V11.4583H11.0417V15.125ZM11.5031 19.25C10.3622 19.25 9.28966 19.0335 8.28534 18.6006C7.28103 18.1676 6.4074 17.58 5.66448 16.8378C4.92156 16.0955 4.33342 15.2227 3.90005 14.2194C3.46668 13.216 3.25 12.1439 3.25 11.0031C3.25 9.86223 3.46648 8.78966 3.89944 7.78534C4.33241 6.78103 4.92001 5.90741 5.66223 5.16448C6.40446 4.42156 7.27725 3.83342 8.28062 3.40005C9.284 2.96669 10.3561 2.75 11.4969 2.75C12.6378 2.75 13.7103 2.96648 14.7147 3.39944C15.719 3.83241 16.5926 4.42001 17.3355 5.16223C18.0784 5.90446 18.6666 6.77725 19.0999 7.78062C19.5333 8.784 19.75 9.85611 19.75 10.9969C19.75 12.1378 19.5335 13.2103 19.1006 14.2147C18.6676 15.219 18.08 16.0926 17.3378 16.8355C16.5955 17.5784 15.7227 18.1666 14.7194 18.5999C13.716 19.0333 12.6439 19.25 11.5031 19.25ZM11.5 18.3333C13.5472 18.3333 15.2812 17.6229 16.7021 16.2021C18.1229 14.7812 18.8333 13.0472 18.8333 11C18.8333 8.95278 18.1229 7.21875 16.7021 5.79792C15.2812 4.37708 13.5472 3.66667 11.5 3.66667C9.45278 3.66667 7.71875 4.37708 6.29792 5.79792C4.87708 7.21875 4.16667 8.95278 4.16667 11C4.16667 13.0472 4.87708 14.7812 6.29792 16.2021C7.71875 17.6229 9.45278 18.3333 11.5 18.3333Z" fill="#1C1B1F" />
                                            </g>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div id="collapse-6" class="collapse div-colapso" aria-labelledby="heading-6" data-parent="#acordeom">
                                <span>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </span>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>
    </div>
</section>
<section class="imovel-imagens" id="imovel-imagens">
    <div class="container">
        <div class="contain-titulo">
            <span class="titulo">Imagens</span>
            <button type="button" class="ver-galeria-imgs">Ver galeria</button>
        </div>
        <div class="galeria-grid">
            <div class="grid-item left">
                <img src="./img/imovel/galeria-1.png" class="img-galeria" alt="Imóvel Opus">
            </div>
            <div class="grid-item right">
                <img src="./img/imovel/galeria-2.png" class="img-galeria" alt="Imóvel Opus">
                <img src="./img/imovel/galeria-3.png" class="img-galeria" alt="Imóvel Opus">
            </div>
        </div>
    </div>
</section>
<section class="imovel-plantas" id="imovel-plantas">
    <div class="container">
        <div class="contain-grid">
            <div class="left">
                <span class="titulo">Plantas</span>
                <span class="desc">
                    Espaços bem dimensionados e integrados que ampliam conforto e funcionalidade.
                </span>
                <div class="desktop">
                    <label class="label-btn-caderno-plantas">Clique abaixo e faça o download do caderno de plantas</label>
                    <div class="contain-btn">
                        <a href="#" class="btn-caderno-plantas">Caderno de plantas</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="sub sub-left">
                     <!-- openModalSlickInline(ID_MEDIDA) -->
                    <button type="button" class="btn-modal-planta" onclick="openModalSlickInline(1)">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_99_395" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                        <span>116,73m² | 3 suítes</span>
                    </button>
                    <button type="button" class="btn-modal-planta" onclick="openModalSlickInline(2)">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_99_395" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                        <span>127m² | 3 suítes</span>
                    </button>
                    <button type="button" class="btn-modal-planta" onclick="openModalSlickInline(3)">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_99_395" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                        <span>135m² | 3 suítes</span>
                    </button>
                </div>
                <div class="sub sub-right">
                    <button type="button" class="btn-modal-planta" onclick="openModalSlickInline(4)">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_99_395" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                        <span>100m² | 2 ou 3 suítes</span>
                    </button>
                    <button type="button" class="btn-modal-planta" onclick="openModalSlickInline(5)">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_99_395" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                        <span>130m² | 3 suítes</span>
                    </button>
                    <button type="button" class="btn-modal-planta" onclick="openModalSlickInline(6)">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_99_395" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                        <span>Penthouses</span>
                    </button>
                </div>
                <div class="mobille">
                    <label class="label-btn-caderno-plantas">Clique abaixo e faça o download do caderno de plantas</label>
                    <div class="contain-btn">
                        <a href="#" class="btn-caderno-plantas">Caderno de plantas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="imovel-carrossel" id="imovel-carrossel">
    <div class="container">
        <div class="contain-titulo">
            <span class="titulo">Decorado 127m²</span>
            <div class="contain-btns">
                <button type="button" class="ver-galeria">Ver galeria</button>
                <button type="button" class="tour">Tour 360</button>
            </div>
        </div>
        <div class="contain-carrossel">

            <!-- CARROSSEL SWIPER -->
            <div class="swiper swipe-galeria" id="my-gallery">
                <ul class="swiper-wrapper" itemscope itemtype="http://schema.org/ImageGallery">
                    <!-- Slide -->
                    <li id="slide_1" class="swiper-slide" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- IMAGEM ANCORA 1216x480 -->
                        <a itemprop="contentUrl" href="./img/imovel/img-carrossel.png" data-pswp-width="1216" data-pswp-height="480" target="_blank">
                            <img src="./img/imovel/img-carrossel.png" alt="" itemprop="thumbnail" alt="Imóvel Opus" />
                        </a>
                    </li>
                    <!-- Slide -->
                    <li id="slide_2" class="swiper-slide" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- IMAGEM ANCORA 1216x480 -->
                        <a itemprop="contentUrl" href="./img/imovel/img-carrossel.png" data-pswp-width="1216" data-pswp-height="480" target="_blank">
                            <img src="./img/imovel/img-carrossel.png" alt="" itemprop="thumbnail" alt="Imóvel Opus" />
                        </a>
                    </li>
                </ul>
                <!-- Botoes de navegacao -->
                <div class="contain-btn-carrossel">
                    <button class="btn-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                            <path d="M8.33333 17.3332L0 8.99984L8.33333 0.666504L9.8125 2.14567L2.95833 8.99984L9.8125 15.854L8.33333 17.3332Z" fill="#1C1B1F" />
                        </svg>
                    </button>
                    <button class="btn-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                            <path d="M1.68766 17.3332L0.208496 15.854L7.06266 8.99984L0.208496 2.14567L1.68766 0.666504L10.021 8.99984L1.68766 17.3332Z" fill="#1C1B1F" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="imovel-diferenciais" id="imovel-diferenciais">
    <div class="container">
        <span class="titulo">Diferenciais</span>
        <div id="acordeom-diferenciais">
            <div class="acordeom-diferenciais-item">
                <div class="contain" id="acordeom-diferenciais-1">
                    <button class="btn-acordeom-dif" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span>Arquitetura</span>
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_98_1157" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>

                <div id="collapseOne" class="contain-colapso collapse" aria-labelledby="acordeom-diferenciais-1" data-parent="#acordeom-diferenciais">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
            <div class="acordeom-diferenciais-item">
                <div class="contain" id="acordeom-diferenciais-2">
                    <button class="btn-acordeom-dif" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span>Área comum</span>
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_98_1157" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>
                <div id="collapseTwo" class="contain-colapso collapse" aria-labelledby="acordeom-diferenciais-2" data-parent="#acordeom-diferenciais">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
            <div class="acordeom-diferenciais-item">
                <div class="contain" id="acordeom-diferenciais-3">
                    <button class="btn-acordeom-dif" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span>Residencias</span>
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <mask id="mask0_98_1157" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                    <rect width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M10.5417 15.125H11.4583V11.4583H15.125V10.5417H11.4583V6.875H10.5417V10.5417H6.875V11.4583H10.5417V15.125ZM11.0031 19.25C9.86223 19.25 8.78966 19.0335 7.78534 18.6006C6.78103 18.1676 5.9074 17.58 5.16448 16.8378C4.42156 16.0955 3.83342 15.2227 3.40005 14.2194C2.96668 13.216 2.75 12.1439 2.75 11.0031C2.75 9.86223 2.96648 8.78966 3.39944 7.78534C3.83241 6.78103 4.42001 5.90741 5.16223 5.16448C5.90446 4.42156 6.77725 3.83342 7.78062 3.40005C8.784 2.96669 9.85611 2.75 10.9969 2.75C12.1378 2.75 13.2103 2.96648 14.2147 3.39944C15.219 3.83241 16.0926 4.42001 16.8355 5.16223C17.5784 5.90446 18.1666 6.77725 18.5999 7.78062C19.0333 8.784 19.25 9.85611 19.25 10.9969C19.25 12.1378 19.0335 13.2103 18.6006 14.2147C18.1676 15.219 17.58 16.0926 16.8378 16.8355C16.0955 17.5784 15.2227 18.1666 14.2194 18.5999C13.216 19.0333 12.1439 19.25 11.0031 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>
                <div id="collapseThree" class="contain-colapso collapse" aria-labelledby="acordeom-diferenciais-3" data-parent="#acordeom-diferenciais">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

    </div>
</section>
<!-- <section class="imovel-estagio" id="imovel-estagio">
    <div class="container">
        <div class="contain-titulo">
            <span class="titulo">Estágio da obra</span>
            <button type="button">
                fudeu
            </button>
        </div>
    </div>
</section> -->
<section class="imovel-produtos-similares" id="imovel-produtos-similares">
    <div class="container">
        <span class="titulo">Produtos similares</span>

        <div class="contain-cards">
            <div class="cartao">
                <div class="img">
                    <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                </div>
                <div class="corpo">
                    <div class="top">
                        <span class="titulo-cartao">Arq Opus</span>
                        <div class="btn-share dropdown">
                            <button type="button" class="share" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                    </g>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-1">
                                <a class="dropdown-item" href="#">Whatsapp</a>
                                <a class="dropdown-item" href="#">E-mail</a>
                                <a class="dropdown-item" href="#">Copiar link</a>
                            </div>
                        </div>
                    </div>
                    <div class="attrs">
                        <span class="item">Lançamento | Setor Bueno</span>
                        <span class="item">Residências de 208 a 462m²</span>
                        <span class="item">3 suítes</span>
                    </div>
                    <div class="bottom">
                        <div class="contain">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                    <circle cx="7" cy="7.5" r="6.5" fill="white" stroke="#231F20" />
                                    <circle cx="7" cy="7.5" r="3" fill="#231F20" />
                                </svg>
                            </div>
                            <span>Unidades disponíveis</span>
                        </div>
                        <div class="contain">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <mask id="mask0_57_224" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="17" height="17">
                                        <rect width="17" height="17" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M5.66663 9.91663H11.3333V9.52704C11.3333 9.0076 11.0736 8.5885 10.5541 8.26975C10.0347 7.951 9.34996 7.79163 8.49996 7.79163C7.64996 7.79163 6.96524 7.951 6.44579 8.26975C5.92635 8.5885 5.66663 9.0076 5.66663 9.52704V9.91663ZM8.49996 7.08329C8.88954 7.08329 9.22305 6.94458 9.50048 6.66715C9.77791 6.38972 9.91663 6.05621 9.91663 5.66663C9.91663 5.27704 9.77791 4.94354 9.50048 4.66611C9.22305 4.38867 8.88954 4.24996 8.49996 4.24996C8.11038 4.24996 7.77687 4.38867 7.49944 4.66611C7.22201 4.94354 7.08329 5.27704 7.08329 5.66663C7.08329 6.05621 7.22201 6.38972 7.49944 6.66715C7.77687 6.94458 8.11038 7.08329 8.49996 7.08329ZM1.41663 15.5833V2.83329C1.41663 2.44371 1.55534 2.1102 1.83277 1.83277C2.1102 1.55534 2.44371 1.41663 2.83329 1.41663H14.1666C14.5562 1.41663 14.8897 1.55534 15.1671 1.83277C15.4446 2.1102 15.5833 2.44371 15.5833 2.83329V11.3333C15.5833 11.7229 15.4446 12.0564 15.1671 12.3338C14.8897 12.6112 14.5562 12.75 14.1666 12.75H4.24996L1.41663 15.5833Z" fill="#1C1B1F" />
                                    </g>
                                </svg>
                            </div>
                            <span>Fale com o corretor</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="cartao">
                <div class="img">
                    <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                </div>
                <div class="corpo">
                    <div class="top">
                        <span class="titulo-cartao">Arq Opus</span>
                        <div class="btn-share dropdown">
                            <button type="button" class="share" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                    </g>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-1">
                                <a class="dropdown-item" href="#">Whatsapp</a>
                                <a class="dropdown-item" href="#">E-mail</a>
                                <a class="dropdown-item" href="#">Copiar link</a>
                            </div>
                        </div>
                    </div>
                    <div class="attrs">
                        <span class="item">Lançamento | Setor Bueno</span>
                        <span class="item">Residências de 208 a 462m²</span>
                        <span class="item">3 suítes</span>
                    </div>
                    <div class="bottom">
                        <div class="contain">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                    <circle cx="7" cy="7.5" r="6.5" fill="white" stroke="#231F20" />
                                    <circle cx="7" cy="7.5" r="3" fill="#231F20" />
                                </svg>
                            </div>
                            <span>Unidades disponíveis</span>
                        </div>
                        <div class="contain">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <mask id="mask0_57_224" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="17" height="17">
                                        <rect width="17" height="17" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M5.66663 9.91663H11.3333V9.52704C11.3333 9.0076 11.0736 8.5885 10.5541 8.26975C10.0347 7.951 9.34996 7.79163 8.49996 7.79163C7.64996 7.79163 6.96524 7.951 6.44579 8.26975C5.92635 8.5885 5.66663 9.0076 5.66663 9.52704V9.91663ZM8.49996 7.08329C8.88954 7.08329 9.22305 6.94458 9.50048 6.66715C9.77791 6.38972 9.91663 6.05621 9.91663 5.66663C9.91663 5.27704 9.77791 4.94354 9.50048 4.66611C9.22305 4.38867 8.88954 4.24996 8.49996 4.24996C8.11038 4.24996 7.77687 4.38867 7.49944 4.66611C7.22201 4.94354 7.08329 5.27704 7.08329 5.66663C7.08329 6.05621 7.22201 6.38972 7.49944 6.66715C7.77687 6.94458 8.11038 7.08329 8.49996 7.08329ZM1.41663 15.5833V2.83329C1.41663 2.44371 1.55534 2.1102 1.83277 1.83277C2.1102 1.55534 2.44371 1.41663 2.83329 1.41663H14.1666C14.5562 1.41663 14.8897 1.55534 15.1671 1.83277C15.4446 2.1102 15.5833 2.44371 15.5833 2.83329V11.3333C15.5833 11.7229 15.4446 12.0564 15.1671 12.3338C14.8897 12.6112 14.5562 12.75 14.1666 12.75H4.24996L1.41663 15.5833Z" fill="#1C1B1F" />
                                    </g>
                                </svg>
                            </div>
                            <span>Fale com o corretor</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cartao">
                <div class="img">
                    <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                </div>
                <div class="corpo">
                    <div class="top">
                        <span class="titulo-cartao">Arq Opus</span>
                        <div class="btn-share dropdown">
                            <button type="button" class="share" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                    </g>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-1">
                                <a class="dropdown-item" href="#">Whatsapp</a>
                                <a class="dropdown-item" href="#">E-mail</a>
                                <a class="dropdown-item" href="#">Copiar link</a>
                            </div>
                        </div>
                    </div>
                    <div class="attrs">
                        <span class="item">Lançamento | Setor Bueno</span>
                        <span class="item">Residências de 208 a 462m²</span>
                        <span class="item">3 suítes</span>
                    </div>
                    <div class="bottom">
                        <div class="contain">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                    <circle cx="7" cy="7.5" r="6.5" fill="white" stroke="#231F20" />
                                    <circle cx="7" cy="7.5" r="3" fill="#231F20" />
                                </svg>
                            </div>
                            <span>Unidades disponíveis</span>
                        </div>
                        <div class="contain">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <mask id="mask0_57_224" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="17" height="17">
                                        <rect width="17" height="17" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M5.66663 9.91663H11.3333V9.52704C11.3333 9.0076 11.0736 8.5885 10.5541 8.26975C10.0347 7.951 9.34996 7.79163 8.49996 7.79163C7.64996 7.79163 6.96524 7.951 6.44579 8.26975C5.92635 8.5885 5.66663 9.0076 5.66663 9.52704V9.91663ZM8.49996 7.08329C8.88954 7.08329 9.22305 6.94458 9.50048 6.66715C9.77791 6.38972 9.91663 6.05621 9.91663 5.66663C9.91663 5.27704 9.77791 4.94354 9.50048 4.66611C9.22305 4.38867 8.88954 4.24996 8.49996 4.24996C8.11038 4.24996 7.77687 4.38867 7.49944 4.66611C7.22201 4.94354 7.08329 5.27704 7.08329 5.66663C7.08329 6.05621 7.22201 6.38972 7.49944 6.66715C7.77687 6.94458 8.11038 7.08329 8.49996 7.08329ZM1.41663 15.5833V2.83329C1.41663 2.44371 1.55534 2.1102 1.83277 1.83277C2.1102 1.55534 2.44371 1.41663 2.83329 1.41663H14.1666C14.5562 1.41663 14.8897 1.55534 15.1671 1.83277C15.4446 2.1102 15.5833 2.44371 15.5833 2.83329V11.3333C15.5833 11.7229 15.4446 12.0564 15.1671 12.3338C14.8897 12.6112 14.5562 12.75 14.1666 12.75H4.24996L1.41663 15.5833Z" fill="#1C1B1F" />
                                    </g>
                                </svg>
                            </div>
                            <span>Fale com o corretor</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cartao">
                <div class="img">
                    <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                </div>
                <div class="corpo">
                    <div class="top">
                        <span class="titulo-cartao">Arq Opus</span>
                        <div class="btn-share dropdown">
                            <button type="button" class="share" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                    </g>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-1">
                                <a class="dropdown-item" href="#">Whatsapp</a>
                                <a class="dropdown-item" href="#">E-mail</a>
                                <a class="dropdown-item" href="#">Copiar link</a>
                            </div>
                        </div>
                    </div>
                    <div class="attrs">
                        <span class="item">Lançamento | Setor Bueno</span>
                        <span class="item">Residências de 208 a 462m²</span>
                        <span class="item">3 suítes</span>
                    </div>
                    <div class="bottom">
                        <div class="contain">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                    <circle cx="7" cy="7.5" r="6.5" fill="white" stroke="#231F20" />
                                    <circle cx="7" cy="7.5" r="3" fill="#231F20" />
                                </svg>
                            </div>
                            <span>Unidades disponíveis</span>
                        </div>
                        <div class="contain">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <mask id="mask0_57_224" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="17" height="17">
                                        <rect width="17" height="17" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M5.66663 9.91663H11.3333V9.52704C11.3333 9.0076 11.0736 8.5885 10.5541 8.26975C10.0347 7.951 9.34996 7.79163 8.49996 7.79163C7.64996 7.79163 6.96524 7.951 6.44579 8.26975C5.92635 8.5885 5.66663 9.0076 5.66663 9.52704V9.91663ZM8.49996 7.08329C8.88954 7.08329 9.22305 6.94458 9.50048 6.66715C9.77791 6.38972 9.91663 6.05621 9.91663 5.66663C9.91663 5.27704 9.77791 4.94354 9.50048 4.66611C9.22305 4.38867 8.88954 4.24996 8.49996 4.24996C8.11038 4.24996 7.77687 4.38867 7.49944 4.66611C7.22201 4.94354 7.08329 5.27704 7.08329 5.66663C7.08329 6.05621 7.22201 6.38972 7.49944 6.66715C7.77687 6.94458 8.11038 7.08329 8.49996 7.08329ZM1.41663 15.5833V2.83329C1.41663 2.44371 1.55534 2.1102 1.83277 1.83277C2.1102 1.55534 2.44371 1.41663 2.83329 1.41663H14.1666C14.5562 1.41663 14.8897 1.55534 15.1671 1.83277C15.4446 2.1102 15.5833 2.44371 15.5833 2.83329V11.3333C15.5833 11.7229 15.4446 12.0564 15.1671 12.3338C14.8897 12.6112 14.5562 12.75 14.1666 12.75H4.24996L1.41663 15.5833Z" fill="#1C1B1F" />
                                    </g>
                                </svg>
                            </div>
                            <span>Fale com o corretor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAIwTPctnSM2PWcbK6cMdlZaSgEYIKp5U&callback=initMap" async defer></script>
<script>
    function initMap() {
        var mapOpts = {
            center: {
                lat: -16.73422110044529,
                lng: -49.305685208893834
            },
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.TERRAIN,
            styles: [{
                "featureType": "road.local",
                "stylers": [{
                    "weight": 4.5
                }]
            }]
        };

        var map = new google.maps.Map(document.getElementById('map'), mapOpts);

        var bicyclayer = new google.maps.BicyclingLayer();
        bicyclayer.setMap(map);

        var infowincontent = '<div style="width:200px">CONTENT</div>';

        // Highway 80 Overpass marker
        var marker0 = new google.maps.Marker({
            position: {
                lat: 32.344902,
                lng: -90.352267
            },
            map: map,
            title: 'Old Highway 80 Overpass',
            animation: google.maps.Animation.DROP
        });

        var infowindow0 = new google.maps.InfoWindow({
            content: infowincontent.replace('CONTENT',
                'Be careful of traffic on 80. Visibility is poor around the bends, but there are good shoulders further on. Clinton has gas stations, restaurants, and hotels. Loads of people commute on the Trace from Clinton to Ridgeland, so don\'t bike this during rush hour.'
            )
        });

        marker0.addListener('click', function() {
            infowindow0.open(map, marker0);
        });
    }
</script>
<?php require_once "./includes/footer.php"; ?>