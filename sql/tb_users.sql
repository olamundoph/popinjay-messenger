-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jun-2021 às 19:59
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pm_users`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_users` int(6) NOT NULL,
  `username` varchar(12) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `avatar` varchar(40) NOT NULL,
  `bio` varchar(160) NOT NULL,
  `local` varchar(30) NOT NULL,
  `site` varchar(100) NOT NULL,
  `nascimento` date NOT NULL,
  `since` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `username`, `name`, `password`, `avatar`, `bio`, `local`, `site`, `nascimento`, `since`) VALUES
(1, 'olamundoph', 'Paulo Henrique', '883d5554d83ebae9c26936212f20b9a2', 'default.png', '', '', '', '0000-00-00', '2021-06-16'),
(2, 'cine_barreto', 'Francine', '883d5554d83ebae9c26936212f20b9a2', 'default.png', '', '', '', '0000-00-00', '2021-06-16'),
(3, 'code', 'code', '883d5554d83ebae9c26936212f20b9a2', 'default.png', '', '', '', '0000-00-00', '2021-06-16'),
(4, 'cafeinamenta', 'Paulo Henrique', '883d5554d83ebae9c26936212f20b9a2', 'default.png', '', '', '', '0000-00-00', '2021-06-16'),
(5, 'jefferson15', 'jefferson', '883d5554d83ebae9c26936212f20b9a2', 'default.png', '', '', '', '0000-00-00', '2021-06-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
