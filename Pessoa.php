<?php
class Pessoa{
    // public $nome;
    // public $peso;
    // public $altura;
    // public $cpf;

    public function __construct(private $nome,private $peso, private $altura, private $cpf){

    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        if($nome === "Herbert Tereski"){
            echo "Não é possivel alterar o nome para Herbert Tereski. Escolha outro!<br>";
        }else{
            $this->nome = $nome;
        } 
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function falar(){
        echo $this->nome." falou!<br>";
    }

    public function andar(){
        echo $this->nome." andou!<br>";
    }
}

// $pessoa = new Pessoa("Betinho Tereski", 62, 1.67, "07176060908");
// $pessoa2 = new Pessoa("Paulinhas Arts", 56, 1.62, "10174390955");

// $pessoa->falar();
// $pessoa2->andar();

// $pessoa->setNome("Herbert Tereski");
// $pessoa->andar();

