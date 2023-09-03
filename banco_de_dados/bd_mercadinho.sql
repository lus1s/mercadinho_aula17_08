-- Adminer 4.8.1 MySQL 5.5.5-10.5.21-MariaDB-1:10.5.21+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `bd_mercado`;
CREATE DATABASE `bd_mercado` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `bd_mercado`;

DROP TABLE IF EXISTS `tb_categoria_prod`;
CREATE TABLE `tb_categoria_prod` (
  `id_categoria_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categ` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_categoria_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `tb_produto`;
CREATE TABLE `tb_produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(45) DEFAULT NULL,
  `tb_categoria_prod_id_categoria_prod` int(11) NOT NULL,
  PRIMARY KEY (`id_produto`,`tb_categoria_prod_id_categoria_prod`),
  KEY `fk_tb_produto_tb_categoria_prod_idx` (`tb_categoria_prod_id_categoria_prod`),
  CONSTRAINT `fk_tb_produto_tb_categoria_prod` FOREIGN KEY (`tb_categoria_prod_id_categoria_prod`) REFERENCES `tb_categoria_prod` (`id_categoria_prod`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(50) DEFAULT NULL,
  `senha_user` varchar(45) DEFAULT NULL,
  `login_user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- 2023-09-03 23:23:16
