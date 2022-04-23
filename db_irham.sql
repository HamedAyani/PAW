-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Apr 2022 pada 08.26
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_irham`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_114`
--

CREATE TABLE `tbl_114` (
  `id_114` int(11) NOT NULL,
  `nama_114` varchar(60) DEFAULT NULL,
  `email_114` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_114`
--

INSERT INTO `tbl_114` (`id_114`, `nama_114`, `email_114`) VALUES
(123456, 'dony saputra', 'donysa@gmail.com'),
(2041110114, 'Irham Hamed Ayani', 'hamedayani27@gmail.com'),
(2147483647, 'dasar pengguna', 'dasarpengguna@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_114`
--
ALTER TABLE `tbl_114`
  ADD PRIMARY KEY (`id_114`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_114`
--
ALTER TABLE `tbl_114`
  MODIFY `id_114` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
