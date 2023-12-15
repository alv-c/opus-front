<?php require_once "./includes/navbar.php"; ?>
<?php require_once "./includes/modal_video.php"; ?>
<?php $pagina = 'conheca'; ?>

<section class="conheca-primaria">
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
            <span class="atual">Conheça a Opus</span>
        </div>
        <div class="titulo">
            <span>Conheça a Opus</span>
        </div>
    </div>
</section>
<section class="conheca-banner">
    <div class="banner">
        <img class="mx-auto desktop" src="./img/conheca/banner_desktop.png" alt="Opus Incorporação">
        <img class="mx-auto tablet" src="./img/conheca/banner_tablet.png" alt="Opus Incorporação">
        <img class="mx-auto mobille" src="./img/conheca/banner_mobille.png" alt="Opus Incorporação">
    </div>
</section>
<section class="conheca-sobre">
    <div class="container container-lateral-direita">
        <div class="grid">
            <div class="left">
                <span class="desc destaque">
                    A Opus nasceu em 2006 com uma missão: criar um novo padrão de inteligência
                    construtiva. Desde então, fazemos isso de forma consistente, a cada lançamento,
                    planejando e construindo empreendimentos que são referência em qualidade,
                    localização premium, design autoral, inovação e solidez, sempre com alto
                    padrão de atendimento.
                </span>
                <span class="desc">
                    Somos uma empresa reconhecida em alguns dos prêmios mais importantes do país.
                    Os 3 títulos no Prêmio Máster Imobiliário, o Oscar do setor, reafirmam o
                    nosso DNA original e a nossa capacidade única de criar empreendimentos originais
                    que aliam arquitetura autoral, tecnologia, soluções inovadoras e sofisticação.
                </span>
                <span class="desc">
                    As 6 premiações no Great Place to Work explicam porque atraímos e mantemos os
                    profissionais mais qualificados do mercado. Os 7 títulos no Prêmio Consumidor
                    Moderno, o mais importante do Brasil no setor de atendimento ao cliente,
                    mostram o nosso compromisso com a sua satisfação. E o Prêmio IEL de Talentos
                    demonstra nosso comprometimento em formar profissionais 100% integrados com
                    a cultura de excelência da empresa. Tudo para entregar empreendimentos originais
                    as melhores experiências para você e sua família.
                </span>
            </div>
            <div class="right">
                <div class="contain-btn">
                    <a href="trabalhe-conosco.php">Trabalhe conosco</a>
                    <a href="politica-privacidade.php">Política de privacidade</a>
                </div>
                <div class="contain-media">
                    <button type="button" class="btn-media" onclick="iniciarModalYt('https://www.youtube.com/watch?v=1HN6bhAmQMc')" data-bs-toggle="modal" data-bs-target="#dynamicVideoModal">
                        <img class="d-block mx-auto" src="./img/conheca/media.png" alt="Imóvel Opus">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="linha-tempo">
    <div class="container">
        <span class="titulo">Linha do tempo</span>
    </div>
        <fieldset class="contain-btn-desktop">
            <div class="container">
                <button type="button" class="btn-linha-tempo active" onclick="disabledBtnFilterContains(this, 2007, true)">2007</button>
                <button type="button" class="btn-linha-tempo" onclick="disabledBtnFilterContains(this, 2008, true)">2008</button>
                <button type="button" class="btn-linha-tempo" onclick="disabledBtnFilterContains(this, 2009, true)">2009</button>
                <button type="button" class="btn-linha-tempo" onclick="disabledBtnFilterContains(this, 2010, true)">2010</button>
            </div>
        </fieldset>
    <div class="container">
        <fieldset class="contain-btn-mobille">
            <div class="dropdown">
                <button class="btn-filter-mobille" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span id="span-btn-filter-mobille">2007</span>
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <mask id="mask0_225_4880" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                <rect width="18" height="18" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M13.1683 14.2932C12.5504 14.2932 12.0281 14.0799 11.6015 13.6533C11.1748 13.2266 10.9615 12.7044 10.9615 12.0865C10.9615 11.4686 11.1748 10.9463 11.6015 10.5197C12.0281 10.0931 12.5504 9.87975 13.1683 9.87975C13.7862 9.87975 14.3084 10.0931 14.735 10.5197C15.1617 10.9463 15.375 11.4686 15.375 12.0865C15.375 12.7044 15.1617 13.2266 14.735 13.6533C14.3084 14.0799 13.7862 14.2932 13.1683 14.2932ZM13.1668 13.5432C13.5688 13.5432 13.9123 13.4012 14.1974 13.117C14.4825 12.8329 14.625 12.4899 14.625 12.0879C14.625 11.686 14.4829 11.3425 14.1988 11.0574C13.9147 10.7723 13.5717 10.6297 13.1697 10.6297C12.7678 10.6297 12.4243 10.7718 12.1392 11.0559C11.8541 11.3401 11.7115 11.6831 11.7115 12.085C11.7115 12.487 11.8536 12.8305 12.1377 13.1156C12.4218 13.4007 12.7649 13.5432 13.1668 13.5432ZM3.75 12.4615V11.7115H9.17308V12.4615H3.75ZM4.83172 8.12013C4.21384 8.12013 3.69158 7.90681 3.26496 7.48018C2.83832 7.05354 2.625 6.53128 2.625 5.91341C2.625 5.29552 2.83832 4.77326 3.26496 4.34662C3.69158 3.91998 4.21384 3.70667 4.83172 3.70667C5.44961 3.70667 5.97188 3.91998 6.39851 4.34662C6.82515 4.77326 7.03847 5.29552 7.03847 5.91341C7.03847 6.53128 6.82515 7.05354 6.39851 7.48018C5.97188 7.90681 5.44961 8.12013 4.83172 8.12013ZM4.83028 7.37013C5.23221 7.37013 5.57572 7.22807 5.86082 6.94395C6.14592 6.65982 6.28847 6.31679 6.28847 5.91485C6.28847 5.51293 6.14641 5.16941 5.86228 4.88431C5.57816 4.59921 5.23512 4.45667 4.83319 4.45667C4.43125 4.45667 4.08774 4.59873 3.80265 4.88285C3.51755 5.16698 3.375 5.51001 3.375 5.91195C3.375 6.31387 3.51706 6.65738 3.80119 6.94248C4.08531 7.22758 4.42834 7.37013 4.83028 7.37013ZM8.82692 6.28841V5.53839H14.25V6.28841H8.82692Z" fill="#1C1B1F" />
                            </g>
                        </svg>
                    </div>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button" onclick="disabledBtnFilterContains(this, 2007, false)">2007</button>
                    <button class="dropdown-item" type="button" onclick="disabledBtnFilterContains(this, 2008, false)">2008</button>
                    <button class="dropdown-item" type="button" onclick="disabledBtnFilterContains(this, 2009, false)">2009</button>
                    <button class="dropdown-item" type="button" onclick="disabledBtnFilterContains(this, 2010, false)">2010</button>
                </div>
            </div>
        </fieldset>

        <div class="contains">
            <!-- Attr data-year deve conter o ano em questão -> data-year -->
            <div class="contain-filter contain-filter-conheca" data-year="2007">
                <span class="titulo-filter">2007</span>
                <div class="grid">
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2007</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2007</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2007</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2007</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contain-filter contain-filter-conheca d-none" data-year="2008">
                <span class="titulo-filter">2008</span>
                <div class="grid">
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2008</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2008</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2008</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2008</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contain-filter contain-filter-conheca d-none" data-year="2009">
                <span class="titulo-filter">2009</span>
                <div class="grid">
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2009</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2009</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2009</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2009</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contain-filter contain-filter-conheca d-none" data-year="2010">
                <span class="titulo-filter">2010</span>
                <div class="grid">
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2007</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2007</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2007</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                    <div class="card-linha-tempo">
                        <div class="topo">
                            <span>Vencedora do prêmio Master Imobiliário</span>
                        </div>
                        <div class="img">
                            <img class="d-block mx-auto img-fluid" src="./img/conheca/card.png" alt="Imóvel linha do tempo">
                        </div>
                        <div class="bottom">
                            <span class="nome">Twenty Five Park</span>
                            <span class="lancamento">Lançamento em 2007</span>
                            <span class="entrega">Entrega 2011</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php require_once "./includes/footer.php"; ?>