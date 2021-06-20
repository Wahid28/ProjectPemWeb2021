-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2021 at 01:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-projek-yoppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `tanggal_lahir` datetime(6) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `kota` varchar(64) NOT NULL,
  `provinsi` varchar(64) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `sandi` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `gender`, `tanggal_lahir`, `alamat`, `kota`, `provinsi`, `telepon`, `email`, `username`, `pass`, `sandi`) VALUES
(1, 'Muhammad Wahid', 1, '2001-03-28 07:00:18.000000', 'Perum Tegal Besar Permai 1 EY2', 'Jember', 'Jawa Timur', '085230448992', 'wahid28@gmail.com', 'wahid28', 'pass', 'pass'),
(2, 'Adinda Yoppy', 0, '2000-12-08 07:00:18.000000', 'Jalan Batu Raden XXIX', 'Jember', 'Jawa Timur', '082142275777', 'Yoppy123@gmail.com', 'dnxhill_', 'popeye', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
