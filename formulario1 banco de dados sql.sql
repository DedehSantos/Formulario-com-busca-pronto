-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 08:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulario1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcliente`
--

CREATE TABLE `tbcliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbcliente`
--

INSERT INTO `tbcliente` (`id`, `nome`, `endereco`, `estado`, `telefone`, `celular`, `email`) VALUES
(28, 'valdeilson marques santos', 'rua severino teofilo basilio', 'Paraiba', '33331515', '083987834115', 'dedehsantos1313@gmail.com'),
(29, 'Nayane Cristina Lima Alve', 'severino teofilo basilio', 'paraiba', '83987834115', '83987834115', 'nayane3@gmail.com'),
(30, 'Pedro Miguel', 'severino teofilo basilio', 'paraiba', '83987834115', '83987834115', 'nayane3@gmail.com'),
(31, 'valdeir marques santos', 'antonio carvalcante', 'paraiba', '83987834115', '83987834115', 'dedehenayane2019.1@gmail.com'),
(32, 'valdenia marques santos', 'rua antonio cavalcante', 'paraiba', '83987834115', '83987834115', 'dedehenayane2019.1@gmail.com'),
(34, 'valber marques santos', 'severino teofilo basilio', 'paraiba', '83987834115', '83987834115', 'dedehenayane2019.1@gmail.com'),
(35, 'vicente martiniano dos santos', 'severino teofilo basilio', 'paraiba', '83987834115', '83987834115', 'dedehenayane2019.1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
