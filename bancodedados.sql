-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2015 at 09:48 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lighterd_amicao`
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
  `Status` int(11) NOT NULL,
  `CodUsuario` int(11) NOT NULL,
  PRIMARY KEY (`CodAnimais`),
  KEY `fk_Animais_Usuario_idx` (`CodUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `Animais`
--

INSERT INTO `Animais` (`CodAnimais`, `Nome`, `Idade`, `Facebook`, `Foto`, `Status`, `CodUsuario`) VALUES
(1, 'Cachorro 1', '1 ano', 'www.facebook.com.br', 'animal1.jpg', 1, 1),
(11, 'Cachorro 2', '1 ano', '123', '5206bb7a475c8d7a3260b26adb2ddc18.jpg', 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Postagem`
--

INSERT INTO `Postagem` (`CodPostagem`, `Titulo`, `Texto`, `CodUsuario`) VALUES
(1, 'Postagem 1', 'Texto', 1),
(2, 'Postagem 2', 'Texto', 1),
(3, 'Publicacao 3', '', 1),
(4, 'Publicacao 3', '<p style="text-align: center;"><strong>Teste</strong></p>\r\n<p style="text-align: center;">Testando a formata&ccedil;&atilde;o</p>', 1);

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
