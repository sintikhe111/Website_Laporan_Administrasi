-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 03:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tambahiv`
--

CREATE TABLE `tambahiv` (
  `id_iv` int(11) NOT NULL,
  `nm_brg` varchar(20) NOT NULL,
  `jml` int(11) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tambahiv`
--

INSERT INTO `tambahiv` (`id_iv`, `nm_brg`, `jml`, `kondisi`) VALUES
(8, 'Laptop', 5, 'Baik'),
(9, 'Printer', 3, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tambahsk`
--

CREATE TABLE `tambahsk` (
  `id_srt_k` int(11) NOT NULL,
  `no_srt` varchar(25) NOT NULL,
  `tgl_srt` date NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `hal` varchar(20) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tambahsk`
--

INSERT INTO `tambahsk` (`id_srt_k`, `no_srt`, `tgl_srt`, `tujuan`, `hal`, `ket`) VALUES
(123556, '235/SIB/SISFO/UNISNU/VII/', '2023-11-20', 'Sintikhe Novia Margaretha', 'Undangan', 'Delegasi 2 orang'),
(123557, '236/SIB/SISFO/UNISNU/VII/', '2023-12-04', 'Sintikhe Novia', 'Undagan', 'Delegasi 3 Orang');

-- --------------------------------------------------------

--
-- Table structure for table `tambahsm`
--

CREATE TABLE `tambahsm` (
  `id_srt` int(11) NOT NULL,
  `no_srt` varchar(20) NOT NULL,
  `tgl_srt` date NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `hal` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tambahsm`
--

INSERT INTO `tambahsm` (`id_srt`, `no_srt`, `tgl_srt`, `tujuan`, `hal`, `ket`) VALUES
(1234689, '01/SIB/SISFO/UNISNU/', '2023-08-14', 'Sintikhe Novia', 'undangan', 'SIB GUYS'),
(1234690, '02/SIB/SISFO/UNISNU/', '2023-08-12', 'Sintikhe', 'Undangan', 'SIB 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tambahiv`
--
ALTER TABLE `tambahiv`
  ADD PRIMARY KEY (`id_iv`);

--
-- Indexes for table `tambahsk`
--
ALTER TABLE `tambahsk`
  ADD PRIMARY KEY (`id_srt_k`);

--
-- Indexes for table `tambahsm`
--
ALTER TABLE `tambahsm`
  ADD PRIMARY KEY (`id_srt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tambahiv`
--
ALTER TABLE `tambahiv`
  MODIFY `id_iv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tambahsk`
--
ALTER TABLE `tambahsk`
  MODIFY `id_srt_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123558;

--
-- AUTO_INCREMENT for table `tambahsm`
--
ALTER TABLE `tambahsm`
  MODIFY `id_srt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234691;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
