
var conteudo  = document.getElementById("conteudo");
var titulo    = document.getElementById("titulo");
var descricao = document.getElementById("descricao");
        
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
} else { 
    conteudo.style.display = "block";
    descricao.innerHTML = 'A geolocalização não é compatível com este navegador.';            
}
          
function showPosition(position) {
    var lat  = position.coords.latitude;
    var long = position.coords.longitude;
    window.location.href = "http://localhost:8080/previsao.php?lat="+lat+"&long="+long;
}
        
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            conteudo.style.display = "block";
            descricao.innerHTML = 'Por favor, ative a sua localização (gps) e recarregue a página';
            break;
        case error.POSITION_UNAVAILABLE:
            conteudo.style.display = "block";
            descricao.innerHTML = "As informações de localização não estão disponíveis."
            break;
        case error.TIMEOUT:
            conteudo.style.display = "block";
            descricao.innerHTML = "A solicitação para obter a localização do usuário expirou."
            break;
        case error.UNKNOWN_ERROR:
            conteudo.style.display = "block";
            descricao.innerHTML = "Ocorreu um erro desconhecido."
            break;
    }
}