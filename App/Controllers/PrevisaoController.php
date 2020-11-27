<?php

require_once "../App/Models/previsao.php";

Class PrevisaoController
{
    private $prevAtual;
    private $prevProx;
    private $icon;

    public function resultPrevisao()
    {
        $previsao = new Previsao();
        $dados = $previsao->respPrevisao();

        //verifica se exite erro
        if($previsao->getErro()){
            header("Location:erro.php");
        }else{
            //previsão atual, contémo o objeto result
            $this->prevAtual = $dados->results;
            //array de objetos contendo as previsões dos proxímos dias
            $this->prevProx  = $dados->results->forecast;

            $descricao = $dados->results->description;
            //retorna um ícone de acordo com a description do tempo
            $this->icon = $this->descricaoParaIcon($descricao);
        }
    }

    //retorna um Icon de acordo com a descreption do tempo
    public function descricaoParaIcon($descricao)
    {
        if($descricao == "Tempestades isoladas"){
            return $icon = "wi wi-rain-mix";
        }
        else if($descricao == "Tempestade com neve"){
            return $icon = "wi wi-snow";
        }
        else if($descricao == "Tempestade de areia"){
            return $icon = "wi wi-sandstorm";
        }
        else if($descricao == "Ensolarado"){
            return $icon = "wi wi-day-sunny";
        }
        else if($descricao == "Tempo limpo"){
            return $icon = "wi wi-cloud";
        }
        else if($descricao == "Tempo frio"){
            return $icon = "wi wi-snowflake-cold";
        }
        else if($descricao == "Trovoadas dispersas"){
            return $icon = "wi wi-storm-showers";
        }
        else if($descricao == "Ensolarado com muitas nuvens"){
            return $icon = "wi wi-day-cloudy";
        }  
        else if($descricao == "Chuviscos" || $descricao == "Alguns chuviscos"){
            return $icon = "wi wi-hail";
        }
        else if($descricao == "Tempo nublado" || $descricao == "Parcialmente nublado"){
            return $icon = "wi wi-cloudy";
        }
        else if($descricao == "Chuvas esparsas" || $descricao == "Chuva"){
            return $icon = "wi wi-rain-wind";
        }
        else if($descricao == "Vento acentuado" || $descricao == "Ventania"){
            return $icon = "wi wi-cloudy-windy";
        }
        else if($descricao == "Tempestade forte"|| $descricao == "Tempestade tropical" || 
                $descricao == "Tempestades severas" || $descricao == "Tempestades"){
            return $icon = "wi wi-thunderstorm";
        }    
    }

    public function getPrevAtual()
    {
        return $this->prevAtual;
    }

    public function getPrevProx()
    {
        return $this->prevProx;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}
