<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Hosting</title>
    <link rel="shortcut icon" href="source/img/alexcgdesign.png" type="image/x-icon">
    <!--Aqui se llaman las hojas de estilos-->
    <link rel="stylesheet" href="source/CSS/estilos_Index.css">
    <link rel="stylesheet" href="source/CSS/Estilo_Menu.css">
    <link rel="stylesheet" href="source/CSS/Estilo_Formulario_Contacto.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Aqui comiensa el menu -->
    <section class="fondo">
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="source/index.html">Hospital Hosting</a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="source/index.html">Inicio</a></li>
                    <li><a href="#Sobre_Nosotros">Sobre Nostros</a></li>
                    <li><a href="#Realizar_Cita_Medica">Realizar Cita</a></li>
                    <li><a href="#Realizar_Cita_Medica">Ver Mi Cita</a></li>
                    <li><a href="#Contacto">Contactanos</a></li>
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
    <script src="source/JS/Responsive.js"></script>

    <!-- Aqui termina-->

    <header>

        <section class="textos-header">
            <h1>Hospital Hosting</h1>
            <h2>Tu Salud Es Nuestra Prioridad</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" PreserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo" id="Sobre_Nosotros">Sobre Nosotros</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="source/Img/Index/Sobre_Nosotros/Sobre nosotros2.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>¿Quienes Somos?</h3>
                    <p>Somos Hospital Hosting una empresa que brinda sus servicios web para realizar Citas medicas desde sus casas asociados a varios hospitales públicos y privados a nivel nacional e internacional.</p>

                    <h3><span>2</span>Mision</h3>
                    <p>Brindar nuestros servicios para la realización de una cita desde su hogar a cualquier hospital a nivel nacional e internacional</p>

                    <h3><span>3</span>Vision</h3>
                    <p>Llegar a brindar nuestros servicios a cada uno de los hospitales a nivel nacional tanto privados como públicos</p>

                    <h3><span>4</span>Valores</h3>
                    <p>
                        <li>Ética</li>
                        <li>Calidad</li>
                        <li>Credibilidad / Confiabilidad</li>
                        <li> Diversidad</li>
                        <li> Competitividad</li>
                        <li> Equidad</li>
                    </p>
                </div>
            </div>
        </section>

        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo" id="Realizar_Cita_Medica">Hospitales</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="source/Img/Index/LogoHospitalHHM.png" alt="">
                        <div class="hover-galeria">
                            <img src="#" alt="">
                            <a href="source/Intermedio.html">
                                <p>Realizar Cita Medica</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="source/Img/Index/descarga.png" alt="">
                        <div class="hover-galeria">
                            <img src="#" alt="">
                            <a href="source/Intermedio.html">
                                <p>Realizar Cita Medica</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="source/Img/Index/descarga.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="#" alt="">
                            <a href="source/Intermedio.html">
                                <p>Realizar Cita Medica</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="source/Img/Index/unnamed (1).png" alt="">
                        <div class="hover-galeria">
                            <img src="#" alt="">
                            <a href="source/Intermedio.html">
                                <p>Realizar Cita Medica</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="source/Img/Index/unnamed.png" alt="">
                        <div class="hover-galeria">
                            <img src="#" alt="">
                            <a href="source/Intermedio.html">
                                <p>Realizar Cita Medica</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Aqui Comienza el formulario -->
        <section class="secion">
            <div class="container">
                <div class="text">
                    Contactanos
                </div>
                <form action="Contacto.php" method="post">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name="Nombre_C" required>
                            <div class="underline"></div>
                            <label for="#">Nombre</label>
                        </div>
                        <div class="input-data">
                            <input type="text" name="Apellido_C" required>
                            <div class="underline"></div>
                            <label for="#">Apellido</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="email" name="Email_C" required>
                            <div class="underline"></div>
                            <label for="#">Correo Electronico</label>
                        </div>
                        <div class="input-data">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <textarea rows="8" cols="80" name="Mensaje_C" required></textarea>
                            <br />
                            <div class="underline"></div>
                            <label for="#">Mensaje</label>
                            <br />
                            <div class="form-row submit-btn">
                                <div class="input-data">
                                    <div class="inner"></div>
                                    <input type="submit" name="Enviar" value="Enviar">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--Aqui termina el firmulario de contacto -->
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>telefono</h4>
                <p></p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p></p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p></p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; copyright | Hospital Hosting</h2>
    </footer>
    <!-- Código de instalación Cliengo para  Hospital Hosting -->
<script type="text/javascript">(function () {
var ldk = document.createElement('script');
ldk.type = 'text/javascript';
ldk.async = true;
ldk.src = https://s.cliengo.com/weboptimizer/60d616e36e9794002ae3771b/60d616e46e9794002ae3771e.js?platform=view_installation_code;
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ldk, s);
})();</script>
</body>

</html>
