<?php 

include_once "navbar.php";

?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 colunas iguais */
            gap: 10px;
        }
        .grid-item {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>


    <div class="container">
        <div class="grid">
            <div class="grid-item">
                <img src="azul-claro.png" alt="cartao" class="im    g-fluid">
            </div>
            <div class="grid-item">
                <h2>Recarga</h2>
                <p>Saldo Disponível:</p>
                <h3>R$:20</h3>
                <div class="mb-3">
                    <p>Selecione a quantidade de recargas que deseja:</p>
                    <button type="button" class="btn btn-secondary">1R$</button>
                    <button type="button" class="btn btn-secondary">5R$</button>
                    <button type="button" class="btn btn-secondary">10R$</button>
                    <button type="button" class="btn btn-secondary">20R$</button>
                    <button type="button" class="btn btn-secondary">50R$</button>
                </div>
                <button type="button" class="btn btn-secondary">-1R$</button>
                <button type="button" class="btn btn-secondary">-5R$</button>
                <button type="button" class="btn btn-secondary">-10R$</button>
                <button type="button" class="btn btn-secondary">-20R$</button>
                <button type="button" class="btn btn-secondary">-50R$</button>
                <div>
                    <p>Saldo a depositar: 40R$</p>
                </div>
                <div>
                    <button type="button" class="btn btn-secondary">Depositar</button>
                </div>
            </div>
        </div>
        <h1>Formas de Pagamento</h1>
        <div id="paga">
            <img class="imagens" src="apple.png" alt="Apple Pay">
            <img class="imagens" src="boleto.png" alt="Boleto">
            <img class="imagens" src="visa.png" alt="Visa">
            <img class="imagens" src="mastercard.png" alt="MasterCard">
            <img class="imagens" src="pix.png" alt="Pix">
        </div>
    </div>
    <style>
        body {
            background-color: #f0f0f0;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
