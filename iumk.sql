-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2019 at 01:31 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iumk`
--

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `no` int(4) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `alamat_pemohon` varchar(100) NOT NULL,
  `no_telpon` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `sarana_usaha` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `alamat_usaha` varchar(100) NOT NULL,
  `modal_usaha` varchar(100) NOT NULL,
  `no_rekomendasi` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_usaha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`no`, `nama_pemohon`, `nik`, `alamat_pemohon`, `no_telpon`, `npwp`, `sarana_usaha`, `jenis_usaha`, `alamat_usaha`, `modal_usaha`, `no_rekomendasi`, `tanggal`, `nama_usaha`) VALUES
(1, 'Oki Kuncoro', '31701826418', 'Perum Rosma Cipta Indah Blok F.11', '082210415514', '12381208471', 'Non Rumah Tinggal', 'Jasa', 'Ruko Blok EM Sekuer', '1000', 'xxx', '2019-04-21 10:11:47', 'cekucek.com'),
(6, 'Oki Kuncoro Gansxxxzzc', '31701826418', 'Perum Rosma Cipta Indah Blok F.11', '082210415514', '12381208471', 'Non Rumah Tinggal', 'Jasa', 'Ruko Blok EM Sekuer', '1000', 'xxx', '2019-04-21 11:30:32', 'cekucek.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
