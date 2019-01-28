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
   <!-- INCLUSAO NAVEGACAO -->
   <?php include('_APP/view/nav.php') ?>
   <!-- WELCOME DO SITE -->
   <header>
      <div class="relative">
         <img src="IMG/img-subCapa.jpg" alt="[Imagem de sub-cap, dados]" title="Imagem de sub-cap, dados">
         <div class="dib absolute bottom-2 tc w-100">
            <h1 class="primary--lighter self-center f_header f1">Lorem ipsum dolor sit amet</h1>
         </div>
      </div>
   </header>
   <!-- INFORMACOES -->
   <main>
      <section class="flex flex-column">
         <p class="f_body grayScale--regular lh-copy ph3 f4 mb5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo scelerisque enim dapibus
            ullamcorper.Mauris faucibus, orci nec iaculis ultrices
         </p>
      </section>
      <!-- PESQUISA DE JOGOS -->
      <section class="mb4 ml3">
         <h3 class="f_header primary--dark f3 mb3">Encontre seu jogo</h3>
         <div class="flex items-center h2">
            <input class="input-reset h-100 w5 bg_whiteScale--regular f_body f6 ba b--light-gray br2 br--left" type="text"
               placeholder="Digite o nome do título...">
            <span class="h-100 w2 bg_secundary--darker br2 br--right flex justify-center items-center">
               <a class="whiteScale--regular f6 f_body ttu link" href="">Ok</a>
            </span>
         </div>
      </section>
      <!-- JOGOS -->
      <section class="">
         <!-- JOGO  -->
         <article class="flex items-center ph3 pv3">
            <div class="w-30 flex justify-end">
               <img class="jogosScale" src="IMG/jogos/dixit.jpg" title="Dixit" alt="[Dixit]">
            </div>
            <div class="w-70 mw7 ml2 self-start">
               <h3 class="ma0 mb2 f_header f3 primary--dark">Dixit</h3>
               <p class="ma0 f_body f6 grayScale--regular">Na vez de cada jogador, o jogador escolhe uma de suas 6
                  cartas na mão e dá uma dica sobre a arte da mesma, pode ser uma palavra, frase, mímica, cantar (ou
                  cantarolar) um música, após isso o jogador separa esta carta virada para baixo. <sub><a class="link f_body primary--regular" target="_blank" href="https://www.ludopedia.com.br/jogo/dixit">Leia mais...</a></sub>
               </p>
            </div>
         </article>
         <!-- JOGO -->
         <article class="flex items-center ph3 pv3">
            <div class="w-30 flex justify-end">
               <img class="jogosScale" src="IMG/jogos/coup.jpg" title="Coup" alt="[Coup]">
            </div>
            <div class="w-70 mw7 ml2 self-start">
               <h3 class="ma0 mb2 f_header f3 primary--dark">Coup</h3>
               <p class="ma0 f_body f6 grayScale--regular">Em Coup, você quer ser o último jogador com influência no jogo. A influência é representada por cartas de personagens com a face para baixo em sua área de jogo. <sub><a class="link f_body primary--regular" target="_blank" href="https://www.ludopedia.com.br/jogo/coup">Leia mais...</a></sub>
               </p>
            </div>
         </article>
         <!-- JOGO -->
         <article class="flex items-center ph3 pv3">
            <div class="w-30 flex justify-end">
               <img class="jogosScale" src="IMG/jogos/catan.jpg" title="Catan" alt="[Catan]">
            </div>
            <div class="w-70 mw7 ml2 self-start">
               <h3 class="ma0 mb2 f_header f3 primary--dark">Catan</h3>
               <p class="ma0 f_body f6 grayScale--regular">Em Catan os jogadores tentam ser a força dominante na ilha de Catan, construindo estradas, vilas e cidades. Em cada turno, os dados são rolados para determinar quais recursos a ilha produz. Os jogadores coletam esses recursos - madeira, trigo, tijolo, ovelha ou pedra - para construir suas civilizações, chegar a 10 pontos de vitória e ganhar o jogo. <sub><a class="link f_body primary--regular" target="_blank" href="https://www.ludopedia.com.br/jogo/the-settlers-of-catan">Leia mais...</a></sub>
               </p>
            </div>
         </article>
      </section>
   </main>
   <!-- INCLUSAO DO FOOTER -->
   <?php include('_APP/view/footer.php'); ?>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
   <script src="JS/script.js"></script>
</body>

</html>