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

<body onload ="reserva()">
  <div class="container-fluid">
  
    <?php require 'header_nav.php' ?>

    <div class="row reservar">
      <section class="col-12">

        <div class="row divUbicacion">
          <div class="col-lg-9">
            <div class="row">
              <article class="col-12 col-md-6 divReserva">
                <div>
                  <h3 class="subtitulo mb-4">Reserva</h3>
                  <figure> 
                    <figcaption class="blockquote-footer">
                      Tener en cuenta que la tolerancia es de 10 minutos y dispones de la mesa durante un máximo de 120 minutos desde la hora reservada, independientemente de la hora de llegada. No está permitido el ingreso de alimentos ni mascotas. Agradecemos la comprensión.
                    </figcaption>
                  </figure>
                </div>
                <form action = <?php
                if (isset($_SESSION['ID'])) echo 'hacer_reserva.php';
                else echo 'reservas.php?nlog';
              ?> method = "post">
                  <div class="row">
                    <div class="form-floating mb-3 col-12">
                      <input type="text" class="form-control" id="floatingInput" placeholder="" disabled ="" value = <?php 
                        if (isset($_SESSION['ID'])){
                          echo '"'.$_SESSION['Nombre'].'"';
                        }
                      ?>>
                      <label for="floatingInput">Nombres</label>
                    </div>
                    <div class="form-floating mb-3 col-12">
                      <input type="text" class="form-control" id="floatingInput2" placeholder="" disabled = "" value= <?php 
                        if (isset($_SESSION['ID'])){
                          echo '"'.$_SESSION['Apellidos'].'"';
                        }
                      ?>>
                      <label for="floatingInput2">Apellidos</label>
                    </div>
                    <div class="form-floating mb-3 col-6">
                      <input type="date" class="form-control" id="floatingInput3" name ="txtFecha" required>
                      <label for="floatingInput3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                          <path
                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                        </svg> Fecha</label>
                    </div>
                    <div class="form-floating mb-3 col-6">
                      <input type="time" class="form-control" id="floatingInput4" name = "txtHora" required>
                      <label for="floatingInput4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                          <path
                            d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                          <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                          <path
                            d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                        </svg> Hora</label>
                    </div>
                    <div class="form-floating mb-3 col-12">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name = "txtPersonas" required>
                        <option value = "" selected>Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                      </select>
                      <label for="floatingSelect"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                          <path fill-rule="evenodd"
                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg> Personas</label>
                    </div>

                    <div class="form-floating mb-3 col-12">
                      <input type="email" class="form-control" id="floatingInputGrid" placeholder="" disabled = "" value = <?php 
                        if (isset($_SESSION['ID'])){
                          echo '"'.$_SESSION['Email'].'"';
                        }
                      ?>>
                      <label for="floatingInputGrid"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                        <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
                      </svg> Email</label>
                    </div>
                    <div class="form-floating mb-3 col-12">
                      <textarea class="form-control txtAreaReserv" placeholder="Leave a comment here" id="floatingTextarea2" name = "txtDetalles" style="height: 150px;"></textarea>
                      <label for="floatingTextarea2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                      </svg> Detalles (opcional)</label>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-outline-success btnBuscar" type="submit">Reservar ahora</button>
                    </div>
                  </div>
                </form>
              </article>
              <article class="col-12 col-md-6 divReserva">
                <div>
                  <h3 class="subtitulo mb-4">Métodos de pago</h3>
                  <div class="row">
                    <div class="col-6 col-md-12 mb-3">
                      <img src="img/visa.png" alt="Metodo de pago" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-12 mb-3">
                      <img src="img/mastercard.png" alt="Metodo de pago" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-12 mb-3">
                      <img src="img/americanexpress.png" alt="Metodo de pago" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-12 mb-3">
                      <img src="img/yape.png" alt="Metodo de pago" class="img-fluid">
                    </div>
                  </div>
                </div>

              </article>
            </div>
          </div>
          <div class="col-3 d-lg-block d-none imgReserva">
          </div>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function reserva(){
          <?php 
            if (isset($_GET['succs'])){       
              echo '
                Swal.fire(
                  "Reserva existosa!",
                  "Su reserva se ha relizado con éxito, puede revisarla añadida a su cuenta",
                  "success"
                );

                return true;
              ';
            }else{
              if (isset($_GET['nlog'])){
              echo '
              Swal.fire(
                "¿No tiene una cuenta aún?",
                "Regístrese o inicie sesión para hacer una reserva",
                "question"
              );
              return false;
              ';
            }
            } 
          ?>
        }
    </script>
</body>

</html>