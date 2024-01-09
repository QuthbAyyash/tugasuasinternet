-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2024 pada 06.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nama_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_database`
--

CREATE TABLE `nama_database` (
  `id` int(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `published_year` int(50) NOT NULL,
  `isbn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nama_database`
--

INSERT INTO `nama_database` (`id`, `author`, `title`, `published_year`, `isbn`) VALUES
(2121, 'Hanum salsabila Rais', 'Cinta Di Langit Eropa', 2016, '2222-3339-0009'),
(2221, 'Tere Liye', 'Si Anak Kuat', 2024, '2233-2222-2121'),
(2222, 'TereLiye', 'Si Anak Savana', 2023, '2222-3333-1111');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nama_database`
--
ALTER TABLE `nama_database`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
