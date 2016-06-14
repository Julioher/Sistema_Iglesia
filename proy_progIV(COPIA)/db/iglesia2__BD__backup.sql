-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-05-2016 a las 11:34:05
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `iglesia2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributo`
--

CREATE TABLE IF NOT EXISTS `atributo` (
  `idAtributo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAtributo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcar la base de datos para la tabla `atributo`
--

INSERT INTO `atributo` (`idAtributo`, `nombre`) VALUES
(1, 'BAUTISMO'),
(2, 'CONFIRMACION'),
(3, 'COMUNION'),
(5, 'CASADO'),
(6, 'RECOFIFRMACION'),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, 'textnombreatributo'),
(18, 'textnombreatributo'),
(19, ''),
(20, 'claro'),
(21, 'claroquesi'),
(22, 'claroquesi'),
(23, ''),
(24, 'CRECIMIENTO'),
(25, 'CRECIMIENTOssss'),
(26, 'CRECIMIENTOssss'),
(27, 'CRECIMIENTOzzz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feligres`
--

CREATE TABLE IF NOT EXISTS `feligres` (
  `idFeligres` int(11) NOT NULL AUTO_INCREMENT,
  `pNombre` varchar(50) NOT NULL,
  `sNombre` varchar(50) NOT NULL,
  `pApellido` varchar(50) NOT NULL,
  `sApellido` varchar(50) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `telefonoMovil` varchar(15) NOT NULL,
  `telefonoCasa` varchar(15) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `idGrupoAdoracion` int(11) NOT NULL,
  PRIMARY KEY (`idFeligres`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcar la base de datos para la tabla `feligres`
--

INSERT INTO `feligres` (`idFeligres`, `pNombre`, `sNombre`, `pApellido`, `sApellido`, `Genero`, `telefonoMovil`, `telefonoCasa`, `direccion`, `cargo`, `estado`, `idGrupoAdoracion`) VALUES
(1, 'nubia', '', '', '\r\n', '', '', '', '', '', '', 0),
(2, 'martha', '', '', '\r\n', '', '', '', '', '', '', 0),
(3, 'Julio', 'HernÃ¡ndez', 'Alberto', 'Castillo\r\n', 'M', '923587979732', '78722364628', 'whejfrkÃ±tgr`dltpyeltrl', 'C', '1', 0),
(4, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(5, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(6, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(7, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(8, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(9, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(10, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(11, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(12, 'melida', 'josefa', 'araniva', 'torres\r\n', 'F', '6454747', '213343', 'kdsflÃ±kslgklÃ±dlÃ±fs', 'S', '1', 0),
(13, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(14, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(15, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(16, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(17, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(18, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(19, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(20, 'hy', '', '', '\r\n', '', '', '', '', '', '', 0),
(21, 'julion', 'jasodjfk', 'dhfsjikm', 'fhfgjyg\r\n', 'M', '5687543652', '4362664', 'kjhfjerkÃ±lrleltÃ±lkyÃ±hkjtksÃ±lhkf', 'C', '1', 0),
(22, 'julion', 'jasodjfk', 'dhfsjikm', 'fhfgjyg\r\n', 'M', '5687543652', '4362664', 'kjhfjerkÃ±lrleltÃ±lkyÃ±hkjtksÃ±lhkf', 'C', '1', 0),
(23, 'juliones', 'jasodjfk', 'dhfsjikm', 'fhfgjyg\r\n', 'M', '5687543652', '4362664', 'kjhfjerkÃ±lrleltÃ±lkyÃ±hkjtksÃ±lhkf', 'C', '1', 0),
(24, 'julionestyut', 'jasodjfk', 'dhfsjikm', 'fhfgjyg\r\n', 'M', '5687543652', '4362664', 'kjhfjerkÃ±lrleltÃ±lkyÃ±hkjtksÃ±lhkf', 'C', '1', 0),
(25, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(26, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(27, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(28, '', '', '', '\r\n', '', '', '', '', '', '', 0),
(29, '', '', '', '\r\n', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feligresatributo`
--

CREATE TABLE IF NOT EXISTS `feligresatributo` (
  `id_feligresAtributo` int(11) NOT NULL AUTO_INCREMENT,
  `idFeligres` int(11) DEFAULT NULL,
  `idAtributo` int(11) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_feligresAtributo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `feligresatributo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feligresministerio`
--

CREATE TABLE IF NOT EXISTS `feligresministerio` (
  `id_feligresministerio` int(11) NOT NULL AUTO_INCREMENT,
  `idFeligres` int(11) DEFAULT NULL,
  `idMinisterio` int(11) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_feligresministerio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `feligresministerio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupoadoracion`
--

CREATE TABLE IF NOT EXISTS `grupoadoracion` (
  `idGrupoAdoracion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `idFeligres` int(11) NOT NULL,
  PRIMARY KEY (`idGrupoAdoracion`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcar la base de datos para la tabla `grupoadoracion`
--

INSERT INTO `grupoadoracion` (`idGrupoAdoracion`, `nombre`, `idFeligres`) VALUES
(1, '1', 0),
(2, '1', 0),
(3, '3', 0),
(4, '3', 0),
(5, '3', 0),
(6, '3', 0),
(7, '3', 0),
(8, '3', 0),
(9, '', 0),
(10, '', 0),
(11, '', 0),
(12, '', 0),
(13, '', 0),
(14, '', 0),
(15, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ministerio`
--

CREATE TABLE IF NOT EXISTS `ministerio` (
  `idMinisterio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMinisterio`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `ministerio`
--

INSERT INTO `ministerio` (`idMinisterio`, `nombre`) VALUES
(1, 'chvcbnvbm'),
(2, 'BIENVENIDA55555555'),
(3, 'BIENVENIDAvgvgvgvgv'),
(4, ''),
(13, ''),
(6, 'BIENtyrjuutrut'),
(7, 'ggff'),
(8, 'kkk'),
(9, 'bbvv'),
(10, 'HHHH'),
(11, 'DDDDD'),
(12, 'TTTTTTTTT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `usuario`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
