<?php

include 'clases/conexion.php';
include 'clases/pais.php';

$objConexion = new conexion();
$objPais = new pais();

$conexion = $objConexion->conectar();
$datospais = $objPais->consultarid($conexion,$_GET['id']);

$Nombre;
$Poblacion;
$Moneda;
$Capital;

while($pais = mysqli_fetch_array($datospais)){
   $Id = $pais['Id'];
   $Nombre = $pais['Nombre'];
   $Poblacion = $pais['Poblacion'];
   $Moneda = $pais['Moneda'];
   $Capital = $pais['Capital'];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 ><center>Registro<br>Pais</b></center></h2>
     <br><br>
     <form action="controlador/editar.php" method="POST"><h2 ><center>Crud Pais</center></h2>
        <h3><input type="hidden" name="id" value ="<?php echo $Id;?>"</h3>
        <h3><label for =""></label><input type="text" name="Nombre" Id="" value="<?php echo $Nombre ?>"</h3>
        <h3><label for =""></label><input type="text" name="Poblacion" Id="" value="<?php echo $Poblacion ?>"</h3>
        <h3><label for =""></label><input type="text" name="Moneda" Id="" value="<?php echo $Moneda ?>"</h3>
        <h3><label for =""></label><input type="text" name="Capital" Id="" value="<?php echo $Capital ?>"</h3>
        
        
        <center><input type="submit" value="Registrar"></center></form>
        <center><button><a href="consultar.php">Volver</a></button></center>
</body>
</html>