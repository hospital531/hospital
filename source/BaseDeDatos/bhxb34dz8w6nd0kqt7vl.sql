-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bhxb34dz8w6nd0kqt7vl-mysql.services.clever-cloud.com:3306
-- Generation Time: Jun 15, 2021 at 10:48 PM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhxb34dz8w6nd0kqt7vl`
--

-- --------------------------------------------------------

--
-- Table structure for table `Citas_Medicas`
--

CREATE TABLE `Citas_Medicas` (
  `ID` int NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Cedula` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Sexo` varchar(50) NOT NULL,
  `Edad` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Dirección` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Citas_Medicas`
--

INSERT INTO `Citas_Medicas` (`ID`, `Nombre`, `Apellido`, `Cedula`, `email`, `Sexo`, `Edad`, `Telefono`, `Dirección`) VALUES
(8, 'hessander', 'Sanchez', '40233107792', 'jessander28@gmail.com', 'Masculino', '18', '8093640136', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(9, 'hiawatha', 'de Leon', '123321', 'asdsadas@gmail.com', 'Masculino', '34', '8093640136', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(10, 'Emerson', 'Linares', '123321', 'frito25@gmail.com', 'Masculino', '17', '8093640136', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(11, 'Julio', 'Osorio', '123321', 'julio@gmail.com', 'Masculino', '17', '8093640136', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(12, 'Julio', 'Osorio', '123321', 'julio@gmail.com', 'Masculino', '17', '8093640136', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(13, 'Julio', 'Osorio', '123321', 'julio@gmail.com', 'Masculino', '17', '8093640136', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(14, 'Julio', 'Osorio', '123321', 'julio@gmail.com', 'Masculino', '17', '8093640136', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(19, 'hiawatha', 'Rincon', '123321', 'julio@gmail.com', 'Masculino', '41', '8093640136', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(22, 'Dionicio', 'de Leon', '321123', 'deleon@gmail.com', 'Masculino', '85', '123321', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(23, 'Dionicio', 'de Leon', '321123', 'deleon@gmail.com', 'Masculino', '85', '123321', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(24, 'Dionicio', 'de Leon', '321123', 'deleon@gmail.com', 'Masculino', '85', '123321', '200 W Hiawatha Dr, Wisconsin Dells, WI, 53965'),
(26, 'Virginia ', 'Rymer', '242526', 'rymer15@gmail.com', 'femenino', '31', '123321', 'hsdkaslkdjlwkhejkwamsdklqwjroisaj'),
(28, 'jorge', 'La Coca', '343536', 'coca24@gmail.com', 'Masculino', '17', '123321', 'hsdkaslkdjlwkhejkwamsdklqwjroisaj'),
(29, 'jorge', 'La Coca', '343536', 'coca24@gmail.com', 'Masculino', '17', '123321', 'hsdkaslkdjlwkhejkwamsdklqwjroisaj');

-- --------------------------------------------------------

--
-- Table structure for table `Contacto`
--

CREATE TABLE `Contacto` (
  `id` int NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Mensaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Contacto`
--

INSERT INTO `Contacto` (`id`, `Nombre`, `Apellido`, `email`, `Mensaje`) VALUES
(3, 'hessander', 'sanchez', 'jessander28@gmail.com', 'hola que tal '),
(4, 'hessander', 'sanchez', 'jessander28@gmail.com', 'hola mundo'),
(5, 'julio', 'osorio', 'julio@gmail.com', 'ninguno por el momento'),
(6, 'emerson', 'linares', 'frito24@gmail.com', 'hola que tal'),
(7, 'emerson', 'linares', 'frito24@gmail.com', 'hola que tal'),
(8, 'emerson', 'linares', 'frito24@gmail.com', 'hola que tal'),
(9, 'hiawatha', 'osorio', 'live@hiawatha.ws', 'hola que tal\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Citas_Medicas`
--
ALTER TABLE `Citas_Medicas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Contacto`
--
ALTER TABLE `Contacto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Citas_Medicas`
--
ALTER TABLE `Citas_Medicas`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Contacto`
--
ALTER TABLE `Contacto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
