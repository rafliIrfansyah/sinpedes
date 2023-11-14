-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2023 pada 10.32
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinpedes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `deskripsi_keluhan` longtext NOT NULL,
  `key` longtext NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `status_keluhan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `id_user`, `deskripsi_keluhan`, `key`, `tanggal`, `status_keluhan`) VALUES
(1, 4, 'mZuJpWWoDEkrLjPOagYXporfWtSbQSHGGdSMbAapaimdW+JhO+lfHexTwr25NpUcNboRWkT0Fyq1mwgZVcYS6A==', '$2y$10$orMX7Cgkh3IhzLZh9JOg1O8WW/2cb2E6iASezPluwSEPqqen/sLZ2', '2022-11-30', 'Telah ditanggapi'),
(2, 5, 'ykYY4eocdO6KSQxRq4dvzDHkxhlYs6eHV8Jwt8UYhUc=', '$2y$10$Vj38p4zYFNw.DkgX5pS6B.QlzKjfk7R8nOkt.KMK5shM7exIAMMHO', '2023-11-14', 'Belum ditanggapi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(5) NOT NULL,
  `id_keluhan` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `deskripsi_tanggapan` longtext NOT NULL,
  `key` longtext NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `status_tanggapan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_keluhan`, `id_user`, `deskripsi_tanggapan`, `key`, `tanggal`, `status_tanggapan`) VALUES
(1, 1, 4, 'KIdukvF43KHyDWS/Qf3hnVlB0Mg6k6xX72NymSXj/Qk=', '$2y$10$dbdnftxwQdJYZZZytdTWI.t2ojj5TZw2h/XKnFP3UdaHzvuABfpxy', '2022-11-30', 'Telah dilihat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', '$2y$10$rVO.uCOIO8zCEMDfYSxdLe1diPMM1qH7U9L2m1YwrWL4krbNDHqWG', 'admin'),
(2, 'raflii', '$2y$10$BEVvaf0/ihz0vV7Gafkgq.8VBRS3E1kQurMaj64NlTMfh6ZvwgQWu', 'user'),
(3, 'irfans', '$2y$10$2uWH6nneyGzKurci.x7rbuTihnR6p1M66yvkmye7PEF01RAoiq9MO', 'user'),
(4, 'bagus', '$2y$10$Yi2phWTICwBZ9O0TfzK/nuPucB4U/nWTvWfJtn6pcT/WXkI2dnYJ2', 'user'),
(5, 'rafli', '$2y$10$28mvyD4FGaw..byYjLKzQ.J092H0jqcxmYwDmvKGpjhd2R.4mGCeW', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
