<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Sistema de Reservas de Hotel</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="post">
            <label for="nome">Hóspede</label>
            <input type="text" name="nome" id="nome"
            placeholder="insira seu nome..." required>

            <label for="">Tipo de Quarto</label>
            <select name="" id="">
                <option value="Selecionar" selected disabled>Selecionar...</option>
                <option value="Suíte">Suíte</option>
                <option value="Standard">Standard</option>
            </select>

            <label for="">Quantidade de Diárias</label>
            <input type="number" name="diaria" placeholder="Ex.:4">

            <label for="">Deseja café da manhã?</label>
            <input type="radio" name="cafe" id="sim" required>
            <label for="">submit</label>
            <input type="radio" name="cafe" id="nao" required>
            <label for="">Não</label>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>