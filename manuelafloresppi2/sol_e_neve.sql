-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2023 às 02:52
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sol_e_neve`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cardapio`
--

CREATE TABLE `tb_cardapio` (
  `id_cardapio` int(11) NOT NULL,
  `nome_cardapio` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_cardapio`
--

INSERT INTO `tb_cardapio` (`id_cardapio`, `nome_cardapio`) VALUES
(1, 'Gelato'),
(2, 'Casquinha'),
(3, 'Milkshake'),
(4, 'Gelato e Casquinha'),
(5, 'Gelato e Milkshake'),
(6, 'Casquinha e Milkshake'),
(7, 'Todos!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cidades`
--

CREATE TABLE `tb_cidades` (
  `id_cidades` int(11) NOT NULL,
  `nome_cidades` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_cidades`
--

INSERT INTO `tb_cidades` (`id_cidades`, `nome_cidades`) VALUES
(1, 'Porto Alegre'),
(2, 'Gravataí'),
(3, 'Canoas'),
(4, 'Cachoeirinha'),
(5, 'Alvorada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dados`
--

CREATE TABLE `tb_dados` (
  `id_dados` int(11) NOT NULL,
  `nome_dados` varchar(60) NOT NULL,
  `email_dados` varchar(60) NOT NULL,
  `cardapio_dados` int(11) NOT NULL,
  `data_dados` date NOT NULL,
  `cidade_dados` int(11) NOT NULL,
  `promocoes_dados` varchar(10) NOT NULL,
  `obs_dados` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_dados`
--

INSERT INTO `tb_dados` (`id_dados`, `nome_dados`, `email_dados`, `cardapio_dados`, `data_dados`, `cidade_dados`, `promocoes_dados`, `obs_dados`) VALUES
(5, 'Felipe Vilanova Villa Verde', 'felipoverde@gmail.com', 3, '1222-12-12', 3, 'Não aceito', ' iyuaiuhiuasd');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cardapio`
--
ALTER TABLE `tb_cardapio`
  ADD PRIMARY KEY (`id_cardapio`);

--
-- Índices para tabela `tb_cidades`
--
ALTER TABLE `tb_cidades`
  ADD PRIMARY KEY (`id_cidades`);

--
-- Índices para tabela `tb_dados`
--
ALTER TABLE `tb_dados`
  ADD PRIMARY KEY (`id_dados`),
  ADD KEY `fk_cidades` (`cidade_dados`),
  ADD KEY `fk_cardapio` (`cardapio_dados`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cardapio`
--
ALTER TABLE `tb_cardapio`
  MODIFY `id_cardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_cidades`
--
ALTER TABLE `tb_cidades`
  MODIFY `id_cidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_dados`
--
ALTER TABLE `tb_dados`
  MODIFY `id_dados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_dados`
--
ALTER TABLE `tb_dados`
  ADD CONSTRAINT `fk_cardapio` FOREIGN KEY (`cardapio_dados`) REFERENCES `tb_cardapio` (`id_cardapio`),
  ADD CONSTRAINT `fk_cidades` FOREIGN KEY (`cidade_dados`) REFERENCES `tb_cidades` (`id_cidades`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
