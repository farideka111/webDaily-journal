-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2026 at 02:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdaily`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Renang', 'Cara terbaik memulai hari! Mengisi energi dan menyegarkan pikiran di air kolam yang dingin, siap hadapi tantangan seharian penuh.', 'renang.jpg', '2025-12-10 16:12:29', 'admin'),
(2, 'Pergi ke Curug', 'Hanya untuk bermain dan bersenang senang melihat keindahan alam dan merasakan sejuknya air dari pegunungan', 'curug.jpg', '2025-12-24 15:51:49', 'admin'),
(3, 'Billiard', 'Sore ini, fokus penuh di meja biliar. Mencari hiburan sekaligus pelajaran akurasi di tengah rutinitas', 'mainBL.jpg', '2025-12-10 16:16:53', 'admin'),
(4, 'Nongkrong', 'Keseruan bersama teman dimana kita bisa berbagi cerita disaat kita perlu waktu. Momen tawa dan kebersamaan yang takkan terlupa, ditemani orang-orang seru.', 'Nongkrong.jpg', '2025-12-10 16:16:53', 'admin'),
(5, 'Mengerjakan Tugas', 'Sesi dimana kita harus mengerjakan lembur menggunakan waktu luang. Setiap baris kode yang berhasil di-compile adalah kemenangan kecil hari ini. ', 'nugas.jpg', '2025-12-10 16:22:11', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Main bl', '20260113074803.jpg', '2026-01-13 07:48:03', 'admin'),
(2, 'Curug', '20260113074821.jpg', '2026-01-13 07:48:21', 'admin'),
(3, 'Nongkrong', '20260113074857.jpg', '2026-01-13 07:48:57', 'admin'),
(4, 'Nugas', '20260113074912.jpg', '2026-01-13 07:49:12', 'admin'),
(5, 'Renang', '20260113074933.jpg', '2026-01-13 07:49:33', 'admin'),
(6, 'Guhnung', '20260113074958.jpg', '2026-01-13 07:49:58', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20260113075252.jpeg'),
(2, 'danny', '21232f297a57a5a743894a0e4a801fc3', '20260113075318.png'),
(4, '---', 'c4ca4238a0b923820dcc509a6f75849b', '20260113075408.png'),
(5, '---', 'c4ca4238a0b923820dcc509a6f75849b', '20260113075424.png'),
(6, '---.', 'c4ca4238a0b923820dcc509a6f75849b', '20260113075438.png'),
(7, ',', 'c4ca4238a0b923820dcc509a6f75849b', '20260113075703.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
