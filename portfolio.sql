-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2025 at 10:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `portfolio`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 's', 's@gmail.com', 'test', '2025-03-04 20:16:53'),
(2, 's', 's@gmail.com', 'test', '2025-03-04 20:17:44'),
(3, 's', 's@gmail.com', 'test', '2025-03-04 20:17:44'),
(4, 't', 't@gmail.com', 't', '2025-03-04 20:22:13'),
(5, 't', 't@gmail.com', 't', '2025-03-04 20:22:27'),
(6, 't', 't@gmail.com', 't', '2025-03-04 20:22:49'),
(7, 't', 't@gmail.com', 't', '2025-03-04 20:23:02'),
(8, 't', 'tes@gamil.com', 't\r\n', '2025-03-04 20:25:08'),
(9, 't', 't@gmail.com', 'test', '2025-03-04 20:28:22'),
(10, 'h', 'bgthbtg@gmail.com', 't', '2025-03-04 20:29:46'),
(11, 'test', 't@gmail.com', 't', '2025-03-04 20:33:28'),
(12, 'ggggg', 'gsdhiui@gmail.com', 'test', '2025-03-04 20:33:39'),
(13, 'yo', 'nabiontop@hotmail.com', 'yurrrr', '2025-03-04 20:34:21'),
(14, 't', 't@gmail.com', 't', '2025-03-04 20:35:29'),
(15, 't', 't@gmail.com', 't', '2025-03-04 20:36:15'),
(16, 't', 't@gmail.com', 't', '2025-03-04 20:37:42'),
(17, 't', 't@gmail.com', 't', '2025-03-04 20:38:38'),
(18, 't', 't@gmail.com', 't', '2025-03-04 20:39:15'),
(19, 't', 't@gmail.com', 't', '2025-03-04 20:39:33'),
(20, 't', 'test@gmail.com', 'tfghjhgjg', '2025-03-04 20:45:29'),
(21, 't', 't@gmail.com', 'hghhfhfghfhgfh test', '2025-03-04 20:46:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
