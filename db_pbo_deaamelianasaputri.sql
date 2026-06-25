-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2026 at 03:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pbo_deaamelianasaputri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `hari_kerja_masuk` int NOT NULL,
  `gaji_dasar_per_hari` decimal(10,2) NOT NULL,
  `jenis_karyawan` enum('Kontrak','Tetap','Magang') NOT NULL,
  `durasi_kontrak_bulan` int DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(10,2) DEFAULT NULL,
  `opsi_saham_id` varchar(50) DEFAULT NULL,
  `uang_saku_bulanan` decimal(10,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Budi Santoso', 'IT', 22, '250000.00', 'Tetap', NULL, NULL, '500000.00', 'SHM-001', NULL, NULL),
(2, 'Andi Wijaya', 'HR', 20, '200000.00', 'Tetap', NULL, NULL, '400000.00', 'SHM-002', NULL, NULL),
(3, 'Citra Lestari', 'Finance', 21, '230000.00', 'Tetap', NULL, NULL, '450000.00', 'SHM-003', NULL, NULL),
(4, 'Diana Fitri', 'Marketing', 22, '220000.00', 'Tetap', NULL, NULL, '400000.00', 'SHM-004', NULL, NULL),
(5, 'Eko Prasetyo', 'IT', 20, '250000.00', 'Tetap', NULL, NULL, '500000.00', 'SHM-005', NULL, NULL),
(6, 'Fajar Nugroho', 'Operations', 23, '210000.00', 'Tetap', NULL, NULL, '300000.00', 'SHM-006', NULL, NULL),
(7, 'Gita Savitri', 'HR', 21, '200000.00', 'Tetap', NULL, NULL, '400000.00', 'SHM-007', NULL, NULL),
(8, 'Hadi Sucipto', 'IT', 20, '150000.00', 'Kontrak', 12, 'PT Jasindo Utama', NULL, NULL, NULL, NULL),
(9, 'Indah Permata', 'Marketing', 18, '140000.00', 'Kontrak', 6, 'PT Karya Mandiri', NULL, NULL, NULL, NULL),
(10, 'Joko Susilo', 'Operations', 22, '130000.00', 'Kontrak', 12, 'PT Outsourcing Jaya', NULL, NULL, NULL, NULL),
(11, 'Kartika Sari', 'Finance', 20, '150000.00', 'Kontrak', 6, 'PT Jasindo Utama', NULL, NULL, NULL, NULL),
(12, 'Lukman Hakim', 'IT', 21, '150000.00', 'Kontrak', 12, 'PT Karya Mandiri', NULL, NULL, NULL, NULL),
(13, 'Maya Rahma', 'HR', 19, '140000.00', 'Kontrak', 6, 'PT Outsourcing Jaya', NULL, NULL, NULL, NULL),
(14, 'Nina Yuliana', 'Marketing', 22, '140000.00', 'Kontrak', 12, 'PT Jasindo Utama', NULL, NULL, NULL, NULL),
(15, 'Oskar Saputra', 'IT', 15, '50000.00', 'Magang', NULL, NULL, NULL, NULL, '1500000.00', 'KM-IT-001'),
(16, 'Putri Wulandari', 'Marketing', 16, '50000.00', 'Magang', NULL, NULL, NULL, NULL, '1500000.00', 'KM-MKT-002'),
(17, 'Qori Ramadhan', 'Finance', 14, '50000.00', 'Magang', NULL, NULL, NULL, NULL, '1500000.00', 'KM-FIN-003'),
(18, 'Rizky Maulana', 'Operations', 15, '50000.00', 'Magang', NULL, NULL, NULL, NULL, '1500000.00', 'KM-OPS-004'),
(19, 'Siska Anggraini', 'HR', 16, '50000.00', 'Magang', NULL, NULL, NULL, NULL, '1500000.00', 'KM-HR-005'),
(20, 'Toni Setiawan', 'IT', 15, '50000.00', 'Magang', NULL, NULL, NULL, NULL, '1500000.00', 'KM-IT-006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
