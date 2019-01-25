<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Estação Geek - Conheça nossso lar</title>
  <link rel="stylesheet" href="CSS/main.css">
</head>

<body>
  <!-- INCLUSAO DA NAVEGACAO -->
  <?php include('_APP/view/nav.php'); ?>

  <!-- WELCOME DO SITE -->
  <header>
    <div class="relative">
      <img src="IMG/img-subCapa.jpg" alt="[Imagem de sub-cap, dados]" title="Imagem de sub-cap, dados">
      <div class="dib absolute bottom-2 tc w-100">
        <h1 class="brandColor--lighter self-center f_header f1">Lorem ipsum dolor sit amet</h1>
      </div>
    </div>
  </header>
  <!-- INFORMACOES SOBRE A CASA -->
  <section class="flex flex-column">
    <p class="f_body lh-copy ph3 f4 mb5">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo scelerisque enim dapibus
      ullamcorper.Mauris faucibus, orci nec iaculis ultrices
    </p>
    <!-- SLIDES -->
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="absolute top-1 whiteScale--regular bg_opaco f_body f6 ml3 pa2">1 / 3</div>
        <img src="IMG/slide/example1.jpg" style="width:100%">
        <div class="absolute bottom-1 tc w-100 pa2 whiteScale--regular bg_opaco f_header f3">Lorem ipsum dolor</div>
      </div>
      <div class="mySlides fade">
        <div class="absolute top-1 whiteScale--regular bg_opaco f_body f6 ml3 pa2">2 / 3</div>
        <img src="IMG/slide/example2.jpg" style="width:100%">
        <div class="absolute bottom-1 tc w-100 pa2 whiteScale--regular bg_opaco f_header f3">Lorem ipsum dolor</div>
      </div>
      <div class="mySlides fade">
        <div class="absolute top-1 whiteScale--regular bg_opaco f_body f6 ml3 pa2">3 / 3</div>
        <img src="IMG/slide/example3.jpg" style="width:100%">
        <div class="absolute bottom-1 tc w-100 pa2 whiteScale--regular bg_opaco f_header f3">Lorem ipsum dolor</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
  </section>
  <!-- INCLUSAO DO FOOTER -->
  <?php include('_APP/view/footer.php'); ?>
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="JS/script.js"></script>
</body>

</html>