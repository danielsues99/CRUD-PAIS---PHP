<?php

include '../clases/conexion.php';
include '../clases/pais.php';

$objConexion = new conexion();
$objPais = new pais();

$conexion = $objConexion->conectar();
echo $objPais->eliminar($conexion, $_GET['id']);
echo "<center><a href ='../consultar.php'><button>Volver</button></a></center>";