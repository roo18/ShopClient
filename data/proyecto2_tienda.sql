-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-01-2014 a las 11:14:52
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto2_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `idProducto` int(4) NOT NULL DEFAULT '0',
  `idCliente` int(4) NOT NULL DEFAULT '0',
  `cantidad` int(4) DEFAULT '1',
  PRIMARY KEY (`idProducto`,`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idProducto` int(4) NOT NULL,
  `Categoria` varchar(25) NOT NULL,
  PRIMARY KEY (`idProducto`,`Categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(4) NOT NULL AUTO_INCREMENT,
  `nombreCliente` varchar(20) NOT NULL,
  `nick` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `imagen` varchar(20) NOT NULL DEFAULT 'perfil1.jpg',
  `contrasenya` varchar(20) NOT NULL,
  `rol` varchar(25) NOT NULL,
  `Conectado` varchar(6) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCliente`, `nick`, `email`, `imagen`, `contrasenya`, `rol`, `Conectado`) VALUES
(1, 'VV Store', 'vvStore', 'vvStore@gmail.com', 'perfil1.jpg', '1234', 'admin', '0'),
(2, 'Perico Jones', 'Jonazos', 'JonesPerico@gmail.com', 'perfil1.jpg', '1234', 'user', '0'),
(3, 'Roberto', 'yourBanck', 'yourBanck@hotmail.com', 'perfil1.jpg', '12345', 'admin', 'ture'),
(4, 'a', 'a', 'a', 'perfil1.jpg', 'a', 'a', 'a'),
(5, 'ajz', '5wd6', 'awdwa65', 'perfil1.jpg', 'aw5+6wad+9', 'user', 'true'),
(8, 'Travis', 'Trav', 'trav@hotmail.com', 'perfil1.jpg', '12345', 'user', 'true'),
(12, 'Alberto', 'Droeko', 'albert@hotmail.com', 'perfil1.jpg', '12345', 'user', 'true'),
(13, 'Algredo', 'Masachusets', 'AlgMast@hotmail.com', 'perfil1.jpg', '12345jk', 'user', 'true'),
(14, 'Pepe', 'Pepon', 'pepita@hotmail.com', 'perfil1.jpg', '1234', 'user', 'true'),
(15, 'Juan', 'jaz', 'juan@hotmail.com', 'perfil1.jpg', '1234', 'user', 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE IF NOT EXISTS `favorito` (
  `idCliente` int(4) NOT NULL DEFAULT '0',
  `idProducto` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCliente`,`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `idMensaje` int(11) NOT NULL AUTO_INCREMENT,
  `idEnvia` int(4) NOT NULL,
  `idRecibe` int(4) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `leido` tinyint(1) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idMensaje`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`idMensaje`, `idEnvia`, `idRecibe`, `mensaje`, `leido`, `fecha`) VALUES
(1, 1, 2, 'alwais looking iun the right side of life, turu, turuturuturu', 1, '0000-00-00 00:00:00'),
(2, 1, 2, 'RECOMIENDA: asereje, de ha , de he, de jebe tu de jebe de sebiunoba, majari and the buggy and the buggy divi', 1, '0000-00-00 00:00:00'),
(3, 1, 2, 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó u', 1, '0000-00-00 00:00:00'),
(4, 8, 2, 'RECOMIENDA: Lorem Ipsum es simplemente el texto de relleno de las de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó u', 1, '0000-00-00 00:00:00'),
(5, 3, 2, 'EL MODELO DE CARTA DE PRESENTACIÓN:  El modelo que utilices te ayudará a comunicarle al empleador el conocimiento que tienes de la empresa, tu deseo de trabajar para ellos y tu cualificación para el puesto de trabajo. La carta de presentación es una poder', 1, '2014-01-17 08:26:03'),
(6, 3, 2, 'EL MODELO DE CARTA DE PRESENTACIÓN:  El modelo que utilices te ayujar para ellos y tu cualificación para el puesto de trabajo. La carta de presentación es una poderosa ayuda que acompaña a tu Curriculum Vitae a la hora de encontrar trabajo. ', 1, '2014-01-17 08:26:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(4) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(35) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Imagen` varchar(10) NOT NULL DEFAULT 'art1',
  `vecesBuscado` int(4) DEFAULT '0',
  `vecesVendido` int(4) DEFAULT '0',
  `vecesFavorito` int(4) DEFAULT '0',
  `marca` varchar(15) NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `Nombre`, `Descripcion`, `Imagen`, `vecesBuscado`, `vecesVendido`, `vecesFavorito`, `marca`, `precio`) VALUES
(1, 'Postatil Desire', 'wseklfnise  ufkshnfksn kehfksuehfksuhbekfuhs kuebskebfks ubefkusbekufbskuebfksubefkusbekfbskuebfksu befksbkeufb', 'art1', 0, 0, 0, 'HP', 1234.5),
(2, 'ejemplo1', 'Esto es un ordenador que ordena', 'art4', 0, 0, 0, 'Pepe', 1253),
(3, 'ejemplo2', 'Teclado que teclea', 'art5', 0, 0, 0, 'HP', 500),
(4, 'ejemplo3', 'Un raton loleado', 'art6', 0, 0, 0, 'Logitech', 785),
(5, 'ejemplo2', 'Ejemplo ejemlificador', 'art7', 0, 0, 0, 'Samsumg', 566.99),
(6, 'ejemplo4', 'mucho mejor que ejemplo3', 'art8', 0, 0, 0, 'ASUS', 798.5),
(7, 'ejemplo5', 'Parece pero no', 'art9', 0, 0, 0, 'Intel', 855.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
  `nombre` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
