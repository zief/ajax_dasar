-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2018 at 06:32 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ret_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` char(1) NOT NULL,
  `sesi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `kelas`, `sesi`) VALUES
(1, 'bejo', 'A', 'lanjut'),
(2, 'bejos', 'B', 'lanjut'),
(3, 'bejos', 'B', 'Siang (13.00-15.00 WIB)'),
(10202, 'bejos', 'B', 'lanjut'),
(12233, 'Nurudin', 'Z', 'Pagi (09.00-11.00 WIB)'),
(122336, 'Hujuk', 'B', 'Siang (13.00-15.00 WIB)'),
(122344, 'Mahmud', 'Z', 'Siang (13.00-15.00 WIB)'),
(1223455, 'Mahmud Zudin', 'Z', 'Siang (13.00-15.00 WIB)'),
(3552554, 'bejos', 'B', 'Siang (13.00-15.00 WIB)'),
(12233669, 'Hujuk', 'B', 'Siang (13.00-15.00 WIB)'),
(1233649922, 'Nusaia', 'B', 'Pagi (09.00-11.00 WIB)'),
(1233649987, 'Nusai', 'B', 'Pagi (09.00-11.00 WIB)'),
(1411017598, 'Hu', 'H', 'Siang (13.00-15.00 WIB)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
