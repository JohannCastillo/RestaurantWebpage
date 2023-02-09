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
          <article class="cajaprincipal2">
            <h1 class="titulo">NOSOTROS</h1>
          </article>
        </div>
        <article class="row">
            <div class="col-12 col-md-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <img src="img/nosotros1.jpg" alt="Nosotros" class="rounded imgNosotros">
                </div>
                <div class="col-12 col-md-6">
                  <div id="historia">
                    <p class="text-muted artNosotros">
                      La empresa Ceviche26 inició sus operaciones un 20 de diciembre del año 2019. Especialista en pescados y mariscos, y trabajamos con los más altos estándares de calidad en insumos y atención.
                    </p>

                    <p class="text-muted artNosotros">
                      Somos una gran familia dedicada a brindarles la mejor experiencia culinaria con la pasión que
                      nos caracteriza.
                      Cada una de las personas en nuestro equipo está comprometida a transportarte mediante nuestros sabores
                      a una aventura memorable.
                      Tenemos siempre presente los orígenes de nuestros productos, manteniendo el respeto hacia ellos y a lo
                      que nos rodea.
                    </p>

                    <p class="text-muted artNosotros">
                      Día a día buscamos mejorar gracias a las sugerencias de cada una de las personas que nos han visitado hasta la fecha y lo seguiremos haciendo, nuestro objetivo es brindarte la mejor experiencia gastronómica de Trujillo.
                    </p>
                    
                  </div>
                  <div id="valores" hidden>
                    <p>
                      <ul>
                        <li class="text-muted artNosotros">Honestidad: Trabajar con franqueza y respeto hacia las personas y sus funciones.</li>
                        <li class="text-muted artNosotros">
                          Creatividad e Innovación: Incorporar nuevas ideas que permitan desarrollar y mejorar el servicio.
                        </li>
                        <li class="text-muted artNosotros">
                          Calidad de Servicio: Compromiso con la cultura de la empresa. Satisfacer todas las necesidades y expectativas del cliente.
                        </li>
                        <li class="text-muted artNosotros">
                          Esfuerzo y Dedicación: Ser persistente en el logro de los objetivos, trabajando con compromiso, cooperación y disciplina.
                        </li>
                        <li class="text-muted artNosotros">
                          Pasión: El poder interior que todas las personas tienen pero que muy pocas saben aprovechar.
                        </li>
                      </ul>
                  </div>
                  <div id="misionVision" hidden>
                    <p class="text-muted artNosotros">
                      <strong>Misión</strong>: Buscamos la excelencia en la preparación de la comida marina a través de insumos de calidad, en un ambiente agradable desarrollados por un equipo humano competente y comprometidos en proporcionar excelente servicio y satisfacción.
                    </p>
                    <p class="text-muted artNosotros">
                      <strong>Visión</strong>: Ser reconocidos como el mejor restaurante de comida marina a nivel nacional, por los altos estándares de calidad en el servicio, innovación en el mercado y creando experiencias agradables al paladar de nuestros clientes
                    </p>
                  </div>
                  
                </div>
              
                </div>
            </div>
            <div class="col-12 col-md-2 btn-group-vertical d-md-block d-none btnNos" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1"  checked onclick="mostrar()" value="historia">
              <label class="btn btn-outline-success btnNosotros" for="btnradio1">Nuestra Historia</label>
            
              <input type="radio" class="btn-check" name="btnradio" id="btnradio2"  onclick="mostrar()" value="valores">
              <label class="btn btn-outline-success btnNosotros" for="btnradio2">Valores</label>
            
              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" onclick="mostrar()" value="misionVision">
              <label class="btn btn-outline-success btnNosotros" for="btnradio3">Misión y Visión</label>
            </div>

            <div class="col-12 col-md-2 btn-group d-block d-md-none btnNos2" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradioB" id="btnradioB1"  checked onclick="mostrar2()" value="historia">
              <label class="btn btn-outline-success btnNosotros" for="btnradioB1">Nuestra Historia</label>
            
              <input type="radio" class="btn-check" name="btnradioB" id="btnradioB2"  onclick="mostrar2()" value="valores">
              <label class="btn btn-outline-success btnNosotros" for="btnradioB2">Valores</label>
            
              <input type="radio" class="btn-check" name="btnradioB" id="btnradioB3"  onclick="mostrar2()" value="misionVision">
              <label class="btn btn-outline-success btnNosotros" for="btnradioB3">Misión y Visión</label>
            </div>
        </article>
        <article class="row cajaprincipal2"> 
          <h2 class="subtitulo">Reseñas</h2>              
          <div class="list-group list-group-horizontal">
            <div class="list-group-item" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Luis Gamero</h5>
                <small><img src="img/LuisG.png" alt="Usuario" class="imgReseña"></small>
              </div>
              <p class="mb-1">Buenísimo! buen local, buena atención y la comida espectacular!</p>
            </div>
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Alberto Campos Cabanillas</h5>
                <small class="text-muted"><img src="img/AlbertoC.png" alt="Usuario" class="imgReseña"></small>
              </div>
              <p class="mb-1">Muy buena atención y la comida de primera totalmente recomendado.</p>
            </div>
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Patty Sare Lotus Flower</h5>
                <small class="text-muted"><img src="img/PattyL.png" alt="Usuario" class="imgReseña"></small>
              </div>
              <p class="mb-1">Rico, sabroso y muy buena presentación de sus platos iré nuevamente muy pronto👍</p>
              <a href="https://www.facebook.com/CEVICHE26/reviews/?ref=page_internal">Ver más</a>
            </div>
          </div>
        </article>
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