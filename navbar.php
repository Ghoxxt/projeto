<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img src="logo.png" alt="Logo" width="40" height="32" class="d-inline-block align-text-top">
      <span class="fw-bold">Viação Cp</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active fw-bold" aria-current="page" href="home.php">Inicial</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vales
                </a>
                <ul class="dropdown-menu"> 
                    
                    <li><a class="dropdown-item" href="cinza.php">Pessoa Fisica</a></li>
                    <li><a class="dropdown-item" href="card.php">Estudantil</a></li>
                    <li><a class="dropdown-item" href="azul.php">Comerciante</a></li>
                   
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="sobrenos.php">Sobre Nós</a>
            </li>
            <li class="nav-item">
                <button type="button" onclick="window.location.href='areadocliente.php'" id="lopa"  class="btn btn-dark">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAvtJREFUSEu1lUmIlUcUhb/jsFKDC1HbGBPbjROkjUOcNkFxoSAKKmg2iqBEBd3owiaGaIwhBNSFIMQBEYJoCGgcFglu1CbibNQm4Bg0KAqiKAERr3Wa+h//e/brdtO1eY+/btW559xzb4kuXuri++kQICK6AbOACcAYYFxO6DxwCfgLOCHpTb1E6wJExMfAL8DkTli2AIsk3Wsvrl2AiFgKbAd6AWeBfcAN4Hq+ZDQwElgMjAdeAqsl7a4FeQcgIpYAe4BXwLfAD/UkyBKuBzYAPQ0oyclUVhVARAwBrgG9gamSTJ+IGAzsAiblk6eB5ZLu5/0pwCnghZkV371XAYgI//eFE4FNKWtn5csHAVeAfjX0HwNNkv7LcZsTa7M5KWlaEVsGsFOs99/AZ5Je54MHk/bzM4NvEnj3hOtf1+mQpAU5rgdgd32az9tlVQzWAFuBZZJ+LjKIiKdAX+CjkiSNwC3gkaSBpdgVwA5glST/VgEUmVr7M6VDj4D+QKOkOznbegBfWCLbW9KXtQD/OksXWJJt17YiogA2q405KbvLbjsgaWEpdgDwMLnpbnLT0FqA50AfoEGSgwqABuAiUJEib7m4rpUZFrE2xAPgmSTLWiVRa8pouEeDpONlx0TEB8A6wLQD2A/8WGaa2c5OI+UwcFWSi10FsDd3ZrOk70tZ2Wn2eVPJqk/yLGqRZMCCgaWzvXcmZl/VAsxMbX8McCFHSfo/IkYlGY64wGVGpf83k3yzJbVGhJvT48R1nCHpj1oA+9s+dqa269eAL7D21vVPFy9f/gkwHfgw2dq1GJbM8ROwMkl8Lk3YzwtmtaOiaDbf82saG/OAC5KKMV1JPne+m8laF7Ee22MlXS4C2xt2zcB3JRkswe/tSRQRc4HfSntrJZlJZdUb1/a7JfKyuzyG3UC3Uy/4ESokci+MyHHrJW2pTaSjB8eybMsOqlPjts/u+jWSXL93VqdvckTMyc+me8Suss5+eP6xw1J9jnaE3ilAR4ffZ6/LAd4Cnl4OKNrVQpcAAAAASUVORK5CYII="/> Área Do Cliente
                </button>
            </li>
        </ul>
    </div>
</div>
</nav>

</body>
</html>


