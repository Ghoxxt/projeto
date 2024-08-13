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
    <link rel="stylesheet" href="homestyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <div class="fundo">
        <div class="question">Qual sua rota hoje?</div>
        <div class="search-container">
            <form class="d-flex" role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>

    <div>
        <b><h3 id="sr" >Sugestões de Rotas:</h3></b>
        <div id="imgsrot">
            <img class="love" src="rota 1.png">
            <img class="love" src="rota 2.png">
            <img class="love" src="rota 3.png">
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>