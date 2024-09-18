<?php
class Veiculo{
    public $cor;
    public $placa;
    public $combustivel;

    public function frear(){
        echo $this->placa." freiou!<br>";
    }

    public function andar(){
        echo $this->placa." andou!<br>";
    }
}

$carro = new Veiculo();

$carro->cor = "Branco";
$carro->placa = "AYC0H22";
$carro->combustivel = "Flex";

$carro->frear();