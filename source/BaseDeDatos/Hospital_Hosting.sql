SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create database Hospital_Hosting;
use Hospital_Hosting;
CREATE TABLE `Citas_Medicas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Sexo` varchar(255) NOT NULL,
  `Edad` varchar(3) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL
) ;

ALTER TABLE `Citas_Medicas`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `Citas_Medicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
select *from usertable;


