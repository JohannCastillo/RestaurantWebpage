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
          <article class="col-12 cajaprincipal">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade carouselindex"
              data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/principal.jpg" class="imgprincipal" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/principal2.jpg" class="imgprincipal" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/principal3.jpg" class="imgprincipal" alt="...">
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="row">
          <article class="col-12 d-flex align-items-center cajapresentacion">
            <div class="presentacion">
              <h2 class="titulo">Bienvenidos a Ceviche26</h2>
              <p class="fs-6">
                Buscamos que desde el momento que nuestros visitantes ingresan a nuestro local CEVICHE 26 trujillo, se vean envueltos en una atmósfera mágica de aromas, y sabores que hagan de su visita una experiencia agradable e inolvidable.
              </p>
              <p class="fs-6">Día a día buscamos mejorar gracias a las sugerencias de cada una de las personas que nos han visitado hasta la fecha y lo seguiremos haciendo, nuestro objetivo es brindarte la mejor experiencia gastronómica de Trujillo</p>
            </div>
            <img src="img/local.jpg" class="img-fluid rounded imgc2" alt="Interior">
          </article>
        </div>

        <div class="variedades">
          <h2 class="titulo">Variedades</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title subtitulo">Entradas</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id delectus rem,
                    dolorum magnam a enim!</p>
                </div>
                <img src="img/entradas.jpg" class="img-fluid rounded-circle imgvariedades" alt="Plato de entrada">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title subtitulo">Segundos</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id delectus rem,
                    dolorum magnam a enim!</p>
                </div>
                <img src="img/segundos.jpg" class="img-fluid rounded-circle imgvariedades" alt="Segundo plato">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title subtitulo">Bebidas</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id delectus rem,
                    dolorum magnam a enim!</p>
                </div>
                <img src="img/bebidas.jpg" class="img-fluid rounded-circle imgvariedades" alt="Bebida">
              </div>
            </div>
          </div>
        </div>


        <div class="row calidad">
          <h2 class="titulo">Calidad en nuestro servicio</h2>
          <table>
            <tr>
              <td class="columna">
                <h3 class="subtitulo">Videos</h3>
              </td>
              <td class="columna">
                <h3 class="subtitulo">
                  Lo que ofrecemos
                </h3>
              </td>
            </tr>
            <tr>
              <td class="col-7 columna">
                <article class="row cajacalidad1">
                  <div class="col-12 col-md-6">
                    <div class="embed-responsive embed-responsive ratio ratio-16x9 mx-auto">
                      <iframe class="embed-responsive-item" src="webm/presentacion.mp4"></iframe>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eveniet
                    cumque possimus doloremque eaque nihil tempore expedita laboriosam a, sit recusandae quod ratione
                    enim aut!</div>
                </article>
                <article class="row cajacalidad1">
                  <div class="col-12 col-md-6">
                    <div class="embed-responsive embed-responsive ratio ratio-4x3 mx-auto">
                      <iframe class="embed-responsive-item" src="webm/parrilla.mp4"></iframe>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eveniet
                    cumque possimus doloremque eaque nihil tempore expedita laboriosam a, sit recusandae quod ratione
                    enim aut!</div>
                </article>
              </td>
              <td class="col-5 columna">
                <article class="row cajacalidad2">
                  <div class="col-12 col-md-5">
                    <h4>Ambiente agradable</h4>
                    <img src="img/ambiente.png" class="img-fluid img-thumbnail imgcalidad" alt="Ambiente">
                  </div>
                  <div class="col-12 col-md-5">
                    <h4>Personal calificado</h4>
                    <img src="img/personal.jpg" class="img-fluid img-thumbnail imgcalidad" alt="Personal">
                  </div>
                  <div class="col-12 col-md-5">
                    <h4>Carta actualizada</h4>
                    <img src="img/carta.png" class="img-fluid img-thumbnail imgcalidad" alt="Carta">
                  </div>
                  <div class="col-12 col-md-5">
                    <h4>El mejor ceviche</h4>
                    <img src="img/ceviche.png" class="img-fluid img-thumbnail imgcalidad" alt="Ceviche">
                  </div>
                  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                </article>
              </td>
            </tr>
          </table>
        </div>
      </section>
      <aside></aside>
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