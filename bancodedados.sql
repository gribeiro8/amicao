-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2015 at 10:01 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `amicao`
--

-- --------------------------------------------------------

--
-- Table structure for table `Animais`
--

CREATE TABLE `Animais` (
  `CodAnimais` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Idade` varchar(50) DEFAULT NULL,
  `Facebook` varchar(200) DEFAULT NULL,
  `Foto` varchar(3000) DEFAULT NULL,
  `CodUsuario` int(11) NOT NULL,
  PRIMARY KEY (`CodAnimais`),
  KEY `fk_Animais_Usuario_idx` (`CodUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `Animais`
--

INSERT INTO `Animais` (`CodAnimais`, `Nome`, `Idade`, `Facebook`, `Foto`, `CodUsuario`) VALUES
(1, 'Cachorro 1', '1 ano', 'www.facebook.com.br', 'animal1.jpg', 1),
(11, 'Teeste', '123', '123', '5206bb7a475c8d7a3260b26adb2ddc18.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Postagem`
--

CREATE TABLE `Postagem` (
  `CodPostagem` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(45) DEFAULT NULL,
  `Texto` varchar(3000) DEFAULT NULL,
  `CodUsuario` int(11) NOT NULL,
  PRIMARY KEY (`CodPostagem`),
  KEY `fk_Postagem_Usuario1_idx` (`CodUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Postagem`
--

INSERT INTO `Postagem` (`CodPostagem`, `Titulo`, `Texto`, `CodUsuario`) VALUES
(1, 'Teste', 'ausdhaisudhasiu aiushdiasuhdisa aiusdhaisdhas aiushdaisud a aiudhiausdhiasd iasud iasuhd iashd iasuhd iashdi asuhdi as', 1),
(2, '123', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `CodUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CodUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`CodUsuario`, `Nome`, `Email`, `Senha`) VALUES
(1, 'Gabriel', 'g@g.com', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Animais`
--
ALTER TABLE `Animais`
  ADD CONSTRAINT `fk_Animais_Usuario` FOREIGN KEY (`CodUsuario`) REFERENCES `Usuario` (`CodUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Postagem`
--
ALTER TABLE `Postagem`
  ADD CONSTRAINT `fk_Postagem_Usuario1` FOREIGN KEY (`CodUsuario`) REFERENCES `Usuario` (`CodUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
