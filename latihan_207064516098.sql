-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2023 pada 08.55
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_207064516098`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_207064516098`
--

CREATE TABLE `siswa_207064516098` (
  `siswa_207064516098_id` int(11) NOT NULL,
  `siswa_207064516098_nis` int(20) NOT NULL,
  `siswa_207064516098_nama` varchar(100) NOT NULL,
  `siswa_207064516098_kelas` varchar(10) NOT NULL,
  `siswa_207064516098_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `siswa_207064516098`
--

INSERT INTO `siswa_207064516098` (`siswa_207064516098_id`, `siswa_207064516098_nis`, `siswa_207064516098_nama`, `siswa_207064516098_kelas`, `siswa_207064516098_jurusan`) VALUES
(1, 237001, 'Fachry', 'Semester 1', 'Informatika'),
(2, 237002, 'Adit', 'Semester 1', 'Informatika'),
(3, 237003, 'Budi hartono', 'Semester 1', 'Informatika'),
(7, 237004, 'Zainal Ahmad', 'Semester 1', 'Informatika'),
(8, 237005, 'Galih', 'Semester 1', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa_207064516098`
--
ALTER TABLE `siswa_207064516098`
  ADD PRIMARY KEY (`siswa_207064516098_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa_207064516098`
--
ALTER TABLE `siswa_207064516098`
  MODIFY `siswa_207064516098_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
