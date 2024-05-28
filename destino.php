<!DOCTYPE html>
<html lang="pt-BR">
<!--SoliDeoGloria-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nome do Destino</title>
  <link rel="stylesheet" href="css/destino.css"><!--Referência do CSS-->
</head>
<body>

  <header>
    <h1>Nome do Destino</h1>
  </header>

   <!-- Carrossel de imagens -->
  <section class="carousel">
        <div class="carousel-container">
            <div class="slide"><img src="./imagens/1.jpg" alt="Imagem 1"></div>
            <div class="slide"><img src="./imagens/2.png" alt="Imagem 2"></div>
            <div class="slide"><img src="./imagens/3.webp" alt="Imagem 3"></div>
            <div class="slide"><img src="./imagens/4.jpeg" alt="Imagem 4"></div>
            <div class="slide"><img src="./imagens/5.jpg" alt="Imagem 5"></div>
            <div class="slide"><img src="./imagens/6.jpg" alt="Imagem 6"></div>
            <div class="slide"><img src="./imagens/7.jpg" alt="Imagem 7"></div>
        </div>
  </section>
  

  <section class="content">
    <div class="left-column">
      <!-- Informações das tábuas de maré aqui -->
      <a href="https://tabuademares.com/br/paraiba/joao-pessoa/previsao/mares" target="_blank">Ver Tábuas de Maré</a>
    </div>
    <div class="center-column">
      <div id="map"></div>
      <div class="map-buttons">
        <button onclick="showMarkers('restaurantes')">Restaurantes</button>
        <button onclick="showMarkers('saude')">Unidades de Saúde Próximas</button>
        <button onclick="showMarkers('policia')">Polícia Mais Próxima</button>
      </div>
    </div>
    <div class="right-column">
      <!-- Previsão do tempo aqui -->
      <a href="https://www.google.com/search?q=previsao+do+tempo" target="_blank">Ver Previsão do Tempo</a>
    </div>
  </section>

  <section class="calendar">
    <!-- Calendário e descrição aqui -->
  </section>

  <footer>
    <a href="./index.php">Home</a>
  </footer>

  <script src="./js/destino.js"></script>
</body>
</html>