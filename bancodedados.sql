-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2015 at 09:18 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lighterd_amicao`
--

-- --------------------------------------------------------

--
-- Table structure for table `Denuncia`
--

CREATE TABLE `Denuncia` (
  `CodDenuncia` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Assunto` varchar(45) DEFAULT NULL,
  `Mensagem` varchar(500) DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CodDenuncia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Denuncia`
--

INSERT INTO `Denuncia` (`CodDenuncia`, `Nome`, `Email`, `Assunto`, `Mensagem`, `Foto`) VALUES
(1, 'Gabriel', 'gribeiro8@gmail.com', 'Denuncia 1', 'Estou denunciando que esse site ainda não funciona por completo.', 'teste.jpg');
