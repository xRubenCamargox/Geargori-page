<?php 

class Conexion
{
    public $host;
    public $user;
    public $password;
    public $database;

    public function __construct($host,$user,$password,$database)
    {
        $this->host=$host;
        $this->user=$user;
        $this->password=$password;
        $this->database=$database;
    }

    public function conectar()
    {
        $link=mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if(!$link)
        {
            die("Error en la conexion: " . mysqli_connect_error());
        }
        else
        {
           // echo "Coneccion successfully";
        }
        return $link;     
    }

}

?>