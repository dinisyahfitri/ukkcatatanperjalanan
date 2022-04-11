-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 09:08 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukkperjalanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcatatan`
--

CREATE TABLE `tbcatatan` (
  `idcatatan` int(30) NOT NULL,
  `nik` int(30) NOT NULL,
  `tgl` date NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `lokasi` text NOT NULL,
  `suhu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcatatan`
--

INSERT INTO `tbcatatan` (`idcatatan`, `nik`, `tgl`, `instansi`, `lokasi`, `suhu`) VALUES
(1110001, 2225252, '2022-03-08', 'PT Semen Padang', 'Padang, Sumatera Barat', 36.5);

-- --------------------------------------------------------

--
-- Table structure for table `tbregistrasi`
--

CREATE TABLE `tbregistrasi` (
  `nik` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbregistrasi`
--

INSERT INTO `tbregistrasi` (`nik`, `nama`, `alamat`, `notelp`) VALUES
(2225252, 'Nurhamidah Nasution', 'Medan Johor', '0819900799'),
(4252522, 'Sela Agustina', 'Tebing Tinggi', '0819900766');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcatatan`
--
ALTER TABLE `tbcatatan`
  ADD PRIMARY KEY (`idcatatan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbregistrasi`
--
ALTER TABLE `tbregistrasi`
  ADD PRIMARY KEY (`nik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbcatatan`
--
ALTER TABLE `tbcatatan`
  ADD CONSTRAINT `tbcatatan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tbregistrasi` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
