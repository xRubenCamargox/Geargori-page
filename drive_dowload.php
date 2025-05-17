<?php
    require_once "modulo.php";
    require_once "database.php";

    $nombres=$_POST['name'];
    $email=$_POST['email'];

    $link=enlace();
    $sol=new Solicitud($nombres,$email);
    $sol->set_solicitud($link);
    
?>