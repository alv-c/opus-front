<?php require_once "./includes/navbar.php"; ?>
<?php $pagina = 'incorporacao'; ?>
<!-- Modal Tipo Imovel -->
<div class="modal fade" id="modalTipoImovel" tabindex="-1" role="dialog" aria-labelledby="modalLabelTipoImovel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelTipoImovel">Modal Tipo Imovel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar mudanças</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Filtro -->
<div class="modal fade" id="modalFiltro" tabindex="-1" role="dialog" aria-labelledby="modalFiltroLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFiltroLabel">Modal Filtro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar mudanças</button>
            </div>
        </div>
    </div>
</div>

<section class="imoveis-primaria">
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
            <span class="atual">Incorporadora</span>
        </div>
        <div class="titulo">
            <span>Incorporação</span>
        </div>
    </div>
</section>
<section class="imoveis-banner">
    <div class="banner">
        <img class="mx-auto desktop" src="./img/incorporacao/banner_desktop.png" alt="Opus Incorporação">
        <img class="mx-auto tablet" src="./img/incorporacao/banner_tablet.png" alt="Opus Incorporação">
        <img class="mx-auto mobille" src="./img/incorporacao/banner_mobille.png" alt="Opus Incorporação">
    </div>
</section>
<section class="imoveis-desc">
    <div class="container">
        <span>
            A Opus nasceu com o propósito de fazer mais, melhor e nunca fazer igual.
            A cada projeto, superar o anterior. E ter como constante o alto padrão de
            qualidade que é a marca da empresa desde o primeiro lançamento.
        </span>
    </div>
