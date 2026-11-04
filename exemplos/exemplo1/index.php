<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastro de Produtos</h1>
    </header>

    <div class="formulario">

        <form action="processa.php" method="post">

            <!-- Campo Nome -->
            <label for="nome">Nome</label>
            
            <input type="text" id="nome" name="nome"
            placeholder="digite seu nome..." required>
            
            <!-- Campo Preço -->
            <label for="preco">Preço</label>
            
            <input type="number" name="preco" id="preco"
            placeholder="ex.: 19.99" required>
            

            <!-- Campo Quantidade -->
            <label for="qtd">Quantidade</label>
            
            <input type="number" name="qtd" id="qtd"
            placeholder="ex.: 3" required>
            

            <button type="submit">Enviar</button>

        </form>

    </div>
</body>
</html>