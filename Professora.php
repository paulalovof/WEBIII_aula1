<?php
require 'Pessoa.php';
class Professora extends Pessoa{

    private $salario;

    public function __construct($nome, $peso, $altura, $cpf, $salario){
        parent::__construct($nome, $peso, $altura, $cpf);
        $this->salario = $salario;
    }

   public function ensinar(){
        echo $this->getNome()." está ensinando!<br>";
   }
   public function falar(){
    echo $this->getNome()." está falando, SILÊNCIO!<br>";
}
}

$professora = new Professora("Carol", 73, 1.78, "12345678910", 5000);
$professora->setNome("Herbert Tereski");

$professora->falar();