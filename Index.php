<?php
require_once('Autload.php');

if (isset$['controller'])&&isset($_GET['method'])
{
    $controller=$_GET['controller'];
    $method=$_GET['method']
}
else
{
    $controller="Home";
    $method="Inicio";
}

if (class_exists($controller)&&method_exists($controller,$method))
{
    $class=new $controller;
    $class->$method();
}
else
{
    echo "clase no existe o el metodo incorrecto";
}

?>

