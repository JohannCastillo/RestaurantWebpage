<?php 
    if(isset($_POST['emailS'])){
        $cn = new mysqli("localhost","root","","cevicheria");
        $res = $cn->query("select * from usuario where email='".$_POST['emailS']."'");
        $contr = false;
        $email = false;
        while($row = mysqli_fetch_row($res)){
            $email = true;
            if($row[4] == $_POST['contraseñaS']){
                $contr = true;
                $_SESSION['ID'] = $row[0];
                $_SESSION['Nombre'] = $row[1];
                $_SESSION ['Apellidos'] = $row[2];
                $_SESSION ['Email'] = $row[3];
                $cn->close();  
                header("Location:http://localhost/Proyecto/index.php");   
            }
        }
        if ($email == false) {
          echo '<script> alert("Email no registrado")</script>'; 
      }
      if ($contr == false && $email == true){
          echo '<script> alert("contraseña incorrecta")</script>';
      } 
    }
?>

<header class="row cabecera">
      <div class="col-9">
        <a href= "index.php"><img src="img/logo.jpg" class="img-fluid logo" alt="Logo"></a>
      </div>

      <div class="col-3 d-flex justify-content-end redes">
        <a href="https://api.whatsapp.com/send?phone=51976250977">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp"
            viewBox="0 0 16 16">
            <path
              d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
          </svg>
        </a>
        <a href="https://www.facebook.com/CEVICHE26/?ref=page_internal">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook"
            viewBox="0 0 16 16">
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
        </a>
        <a href="https://www.instagram.com/ceviche.26/?hl=es">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram"
            viewBox="0 0 16 16">
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg>
        </a>
        
        <a data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        </a>

        <div class="offcanvas offcanvas-end"  data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <p id="offcanvasRightLabel" class="fs-1 subtitulo">Mi Cuenta<?php  
                if(isset($_SESSION['ID'])) 
                    echo '
                    <form action="salir.php" class="mb-3">
                    <button class="btn btn btn-outline-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                      </svg>
                    </button>
                    </form>
                    '; 
                    ?>
                </p>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <hr>
                <div>
                    <?php
                        if (!isset($_SESSION['ID'])){
                            echo '<p class="text-muted">No ha iniciado sesión aún</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSesion">Iniciar Sesión</button>
                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalRegistro">Registrarse</button>';
                        }else{
                            echo '<p class="text-muted">Bienvenido '.$_SESSION['Nombre'].' '.$_SESSION['Apellidos'].'</p>
                            <form action="reservas.php" class="mb-3" method ="post">
                                <button class="btn btn-outline-success">Reservar</button>
                            </form>
                            <hr>';
                            $cn = new mysqli("localhost","root","","cevicheria");
                            $res = $cn->query("select * from reservas where idusuario='".$_SESSION['ID']."'");
                            $contador = 0;
                            while($row = mysqli_fetch_row($res)){
                             $contador ++;
                             $detalles = $row[4];
                             if ($detalles == "") $detalles = "No especificado";
                             echo '
                              <div class="list-group">
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                  <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">'.$contador.'. Fecha y hora:</h5>
                                    <small>'.$row[1].' | '.$row[2].'</small>
                                  </div>
                                  <p class="mb-1"><strong>Detalles:</strong> '.$detalles.'</p>
                                  <small>Para '.$row[3].' personas</small>
                                </div>
                              </div>                     
                             ';
                            }
                            if ($contador == 0) echo '<h5 class="text-muted">Aquí se mostrarán sus reservas</h5>';
                              $cn -> close ();
                        }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
    </header>

    <div class="modal fade" id="modalSesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title mx-auto" id="exampleModalLabel">INICIAR SESIÓN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
             <div class="modal-body">
        <form action ="" method="post">
        <div class="mb-3">
            <label for="inputEmail" class="col-form-label">Email</label>
            <input type="email" name="emailS" class="form-control" id="inputEmail" required>
          </div>
          <div class="mb-3">
            <label for="inputContraseña" class="col-form-label">Contraseña</label>
            <input type="password" name = "contraseñaS" class="form-control" id="inputContraseña" required>
          </div>
          <button type="submit" class="btn btn-outline-success">Iniciar Sesión</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">REGISTRO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action = "registro.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombres</label>
            <input type="text" name="nombresR" class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Apellidos</label>
            <input type="text" name ="apellidosR" class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="email" name="emailR" class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Contraseña:</label>
            <input type="password" name="contraseñaR" class="form-control" id="recipient-name" required>
          </div>
          <button type = "submit" class="btn btn-outline-success">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <nav class="nav navbar row navbar-expand-md navbar-dark fondonav sticky-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="carta.php">Carta</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ubicacion.php">Ubicación</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="reservas.php">Reservas</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success btnBuscar" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
