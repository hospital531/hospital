<?php  
session_start();
include "conexion.php";

if (isset($_POST['Usuario']) && isset($_POST['Password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['Usuario']);
	$password = ($_POST['Password']);
	$role = test_input($_POST['role']);
// no me voy a meter con esto XD
	if (empty($username)) {
		header("Location: ../index.php?error=Nombre de usuario invalido");
	}else if (empty($password)) {
		header("Location: ../index.php?error=Contraseña invalida");
	}else {

		// Hashing the password
		$password = ($password);
        
        $sql = "SELECT * FROM Citas_Medicas WHERE email='$username' AND Cedula='$password'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($resultados) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($resultados);
        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['role'] = $row['role'];


        		header("Location:intermedio.html");

        	}else {
        		header("Location: ../index.php?error=Nombre de usuario, contraseña o rol equivocado");
        	}
        }else {
        	header("Location: ../index.php?error=Nombre de usuario, contraseña o rol equivocado");
        }

	}
	
}else {
	header("Location: ../index.php");
}