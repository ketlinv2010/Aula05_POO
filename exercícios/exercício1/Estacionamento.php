<?php

class Estacionamento{
    private string $placa;
    private string $tipoVeiculo;
    private int $horas;

    public function __construct($placa, $tipoVeiculo, $horas){
        $this->placa = $placa;
        $this->tipoVeiculo = $tipoVeiculo;
        $this->horas = $horas;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function getVeiculo(){
        return $this->tipoVeiculo;
    }

    public function getHoras(){
        return $this->horas;
    }

    public function calcularValor(){
        if($this->tipoVeiculo == 'Carro'){
            return $this->horas * 10;
        }
        else{
            return $this->horas * 7;
        }
    }
}

?>