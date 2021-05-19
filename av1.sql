-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Maio-2021 às 20:07
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `av1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `periodo` int(20) NOT NULL,
  `credito` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `codigo`, `nome`, `periodo`, `credito`) VALUES
(12, 'AL1', 'algoritmo 1', 1, 20),
(13, 'ADM', 'Administração', 1, 10),
(14, 'AC1', 'Arquitetura de computadores 1', 1, 20),
(15, 'MAT', 'Matematica Aplicada', 1, 10),
(16, 'LPO', 'Lingua portuguesa', 1, 10),
(17, 'ME1', 'Metodologia 1', 1, 10),
(18, 'AL2', 'algoritmo 2', 2, 20),
(19, 'RD1', 'Redes 1', 2, 20),
(20, 'AC2', 'Arquitetura de computadores 2', 2, 20),
(21, 'SOP', 'Sistemas operacionais', 2, 20),
(22, 'ALG', 'Algebra Linear', 2, 20),
(23, 'IIT', 'Inglês', 2, 10),
(24, 'ME2', 'Metodologia 2', 2, 10),
(25, 'ESD', 'Estrutura de dados', 3, 20),
(26, 'INT', 'Internet', 3, 20),
(27, 'OO1', 'Programação orientada a objetos 1', 3, 20),
(28, 'GPS', 'Gerenciamento de Projeto de sistemas', 3, 10),
(29, 'SPB', 'Sistema de banco de dados', 3, 20),
(30, 'EST', 'Estatistica', 3, 20),
(31, 'RD2', 'Redes 2', 3, 20),
(32, 'ENG', 'Engenharia de software', 4, 20),
(33, 'OO2', 'programação orientada a objetos 2', 4, 20),
(34, 'IHM', 'Interface Homem Máquina', 4, 10),
(35, 'PSW', 'Produção de software', 4, 20),
(36, 'IBD', 'Implementação de banco de dados', 4, 20),
(37, 'APS', 'Analise de projeto de sistemas', 5, 20),
(38, 'LPW', 'Linguagem de programação para web', 5, 20),
(39, 'DIF', 'Direito em informatica ', 5, 10),
(40, 'EMP', 'Empreendedorismo', 5, 10),
(41, 'TAV', 'Tópicos avançados', 5, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinarequisito`
--

CREATE TABLE `disciplinarequisito` (
  `id` int(11) NOT NULL,
  `iddisciplina` int(11) NOT NULL,
  `idrequisito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplinarequisito`
--

INSERT INTO `disciplinarequisito` (`id`, `iddisciplina`, `idrequisito`) VALUES
(1, 18, 5),
(2, 27, 9),
(3, 31, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisito`
--

CREATE TABLE `requisito` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `periodo` int(20) NOT NULL,
  `credito` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `requisito`
--

INSERT INTO `requisito` (`id`, `codigo`, `nome`, `periodo`, `credito`) VALUES
(5, 'AL1', 'algoritmo 1', 1, 20),
(6, 'AC1', 'Arquitetura de computadores 1', 1, 20),
(7, 'MAT', 'Matematica Aplicada', 1, 10),
(8, 'ME1', 'Metodologia 1', 1, 10),
(9, 'AL2', 'algoritmo 2', 2, 20),
(10, 'RD1', 'Redes 1', 2, 20),
(11, 'ALG', 'Algebra Linear', 2, 20),
(12, 'INT', 'Internet', 3, 20),
(13, 'OO1', 'Programação orientada a objetos 1', 3, 20),
(14, 'SPB', 'Sistema de banco de dados', 3, 20),
(15, 'ENG', 'Engenharia de software', 4, 20),
(16, 'OO2', 'programação orientada a objetos 2', 4, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `perfil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `perfil`) VALUES
(1, 'Marcio dos santos teixeira', 'marsanteixei@hotmail.com', '123456', 'administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Índices para tabela `disciplinarequisito`
--
ALTER TABLE `disciplinarequisito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_disciplina_requisito` (`iddisciplina`),
  ADD KEY `fk_disciplina_requisito2` (`idrequisito`);

--
-- Índices para tabela `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `disciplinarequisito`
--
ALTER TABLE `disciplinarequisito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `requisito`
--
ALTER TABLE `requisito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `disciplinarequisito`
--
ALTER TABLE `disciplinarequisito`
  ADD CONSTRAINT `fk_disciplina_requisito` FOREIGN KEY (`iddisciplina`) REFERENCES `disciplina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_disciplina_requisito2` FOREIGN KEY (`idrequisito`) REFERENCES `requisito` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
