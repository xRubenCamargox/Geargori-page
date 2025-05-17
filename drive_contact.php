<?php
    require_once "modulo.php";
    require_once "database.php";

    $nombres=$_POST['name'];
    $email=$_POST['email'];
    $mensaje=$_POST['message'];


    $link=enlace();
    $cont=new Contacto($nombres,$email,$mensaje);
    $cont->set_contacto($link);
    
?>