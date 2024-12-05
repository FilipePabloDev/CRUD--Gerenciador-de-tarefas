-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/12/2024 às 20:53
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tasks`
--
CREATE DATABASE IF NOT EXISTS `tasks` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tasks`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `crud_tasks`
--

DROP TABLE IF EXISTS `crud_tasks`;
CREATE TABLE `crud_tasks` (
  `id` int(100) NOT NULL,
  `tarefa` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `status` varchar(20) NOT NULL,
  `prioridade` varchar(20) NOT NULL,
  `data_criacao` varchar(15) NOT NULL,
  `data_limite` varchar(15) NOT NULL,
  `responsavel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `crud_tasks`
--

INSERT INTO `crud_tasks` (`id`, `tarefa`, `descricao`, `status`, `prioridade`, `data_criacao`, `data_limite`, `responsavel`) VALUES
(9, 'Limpar PC', '1°Desmontar todas as peças, 2°Usar pincel, 3° Montar o PC', 'Pendente', 'Baixa', '04/12/2024', '07/12/2024', 'Filipe Pablo'),
(10, 'Avaliar Projeto CRUD', 'Avaliar o CRUD dos alunos e a utilização do Bootstrap :v', 'Pendente', 'Alta', '29/11/2024', '06/12/2024', 'Leandro Miranda');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `crud_tasks`
--
ALTER TABLE `crud_tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crud_tasks`
--
ALTER TABLE `crud_tasks`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
