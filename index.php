<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LGPD - Cookies</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,200&family=Roboto:wght@100;400&display=swap" rel="stylesheet">        
        <script src="_js/jquery.js"></script>
    </head>
    <body>
        <div class="cookies-container">
            <div class="cookie-content">
                <div class="row">
                    <div class="col-xs-8 col-lg-12 cookies-text">
                        <p>Este site usa cookies para garantir que você obtenha a melhor experiência. Para saber mais acesse nossa <a href="https://seusite.com.br/politica/">Politica da Privacidade</a></p>
                    </div>
                    <div class="col-xs-2 col-lg-12 cookies-pref"><button class="">Preferências</button></div>
                    <div class="col-xs-2 col-lg-12 cookies-save"><button>Aceitar</button></div>
                </div>
            </div>
        </div>
        <div class="cookies-pref-modal" id="js_pref-modal">
            <div class="cookies-box">
                <div class="cookies-header">
                    <div class="cookies-header-logo"><img src="_img/evoludigital-logo.jpg" width="70" /></div>
                    <div class="cookies-column2">
                        <div class="cookies-header-title">
                            <header><h2>Preferências de Cookies</h2></header>
                        </div>
                        <div class="cookies-header-close"><button class="btn-close">X</button></div>
                    </div>
                </div>
                <div class="cookies-options">                
                    <div class="item-pref"><input type="button" value="Cookies Necessários" id="1"/></div><div class="item-switch"><label class="switch"><input type="checkbox" checked data-function="necessary" disabled="disabled" /><span class="slider"></span></label></div>
                    <div class="item-desc hidden" id="item-desc-1">Cookies essenciais para executar algumas funcionalidades do site. Necessários por exemplo para registrar a sessão usuário. Portanto, esse cookie deve ser aceito obrigatoriamente no nosso site.</div>
                    <div class="item-pref"><input type="button" value="Cookies de Análise" id="2"/> </div><div class="item-switch"><label class="switch"><input type="checkbox" checked data-function="analytics" readonly="readonly"/><span class="slider"></span></label></div>
                    <div class="item-desc hidden" id="item-desc-2">Cookies que permitem obter dados estatísticos de navegação em nosso site, possibilitando corrigir erros e reaizar melhorias. Resultados obtidos de análises não permitem a identificação direta ou indireta do usuário.</div>
                    <div class="item-pref"><input type="button" value="Cookies de Marketing" id="3"/> </div><div class="item-switch"><label class="switch"><input type="checkbox" checked data-function="marketing" readonly="readonly"/><span class="slider"></span></label></div>
                    <div class="item-desc hidden" id="item-desc-3">Cookies utilizados com fins de publicidade de nossa empresa ou de terceiros, permitindo oferecer posteriormente produtos ou serviços.</div>
                </div>
            </div>                
        </div>
        <script src="_js/cookies.js"></script>
        <script src="_js/script.js"></script>
    </body>
</html>
