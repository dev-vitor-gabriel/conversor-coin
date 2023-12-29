<!DOCTYPE html>
<html lang="en">
<?php
include('src/Coin.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
    <title>Coin Conversor</title>
</head>

<body>
    <div class="box-coin">
        <div class="div-coin">
            <img class="img-coins" src="assets/img/coin.png" alt="imagem de moeda">
        </div>
        <h1>Conversor Digital</h1>
        <p>Olá, o campo abaixo serve para converter seu dinheiro em real para dólar!</p>
        <div class="input-text">
            <input type="text" name="money-value" id="money-value" placeholder="R$ 0,00">
            <button onclick="converte_valor()">Converter</button>
        </div>
    </div>
</body>

</html>