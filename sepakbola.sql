-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 07:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepakbola`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_klub`
--

CREATE TABLE `tb_klub` (
  `id` int(11) NOT NULL,
  `nama_klub` varchar(50) NOT NULL,
  `kota` varchar(40) NOT NULL,
  `main` varchar(15) NOT NULL,
  `menang` varchar(15) NOT NULL,
  `seri` varchar(15) NOT NULL,
  `kalah` varchar(15) NOT NULL,
  `poin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_klub`
--

INSERT INTO `tb_klub` (`id`, `nama_klub`, `kota`, `main`, `menang`, `seri`, `kalah`, `poin`) VALUES
(1, 'Persib', 'Bandung', '2', '1', '1', '0', '4'),
(3, 'Persija', 'Jakrta', '2', '1', '0', '1', '3'),
(5, 'Arema', 'Malang', '3', '3', '0', '0', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_klub`
--
ALTER TABLE `tb_klub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_klub`
--
ALTER TABLE `tb_klub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
