-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Nov 2024 pada 03.03
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrianrs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `nomor_antrian` int(11) NOT NULL,
  `waktu_kedatangan` datetime NOT NULL,
  `status` enum('Belum Dilayani','Selesai') DEFAULT 'Belum Dilayani'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_antrian`
--

INSERT INTO `tb_antrian` (`id`, `nama_pasien`, `nomor_antrian`, `waktu_kedatangan`, `status`) VALUES
(10, 'budi', 3, '2024-11-15 09:10:00', 'Selesai'),
(15, 'manda', 2, '2024-11-17 12:02:00', 'Selesai'),
(17, 'nina', 5, '2024-11-17 12:11:00', 'Selesai'),
(18, 'wawan', 3, '2024-11-17 12:23:00', 'Belum Dilayani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`) VALUES
(1, 'tata', 'tatasukacoklat@gmail.com'),
(3, 'sayasaya', 'sayasaya@gmail.com'),
(4, 'sayasaya', 'sayasaya@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