</section>
<section class="imoveis-filtros">
    <div class="container">
        <div class="filtro-top">
            <div class="desktop">
                <button type="button" onclick="disabledBtnFilterTop(this)" class="btn-filter-top active">Residencial</button>
                <button type="button" onclick="disabledBtnFilterTop(this)" class="btn-filter-top">Compactos de luxo</button>
                <button type="button" onclick="disabledBtnFilterTop(this)" class="btn-filter-top">Comercial</button>
                <button type="button" onclick="disabledBtnFilterTop(this)" class="btn-filter-top">Linha de produtos</button>
                <button type="button" onclick="disabledBtnFilterTop(this)" class="btn-filter-top">Decorados</button>
            </div>
            <div class="mobille">
                <button type="button" data-toggle="modal" data-target="#modalTipoImovel">
                    <span>Residencial</span>
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <mask id="mask0_225_3261" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                <rect width="18" height="18" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M13.1683 14.2933C12.5504 14.2933 12.0281 14.08 11.6015 13.6533C11.1748 13.2267 10.9615 12.7044 10.9615 12.0865C10.9615 11.4687 11.1748 10.9464 11.6015 10.5198C12.0281 10.0931 12.5504 9.87981 13.1683 9.87981C13.7862 9.87981 14.3084 10.0931 14.735 10.5198C15.1617 10.9464 15.375 11.4687 15.375 12.0865C15.375 12.7044 15.1617 13.2267 14.735 13.6533C14.3084 14.08 13.7862 14.2933 13.1683 14.2933ZM13.1668 13.5433C13.5688 13.5433 13.9123 13.4012 14.1974 13.1171C14.4825 12.833 14.625 12.4899 14.625 12.088C14.625 11.6861 14.4829 11.3426 14.1988 11.0575C13.9147 10.7724 13.5717 10.6298 13.1697 10.6298C12.7678 10.6298 12.4243 10.7719 12.1392 11.056C11.8541 11.3401 11.7115 11.6832 11.7115 12.0851C11.7115 12.487 11.8536 12.8305 12.1377 13.1156C12.4218 13.4007 12.7649 13.5433 13.1668 13.5433ZM3.75 12.4616V11.7115H9.17308V12.4616H3.75ZM4.83172 8.1202C4.21384 8.1202 3.69158 7.90688 3.26496 7.48024C2.83832 7.0536 2.625 6.53134 2.625 5.91347C2.625 5.29558 2.83832 4.77332 3.26496 4.34668C3.69158 3.92004 4.21384 3.70673 4.83172 3.70673C5.44961 3.70673 5.97188 3.92004 6.39851 4.34668C6.82515 4.77332 7.03847 5.29558 7.03847 5.91347C7.03847 6.53134 6.82515 7.0536 6.39851 7.48024C5.97188 7.90688 5.44961 8.1202 4.83172 8.1202ZM4.83028 7.3702C5.23221 7.3702 5.57572 7.22813 5.86082 6.94401C6.14592 6.65988 6.28847 6.31685 6.28847 5.91491C6.28847 5.51299 6.14641 5.16948 5.86228 4.88438C5.57816 4.59928 5.23512 4.45673 4.83319 4.45673C4.43125 4.45673 4.08774 4.59879 3.80265 4.88291C3.51755 5.16704 3.375 5.51007 3.375 5.91201C3.375 6.31393 3.51706 6.65744 3.80119 6.94254C4.08531 7.22764 4.42834 7.3702 4.83028 7.3702ZM8.82692 6.28847V5.53845H14.25V6.28847H8.82692Z" fill="#1C1B1F" />
                            </g>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
        <div class="filtro-center">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="checkCustom">
                <label class="custom-control-label" for="checkCustom">Lembrar preferências</label>
            </div>
        </div>
        <div class="filtro-bottom">
            <div class="desktop">
                <select name="categoria" id="categoria" class="select-filtro-desktop">
                    <option hidden>Categoria</option>
                    <option value="1">Categoria 1</option>
                    <option value="2">Categoria 2</option>
                    <option value="3">Categoria 3</option>
                </select>
                <select name="tipo" id="tipo" class="select-filtro-desktop">
                    <option hidden>Tipo</option>
                    <option value="1">Tipo 1</option>
                    <option value="2">Tipo 2</option>
                    <option value="3">Tipo 3</option>
                </select>
                <select name="cidade" id="cidade" class="select-filtro-desktop">
                    <option hidden>Cidade</option>
                    <option value="1">Cidade 1</option>
                    <option value="2">Cidade 2</option>
                    <option value="3">Cidade 3</option>
                </select>
                <select name="bairro" id="bairro" class="select-filtro-desktop">
                    <option hidden>Bairro</option>
                    <option value="1">Bairro 1</option>
                    <option value="2">Bairro 2</option>
                    <option value="3">Bairro 3</option>
                </select>
                <select name="metragem" id="metragem" class="select-filtro-desktop">
                    <option hidden>Metragem</option>
                    <option value="1">Metragem 1</option>
                    <option value="2">Metragem 2</option>
                    <option value="3">Metragem 3</option>
                </select>
            </div>
            <div class="mobille">
                <button type="button" class="btn-modal-filtro" data-toggle="modal" data-target="#modalFiltro">
                    <span>Filtrar</span>
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <mask id="mask0_225_3280" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                <rect width="18" height="18" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M13.3125 15.1875C12.525 15.1875 11.8594 14.9156 11.3156 14.3719C10.7719 13.8281 10.5 13.1625 10.5 12.375C10.5 11.5875 10.7719 10.9219 11.3156 10.3781C11.8594 9.83438 12.525 9.5625 13.3125 9.5625C14.1 9.5625 14.7656 9.83438 15.3094 10.3781C15.8531 10.9219 16.125 11.5875 16.125 12.375C16.125 13.1625 15.8531 13.8281 15.3094 14.3719C14.7656 14.9156 14.1 15.1875 13.3125 15.1875ZM13.3125 13.6875C13.675 13.6875 13.9844 13.5594 14.2406 13.3031C14.4969 13.0469 14.625 12.7375 14.625 12.375C14.625 12.0125 14.4969 11.7031 14.2406 11.4469C13.9844 11.1906 13.675 11.0625 13.3125 11.0625C12.95 11.0625 12.6406 11.1906 12.3844 11.4469C12.1281 11.7031 12 12.0125 12 12.375C12 12.7375 12.1281 13.0469 12.3844 13.3031C12.6406 13.5594 12.95 13.6875 13.3125 13.6875ZM3 13.125V11.625H9V13.125H3ZM4.6875 8.4375C3.9 8.4375 3.23438 8.16563 2.69062 7.62187C2.14687 7.07812 1.875 6.4125 1.875 5.625C1.875 4.8375 2.14687 4.17188 2.69062 3.62812C3.23438 3.08437 3.9 2.8125 4.6875 2.8125C5.475 2.8125 6.14062 3.08437 6.68437 3.62812C7.22813 4.17188 7.5 4.8375 7.5 5.625C7.5 6.4125 7.22813 7.07812 6.68437 7.62187C6.14062 8.16563 5.475 8.4375 4.6875 8.4375ZM4.6875 6.9375C5.05 6.9375 5.35938 6.80938 5.61563 6.55313C5.87188 6.29688 6 5.9875 6 5.625C6 5.2625 5.87188 4.95312 5.61563 4.69688C5.35938 4.44063 5.05 4.3125 4.6875 4.3125C4.325 4.3125 4.01562 4.44063 3.75938 4.69688C3.50313 4.95312 3.375 5.2625 3.375 5.625C3.375 5.9875 3.50313 6.29688 3.75938 6.55313C4.01562 6.80938 4.325 6.9375 4.6875 6.9375ZM9 6.375V4.875H15V6.375H9Z" fill="#1C1B1F" />
                            </g>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
        <div class="sessao-imoveis">
            <span class="titulo">Lançamentos</span>
            <div class="list row no-margin-padding" id="sessao-imoveis-1">
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-2">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-3">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-4">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-4">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-4">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-4">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-4">
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
            <div class="contain-btn-carregar-mais">
                <button type="button" class="carregar-mais" onclick="carregarMais('sessao-imoveis-1', 3)">Carregar mais</button>
            </div>
        </div>
        <div class="sessao-imoveis">
            <span class="titulo">Em construção</span>
            <div class="list row no-margin-padding"  id="sessao-imoveis-2">
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-5">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-6">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-7">
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
                <div class="col-xl-4 col-md-6 col-sm-6 col-12 no-margin-padding coluna-list">
                    <div class="cartao">
                        <div class="img">
                            <img class="img-fluid" src="./img/incorporacao/imovel.png" alt="Imóvel">
                        </div>
                        <div class="corpo">
                            <div class="top">
                                <span class="titulo-cartao">Arq Opus</span>
                                <div class="btn-share dropdown">
                                    <button type="button" class="share" id="dropdownMenuButton-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <mask id="mask0_58_352" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g>
                                                <path d="M18.0011 21.75C17.2375 21.75 16.5881 21.4826 16.0529 20.9479C15.5176 20.4132 15.25 19.7639 15.25 19C15.25 18.8751 15.2599 18.7459 15.2798 18.6121C15.2997 18.4784 15.3295 18.3551 15.3692 18.2423L7.97305 13.9115C7.70895 14.1743 7.40831 14.3798 7.07113 14.5279C6.73394 14.6759 6.37689 14.75 5.99997 14.75C5.23609 14.75 4.58679 14.4827 4.05207 13.9482C3.51736 13.4137 3.25 12.7647 3.25 12.0011C3.25 11.2375 3.51736 10.5881 4.05207 10.0529C4.58679 9.51763 5.23609 9.25 5.99997 9.25C6.37689 9.25 6.73394 9.32403 7.07113 9.4721C7.40831 9.62018 7.70895 9.82563 7.97305 10.0885L15.3692 5.75768C15.3295 5.64486 15.2997 5.52157 15.2798 5.38783C15.2599 5.25409 15.25 5.12481 15.25 4.99998C15.25 4.23609 15.5173 3.58679 16.0518 3.05208C16.5863 2.51736 17.2353 2.25 17.9989 2.25C18.7624 2.25 19.4118 2.51725 19.9471 3.05175C20.4823 3.58625 20.75 4.23528 20.75 4.99885C20.75 5.76242 20.4826 6.41182 19.9479 6.94707C19.4132 7.48233 18.7639 7.74995 18 7.74995C17.6231 7.74995 17.266 7.67592 16.9288 7.52785C16.5916 7.37977 16.291 7.17432 16.0269 6.9115L8.63073 11.2423C8.67048 11.3551 8.70028 11.4782 8.72015 11.6115C8.74002 11.7447 8.74995 11.8736 8.74995 11.998C8.74995 12.1224 8.74002 12.2519 8.72015 12.3865C8.70028 12.5211 8.67048 12.6449 8.63073 12.7577L16.0269 17.0885C16.291 16.8256 16.5916 16.6202 16.9288 16.4721C17.266 16.324 17.6231 16.25 18 16.25C18.7639 16.25 19.4132 16.5173 19.9479 17.0518C20.4826 17.5863 20.75 18.2353 20.75 18.9989C20.75 19.7624 20.4827 20.4118 19.9482 20.9471C19.4137 21.4823 18.7647 21.75 18.0011 21.75ZM18 6.24998C18.3474 6.24998 18.6426 6.1285 18.8856 5.88555C19.1285 5.64258 19.25 5.34738 19.25 4.99995C19.25 4.65252 19.1285 4.35732 18.8856 4.11435C18.6426 3.87142 18.3474 3.74995 18 3.74995C17.6525 3.74995 17.3573 3.87143 17.1144 4.11438C16.8714 4.35734 16.75 4.65254 16.75 4.99998C16.75 5.34741 16.8714 5.64261 17.1144 5.88558C17.3573 6.12853 17.6525 6.24998 18 6.24998ZM5.99997 13.25C6.34741 13.25 6.64261 13.1285 6.88558 12.8856C7.12853 12.6426 7.25 12.3474 7.25 12C7.25 11.6525 7.12853 11.3573 6.88558 11.1144C6.64261 10.8714 6.34741 10.75 5.99997 10.75C5.65254 10.75 5.35734 10.8714 5.11438 11.1144C4.87143 11.3573 4.74995 11.6525 4.74995 12C4.74995 12.3474 4.87143 12.6426 5.11438 12.8856C5.35734 13.1285 5.65254 13.25 5.99997 13.25ZM18 20.25C18.3474 20.25 18.6426 20.1285 18.8856 19.8855C19.1285 19.6426 19.25 19.3474 19.25 19C19.25 18.6525 19.1285 18.3573 18.8856 18.1144C18.6426 17.8714 18.3474 17.75 18 17.75C17.6525 17.75 17.3573 17.8714 17.1144 18.1144C16.8714 18.3573 16.75 18.6525 16.75 19C16.75 19.3474 16.8714 19.6426 17.1144 19.8856C17.3573 20.1285 17.6525 20.25 18 20.25Z" fill="#231F20" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-8">
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
            <div class="contain-btn-carregar-mais">
                <button type="button" class="carregar-mais" onclick="carregarMais('sessao-imoveis-2', 3)">Carregar mais</button>
            </div>
        </div>
    </div>
</section>
<?php require_once "./includes/footer.php"; ?>