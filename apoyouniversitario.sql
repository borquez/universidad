-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2015 a las 00:44:00
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `apoyouniversitario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apoyo`
--

CREATE TABLE IF NOT EXISTS `Apoyo` (
  `idapoyo` int(11) NOT NULL AUTO_INCREMENT,
  `Profesor` varchar(50) NOT NULL,
  `Ramo` varchar(45) NOT NULL,
  `Prueba` varchar(45) NOT NULL,
  `Universidad` varchar(45) NOT NULL,
  `Facultad` varchar(45) NOT NULL,
  `Pauta` varchar(45) NOT NULL,
  PRIMARY KEY (`idapoyo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Nombre` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Contrasena` varchar(45) CHARACTER SET utf8 NOT NULL,
  UNIQUE KEY `Nombre` (`Nombre`,`Contrasena`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
