<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Locação de Bicicletas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Sistema de Locação de Bicicletas</h1>
    </header>
    
    <div class="formulario">
        <form action="processa.php" method="post">
            <label for="nome">Cliente</label>
            <input type="text" id="nome" name="nome"
            placeholder="digite seu nome..." required>

            <label for="tipo">Tipo da bicicleta</label>
            <select name="tipo" id="tipo">
                <option value="selecionar" selected disabled>Selecionar...</option>
                <option value="Comum">Comum</option>
                <option value="Elétrica">Elétrica</option>
            </select>

            <label for="horas">Horas de Locação</label>
            <input type="number" name="horas" id="horas"
            placeholder="ex.: 4" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>