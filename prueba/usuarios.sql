-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 29-08-2021 a las 20:25:00
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Telefono` int NOT NULL,
  `Fecha de registro` date NOT NULL,
  `Fecha de actualizacion` timestamp NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10007 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombres`, `Apellidos`, `Telefono`, `FechaRegistro`, `FechaActualizar`) VALUES
(10001, 'Georgi', 'Facello', 12345678, '1996-06-26', '2015-03-25 05:00:00'),
(10002, 'Chirstian', 'Koblick', 456123789, '1986-12-01', '2020-12-09 05:00:00'),
(10003, 'Mary', 'Sluis', 147258369, '1992-01-15', '2021-01-15 05:00:00'),
(10004, 'Patricio', 'Bridgland', 23257896, '1995-01-15', '2019-10-22 05:00:00'),
(10005, 'Cristinel', 'Bouloucos', 159875336, '1998-01-15', '2008-10-30 05:00:00'),
(10006, 'Guoxiang', 'Peha', 489345678, '1997-08-21', '2011-05-12 05:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;