-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 12:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aes`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `id` varchar(2) DEFAULT NULL,
  `card_holder_name` varchar(16) DEFAULT NULL,
  `card_number` varchar(32) DEFAULT NULL,
  `card_expiry` varchar(32) DEFAULT NULL,
  `card_cvv` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`id`, `card_holder_name`, `card_number`, `card_expiry`, `card_cvv`) VALUES
('id', 'card_holder_name', 'card_number', 'card_expiry', 'card_cvv'),
('1', 'oujha', 'OXhWUFRwRGZsWSszWW9LRW9RcnREQT09', 'Z1c4VnZSR1BEQXN2VytUb08zZm1oUT09', 'OXhWUFRwRGZsWSszWW9LRW9RcnREQT09'),
('2', 'piyush', 'OGNpd1hYbFlkeXFCYUZPSmNBQWJqdz09', 'cithZnJESTRDUmljV3U2aTdBQkZzZz09', 'OGNpd1hYbFlkeXFCYUZPSmNBQWJqdz09'),
('3', 'shashank', 'cmcrRXVpY05DWXRFSnpOQi9GSWEwZz09', 'MjgzWGs0c0FCYVRQMzlWSkRFWEtFQT09', 'cmcrRXVpY05DWXRFSnpOQi9GSWEwZz09'),
('4', 'pappu', 'dTU1UkFybVRXc3QvUmRhdWlBSEJUQT09', 'VHNTMExnNEJ3MW42eE9MUWptTVdPQT09', 'dTU1UkFybVRXc3QvUmRhdWlBSEJUQT09'),
('5', 'panda', 'TElCZFd6WTNlbmRubDVVY3V6eEF6dz09', 'Qjl5OFM5ZzI5VkMrLzg3eVJvUHJ2UT09', 'TElCZFd6WTNlbmRubDVVY3V6eEF6dz09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`) VALUES
(74, 'piyushyadav1105@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'piyush'),
(77, '', 'd41d8cd98f00b204e9800998ecf8427e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
