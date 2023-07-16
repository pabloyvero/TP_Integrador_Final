-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-07-2023 a las 21:25:10
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresacac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `edad` tinyint(2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `provincia` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `provincia`) VALUES
(1, 'Pablo', 'Leal', 48, '2023-07-02 17:46:14', 'CABA'),
(2, 'Gaston', 'Rossi', 45, '2023-07-02 17:46:28', 'CABA'),
(3, 'Gaston', 'Di Iorio', 45, '2023-07-02 17:48:07', 'CABA'),
(4, 'Martin', 'Errante', 45, '2023-07-02 17:48:56', 'CABA'),
(5, 'Veronica', 'Jacinto', 46, '2023-07-02 17:48:56', 'CABA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

DROP TABLE IF EXISTS `oradores`;
CREATE TABLE IF NOT EXISTS `oradores` (
  `id_orador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `apellido` text,
  `memo` longtext,
  PRIMARY KEY (`id_orador`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `memo`) VALUES
(1, 'Pablo', 'Leal', 'probando la base de datos'),
(2, 'Sebastian', 'Leal', 'Esto es un campo memo'),
(3, 'Jose', 'Rodriguez', 'Clases de PHP'),
(4, 'Alejandro', 'Castro', 'Clases de Access'),
(5, 'Mauro', 'Perez', 'Introuccion a la Computacion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
