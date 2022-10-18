-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2022 pada 02.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tahun_terbit` int(8) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `deskripsi`, `penulis`, `penerbit`, `tahun_terbit`, `kategori`) VALUES
('a', 'dukun', 'ddd', 'iuy', 'klan merah', 0, 'mahhl'),
('A1', 'SI KANCIL', 'Bercerita tentang petualangan kancil', 'MB.Rahimsyah AR.', 'Lingkar Media', 2013, 'buku dongeng'),
('A10', 'BUKU IMAJINASI', 'deskripsikan ide mu', 'Subaweh', 'SEEYOU_CORPS', 2040, 'buku umum'),
('A2', 'BASIS DATA', 'buku tentang mempelajari DataBase', 'Rudi NurCahyo S.KOM', 'QUAMTUMBOOK', 2019, 'buku pembelajaran'),
('A3', 'FISIKA', 'memahami bagaimana ala semesta bekerja', 'Ibrahim Hafis S.Pd', 'QUAMTUMBOOK', 2044, 'buku pembelajaran'),
('A4', 'MATEMATIKA', 'mempelajari ilmu bilangan dan angka', 'M Daniel Reza S.Pd', 'QUAMTUMBOOK', 2045, 'buku pembelajaran'),
('A5', 'TUTORIAL JAGO FANNY', 'buku tutorial hero fanny di ML', 'Mahbubil Ghofur S.game', 'duniagemes', 2044, 'buku pembelajaran'),
('A6', 'HIDUP SEHAT', 'buku cara hidup sehat', 'Khislah Jakfar S.Pd', 'hate healthy', 2045, 'buku umum'),
('A7', 'ONE PIECE', 'bercerita petualangan luffy', 'MOH Aril', 'AnimeBook', 2046, 'komik'),
('A8', 'BHS INDONESIA', 'berbahasa indonesia baik dan benar', 'Genaro S.Pd', 'QUAMTUMBOOK', 2045, 'buku pembelajaran'),
('b12', 'tutorial main ff', '', 'bg frontal', 'mooton', 2025, 'gg'),
('b7', 'juragan empangg', 'percintaan', 'julianto dan yanto', 'empang kasih', 1993, 'buku sihir'),
('c22', 'Tutorial main ff', '', 'Arif', 'bk antis', 2022, 'game'),
('c23', 'guntur', 'drumbun', 'abadi', 'selamanya', 0, '9999'),
('c24', 'illuminate', 'ajaran sesad', 'poppy', 'illuminatin book', 2022, 'ajaran agama');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
