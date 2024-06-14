<?php

class Veiculo {

    private $placa;
    private $marca;
    private $modelo;
    private $cor;
    private $ano;

    public function __construct($placa, $marca, $modelo, $cor, $ano) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function acelerar() {
        echo "Acelerando o veículo...\n";
    }
}

class Carro extends Veiculo {

    private $numeroPortas;

    public function __construct($placa, $marca, $modelo, $cor, $ano, $numeroPortas) {
        parent::__construct($placa, $marca, $modelo, $cor, $ano);
        $this->numeroPortas = $numeroPortas;
    }

    public function getNumeroPortas() {
        return $this->numeroPortas;
    }

    public function setNumeroPortas($numeroPortas) {
        $this->numeroPortas = $numeroPortas;
    }

    public function exibirDetalhes() {
        echo "Detalhes do Carro:\n";
        echo "Placa: " . $this->getPlaca() . "br";
        echo "Marca: " . $this->getMarca() . "br";
        echo "Modelo: " . $this->getModelo() . "br";
        echo "Cor: " . $this->getCor() . "br";
        echo "Ano: " . $this->getAno() . "br";
        echo "Número de Portas: " . $this->getNumeroPortas() . "\n";
    }

    public function acelerar() {
        echo "Acelerando o carro...br";
    }
}

class Moto extends Veiculo {

    private $cilindrada;

    public function __construct($placa, $marca, $modelo, $cor, $ano, $cilindrada) {
        parent::__construct($placa, $marca, $modelo, $cor, $ano);
        $this->cilindrada = $cilindrada;
    }

    public function getCilindrada() {
        return $this->cilindrada;
    }

    public function setCilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }

    public function exibirDetalhes() {
        echo "Detalhes da Moto:\n";
        echo "Placa: " . $this->getPlaca() . "br";
        echo "Marca: " . $this->getMarca() . "br";
        echo "Modelo: " . $this->getModelo() . "br";
        echo "Cor: " . $this->getCor() . "br";
        echo "Ano: " . $this->getAno() . "br";
        echo "Cilindrada: " . $this->getCilindrada() . "cc";
    }

    public function acelerar() {
        echo "Acelerando a moto...br";
    }
}
