<?php

include '../clases/conexion.php';
include '../clases/pais.php';

$objConexion = new conexion();
$objPais = new pais();

$conexion = $objConexion->conectar();
echo $objPais->registrar($conexion,$_POST['Nombre'],$_POST['Poblacion'],$_POST['Moneda'],
$_POST['Capital']);

echo "<center><br><br><a href='../registro.html'> <button>Volver</button></a></center>";