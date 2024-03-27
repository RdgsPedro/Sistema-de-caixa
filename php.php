<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .receipt-info {
            margin-bottom: 20px;
        }
        .receipt-info p {
            margin: 5px 0;
            color: #333;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informações da Compra</h1>
        <div class="receipt-info">
            <?php
            $nome = $_POST['nome_cliente'];
            $produto1 = $_POST['primeiro_produto'];
            $valor1 = $_POST['valor_primeiro_produto'];
            $produto2 = $_POST['segundo_produto'];
            $valor2 = $_POST['valor_segundo_produto'];
            $total = $_POST['valor_pago'];

            $total_produtos = $valor1 + $valor2;
            $troco = $total - $total_produtos;

            echo "<p>O nome do cliente é: <span>$nome</span></p>";
            echo "<p>O Primeiro produto é: <span>$produto1 : R$ $valor1</span></p>";
            echo "<p>O Primeiro produto é: <span>$produto2 : R$ $valor2</span></p>"; 
            echo "<p>O valor total a ser pago é: <span class='total'>$total_produtos</span></p>";
            echo "<p>O troco é: <span>$troco</span></p>";
            ?>
        </div>
    </div>
</body>
</html>