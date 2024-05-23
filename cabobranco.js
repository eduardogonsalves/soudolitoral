// SoliDeoGloria

// Configuração inicial do mapa
var map = L.map('map').setView([-7.1266, -34.8254], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// Marcadores para Restaurantes
var data = {
    restaurantes: [
        {lat: -7.145781, lng: -34.804317, name:'Gulliver Mar Restaurante'},
        {lat: -7.145632, lng: -34.806807, name:'Corais Bar e Restaurante'},
        {lat: -7.145774, lng: -34.809616, name:'Restaurante e espaço Marcozero'},
        {lat: -7.145682, lng: -34.809704, name:'RESTAURANTE ATLÂNTICO ORIENTAL'},
        {lat: -7.144138, lng: -34.812432, name:'Restaurante Green Sunset'},
        {lat: -7.141139, lng: -34.815582, name:'Tocaia Gastrobar'},
        {lat: -7.141254, lng: -34.815485, name:'Restaurante Bama'},
        {lat: -7.140071, lng: -34.816599, name:'Pescadore restô'},
        {lat: -7.136496, lng: -34.819376, name:'Bar do Cuscuz'},
        {lat: -7.134890, lng: -34.820326, name:'Restaurante Esfinge'},
        {lat: -7.131720, lng: -34.821974, name:'FoodPark Cabo Branco'},
        {lat: -7.130132, lng: -34.822472, name:'Restaurante Olho de Lula'},
        {lat: -7.128422, lng: -34.823123, name: '7KM - Conexão Saudável'},
        {lat: -7.125830, lng: -34.823727, name: 'Sal e Brasa João Pessoa'},
        {lat: -7.122878, lng: -34.823994, name: "Sapore D'Itália"},
        {lat: -7.120095, lng: -34.824876, name: 'Formaggio 43 - Restaurante e Forneria'},
        {lat: -7.119789, lng: -34.825774, name: 'Palace Grill Restaurante'},
        
    ],

    // Marcadores para Postos de Saúde
    saude: [
        {lat: -7.143929, lng: -34.817023, name: 'USF Cidade Recreio'},
        {lat: -7.136031, lng: -34.827701, name: 'USF - Altiplano I E II'},
        {lat: -7.109241, lng: -34.837266, name: 'Posto De Saúde - Manaíra'},
        {lat: -7.112383, lng: -34.824532, name: 'Unidade Básica de Saúde das Praias'},
        {lat: -7.097512, lng: -34.839729, name: 'UPA Oceania'},
         
    ],

    // Marcadores para Postos Policiais
    policia: [
        {lat: -7.133229, lng: -34.830254, name: 'PM - CEATur'},
        {lat: -7.113698, lng: -34.829431, name: 'Delegacia Distrital de Tambaú'},
        {lat: -7.104421, lng: -34.837147, name: 'DISP - Distrito Integrado de Segurança Pública'},
    
     ]
};

var markers = [];

// Função para mostrar marcadores de uma categoria específica
function showMarkers(category) {
    // Remover todos os marcadores existentes
    markers.forEach(function(marker) {
        map.removeLayer(marker);
    });
    markers = [];

    // Adicionar novos marcadores da categoria selecionada
    data[category].forEach(function(item) {
        var marker = L.marker([item.lat, item.lng])
            .bindPopup(item.name)
            .addTo(map);
        markers.push(marker);
    });
}

// Exibir marcadores da primeira categoria por padrão
showMarkers('restaurantes');

// Função para mostrar os slides (carrossel de imagens)
let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.querySelectorAll('.slide');
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = 'block';  
    setTimeout(showSlides, 2000); // Troca de imagem a cada 2 segundos (2000 milissegundos)
}