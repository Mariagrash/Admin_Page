-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 03:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd_208`
--

-- --------------------------------------------------------

--
-- Table structure for table `animetitle`
--

CREATE TABLE `animetitle` (
  `animetitle_id` int(11) NOT NULL,
  `animetitle_category` int(11) NOT NULL,
  `animetitle_text` varchar(135) NOT NULL,
  `animetitle_date` date NOT NULL,
  `animetitle_watched` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animetitle`
--

INSERT INTO `animetitle` (`animetitle_id`, `animetitle_category`, `animetitle_text`, `animetitle_date`, `animetitle_watched`) VALUES
(1, 2, 'oh my', '2022-10-29', 1),
(2, 0, 'black clover', '2022-10-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(36) NOT NULL,
  `lastname` varchar(36) NOT NULL,
  `email` varchar(130) NOT NULL,
  `address` varchar(130) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirmpassword` varchar(25) NOT NULL,
  `user_type` varchar(36) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `address`, `password`, `confirmpassword`, `user_type`) VALUES
(1, 'Keenan Paul', 'Mendiola', 'kpmendiola@usc.edu.ph', 'Talamban, Cebu City', 'sirgwapo', 'sirgwapo', 'admin'),
(2, 'Alyssa', 'Cazarte', '21103760@usc.edu.ph', 'Talamban, Cebu City', '123', '123', 'user'),
(3, 'Mary Grace', 'Elias', '21103887@usc.edu.ph', 'Talamban, Cebu City', 'grace', 'grace', 'user'),
(4, 'Priscilla', 'Pable', '21103805@usc.edu.ph', 'Talamban, Cebu City', 'prepre', 'prepre', 'user'),
(5, 'Alyssa', 'Cazarte', 'leenunuyaa@gmail.com', 'Pinamungajan', '12345678', '12345678', 'user'),
(7, 'Anna', 'Jorge', '21103819@usc.edu.ph', 'Bulak', '12345', '12345', ''),
(10, 'Joy', 'Misa', 'joy@gmail.com', 'Nasipit', 'joyjoy', 'joyjoy', ''),
(11, 'Jai', 'Ypil', 'ypil@gmail.com', 'New', 'gwapa', 'gwapa', ''),
(12, 'Richel', 'Bacayan', '21103819@usc.edu.ph', 'Cebu City', 'miluvs', '', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animetitle`
--
ALTER TABLE `animetitle`
  ADD PRIMARY KEY (`animetitle_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animetitle`
--
ALTER TABLE `animetitle`
  MODIFY `animetitle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
