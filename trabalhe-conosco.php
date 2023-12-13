<?php require_once "./includes/navbar.php"; ?>
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
            <a href="index.php" class="init">institucional</a>
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
            <span class="atual">Trabalhe conosco</span>
        </div>
    </div>
</section>
<section class="trabalho-conosco-primaria">
    <div class="container">
        <div class="grid">
            <div class="left">
                <span class="titulo">Trabalhe conosco</span>
                <span class="desc">
                    Se você deseja se juntar ao nosso time, associando seus talentos e competências
                    a uma empresa líder no segmento e com ótimas perspectivas de crescimento,
                    entre em contato no campo abaixo e anexe o seu currículo
                </span>
                <span class="contato">
                    Telefone de contato: <span class="destaque">62 3250-0400</span>
                </span>
            </div>
            <div class="right">
                <fieldset class="contain-form-trabalhe-conosco">
                    <form action="#" method="post">
                        <input type="text" name="nome" class="input-trabalhe-cns" placeholder="Nome completo" required>
                        <input type="email" name="email" class="input-trabalhe-cns" placeholder="E-mail" required>
                        <input type="text" name="telefone" class="input-trabalhe-cns" placeholder="Telefone" required>

                        <select name="modalidadeContratacao" class="select-trabalhe-cns" required>
                            <option value="1">Modalidade 1</option>
                            <option value="2">Modalidade 2</option>
                            <option value="3">Modalidade 3</option>
                        </select>
                        <select name="areaInteresse" class="select-trabalhe-cns" required>
                            <option hidden>Área de interesse</option>
                            <option value="1">Área 1</option>
                            <option value="2">Área 2</option>
                            <option value="3">Área 3</option>
                        </select>
                        <div class="contain-file">
                            <input type="file" name="curriculo" id="input-curriculo" hidden="hidden">
                            <span id="custom-text">Anexar seu currículo</span>
                            <button type="button" id="custom-button">Selecione o arquivo</button>
                        </div>
                        <div class="contain-input-termo">
                            <div class="input">
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Declaro que li e estou de acordo com os termos da política de privacidade.</label>
                                </div>
                            </div>                            
                        </div>

                        <div class="contain-btn-submit">
                            <button type="submit" class="submit-trabalhe-cns">Enviar mensagem</button>
                        </div>

                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</section>

<script>
    // CONTROLADOR INPUT FILE
    const realFileBtn = document.getElementById("input-curriculo");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function() {
        realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function() {
        if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.match(
                /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[0];
        } else {
            customTxt.innerHTML = "No file chosen, yet.";
        }
    });
</script>

<?php require_once "./includes/footer.php"; 
?>