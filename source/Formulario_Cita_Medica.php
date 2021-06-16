<?php

include('conexion.php');

if (isset($_POST['ENVIAR'])) 
{
 
  $NOMBRE = $_POST['Nombre'];
  $APELLIDO= $_POST['Apellido'];
  $Cedula= $_POST['Cedula'];
  $CORREO = $_POST['Correo'];
  $Sexo = $_POST['Sexo'];
  $Edad = $_POST['Edad'];
  $Telefono = $_POST['Telefono'];
  $Direccion = $_POST['Direccion'];
  $query = "INSERT INTO Citas_Medicas( Nombre, Apellido, Cedula,email, Sexo, Edad, Telefono, Dirección) 
VALUES ('$NOMBRE','$APELLIDO','$Cedula','$CORREO','$Sexo','$Edad','$Telefono','$Direccion')";
  $result = mysqli_query($con, $query);

  if(!$result) {
    die("Query Failed.". mysqli_error($con));
  }
  $_SESSION['message'] = 'Tu Cita Medica Se a Guardado con exito!!!';
  $_SESSION['message_type'] = 'success';
  header('Location:index.html');

}

?>