<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SuperDidi</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="assets\logo-superdidi.png" alt="Logo SuperDidi" width="195px" height="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Log in</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Seções
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Cereais</a></li>
                  <li><a class="dropdown-item" href="#">Limpeza</a></li>
                  <li><a class="dropdown-item" href="#">Frios e Laticínios</a></li>
                  <li><a class="dropdown-item" href="#">Açougue</a></li>
                  <li><a class="dropdown-item" href="#">Hortifruti</a></li>
                  <li><a class="dropdown-item" href="#">Bebidas</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Todos os produtos</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2 bg-light" type="search" placeholder="Buscar produto..." aria-label="Search" style="background-color: #fff !important;">
              <button class="btn btn-primary" type="submit">Pesquisar</button>
            </form>
          </div>
        </div>
      </nav>

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets\banner3Site.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets\banner1Site.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets\banner2Tie.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <hr>

      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="assets\SeçãoCereais.png" alt="" width="175px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="assets\Seçãodelimpeza.png" alt="" width="175px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"><img src="assets\SeçãoHortifruti.png" alt="" width="175px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"><img src="assets\SeçãoFrios.png" alt="" width="175px"></a>
        </li>
      </ul>
      <hr>
    <?php
      $cards = [
    ['src' => 'assets\card 1.png', 'alt' => 'Card 1'],
    ['src' => 'assets\card 2.png', 'alt' => 'Card 2'],
    ['src' => 'assets\card 3.png', 'alt' => 'Card 3'],
];
// Função para gerar o HTML de uma carta
function generateCardHTML($src, $alt) {
    return <<<HTML
    <div class="card" style="width: 8rem;">
        <img src="$src" class="card-img-top" alt="$alt">
        <div class="card-body">
        </div>
    </div>
HTML;
}

// Gerar as listas de cartas
$numLists = 3; // Número de listas de cartas
$numCards = count($cards); // Número de cartas no array

for ($i = 0; $i < $numLists; $i++) {
    echo '<ul class="nav justify-content-center">';
    for ($j = 0; $j < $numCards; $j++) {
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="#">';
        echo generateCardHTML($cards[$j]['src'], $cards[$j]['alt']);
        echo '</a>';
        echo '</li>';
    }
    echo '</ul>';
}
?>

      <footer class="bottom">
        <img src="assets\logo-superdidi.png" alt="Logo SuperDidi" height="50px" class="logo">
        <a href="" class="links">Contatos</a>
        <a href="" class="links">Sobre nós</a>
        <a href="" class="links">Whatsapp</a>
        <a href="" class="links">Instagram</a>
      </footer>

</body>
</html>