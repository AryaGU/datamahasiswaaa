-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2023 pada 07.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inputan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputanmahasiswa`
--

CREATE TABLE `inputanmahasiswa` (
  `Nim` varchar(10) NOT NULL,
  `Nama` varchar(25) DEFAULT NULL,
  `Tanggal Lahir` varchar(30) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Jenis Kelamin` text NOT NULL,
  `Prodi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inputanmahasiswa`
--

INSERT INTO `inputanmahasiswa` (`Nim`, `Nama`, `Tanggal Lahir`, `Alamat`, `Agama`, `Jenis Kelamin`, `Prodi`) VALUES
('420158', 'Figo bayu', '2001-03-17', 'Polehan', ' Laki-Laki', 'Islam', 'Teknik Inform'),
('421074', 'Zerina', '2023-12-31', 'China', ' Laki-Laki', 'Islam', 'Broadcasting'),
('435678', 'Retha Maretha', '2023-02-14', 'Cemoro Kandang', 'Laki-Laki', 'Islam', 'Teknik Inform'),
('Nim', 'Nama', 'Tanggal Lahir', 'Alamat', 'Jenis Kela', 'Agama', 'Prodi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inputanmahasiswa`
--
ALTER TABLE `inputanmahasiswa`
  ADD PRIMARY KEY (`Nim`),
  ADD UNIQUE KEY `Nama` (`Nama`),
  ADD UNIQUE KEY `Nim` (`Nim`,`Nama`,`Tanggal Lahir`,`Alamat`,`Agama`,`Jenis Kelamin`,`Prodi`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
