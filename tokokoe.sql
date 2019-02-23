-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 03:22 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokokoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelangganId` varchar(10) NOT NULL,
  `namaPelanggan` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelangganId`, `namaPelanggan`, `email`, `telpon`, `alamat`) VALUES
('PL003', 'Afif Fadhillah', 'rikikuswo20@gmail.com', '038724073', 'Utan Panjang'),
('PL004', 'Muthia', 'riki20@mal.com', '0847189710', 'Kampung Melayu'),
('PL005', 'Hilman', 'rikikuswo20@gmail.com', '038724073', 'Kemayoran	'),
('PL007', 'Riki Kuswondo', 'riki@mk.com', '08131511541156', 'Sunter Agung					');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produkId` varchar(10) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produkId`, `namaProduk`, `harga`, `satuan`, `qty`, `image`, `deskripsi`) VALUES
('', 'Sabun', 4000, 'Buah', 20, 'http://localhost/RikiCI/index.php/produk', 'Sabun Bolong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelangganId`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produkId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
