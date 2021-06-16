<!DOCTYPE html>
<html lang="en">
<?php
include 'conexion.php';
$result = mysqli_query($con, "SELECT * FROM Citas_Medicas");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Estilo_Menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <title>Citas_Medicas</title>
</head>


<style>
    body 
    {
        background-image: url(Img/Loging/fondo.jpg);
        background-repeat: no-repeat;
        background-size: 100% 1080px;
        
    }
    table.dataTable thead {
        background: linear-gradient(to right, #ffbf00, #ffc61a);
        color: black;
    }
</style>

<body>
    <!-- Aqui comiensa el menu -->
    <section class="fondo">
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="index.html">Hospital Hosting</a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="index.html#Sobre_Nosotros">Sobre Nostros</a></li>
                    <li><a href="index.html#Realizar_Cita_Medica">Realizar Cita</a></li>
                    <li><a href="index.html#Realizar_Cita_Medica">Ver Mi Cita</a></li>
                    <li><a href="index.html#Contacto">Contactanos</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
        <div class="banner"></div>
        <div class="about">
        </div>
    </section>
    <script src="JS/Responsive.js"></script>

    <!-- Aqui termina-->
    <div class="container1" id='container1'>
        <h1 class="text-center">Citas Medicas</h1>
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaEmpleados" class="table table-striped  border    table-bordered dataTable"
                    style="width:100%">
                    <br><br>

                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>Email</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Telefone</th>
                            <th>Direccion</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['Apellido']; ?></td>
                            <td><?php echo $row['Cedula']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['Sexo']; ?></td>
                            <td><?php echo $row['Edad']; ?></td>
                            <td><?php echo $row['Telefono']; ?></td>
                            <td><?php echo $row['Dirección']; ?></td>
                            <td>

                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/5b5afdece7.js" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#tablaEmpleados').DataTable();
            $('#tablaPedidos').DataTable();
            $('#tablaUsuarios').DataTable();
        });
    </script>

</body>

</html>