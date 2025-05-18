<?php
    require_once "connection.php";

    function enlace(){
        $link=new Conexion("bd9jn9xxhlu4pswg8bk9-mysql.services.clever-cloud.com","uwyh2sicpishub5z","FXUcV3yNwgl38OEIz7PA","bd9jn9xxhlu4pswg8bk9");
        return $link->conectar();       
    }

?>