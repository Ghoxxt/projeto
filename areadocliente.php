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
    <style>
        .grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-top: 20px;
        }

        .extrato-recarga{
            background-color: #DFDFDF;
            color: black;
            border-radius: 30px;
            margin: 90px;
        }
        
        .botao1{
            border-radius: 50px;
            background-color: #BEBEBE;
            font-size: 30px;
        }

        .informacao-pessoal{
            background-color:  #DFDFDF;
            font-size: 20px;
            font-weight: bold;
            border-radius: 30px;
            margin: 90px;
        }

        .saldo{
            font-size: 30px;
        }
        #lopa{

        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: bold;
        align-items: center;
        justify-content: center;
        display: flex;
        gap: 5px;

        }
</style>
</head>


<body>
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="grid text-center" style="--bs-gap: .25rem 1rem;">
        <div class="g-col-6"><img src="foto-usuario.png" alt="usuario" width="200px" height="200px">
        <p>Nome de usuário</p>
        <br>
       <b><p class="saldo">Você possui: R$ 2567,50</p></b>
        </div>
        <div class="g-col-6"><img src="cartao.png" alt="cartao" width="500px" height="300px"></div>

        <div class="g-col-6">
            <div class="extrato-recarga">
                <br>
                <br>
                <br>
                <br>
                <button class="botao1" onclick="window.location.href='recarga.php'" >Recarregar</button>
                <br>
                <br>
                <br>
                <br>
                <button class="botao1" onclick="window.location.href='extrato.php'" >Extrato</button>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="g-col-6">
            <div class="informacao-pessoal">
                <br>
                <p>CPF: 000000000-00 </p>
                <br>
                <p>CVC: 000</p>
                <br>
                <p>Número cartão: 0000 0000 0000 0000</p>
                <br>
                <p>Data expiração: 05/28</p>
                <br>
            </div>
        </div>
    </div>
</body>

</html>