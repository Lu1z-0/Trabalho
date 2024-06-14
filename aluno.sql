-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/06/2024 às 20:38
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aluno`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha`
--

CREATE TABLE `ficha` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cpf` double NOT NULL,
  `datan` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `sexo` varchar(200) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `endereço` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `confirmar_senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ficha`
--

INSERT INTO `ficha` (`id`, `nome`, `cpf`, `datan`, `email`, `sexo`, `telefone`, `estado`, `cidade`, `endereço`, `senha`, `confirmar_senha`) VALUES
(6, 'Luiz', 11111111111, '2010-01-10', 'A@gmail.com', 'masculino', '(31) 11111-1111', 'MG', 'Belo Horizonte', 'Rua 1', '1111', '1111'),
(7, 'Vitoria', 22222222222, '2020-02-20', 'B@gmail.com', 'feminino', '(41) 22222-2222', 'ES', 'Diamontina', 'Rua 2', '2222', '2222'),
(8, 'Guilherme', 33333333333, '2003-03-31', 'C@gmail.com', 'outro', '(31) 33333-3333', 'BA', 'Salvador', 'Rua 3', '3333', '3333'),
(13, 'Joâo', 44444444444, '2004-04-04', 'D@gmail.com', 'masculino', '(91) 9999-9999', 'RJ', 'Copacapabana', 'Rua 4', '4444', '4444'),
(23, 'Maria', 55555555555, '2015-05-15', 'E@gmail.com', 'feminino', '(55) 55555-5555', 'DF', 'Brasília ', 'Rua 5', '5555', '5555'),
(24, 'Cintia', 66666666666, '2016-06-16', 'F@gmail.com', 'outro', '(67) 66666-6666', 'PA', 'Jabuntinga', 'Rua 6', '6666', '6666');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
