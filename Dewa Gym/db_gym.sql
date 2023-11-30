-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 01:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayar`
--

CREATE TABLE `tb_bayar` (
  `id` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bayar`
--

INSERT INTO `tb_bayar` (`id`, `paket`, `nama`, `nomor`, `harga`, `payment`) VALUES
(1, 'Paket Kursus atau Program Kebugaran', 'Muhammad Raihan Ananda', '087839362589', '500000', 'on'),
(2, 'Paket Kursus atau Program Kebugaran', 'Aulia', '777777777', '500000', 'dana'),
(3, 'Paket Kursus atau Program Kebugaran', 'Muhammad Raihan Ananda', '', '500000', 'on'),
(4, 'Paket Kursus atau Program Kebugaran', 'Muhammad Raihan Ananda', '087839362589', '500000', 'dana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(11) NOT NULL,
  `namapaket` varchar(100) NOT NULL,
  `deskripsipaket` varchar(500) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `namapaket`, `deskripsipaket`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Paket Bulanan', 'Paket Bulanan adalah opsi yang umumnya ditawarkan oleh gym di mana Anda membayar biaya bulanan untuk mendapatkan akses tak terbatas ke fasilitas gym dan pelatihan. Ini adalah cara yang sangat populer untuk menjaga kebugaran Anda secara konsisten, karena Anda dapat mengunjungi gym sesuai keinginan Anda sepanjang bulan. Biaya bulanan ini dapat bervariasi tergantung pada gym dan fasilitas yang mereka tawarkan. ', 350000, 'images3.jpg', NULL, NULL),
(2, 'Paket Kursus atau Program Kebugaran', 'opsi hebat untuk anda yang ingin mencapai tujuan kebugaran tertentu atau ingin mengambil bagian dalam kelas kebugaran khusus. Ini adalah cara yang sangat efektif untuk mendapatkan bimbingan ahli dan motivasi tambahan dalam perjalanan kebugaran Anda.', 500000, 'images1.jpg', NULL, NULL),
(3, 'Paket Harian atau Pergi', 'Paket Harian atau Pergi adalah opsi yang sangat fleksibel untuk anda yang ingin mengakses fasilitas gym tanpa harus berlangganan jangka panjang. Ini adalah solusi ideal jika Anda tidak ingin berkomitmen dalam jangka waktu tertentu, atau jika Anda hanya ingin sesekali menggunakan fasilitas gym.', 75000, 'images2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_gym`
--

CREATE TABLE `tb_produk_gym` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `stok` bigint(20) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_produk_gym`
--

INSERT INTO `tb_produk_gym` (`id`, `namaproduk`, `stok`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio tempore quaerat quibusdam quasi minus! Ratione recusandae blanditiis animi repellat eveniet magni et ullam? Fuga assumenda labore aliquid quisquam natus eius?', 100000, 'supplemen.jpeg', NULL, NULL),
(2, 'suplement', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio tempore quaerat quibusdam quasi minus! Ratione recusandae blanditiis animi repellat eveniet magni et ullam? Fuga assumenda labore aliquid quisquam natus eius?', 50000, 'supplemen.jpeg', NULL, NULL),
(3, 'burger king ', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio tempore quaerat quibusdam quasi minus! Ratione recusandae blanditiis animi repellat eveniet magni et ullam? Fuga assumenda labore aliquid quisquam natus eius?', 25000, '• double avatars on tokyo ghoul, the second one I0 have in my profile.jpeg', NULL, NULL),
(4, 'lorem ipsum', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio tempore quaerat quibusdam quasi minus! Ratione recusandae blanditiis animi repellat eveniet magni et ullam? Fuga assumenda labore aliquid quisquam natus eius? ', 120000, 'background.jpg', '2023-10-09 19:51:48', '2023-10-09 19:51:48'),
(5, 'king sulaiman', 777, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio tempore quaerat quibusdam quasi minus! Ratione recusandae blanditiis animi repellat eveniet magni et ullam? Fuga assumenda labore aliquid quisquam natus eius?', 60000, '• double avatars on tokyo ghoul, the second one I0 have in my profile.jpeg', '2023-10-10 16:19:55', '2023-10-10 16:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'rahman', 'rahman@gmail.com', '$2y$10$IWvDSk.0S8MTctbzFxKoq.2NVhbp7ojcTIHTgSVXfrgpuptd/uDzO', '2023-10-04 20:02:53', '2023-10-04 20:02:53'),
(2, 'Raihan', 'rayhananandaa90@gmail.com', '15ec3413cbfb71942df18950df492353', NULL, NULL),
(4, 'Kingsimbolo', 'king@gmail.com', 'baa701643da1e102b798d6714a81c936', NULL, NULL),
(5, 'Syaiful Rizal', 'iful@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk_gym`
--
ALTER TABLE `tb_produk_gym`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_produk_gym`
--
ALTER TABLE `tb_produk_gym`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
