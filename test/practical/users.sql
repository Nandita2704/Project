-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 06:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Johan', 'johan@gmail.com', '8955200003', '17, mohanlal gandhi park', NULL, '$2y$10$NFPCeFyWldtK5pmikwo6weRIV7iiDHr4FcvJsHXlpBDX/pM0mERQG', NULL, '2022-02-18 05:18:55', '2022-02-18 05:18:55'),
(2, 'Herry', 'herry@gmail.com', '8800880033', 'Adarsh Nagar', NULL, '$2y$10$QQoc1eqokx.TuTrHu1iCoOFag/kk4MN/uzWlut604LG36LNGTRkxK', NULL, '2022-02-18 05:18:55', '2022-02-18 05:18:55'),
(3, 'Alish', 'Alish@gmail.com', '8700110099', 'Shahibagh', NULL, '$2y$10$JXFu7Iyrg5nycG45SBYl6euNeD5jesc6QE.osHpwu1bZKCHvBV.ra', NULL, '2022-02-18 05:18:55', '2022-02-18 05:18:55'),
(4, 'BoB', 'bob@gmail.com', '8899008877', 'Nava Vadaj', NULL, '$2y$10$nQgJoZpuQwWFCF/XyA5OHeRSDknrRDKNyTIpZWjb2UzXiSmCKZ3uy', NULL, '2022-02-18 05:18:55', '2022-02-18 05:18:55'),
(5, 'Jerry', 'jerry@gmail.com', '8811001100', 'Narangpura', NULL, '$2y$10$B8u7SEExDWFH1I3GBWDwxulVhvF9YKLhfH5dl1RKONdUH5WEwjtcS', NULL, '2022-02-18 05:18:55', '2022-02-18 05:18:55'),
(6, 'Jorge', 'Jorge@gmail.com', '9900110022', 'Prahlad Nagar', NULL, '$2y$10$Z63RkN1iXMQ626BKs8.JqudUJlMQFZ0oIMuo1IRl/YYKZbKVpc7mq', NULL, '2022-02-18 05:18:56', '2022-02-18 05:18:56'),
(7, 'Rahul', 'rahul@gmail.com', '9001001122', 'Chand Kheda', NULL, '$2y$10$NRgYxLDT3ADdGAhLvqg1e.ji1gWVBm/PEGpSKtIpjSmv.OFzE6am2', NULL, '2022-02-18 05:18:56', '2022-02-18 05:18:56'),
(8, 'Ruhi', 'ruhi@gmail.com', '9900881177', 'Gandhi Nagar', NULL, '$2y$10$81pfQf1iepcHQhw/wHku7OOci1valh.B6jpKxjqBHa5XBh/Hx7Q72', NULL, '2022-02-18 05:18:56', '2022-02-18 05:18:56'),
(9, 'Megh', 'megh@gmail.com', '7677889900', 'S.G. Highway', NULL, '$2y$10$jMCLp2vKvR.kdrcbPF6WYuK91iSY1Z2pTHeI0OapZHhltOyAITgLO', NULL, '2022-02-18 05:18:56', '2022-02-18 05:18:56'),
(10, 'Raj', 'raj@gmail.com', '8700870099', 'Shashtri Nagar', NULL, '$2y$10$cSrSuT/q/PevwMK0wC1klOTK3Mbryr..j/dvAdtATDrVdvj9aMSxC', NULL, '2022-02-18 05:18:56', '2022-02-18 05:18:56'),
(11, 'abc', 'abc@gmail.com', '8890904567', 'Subhas Nagar', NULL, '$2y$10$BUHxiVf3eqtN0GVGYHcZEOt2QE.0GYrZot9aN2PhioO/k/Z.7RcnG', NULL, '2022-02-18 12:04:52', '2022-02-18 12:04:52');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
