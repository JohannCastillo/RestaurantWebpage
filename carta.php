<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ceviche26</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <div class="container-fluid">
    <?php require 'header_nav.php' ?>

    <div class="row">
      <section class="col-12 col-md-12">
        <div class="row">
          <article class="col-12 cajaprincipal2">
            <h2 class="titulo">LA CARTA</h2>
            <div class="txtCarta">
              <p>
              Nuestra carta está compuesta de variados platos preparados con ingredientes
              estrella, los cuales al combinarse aportan la esencia y el reconocimiento de cada uno de ellos.
              Nos esmeramos en ofrecerles una propuesta innovadora pensado en la total satisfacción de los paladares peruanos, caracterizados por un gran historial de sabores que conquista el mundo.
              </p>
            </div>
            
            <div id="carouselExampleDark" class="carousel carousel-dark slide carouselcarta" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="img/carta_1.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="img/carta_2.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/carta_3.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/carta_4.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
           
            <div class="d-grid gap-2 d-md-block btnsCarta">
              <form action="reservas.php" class="mb-3" method = "post">
                <button class="btn btn-outline-success btnBuscar">Reservar</button>
              </form>
              <form action="ubicacion.php" class="mb-3" method = "post">
                <button class="btn btn-outline-success btnBuscar">Ubicación</button>
              </form>
            </div>
          </article>
        </div>
      </section>
      <!-- <aside>recomendado hacer un aside </aside> -->
    </div>

    <footer class="row piedepagina">
      <label>©2021 CEVICHERÍA CEVICHE26</label>
      <label>Todos los derechos reservados</label>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="js/funciones.js"></script>
</body>

</html>