-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 04:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cornerstone_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `expires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `expires`) VALUES
(1, 'michaelgenato04@gmail.com', '405352d1a6975ff4a7aed7fddb2c6b5ac2adfc3a4a67b887469dad9d22e57d2b', 1733762903);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `blk` varchar(255) DEFAULT NULL,
  `lot` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `phasesub` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `lastname`, `firstname`, `blk`, `lot`, `street`, `phasesub`, `barangay`, `state`, `city`, `contact_number`, `email`, `password`, `mobile_number`, `middlename`) VALUES
(1, 'GENATO', 'MIKHAEL DJIMON', '70', '6', 'Haring Silangan', 'Lagro Subdivision', 'Greater Lagro', 'Metro Manila', 'Quezon City', '09705666302', 'michaelgenato04@gmail.com', '$2y$10$QkgHvxprL3uU1NQL5Oyf0Oj9vguaWU5UpjZ3jmG5We3mZQ.kElzYq', NULL, NULL),
(4, 'GENATOasd', 'MIKHAEL DJIMON', '70', '6', 'aHaring silangan st', 'Lagro Subdivision', 'Greater Lagro', 'Metro Manila', 'Quezon City', NULL, 'michaelgenato024@gmail.com', '$2y$10$FlrvF1xYleGvIS1Sby.wm.vDsvktK8xCDBB8FMoCtqaMOqsXBhhda', '09735666301', NULL),
(5, 'GENATOasd', 'MIKHAEL DJIMON', '70', '6', 'aHaring silangan st', 'Lagro Subdivision', 'Greater Lagro', 'Metro Manila', 'Quezon City', NULL, 'michaelgenato024@gmail.com', '$2y$10$6rygQmwZOq/yOjfrbjOa5eSWt.k.r.55r5p/hthkCJJPMcbWzqO7m', '09735666301', NULL),
(6, 'espina', 'pauline', '70', '6', 'haringsilangan', 'Lagro Subdivision', 'Greater Lagro', 'Metro Manila', 'Quezon City', NULL, 'hannahpauline@gmail.com', '$2y$10$p7JWBqN0MxqyVe1nOtfFSOkUjoVqSDxZrt3RdCoH9T00FEhoo3kjy', '09123456789', NULL),
(7, 'GENATO', 'MIKHAEL DJIMON', '70', '6', 'haringsilangan', 'Lamesa Heights', 'Greater Lagro', 'Metro Manila', 'Quezon City', NULL, 'juancarlo@gmail.com', '$2y$10$0kv3nYy91gJWsR3zjAYvY.G7tiguvARb3Ue6nCUTLpdhktLX5A2hi', '09321123451', 'MERCADO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
