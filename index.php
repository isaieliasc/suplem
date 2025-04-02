<?php
$productos= [
["img" => "https://http2.mlstatic.com/D_NQ_NP_996334-MLU74980036007_032024-O.webp", "titulo" => "Whey Protein", "info"=> "Proteina para tu dia a dia de suero de leche full whey." ],
["img" => "https://mx.birdman.com/cdn/shop/files/450_CREATINA_1c799b80-8b3c-4e81-8ec5-e5e55603fe69.png?v=1716569764&width=1200", "titulo" => "Creatina Birdman", "info"=> "Creatina para recuperarte de tu entrenamiento" ],
["img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9c9dXGq1Y48qUS0DC9KhkDG6XPtuAmYU_7A&s", "titulo" => "Pre entreno cBum", "info"=> "Para antes de entrenar y tengas la energia suficiente.." ],
["img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRnDyhH5iFQsib4Re1vhgpNsct0Dl5cyRYgw&s", "titulo" => "BCAAS y glutamina", "info"=> "Para ayudar a la recuperación muscular." ],
["img" => "https://m.media-amazon.com/images/I/71cxlOABwhL.__AC_SX300_SY300_QL70_ML2_.jpg", "titulo" => "Proteina Birdman", "info"=> "Proteina vegana y ligera de distintios sabores." ],
["img" => "https://m.media-amazon.com/images/I/71BQ0EXvn5L.__AC_SX300_SY300_QL70_ML2_.jpg", "titulo" => "Proteina fitmingo.", "info"=> "Proteina vegana sabor moka" ],


    ];
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
    <link rel=" stylesheet" type="text/css" href="style1.css">


</head>
<body>

    <div class="header"> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>

    <div class="container" style="height: 100vh;"> 
        <div class="row justify-content-center"> 
            
            <?php foreach($productos as $producto) { ?>
                <div class="col-3"> 

                <div class="card" style="width: 18rem;">
                    <img src="<?= $producto["img"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?= $producto["titulo"] ?></h5>
                      <p class="card-text"><?= $producto["info"] ?>"</p>
                      <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                  </div>
            </div> 
<?php } ?>

            <div class="col-3"> 
                
                <div class="card" style="width: 18rem;">
                    <img src="https://mx.birdman.com/cdn/shop/files/450_CREATINA_1c799b80-8b3c-4e81-8ec5-e5e55603fe69.png?v=1716569764&width=1200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Creatina Birdman</h5>
                      <p class="card-text">Creatina para recuperarte de tu entrenamiento.</p>
                      <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                  </div>
            </div> 
            
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9c9dXGq1Y48qUS0DC9KhkDG6XPtuAmYU_7A&s" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pre entreno cBum</h5>
                      <p class="card-text">Para antes de entrenar y tengas la energia suficiente.</p>
                      <a href="#" class="btn btn-primary">Agregar a carrito</a>
                    </div>
                  </div>
            </div>

            <div class="row justify-content-center"> 

            <div class="col-3"> 

                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRnDyhH5iFQsib4Re1vhgpNsct0Dl5cyRYgw&s" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">BCAAS y glutamina</h5>
                      <p class="card-text">Para ayudar a la recuperación muscular.</p>
                      <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                  </div>
            </div> 

            <div class="col-3"> 
                
                <div class="card" style="width: 18rem;">
                    <img src="https://m.media-amazon.com/images/I/71cxlOABwhL.__AC_SX300_SY300_QL70_ML2_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Proteina Birdman</h5>
                      <p class="card-text">Proteina vegana y ligera de distintios sabores.</p>
                      <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                  </div>
            </div> 
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://m.media-amazon.com/images/I/71BQ0EXvn5L.__AC_SX300_SY300_QL70_ML2_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Proteina fitmingo.</h5>
                      <p class="card-text">Proteina vegetal sabor moka.</p>
                      <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                  </div>
            </div>

    </div>
    </div>
    
    <div class="footer">    
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                  <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
              </div>
          
              <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
              </ul>
            </footer>
          </div>
    </div>