<?php
class Contacto
{
    public $nombre;
    public $email;
    public $mensaje;

    public function __construct($nombre,$email,$mensaje) {
        $this->nombre=$nombre;
        $this->email=$email;
        $this->mensaje=$mensaje;
    }

    public function set_contacto($link)
    {
        $sql="INSERT INTO contactar(nombre,email,mensaje) VALUES (";
        $sql=$sql."'".$this->nombre."',";
        $sql=$sql."'".$this->email."',";
        $sql=$sql."'".$this->mensaje."')";

        if(mysqli_query($link, $sql)) {
            echo "Registro Cliente Guardado";
            header("Location: contact.html");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        
        mysqli_close($link);
    }

}

class Solicitud
{
    public $nombre;
    public $email;

    public function __construct($nombre,$email) {
        $this->nombre=$nombre;
        $this->email=$email;
    }

    public function set_solicitud($link)
    {
        $sql="INSERT INTO solicitud_descarga (nombre,email) VALUES (";
        $sql=$sql."'".$this->nombre."',";
        $sql=$sql."'".$this->email."')";
        

        if(mysqli_query($link, $sql)) {
            echo "Registro Cliente Guardado";
            header("Location: download.html");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        
        mysqli_close($link);
    }

}


?>