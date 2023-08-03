<?php
class retangulo{
    public $altura;
    public $largura;

    function __construct($altura,$largura)
    {
        $this->altura = $altura;
        $this->largura = $largura;
    }

    function calcular_area(){
        return $this->altura * $this->largura;
    }

    function calcular_perimetro(){
        return $this->altura*2 + $this->largura*2;
    }
}
?>