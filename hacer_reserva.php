<?php 
    session_start();
    $cn = new mysqli("localhost","root","","cevicheria");
    $cn->query("insert into reservas (fecha, hora, personas, detalles, idusuario) values('".$_POST['txtFecha']."','".$_POST['txtHora']."','".$_POST['txtPersonas']."','".$_POST['txtDetalles']."','".$_SESSION['ID']."')");
    $cn->close();
    header("Location:http://localhost/Proyecto/reservas.php?succs");
?>