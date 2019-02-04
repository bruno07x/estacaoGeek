<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estação geek - sua luderia em Atibaia</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>

<body>
    <!-- INCLUSAO DA NAVEGACAO -->
    <?php include('_APP/view/nav.php'); ?>

    <!-- WELCOME DO SITE -->
    <header>
        <div class="relative flex flex-column items-center backgroundMain">
            <div class="dib w-100 ph2 absolute top-capa">
                <h1 class="primary--lighter tc f_header f1">Estação geek sua luderia em Atibaia</h1>
            </div>
            <div class="mb3 flex justify-around w-100 mw6 absolute bottom-0">
                <img class="h3 w3" src="IMG/icons/axes.png" alt="[Icone machados medieval]" title="Icone machados medieval">
                <img class="h3 w3" src="IMG/icons/viking.png" alt="[Icone imagem viking]" title="Icone imagem viking">
                <img class="h3 w3" src="IMG/icons/quiver.png" alt="[Icone arco e flecha medieval]" title="Icone arco e flecha medieval">
            </div>
        </div>
    </header>

    <section class="mb5 flex flex-column">
        <div class="flex-l items-center pv4">
            <!-- ENDERECO E TELEFONE -->
            <article class="ph3 w-50-l flex flex-column justify-between h4">
                <p class="f_body grayScale--regular mb0">
                    R. Prof. Pedro de Vasconcelos, 73, Alvinópolis, Atibaia - SP <br><sub class="f_body grayScale--regular">Na rua atrás do Picanha da Tabua</sub>
                    <a class="" href="https://goo.gl/maps/PeMQaLP2vjy">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                        xml:space="preserve" width="1.5rem" height="1.5rem">
                        <g>
                            <g>
                                <path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035    c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719    c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z"
                                    fill="#ef6e35" />
                            </g>
                        </g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                    </svg>
                </a>
                </p>
                <p class="f_body grayScale--regular mb0">(11) 2427-8869</p>
            </article>
            <!-- HORARIOS DE FUNCIONAMENTO -->
            <article class="flex justify-around mt5 ph3 w-50-l">
                <div class="fl w-50">
                    <p class="f_body grayScale--regular separador_down ma0">Terça</p>
                    <p class="f_body grayScale--regular separador_down ma0">Quarta</p>
                    <p class="f_body grayScale--regular separador_down ma0">Quinta</p>
                    <p class="f_body grayScale--regular separador_down ma0">Sexta</p>
                    <p class="f_body grayScale--regular separador_down ma0">Sábado e Domingo</p>
                </div>
                <div class="fl w-50 tr">
                    <p class="f_body grayScale--regular separador_down ma0">18:00 - 00:00</p>
                    <p class="f_body grayScale--regular separador_down ma0">18:00 - 00:00</p>
                    <p class="f_body grayScale--regular separador_down ma0">18:00 - 00:00</p>
                    <p class="f_body grayScale--regular separador_down ma0">18:00 - 00:00</p>
                    <p class="f_body grayScale--regular separador_down ma0">18:00 - 00:00</p>
                </div>
            </article>
        </div>

        <!-- PLANOS ESTACAO GEEK -->
        <article class="flex justify-around mt5">
            <div class="fl mw5 pa3">
                <span class="bg_whiteScale--darker f_header grayScale--regular f2 db br2 br--top tc pv2 shadow-5">Basic</span>
                <div class="bg_whiteScale--regular db br2 br--bottom pa3 tc shadow-5">
                    <p class="f_body grayScale--regular f3 ma0"><sup>R$</sup>15,00</p>
                    <ul class="pa0">
                        <li class="f_body grayScale--regular f6 list pv2 flex items-center"><img class="pr2 pa1" src="img/logo/checked.png"
                                alt=""> Day use</li>
                        <li class="f_body grayScale--regular f6 list pv2 flex items-center"><img class="pr2 pa1" src="img/logo/checked.png"
                                alt=""> 100% em consumação</li>
                        <li class="f_body grayScale--regular f6 list pv2 flex items-center"><img class="pr2 pa1" src="img/logo/checked.png"
                                alt=""> + de 100 títulos</li>
                    </ul>
                </div>
            </div>
            <div class="fl mw5 pa3">
                <span class="f_header f2 db br2 br--top tc pv2 shadow-5 bg_primary--regular whiteScale--lighter">Premium</span>
                <div class="bg_whiteScale--regular db br2 br--bottom pa3 tc shadow-5">
                    <p class="f_body f3 grayScale--regular ma0"><sup>R$</sup>30,00</p>
                    <ul class="pa0 flex flex-column justify-center">
                        <li class="f_body f6 grayScale--regular list pv2 flex items-center"><img class="pr2 pa1" src="img/logo/checked.png"
                                alt=""> Month use</li>
                        <li class="f_body f6 grayScale--regular list pv2 flex items-center"><img class="pr2 pa1" src="img/logo/checked.png"
                                alt=""> 100% em consumação</li>
                        <li class="f_body f6 grayScale--regular list pv2 flex items-center"><img class="pr2 pa1" src="img/logo/checked.png"
                                alt=""> + de 100 títulos</li>
                        <li class="f_body f6 grayScale--regular list pv2 flex items-center"><img class="pr2 pa1" src="img/logo/checked.png"
                                alt=""> Sorteios mensais</li>
                    </ul>
                </div>
            </div>
        </article>
        <div class="flex flex-column items-center w-100">
            <span class="f_body f6 grayScale--lighter">Conheça a casa!</span>
            <a href="casa.php" class="button bg--gradientPrimary br2 dib tc link shadow-3">
                <p class="whiteScale--regular tc f_header f2 ma0 pv1">A casa</p>
            </a>
        </div>

    </section>
    <!-- INCLUSAO DO FOOTER -->
    <?php include('_APP/view/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="JS/script.js"></script>
</body>

</html>