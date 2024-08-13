<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
   
    </style>
</head>
<body class="text-center">
<div class="container">
  <div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-6">
      <img class="img" src="logo.png" alt="" width="380" height="380">
    </div>
    <div class="col-md-6">
      <form method="POST">
        <h1>Página de Login</h1>
        <div class="mb-3">
          <label for="floatingInput" class="form-label text-start">Digite seu CPF:</label>
          <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Digite seu Cpf">
        </div>
        <div class="mb-3">
          <label for="floatingPassword" class="form-label text-start">Senha:</label>
          <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Digite sua Senha">
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" value="login" name="login">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
      </form>
    </div>
  </div>
</div>
</body>
</html>