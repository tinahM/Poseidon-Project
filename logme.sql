-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 10:20 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `logme`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `areacode` int(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `petname` varchar(255) NOT NULL,
  `pettype` varchar(255) NOT NULL,
  `petcolor` varchar(255) NOT NULL,
  `refno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`firstname`, `lastname`, `areacode`, `phone`, `petname`, `pettype`, `petcolor`, `refno`) VALUES
('Marie', 'Jane', 564, 745637263, 'Jess', 'Dog', 'Gold', 89);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`name`, `description`, `quantity`, `date`) VALUES
('Enrofloxacin', 'Antibiotic', 20, '2019-10-03'),
('Equine', 'vaccine', 45, '2019-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tracy', 'tracy@email.com', '$2y$10$INolpf3WYWB9vFwCKKEife.CpffbYY0g.B7.QHv7nhTEcsQFMFuAO', '0FUL2YqOA5KQhI5pboQDCNrIfA6BctCRl95nyA38JQw73ZXp4DoOYSDQOhUQ', '2019-09-23 04:37:21', '2019-09-23 04:37:21'),
(2, 'Tinah', 'tinah@email.com', '$2y$10$qkSrv2.hcRHNGCTf/C9uie6/NHNsaSWxPy5IZYAuGz0rHUpEyE/Q6', 'OIQqNGNEuHDQJMTGGUiErPnQ53fZXyNvlvHSQww5SvgPyvDUXKOsjJ9xu3yr', '2019-09-24 15:40:12', '2019-09-24 15:40:12'),
(3, 'Longishu', 'longishu@email.com', '$2y$10$uVB2cwv2Oi8RV98hbSu1JewChnXQ/ezi5IJpCwVgJ.DklNhSNVC..', 'FrCwI8BgcfSZW3K8Qe3LPtPoSt8mTbI9pCFzG9tFS02fEaxNQbO6DA8GhfBD', '2019-09-25 04:03:19', '2019-09-25 04:03:19'),
(4, 'Faith', 'faith@email.com', '$2y$10$CJ6SBhFUQxOv0ACYtGVpZuxz9mERBcc6rsyGpN4YPdqMEAswYjn26', 'xkbqgJj5J6a2soRnpPROlAtIGcDsoR7dW4UN9DL4COiZZScH4I0euC9spefW', '2019-09-30 02:20:16', '2019-09-30 02:20:16'),
(5, 'Mary', 'mary@gmail.com', '$2y$10$526xFilJQB/o7m8vAjUAgOOAhVzHlKKMtPp0nVacBQRPYgV8//9ye', '6eozELf4lwF5sgr5n9r6eWYe8u1gap42qaTb6KU5FbTBmWytrCt57KUt4CB9', '2019-09-30 04:24:45', '2019-09-30 04:24:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
