-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 03:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apparel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `nama` varchar(200) NOT NULL,
  `kerah` varchar(200) NOT NULL,
  `ukuran` varchar(200) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`nama`, `kerah`, `ukuran`, `jumlah`, `alamat`, `nomor`) VALUES
('Aqbil', 'Polo', 'L', 2, 'aabil@gmail.com', '0897654567'),
('Thomas', 'O-Neck', 'XL', 4, 'tomtom@gmail.com', '021345789'),
('Lai', 'Polo', 'S', 1, 'lai@yahoo.com', '0711234567'),
('Imam', 'V-Neck', 'XL', 5, 'mamam@google.com', '0342199');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
