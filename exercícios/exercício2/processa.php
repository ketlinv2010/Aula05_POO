<?php

require_once 'LocacaoBicicleta.php';

$nome = $_POST['nome'];
$tipoBicicleta = $_POST['tipo'];
$horas = $_POST['horas'];

if(!$nome || !$tipoBicicleta || !$horas){
    exit ('Dados incorretos!');
}

$bike1 = new  LocacaoBicicleta ($nome, $tipoBicicleta, $horas);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locação de Bicicleta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cobrança da Locação</h1>
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
                    <td>Tipo do Bicicleta</td>
                    <td><?=$bike1->getTipo()?></td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td><?=$bike1->getNome()?></td>
                </tr>
                <tr>
                    <td>Horas Estacionadas</td>
                    <td><?=$bike1->getHoras()?></td>
                </tr>
                <tr>
                    <td>Valor Bruto</td>
                    <td>R$<?=number_format($bike1->calcularValorBruto(), 2, ",", ".")?></td>
                </tr>
                <tr>
                    <td>Desconto</td>
                    <td>R$<?=number_format($bike1->calcularDesconto(), 2, ",", ".")?></td>
                </tr>
                <tr>
                    <td>Valor Total</td>
                    <td>R$<?=number_format($bike1->calcularTotal(), 2, ",", ".")?></td>
                </tr>
            </tbody>
        </table>
        <a href="index.php">Voltar para o Início</a>
    </main>
    
</body>
</html>