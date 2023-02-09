<?php 
    session_start();
    include "mcript.php";
    $cn = new mysqli("localhost","root","","cevicheria");
    $cn->query("insert into usuario (nombres, apellidos, email, contraseña) values('".$_POST['nombresR']."','".$_POST['apellidosR']."','".$_POST['emailR']."','".$_POST['contraseñaR']."')");

    if($result = mysqli_query($cn, "select * from usuario")){
        $_SESSION['ID'] = mysqli_num_rows($result);
    }

    $res = $cn->query("select * from usuario where idusuario='".$_SESSION['ID']."'");
    while($row = mysqli_fetch_row($res)){
        $_SESSION['Nombre'] = $row[1];
        $_SESSION ['Apellidos'] = $row[2];
        $_SESSION ['Email'] = $row[3];
    }
   
    $cn->close();          
 
    header("Location:http://localhost/Proyecto/index.php");
?>