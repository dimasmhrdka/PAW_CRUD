-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 08:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dimas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_093`
--

CREATE TABLE `tbl_093` (
  `id_093` int(11) NOT NULL,
  `nama_093` varchar(50) DEFAULT NULL,
  `email_093` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_093`
--

INSERT INTO `tbl_093` (`id_093`, `nama_093`, `email_093`) VALUES
(1, 'Dimas Mahardika', 'dimasmahardika0609@gmail.com'),
(2, 'Gede Sudipta Sana', 'gedesudipta@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_093`
--
ALTER TABLE `tbl_093`
  ADD PRIMARY KEY (`id_093`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_093`
--
ALTER TABLE `tbl_093`
  MODIFY `id_093` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
