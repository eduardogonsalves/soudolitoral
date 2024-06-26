<!--SoliDeoGloria-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/informacoes.css"><!--Referência do CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <title>Informações Úteis</title>
</head>
<body>
        <!-- Barra de Menu -->
        <header class="header">
        <img class="logoMenu" src="./imagens/home/logo.png" alt="Logo Marca"></a>
            <nav class="navbar">
                <a href="./index.php">Home</a>
                <a href="./quemsomos.php">Quem somos</a>
                <a href="./index.php#nossosContatos">Contatos</a>
                <a href="./login.php">Login / Cadastro</a>
                <a href="#">Informações</a>
            </nav>   
        </header>
        <div class="container">
            <div class="title">
                <h1>Informações Úteis</h1>
            </div>

            <div class="telefones">
                <div class="tel">
                    <h2>Telefonia - Comunicação</h2>
                            <p>
                                Para ligações internacionais feitas para João Pessoa, <br>
                                discar 00 + 55 + 83 + número de telefone desejado.
                            </p><br><br>

                             Telefones úteis                        
                            <h2>Telefones Úteis</h2>                        
                            <p>
                                Bombeiros: 193<br>
                                Ceatox: (83) 3224-6688<br>
                                Defesa Civil: 199<br>
                                Disque Denúncia: 0800 282 7969<br>
                                Disque Denúncia: 100<br>
                                Sindicato dos Guias de Turismo: (83) 98855-9796<br>
                                Sindicato dos Guias de Turismo: (83) 99946-7675<br>
                                Vigilância Sanitária: (83) 3214-7956<br>
                                Polícia Civil: 197<br>
                                Polícia Federal: 194<br>
                                Polícia Militar: 190<br>
                                Polícia Rodoviária Federal: 191<br>
                                Procon-JP: 0800 83 2015<br>
                                Samu: 192<br>
                                Semob: 118 <br>
                            </p>
                </div>
            </div>

                <!--Lista corrente de  Telefones -->

                <div class="marquee-container">
                    <div class="marquee">
                        <ul class="phone-list">
                            <?php
                                $phones = [
                                    ["Bombeiros", "193"],
                                    ["Ceatox", "+55 (83) 3224-6688"],
                                    ["Defesa Civil", "199"],
                                    ["Disque Denúncia", "08002827969"],
                                    ["Disque Denúncia", "100"],
                                    ["Sindicato dos Guias de Turismo", "+55 (83) 98855-9796 ou +55(83) 99946-7675"],
                                    ["Vigilância Sanitária", "+55(83)3214-7956"],
                                    ["Polícia Civil", "197"],
                                    ["Polícia Federal", "194"],
                                    ["Polícia Militar", "190"],
                                    ["Polícia Rodoviária Federal", "191"],
                                    ["Procon-JP", "0800832015"],
                                    ["Samu", "192"],
                                    ["Semob", "118"]
                                ];

                                foreach ($phones as $phone) {
                                    echo '<li class="phone-item"><a href="tel:' . $phone[1] . '" class="phone-link">' . $phone[0] . ': ' . $phone[1] . '</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>

            <div class="tensao">
                <div class="tens">
                    <h2>Tensão Elétrica</h2>
                    <p>
                        A tensão utilizada em João Pessoa é de <i style="color: red">220V</i>, com tomadas de três pinos.
                    </p>
                </div>
            </div>
            <div class="informacoes">
                <div class="info">
                    <h2>Pontos de Informação Turística</h2><br> 

                        <a style="text-decoration: none; color:white" href="https://www.joaopessoa.pb.gov.br/secretaria/setur/" target="_blank">
                            <p> 
                                <strong>Prefeitura Municipal de João Pessoa</strong> <br>
                                Secretaria de Turismo<br>
                                Endereço: Rua Diogo Velho, 150, Centro, CEP: 58013-110 <br>
                                Telefone: +55 83 98161-3545 <br><br>
                            </p>
                        </a>

                        <p>
                            <strong>Centro de Atendimento ao Turista</strong> <br>
                            Localização: Av. Almirante Tamandaré, 100 - Tambaú, CEP: 58.023-500 <br>
                            Telefone: +55 83 98654-7890 <br>
                            Horário de Funcionamento: <br>
                            Segunda a sexta: 9h às 21h <br>
                            Finais de semana e feriados: 9h às 19h <br><br>
                            <strong>Centro de Apoio ao Turista Bosque dos Sonhos</strong><br>
                            Localização: Cabo Branco (Ao lado do Farol) <br>
                            Horário de Funcionamento: Das 8h às 17h <br><br>
                        </p>
                        
                        <p>
                            <strong>SINGTUR/PB - Sindicato dos Guias de Turismo da Paraíba</strong> <br>
                            Endereço: A. Rui Carneiro, 241 - MAP, loja 113 -  Tambaú <br>
                            Telefone: (83) 99600-1177 <br>
                        </p>
                </div>
            </div>
            <div class="seguranca">
                <div class="seg">
                    <h2>Segurança e Assistência</h2>
                        <p>
                            <strong>Delegacia de Atendimento ao Turista</strong> <br>
                            Endereço: Centro Turístico de Tambaú - Av. Alm. Tamandaré, 100 - Tambaú <br>
                            Telefones: (83) 3214 8022 / 3247 8405 <br>
                        </p>
                </div>
            </div>
            <div class="transportes">
                <div class="trnsp">
                <h2>Transportes</h2><br>
                    <p>
                        <strong>Aeroporto Castro Pinto</strong> <br>
                        Aeroporto, S/N, Bayeux-PB <br>
                        Telefone: (83) 3041 4200 <br><br>
                    </p>
                    <p>
                        <strong>Rodoviária</strong> <br>
                        Rua Francisco Londres - Varadouro <br>
                        Telefone: (83) 3222 6567 <br><br>
                    </p>
                    <p>
                        João Pessoa conta com um sistema de transporte público que 
                        inclui ônibus e táxis. Aplicativos de transporte como Uber e 99 também estão disponíveis.
                    </p>
                </div>
            </div>
            <div class="saude">
                <div class="sau">
                <h2>Saúde</h2><br>
                    <p>
                        <strong>Hospital de Emergência e Trauma</strong><br>
                        Endereço: Av. Orestes Lisboa, S/N Conj. Pedro Gondim <br>
                        Telefones: (83) 3216-5700 <br><br>
                    </p>
                    <p>
                        <strong>Hospital Valentina de Figueiredo</strong><br>
                        Endereço: Rua Mariângela Lucena Peixoto, 274 - Valentina <br>
                        Telefone: (83) 3218-9404 <br><br>
                    </p>
                    <p>
                        <strong>Instituto Cândida Vargas</strong><br>
                        Endereço: Av. Coremas, S/N - Jaguaribe <br>
                        Telefone: (83) 3015-1565 <br><br>
                    </p>
                    <p>
                        <strong>Complexo Hospitalar Governador Tarcísio Burity<br>Ortotrauma (Trauminha)</strong> <br>
                        Endereço: Rua Agente Fiscal José Costa Duarte, S/N - Mangabeira <br>
                        Telefone: (83) 3218-9725 | 3239-3225 <br><br>
                    </p>
                    <p>
                        <strong>UPA Oceania</strong><br>
                        Endereço: Av. Flávio Ribeiro Coutinho, 70 - Aeroclube <br>
                        Telefone: (83) 3223-5209 <br><br>
                    </p>
                </div>
            </div>
            <div class="tempo">
                <div class="time">
                <h2>Clima</h2>
                    <p>
                        João Pessoa possui um clima tropical, com temperaturas médias anuais em torno de 26°C.
                    </p>
                </div>
            </div>
            <div class="shoppings">
                <div class="mall">
                <h2>Shoppings</h2><br>
                    <p>
                        <strong>Manaíra Shopping</strong> <br>
                        Av. Governador Flávio Ribeiro Coutinho, 805 - Manaíra <br><br>

                        <strong>Mag Shopping</strong> <br>
                        Av. Governador Flávio Ribeiro Coutinho, 115 - Manaíra <br><br>

                        <strong>Mangabeira Shopping</strong> <br>
                        Av. Hilton Souto Maior, 1100 - Mangabeira <br><br>

                        <strong>Shopping Sul</strong> <br>
                        Av. Ayrton Senna da Silva, 3233 - Bancários <br><br>                 

                        <strong>Shopping Pátio Altiplano</strong> <br>
                        Av. João Cirilo Silva, 155 - Altiplano Cabo Branco <br><br>

                        <strong>Liv Mall</strong> <br>
                        Av. Governador Flávio Ribeiro Coutinho, 500 - Manaíra <br><br>

                        <strong>Parahyba Mall</strong> <br>
                        R. Bacharel José de Oliveira Curchatuz, 542 - Jardim Oceania <br><br>

                        <strong>Shopping Tambiá</strong> <br>
                        Rua Almeida Barreto, 181 - Tambiá <br><br>
                    </p>
                </div>
            </div>
            <div class="cambio">
                <div class="moeda">
                <h2>Moeda e Câmbio</h2>
                    <p>
                        A moeda utilizada é o Real (BRL). Há casas de câmbio em 
                        diversos pontos da cidade, incluindo o aeroporto e shoppings.
                    </p>
                </div>
            </div>
            <div class="aguas_praias">
                <div class="aguas">
                    <h2>Praias com trechos impróprios para banho</h2><br>
                    <p>
                        Relatório da SUDEMA<br>(Superintendencia Estadual de Administração do Meio Ambiente) 
                        aponta trechos de praias que foram classificados como
                        impróprios para banho.<br><br>
                    </p>
                    <p>
                        Clique nos botões abaixo e veja o exato local da praia!
                    </p>                
                </div>
                <div class="praiasImp">                   
                    <button ontouchstart="openPopup('./imagens/informacoes/banho')" onclick="openPopup('./imagens/informacoes/banho/Manaira_e_Tambau.jpg')">Manaíra e Tambaú</button>
                    <button ontouchstart="openPopup('./imagens/informacoes/banho')" onclick="openPopup('./imagens/informacoes/banho/Seixas.jpg')">Seixas</button>   
                    <button ontouchstart="openPopup('./imagens/informacoes/banho')" onclick="openPopup('./imagens/informacoes/banho/Penha.jpg')">Penha</button>
                    <button ontouchstart="openPopup('./imagens/informacoes/banho/Seixas.jpg')" onclick="openPopup('./imagens/informacoes/banho/Jacarape_Arraial_Sol.jpg')">Jacarapé, Arraial e Sol</button>
                    <button ontouchstart="openPopup('./imagens/informacoes/banho/Penha.jpg')" onclick="openPopup('./imagens/informacoes/banho/Pitimbu_Maceio_Guarita.jpg')">Pitimbu, Maceió e Guarita</button>
                    <button ontouchstart="openPopup('./imagens/informacoes/banho/Jacarape_Arraial_Sol.jpg')" onclick="openPopup('./imagens/informacoes/banho/Ponta_dos_Coqueiros_Acau_Pontinha.jpg')">Ponta dos Coqueiros, Acaú e Pontinha</button>           
                </div>
                <div class="aguas1">
                    <h2><a style="text-decoration: none; color: blue;" href="https://sudema.pb.gov.br/qualidade-do-ambiente/qualidade-dos-mares" target="_blank">Clique aqui para acessar o relatório na íntegra</a></h2>               
                </div>
                <div id="popup" class="popup">
                    <div class="popup-content">
                        <span class="close" onclick="closePopup()">&times;</span>
                        <img id="popup-image" src="" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    <script>
        function openPopup(imageSrc) {
            document.getElementById('popup-image').src = imageSrc;
            document.getElementById('popup').style.display = "block";
        }

        function closePopup() {
            document.getElementById('popup').style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('popup')) {
                closePopup();
            }
        }
    </script>


</body>
</html>
