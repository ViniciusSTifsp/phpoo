<?php
class carro{
    public $marca;
    public $modelo;
    public $ano;

    function __construct($marca,$modelo,$ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    function get_marca(){
        return $this->marca;
    }

    function get_modelo(){
        return $this->modelo;
    }

    function get_ano(){
        return $this->ano;
    }

    function apresentar(){
        return "Olá, eu sou marca de carros ".$this->get_marca().",
        tenho como principal modelo o ".$this->get_modelo()." que foi lançado em  ".$this->get_ano();
    }
}

?>