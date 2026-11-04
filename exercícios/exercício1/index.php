<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistea de Estacionamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Sistema de Estacionamento</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="post">
            <!-- Campo da placa -->
            <label for="placa">Placa do Veículo</label>
            <input type="text" id="placa" name="placa"
            placeholder="Ex.: EWS7H60" required>

            <!-- Campo tipo do veículo -->
            <label for="">Tipo do Veículo</label>
            <select name="tipo" id="">
                <option value="selecionar" selected disabled>Selecionar...</option>
                <option value="Carro">Carro</option>
                <option value="Moto">Moto</option>
            </select>

            <!-- Campo Quantidade -->
            <label for="qtd">Horas estacionadas</label>
            <input type="number" name="qtd" id="qtd"
            placeholder="Ex.: 3" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>