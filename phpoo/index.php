<?php
require ("retangulo.php");
require ("pessoa.php");
require ("carro.php");
class Fruta{
    //atributos
    private $nome;
    public $cor;

    //métodos
    function __construct($nome,$cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }


    function set_name($nome){
        $this->nome = $nome;
    }

    function get_name(){
        return $this->nome;
    }

    function set_cor($cor){
        $this->cor = $cor;
    }

    function get_cor(){
        return $this->cor;
    }
}
//criando objeto
$maca = new Fruta("maca_ifsp_turmab","vermelha");
$banana = new Fruta("banana_ifsp_turmab","amarela");

/* 
$maca-> set_name("maca_ifsp_turmab");
$banana-> set_name("banana_ifsp_turmab"); */

echo $maca->get_name();
echo "<br>" .$banana->get_name();

$aluno1 = new Pessoa("Vinicius", 18, "professor");
$aluno2 = new Pessoa("Leticia", 18, "médica");

echo "<br>" .$aluno1->apresentar();
echo "<br>" .$aluno2->apresentar();

$carro1 = new carro("Honda", "City", 2018);
$carro2 = new carro("Hyundai", "Hb20s", 2020);

echo "<br>" .$carro1->apresentar();
echo "<br>" .$carro2->apresentar();

$retangulo = new retangulo(2,4);
$retangulo2 = new retangulo(2,4);

echo "<br>Área do retângulo = " .$retangulo->calcular_area();
echo "<br>Perímetro do retângulo = " .$retangulo2->calcular_perimetro();
?>