<?php
    require_once "connection.php";

    function enlace(){
        $link=new Conexion("localhost","root","","prueba");
        return $link->conectar();       
    }

?>