<?php

Class Conexion extends mysqli
{ 
    function __construct ()
    { 
        $servidor="localhost";
        $pass="";
        $user="root";
        $BaseDatos="invlab";


        parent::__construct($servidor,$user,$pass,$baseDatos);
        $this->query("SET NAMES 'utf8';")
        $this->connect_errno ? die ('Error, no se ha podido conectar'): $error=</br>'Cnectado '.$BaseDatos;
        /*echo $error;*/
        unset ($error);
    }
}
?>