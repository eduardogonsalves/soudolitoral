<!DOCTYPE html>
<html lang="pt-br">
    <!--SoliDeoGloria-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Descubra os melhores destinos turísticos no litoral paraibano! Explore praias paradisíacas, museus fascinantes, o zoológico local e muito mais. Encontre informações sobre hospedagem, restaurantes e atividades para tornar sua viagem inesquecível.">
        <link rel="stylesheet" href="css/cardsDestinos.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
        <title>Monumentos Históricos</title>
    </head>

    <body>

        <div class="container">
            <div class="slider">
                    <div class="slides" style="--img: url('../imagens/monumentos/m1.jpg')">                        
                        <div class="content">
                            <h2>Centro Histórico de João Pessoa</h2>
                                <p>
                                    Este é um conjunto arquitetônico que abriga diversas construções históricas, como a Igreja de São Francisco, o Mosteiro de São Bento e o Centro Cultural São Francisco.
                                </p>
                        </div>                                    
                    </div>
                <div class="slides" style="--img: url('../imagens/monumentos/m2.jpg')">
                    <div class="content">
                        <a href="destino.php?nome_destino=Farol do Cabo Branco" style="text-decoration: none; color: white"><h2>Farol do Cabo Branco</h2></a>
                        <p>
                            Localizado no extremo oriental das Américas, o Farol do Cabo Branco é um marco icônico da cidade, oferecendo uma vista panorâmica do oceano Atlântico e da costa de João Pessoa.
                        </p>
                    </div>
                </div>
                <div class="slides" style="--img: url('../imagens/monumentos/m3.jpg')">
                    <div class="content">
                        <h2>Estação Cabo Branco - Ciência, Cultura e Artes</h2>
                        <p>
                            Este complexo arquitetônico contemporâneo, projetado por Oscar Niemeyer, é dedicado à ciência, cultura e arte, oferecendo exposições, eventos e atividades educativas.
                        </p>
                    </div>
                </div>
                <div class="slides" style="--img: url('../imagens/monumentos/m4.jpg')">
                    <div class="content">
                        <h2>Casarão dos Azulejos</h2>
                        <p>
                            Também conhecido como Casarão dos Azulejos Azuis, é uma residência histórica construída no século XIX, que apresenta uma fachada decorada com azulejos azuis, característica marcante da arquitetura da época.
                        </p>
                    </div>
                </div>
                <div class="slides" style="--img: url('../imagens/monumentos/m5.jpg')">
                    <div class="content">
                        <h2>Palácio da Redenção</h2>
                        <p>
                            Localizado na Praça dos Três Poderes, o Palácio da Redenção é a sede do governo do estado da Paraíba. Construído no século XVI, possui uma arquitetura imponente e é um símbolo político e histórico da região.
                        </p>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <span class="prev"></span>
                <span class="next"></span>
                <button class="home">
                    <a href="./index.php" class="home">
                        <img src="./imagens/btn_home/btn_home.png" alt="Home">
                    </a>
                </button>
            </div>
        </div>
         
        <script src="./js/cardsDestinos.js"></script>
    </body>

</html>