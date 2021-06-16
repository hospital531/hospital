<?php

include('conexion.php');

if (isset($_POST['Enviar'])) {
 
  $NOMBRE_C = $_POST['Nombre_C'];
  $APELLIDO_C= $_POST['Apellido_C'];
  $CORREO_C = $_POST['Email_C'];
  $Mensaje_C = $_POST['Mensaje_C'];
  $query = "INSERT INTO Contacto( Nombre, Apellido, email, Mensaje) 
VALUES ('$NOMBRE_C','$APELLIDO_C','$CORREO_C', '$Mensaje_C')";
  
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.". mysqli_error($con));
  }

  $_SESSION['message'] = 'Tu Mensaje se a enviado Con Exito!!1';
  $_SESSION['message_type'] = 'success';
  header('Location:Index.html');

}
/*T-ShirtAdmin123 contrase;a de mi pagina */
?>