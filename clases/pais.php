<?php

class pais{
  public function registrar($conexion,$Nombre,$Poblacion,$Moneda,$Capital){
      $query = "INSERT INTO pais(Nombre,Poblacion,Moneda,Capital)
       VALUES ('$Nombre','$Poblacion','$Moneda','$Capital') ";
       $consulta = mysqli_query($conexion,$query);
       if ($consulta){
           $respuesta = "Pais Registrado";
       }
       else {
           $respuesta = "Problemas al Registrar";
       }
       return $respuesta;
  }
  public function consultar($conexion){
      $query ="SELECT * FROM pais";
      $consulta = mysqli_query($conexion, $query);
      return $consulta;
  }
  public function consultarid($conexion, $Id){
      $query = "SELECT * FROM pais where Id = $Id";
      $consulta = mysqli_query($conexion,$query);
      return $consulta;
  }
  public function editar($conexion,$Id,$Nombre,$Poblacion,$Moneda,$Capital){
      $query = "UPDATE pais set Nombre = '$Nombre' ,Poblacion ='$Poblacion',Moneda ='$Moneda',
      Capital = '$Capital' where Id = $Id";
      $consulta = mysqli_query($conexion,$query);
      if ($consulta){
          $respuesta = "Pais Actualizado correctamente";
      }
      else{
          $respuesta = "Problemas al Registrar";
      }
      return $respuesta;
  }
  public function eliminar($conexion,$Id){
      $query = "DELETE FROM pais WHERE Id= $Id";
      $consulta = mysqli_query($conexion,$query);
      if($consulta){
          $respuesta = "Pais eliminado";
      }
      else{
          $respuesta ="Problemas al eliminar";
      }
      return $respuesta;
  }
}