<?php
//Aqui se llama la conexion 
include('conexion.php');

if (isset($_POST['Entrar'])) {
$user=$_POST['Usuario'];
$password=$_POST['Password'];
//conectar a la base de datos

$consulta="SELECT * FROM Citas_Medicas WHERE email='$user' and Cedula='$password'";
$resultado=mysqli_query($con, $consulta);
$filas=mysqli_num_rows($resultado);

if (mysqli_num_rows($resultado) === 1)
{
    header("Location:tabla.php");
}
else 
{
    die("ERROR");
}
mysqli_free_result($resultado);
    # code...
}
mysqli_close($con);

