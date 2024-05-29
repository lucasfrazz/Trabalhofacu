<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao CodProduto</title>
    <style>
        body {
            background-color: black;
            color: orange;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 50px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao CodProduto</h1>
        <p>Este é o sistema CodProduto, onde você pode cadastrar e gerenciar produtos.</p>
    </div>
    <div class="container">
        <h2>Cadastro de Produtos</h2>
        <form id="cadastroForm" action="cadastro.php" method="post">
            Nome do Produto<input type="text" name="nome" placeholder="Nome do Produto" required><br><br><br>
            Tipo <input type="text" name="tipo" placeholder="Tipo" required><br><br><br>
            Codigo Do Poduto<input type="number" name="Codigo" placeholder="Codigo Do Poduto" required><br><br><br>
            Data de validade <input type="date" name="data_validade" placeholder="Data de validade" required><br><br><br>
            Preço de compra<input type="number" name="Preço de compra" placeholder="Preço de compra" required><br><br><br>
            Quantidade de Estoque<input type="number" name="Quantidade de Estoque" placeholder="Quantidade de Estoque" required><br><br><br>
            Descrição <input type="text" name="Descrição" placeholder="Descrição" required><br><br><br>
           <button type="submit">Cadastrar</button>
        </form>
    </div>
        
</body>
</html>
