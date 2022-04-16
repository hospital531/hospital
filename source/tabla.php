<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("CSS/mycss.css");
</style>
<link href="CSS/bootstrap.css" rel="stylesheet" type="text/css">

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Telefone</th>
            <th>Direccion</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia = "SELECT * FROM Citas_Medicas";
      $resultado = mysqli_query($con,$sentencia);
      while($filas = mysqli_fetch_array($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['ID']; echo "</td>";
          echo "<td>"; echo $filas['Nombre']; echo "</td>";
          echo "<td>"; echo $filas['Apellido']; echo "</td>";
          echo "<td>"; echo $filas['Cedula']; echo "</td>";
          echo "<td>"; echo $filas['email']; echo "</td>";
          echo "<td>"; echo $filas['Sexo']; echo "</td>";
          echo "<td>"; echo $filas['Edad']; echo "</td>";
          echo "<td>"; echo $filas['Telefono']; echo "</td>";
          echo "<td>"; echo $filas['Dirección']; echo "</td>";
          echo "<td>  <a href='modif_prod1.php?no=".$filas['ID']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_prod.php?no=".$filas['ID']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>