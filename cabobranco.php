<!DOCTYPE html>
<html lang="pt-BR">
<!--SoliDeoGloria-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cabo Branco</title>
  <link rel="stylesheet" href="./css/cabobranco.css"><!--Referência do CSS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

</head>
<body>

    <!-- Barra de Menu -->
    <header class="header">
        <img src="./imagens/logo/logofinal.png" alt="Logo Marca" style="height: 40px; width: 40px;"></a>
        <nav class="navbar">
            <a href="./index.html">Home</a>
            <a href="./quemsomos.html">Quem somos</a>
            <a href="./index.html#nossosContatos">Contatos</a>
            <a href="./login.html">Login / Cadastro</a>
        </nav>   
    </header>

    <div class="title">
        <h1 id="top">Cabo Branco</h1>
    </div>
    
    <!-- Carrossel de imagens -->
    <section class="carousel">
        <div class="carousel-container">
            <div class="slide"><img src="./imagens/caboBranco/cb1.webp" alt="Cabo Branco"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb12.webp" alt="Cabo BrancoImagem 2"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb8.webp" alt="Cabo Branco 3"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb9.jpg" alt="Cabo Branco"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb5.jpg" alt="Cabo Branco"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb6.jpg" alt="Cabo Branco"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb11.jpg" alt="Cabo Branco"></div>
        </div>
    </section>

    <!-- Texto descritivo do Destino -->

    <section class="descricao">
        <div class="text">
            <h2>Praia de Cabo Branco: O Encontro do Mar e da Cidade</h2>
            <h3>Localização e Acesso</h3>
            <p>Cabo Branco é uma extensão de areia dourada que se estende ao longo da costa leste de João Pessoa, a capital do estado da Paraíba, no nordeste do Brasil. Faz parte da região conhecida como "Ponta do Seixas", considerada o ponto mais oriental das Américas. Seu acesso é fácil, com várias vias de acesso a partir do centro da cidade.</p>
            <h3>Beleza Natural</h3>
            <p>Cabo Branco é conhecida por sua beleza natural singular. Suas águas tranquilas e cristalinas em tons de azul e verde convidam os visitantes a mergulhar e relaxar. A extensa faixa de areia macia é perfeita para longas caminhadas à beira-mar ou para simplesmente estender uma toalha e aproveitar o sol.</p>
            <h3>Farol do Cabo Branco</h3>
            <p>Um dos pontos de destaque da praia é o Farol do Cabo Branco, um monumento arquitetônico projetado pelo renomado arquiteto brasileiro Oscar Niemeyer. Localizado no ponto mais oriental das Américas, o farol oferece uma vista deslumbrante do oceano Atlântico e é um local popular para apreciar o pôr do sol espetacular.</p>
            <h3>Atividades e Entretenimento</h3>
            <p>Além de ser um local perfeito para relaxar e desfrutar da natureza, Cabo Branco também oferece uma variedade de atividades e entretenimento. Visitantes podem praticar esportes aquáticos como surf, stand-up paddle e kitesurf, ou simplesmente saborear deliciosos petiscos e bebidas em quiosques à beira-mar.</p>
            <h3>Cultura e Gastronomia</h3>
            <p>A área ao redor da Praia de Cabo Branco é repleta de cultura e gastronomia paraibanos. Restaurantes locais oferecem uma variedade de pratos tradicionais, destacando-se a deliciosa culinária nordestina, com suas influências indígenas, africanas e europeias.</p>
            <h3>Vida Noturna</h3>
            <p>À noite, Cabo Branco ganha vida com uma animada cena noturna. Bares e restaurantes à beira-mar oferecem música ao vivo e uma atmosfera descontraída, perfeita para socializar com amigos ou simplesmente apreciar a brisa do mar sob as estrelas.</p>
            <h3>Conclusão</h3>
            <p>A Praia de Cabo Branco é muito mais do que uma simples extensão de areia e mar. É um destino que encanta os visitantes com sua beleza natural, cultura vibrante e hospitalidade calorosa. Seja para relaxar à beira-mar, explorar a região ou simplesmente contemplar a paisagem, Cabo Branco oferece uma experiência inesquecível para todos que a visitam.</p>
        </div>
    </section>
    
    <section class="content">
        <div class="left-column">
            <!-- Informações das tábuas de maré aqui -->
            <div class="tabuas">
                <h2>Tábua de Maré</h2>
                <h4>Quarta 8/5/24</h4>
                <p>    
                    04:13 - 2.6m<br>
                    10:21 - 0.1m<br>
                    16:39 - 2.5m<br>
                    22:39 - 0.2m
                </p>
                <h4>Quarta 9/5/24</h4>
                <p>
                    04:58 - 2.5m<br>
                    11:06 - 0.1m<br>
                    17:23 - 2.4m<br>
                    23:21 - 0.3m
                </p>
                <h4>Quinta 10/5/24</h4>
                <p>
                    05:39 - 2.5m<br>
                    11:53 - 0.2m<br>
                    18:08 - 2.3m
                </p>
                <h4>Sexta 11/5/24</h4>
                <p>
                    00:02 - 0.5m<br>
                    06:21 - 2.3m<br>
                    12:39 - 0.4m<br>
                    18:54 - 2.1m
                </p>
            </div>
        </div>

        <!-- Mapa do Destino -->
        <div class="center-column">
            <div id="map"></div>
            <div class="map-buttons">
                <button class="btnsmaps" onclick="showMarkers('restaurantes')">Restaurantes</button>
                <button class="btnsmaps" onclick="showMarkers('saude')">Unidades de Saúde Próximas</button>
                <button class="btnsmaps" onclick="showMarkers('policia')">Polícia Mais Próxima</button>
            </div>
        </div>

        <div class="right-column">
            <!-- Previsão do tempo aqui -->
            <div id="weather">
                <h2>Previsão do Tempo</h2>
                <div id="location"></div>
                <div id="temperature"></div>
                <div id="description"></div>
                <div id="icon"></div>
            </div>
        </div>
    </section>
    
    
    <section class="calendar">
        <!-- Calendário e descrição aqui -->
    </section>

    <!-- Cards de vídeos do YouTube -->
    <section class="videos">
        <h2>Galeria de Vídeos</h2>
        <div class="video-cards">
            <div class="video-card">
                <iframe src="https://www.youtube-nocookie.com/embed/fE9XYai51VY?si=53WP19du0wwms0-t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/v5rRm6DOHzg?si=zHDv_kkRe6RZSqZy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/cvaWef0O-z0?si=UNzL98lNIba4QAYV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/wQ3FxpNIW9U?si=3ysctNOFMfUr_c43" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>




    <!-- Rodapé -->
    <footer>
        <div class="footer-content">
            <div class="btn-topo">
                <a href="./cabobranco.html#top">Topo</a>
            </div>
            <div id="nossosContatos" class="footer-columns">
                <div class="column">
                    <h3>Sou do Litoral</h3>
                    <p>Developed by Group 3 - Senac</p>
                </div>
                <div class="column">
                    <h3>Endereço</h3>
                    <p>Av. Dom Pedro I, Centro. João Pessoa-PB</p>
                </div>
                <div class="column">
                    <h3>Contatos</h3>
                    <p>3548-9886</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="./js/cabobranco.js"></script>
</body>
</html>