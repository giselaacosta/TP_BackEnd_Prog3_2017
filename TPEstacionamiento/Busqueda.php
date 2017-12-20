<?php
require './clases/AccesoDatos.php';
require './clases/vehiculo.php';
require './clases/Cochera.php';


$busqueda=$_POST['buscar'];




if(isset($busqueda) )


{
    $pdo = AccesoDatos::connect();
    $estacionados = vehiculo::TraerTodoLosEstacionadosPorBusqueda($busqueda);

   // return $estacionados;
    echo json_encode($estacionados,JSON_FORCE_OBJECT);
 
    
}
else
{

    echo 'No hay resultados';
}


?>