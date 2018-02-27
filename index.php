<!DOCTYPE html>
<!--
App Shell EnLineaPWA
By Jonathan Narvaez
-->
<?php 

//Primero algunas variables de configuracion
//requiere 'conexion.php';

//Definimos los mensajes de error.
$mensajeError404 = '404 Page not found';
$mensajeErrorAccion = $mensajeError404 . ' - La accion no existe';
$mensajeErrorControlador = $mensajeError404 . ' - El controlador no existe';

//La carpeta donde buscaremos los controladores
$carpetaControladores = "Controller/";

//Si no se indica un controlador , este es el controlador que se usara
$controladorPredefinido ="inicio";

//Si no se indica una accion, esta accion es la que se usara
$accionPredefinida = "Esqueleto";



//Se recupera por el metodo GET el controlador


if(! empty( filter_input(INPUT_GET , 'controlador') ))
{
    $controlador = filter_input(INPUT_GET , 'controlador');
}
else
{
    $controlador = $controladorPredefinido;
}

//Se asigna $baseAccion
$baseAccion = $controlador;


//Se recupera por el metodo GET la accion

if(! empty(filter_input(INPUT_GET , 'accion')))
{
    $accion = filter_input(INPUT_GET , 'accion');
}
else
{
    $accion = $accionPredefinida;
}

//Ya tenemos el controlador y la accion

//Formamos el nombre del fichero que contiene nuestro controlador
$controlador =$carpetaControladores . 'control' . $controlador . '.php';

//Incluimos el controlador o detenemos todo si no existe
if (is_file($controlador))
{
    require_once $controlador;
}
else
{
    die ($mensajeErrorControlador . ' ' . $controlador );
}

//Llamamos la accion o detenemos todo si no existe
$accion = $baseAccion.$accion;

if(is_callable($accion))
{
    $accion();
}
else
{
    die ($mensajeErrorAccion . ' ' . $accion);
}

?>
    
