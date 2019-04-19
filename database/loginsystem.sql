-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 04:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `quiz1` varchar(60) DEFAULT NULL,
  `quiz2` varchar(60) DEFAULT NULL,
  `quiz3` varchar(60) DEFAULT NULL,
  `quiz4` varchar(60) DEFAULT NULL,
  `quiz5` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_pwd`, `quiz1`, `quiz2`, `quiz3`, `quiz4`, `quiz5`) VALUES
('a', 'a', '<h2>Your result for Quiz 1 = 30 %</h2>', '<h2>Your result for Quiz 2 = 20 %</h2>', '<h2>Your result for Quiz 3 = 30 %</h2>', '<h2>Your result for Quiz 4 = 20 %</h2>', '<h2>Your result for Quiz 5 = 20 %</h2>'),
('Shane', '16304236', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
