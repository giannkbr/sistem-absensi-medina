-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 03:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medina`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `username`, `tanggal`, `jam_masuk`, `jam_keluar`, `status`) VALUES
(1, 'kiki', '2021-06-01', '08:10:29', '16:13:39', 'pulang'),
(2, 'kiki', '2021-06-02', '08:10:29', '16:13:39', 'pulang'),
(3, 'kiki', '2021-06-03', '08:10:29', '16:13:39', 'pulang'),
(4, 'kiki', '2021-06-04', '08:10:29', '16:13:39', 'pulang'),
(5, 'kiki', '2021-06-05', '08:10:29', '16:13:39', 'pulang'),
(6, 'kiki', '2021-06-06', '08:10:29', '16:13:39', 'pulang'),
(7, 'kiki', '2021-07-21', '15:44:40', '00:00:00', 'terlambat'),
(8, 'kaikai', '2021-07-22', '01:32:26', '00:00:00', 'masuk'),
(13, 'kaikai', '2021-07-24', '08:12:57', '00:00:00', 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `jabatan_nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `jabatan_nama`) VALUES
(1, 'Barang dan Jasa Keuangan'),
(11, 'Keuangan'),
(12, 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `toleransi_masuk` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `jam_masuk`, `jam_keluar`, `toleransi_masuk`) VALUES
(1, '08:00:00', '16:00:00', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nip` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` enum('1','2') NOT NULL,
  `photo` varchar(120) DEFAULT NULL,
  `jabatan_id` int(11) NOT NULL,
  `waktu_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nip`, `nama`, `jenis_kelamin`, `username`, `password`, `role_id`, `photo`, `jabatan_id`, `waktu_masuk`) VALUES
(123, 'Administrator', 'L', 'admin', '$2y$10$VqvV0UfbaEhwfR0v1nQUOOz0SY461B3Q41cwaHiqocwfN5uG9lUge', '1', 'default.png', 10, '2021-05-10'),
(12312, 'Kiki', 'L', 'kikiaja', '$2y$10$ekUM4T50kyYteL/Hc.REReeSR0HNR8sKicQQFqmgrspfyBUqXTBz6', '2', '1068538.jpg', 1, '2021-06-20'),
(234565, 'kiki salam ruzki', 'L', 'kiki', '$2y$10$K4vt9LlHiz7/9jdpeyZcp.9sA8HGQYDqTGEyC.a9pVZmbGVgb8jdy', '2', 'Capture.PNG', 1, '2021-06-26'),
(56764321, 'kaikai', 'L', 'kaikai', '$2y$10$.EOTR55lIHa9m1l2TrA0aePBiIEn5TtTqQuQLwC0P5sqi5RC/ijbG', '2', 'Sketchpad.png', 11, '2021-07-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
