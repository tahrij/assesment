-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 22.16
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
-- Database: `assesment`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbprogram`
--

CREATE TABLE `tbprogram` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbprogram`
--

INSERT INTO `tbprogram` (`id`, `judul`, `detail`) VALUES
(1, 'Desa Konoha Siapkan Program Bantuan Sosial (BANSOS)', 'Desa Konoha, Senin (31 Februari 2065), Desa Konoha bersiap-siap menyelenggarakan Program Bantuan Sosial (BANSOS) yang akan dilaksanakan pada hari Senin pekan depan, mulai pukul 07:00 pagi hingga 15:00 Waktu setempat. Acara ini diharapkan dapat memberikan bantuan kepada masyarakat desa yang membutuhkan, sebagai upaya untuk meningkatkan kesejahteraan dan membantu kelompok rentan.  Pemerintah Desa Konoha bekerja sama dengan pihak terkait dan berbagai lembaga sosial untuk menyelenggarakan program ini. BANSOS akan mencakup berbagai jenis bantuan, termasuk paket sembako, bantuan kesehatan, dan bantuan pendidikan.  Warga Desa Konoha diundang untuk hadir pada acara tersebut, yang akan berlangsung di Samping Lapang Desa. Penerima diharapkan hadir dengan membawa identitas diri dan dokumen pendukung lainnya untuk memudahkan proses distribusi bantuan.'),
(6, 'Pemilihan Hokage !!', 'Desa Konoha, 2 Februari 2023 - Pemerintah Desa Konoha dengan ini memberikan pemberitahuan penting kepada seluruh warga terkait pelaksanaan Pemilihan Hokage yang akan dilaksanakan pada tanggal 19 Februari 2023. Pemilihan ini merupakan momen bersejarah untuk menentukan pemimpin tertinggi desa yang akan membimbing dan melindungi warganya.  Untuk memastikan partisipasi maksimal dari seluruh warga, diimbau agar setiap pemilih hadir pada tanggal 19 Februari 2023, dan melaksanakan hak suaranya untuk memilih kandidat Hokage yang diinginkan. Partisipasi aktif warga adalah kunci keberhasilan demokrasi di Desa Konoha.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `username`, `password`, `nama`) VALUES
(4, 'Tahrij', '123456', 'Tahrij Ilyas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbprogram`
--
ALTER TABLE `tbprogram`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbprogram`
--
ALTER TABLE `tbprogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
