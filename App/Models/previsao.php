<?php
//o arquivo config.php contém uma constante KEY com a chave da API
require_once "../App/config.php";
class Previsao
{
    private $erro = false;
    
    public function RespPrevisao()
    {
        $lat  = isset($_GET['lat'])  ? $_GET['lat'] : null;
        $long = isset($_GET['long']) ? $_GET['long'] : null;

        if(!empty($lat) && !empty($long)){
        
            //endpoint da API que retorna a previsão, baseada na latitude e longitude do client
            $endPointPrev = "https://api.hgbrasil.com/weather?key=".KEY."&lat=".$lat."&lon=".$long."&user_ip=remote";
            $resposta = json_decode(file_get_contents($endPointPrev)) ;

            //verifica se a chave foi valida
            if($resposta->valid_key){
                return $resposta;
            }else{
                $this->erro = true;
            }
        }
    }

    public function getErro()
    {
        return $this->erro;
    }
}
