<?php

require_once 'Estacionamento.php';

$placa = $_POST['placa'];
$tipoVeiculo = $_POST['tipo'];
$horas = $_POST['qtd'];

if(!$placa || !$tipoVeiculo || !$horas){
    exit ('Dados incorretos!');
}

$veiculo1 = new Estacionamento($placa, $tipoVeiculo, $horas)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estacionamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cobrança do Estacionamento</h1>
    </header>

    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Informações</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tipo do Veículo</td>
                    <td><?=$veiculo1->getVeiculo()?></td>
                </tr>
                <tr>
                    <td>Placa</td>
                    <td><?=$veiculo1->getPlaca()?></td>
                </tr>
                <tr>
                    <td>Horas Estacionadas</td>
                    <td><?=$veiculo1->getHoras()?></td>
                </tr>
                <tr>
                    <td>Valor Total</td>
                    <td>R$<?=number_format($veiculo1->calcularValor(), 2, ",", ".")?></td>
                </tr>
            </tbody>
        </table>
        <a href="index.php">Voltar para o Início</a>
    </main>
    
</body>
</html>