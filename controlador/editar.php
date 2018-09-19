<?php

include '../clases/conexion.php';
include '../clases/pais.php';

$objConexion = new conexion();
$objPais = new pais();

$conexion = $objConexion->conectar();
echo $objPais->editar($conexion,$_POST['id'],$_POST['Nombre'],$_POST['Poblacion'],
$_POST['Moneda'],$_POST['Capital']);
echo "<a href='../consultar.php'>Volver</a>";