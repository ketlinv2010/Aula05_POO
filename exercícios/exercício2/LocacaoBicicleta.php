<?php

class LocacaoBicicleta{
    private string $nome;
    private string $tipoBicicleta;
    private int $horas;

    public function __construct($nome, $tipoBicicleta, $horas){
        $this->nome = $nome;
        $this->tipoBicicleta = $tipoBicicleta;
        $this->horas = $horas;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTipo(){
        return $this->tipoBicicleta;
    }

    public function getHoras(){
        return $this->horas;
    }

    public function calcularValorBruto(){
        if($this->tipoBicicleta == 'Comum'){
            return $this->horas * 10;
        }
        else{
            return $this->horas * 18;
        }
    }

    public function calcularDesconto(){

        if($this->horas >=5){
            return $this->calcularValorBruto()*0.1;
        }
        else{
            return 0;
        }
    }

    public function calcularTotal(){
        if($this->calcularDesconto() !=0){
            return $this->calcularValorBruto() - $this->calcularDesconto();
        }
        else{
            return $this->calcularValorBruto();
        }
    }

}

?>