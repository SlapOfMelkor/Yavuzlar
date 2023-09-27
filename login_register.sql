-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2023 at 02:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'irfan', 'qq@gmail.com', '$2y$10$Q6Bv2Z2IhEY1g66gT/2rI.tY4C.tf8XOGyTeFYzSLD3ova1GF016q'),
(2, 'qweqwe', 'qweqwe', '$2y$10$ALWA2TmB67ubJEg4qkJDPuvyW6CsCfmFFAAmIzj7Ph10Xkur414Me'),
(3, 'q', 'qqq@gmail.com', '$2y$10$FmBOS3eKQYE8SBJiBg1cyuPV1p1.yr32UctnAEGM3QhFX0N4SXvgW'),
(4, 'qqq', 'a@hotmail.com', '$2y$10$YY9pI5a98sUUnLdHJ9B1A.0pKmhQ3UYrUNLjLRASbTel80sX7dCHu'),
(5, 'aa', 'aa@hotmail.com', '$2y$10$U7xOlFI6e8uUeyXdNAWkx.BszuawES/u7rJ/Am3gjJ447SLCmHnua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
