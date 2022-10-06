-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Set-2022 às 03:29
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario-faesa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosmensagem`
--

CREATE TABLE `dadosmensagem` (
  `Id` int(10) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Mensagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dadosmensagem`
--

INSERT INTO `dadosmensagem` (`Id`, `Nome`, `Email`, `Telefone`, `Mensagem`) VALUES
(7, 'teste nome ', 'teste@gmail.com', '(27) 99999-9999', '                              12345678910'),
(8, 'dasdasd', 'dasdasdas@gmail.com', '(11) 1111-1111', 'asdasdasdasdasdasdas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dadosmensagem`
--
ALTER TABLE `dadosmensagem`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dadosmensagem`
--
ALTER TABLE `dadosmensagem`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
