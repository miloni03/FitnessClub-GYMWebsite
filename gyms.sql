-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 11:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`id`, `name`, `email`, `msg`) VALUES
(1, 'Miloni', 'shahmiloni@gmail.com', 'everything going good'),
(2, 'purvi', 'purviparmar3011@gmail.com', 'all good'),
(3, 'disha', 'disha@gmail.com', 'all going good'),
(4, 'deesha', 'deesh.kp1212@gmail.com', 'no query!!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `experince` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`id`, `name`, `email`, `rate`, `experince`, `msg`) VALUES
(1, 'kishor', 'kishorshah164@gmail.com', 'Excellent', 'Good', 'good'),
(2, 'miloni', 'shahmiloni51@gmail.com', 'Excellent', 'Good', 'good'),
(3, 'purvi', 'purviparmar3011@gmail.com', 'Good', 'Good', 'all good'),
(4, 'disha', 'dissha@gmail.com', 'Excellent', 'Excellent', 'Best Experience'),
(5, 'deesha', 'deesh.kp1212@gmail.com', 'Excellent', 'Excellent', 'best experience with fitness club!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `member_data`
--

CREATE TABLE `member_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `op1` varchar(255) NOT NULL,
  `op2` varchar(255) NOT NULL,
  `op3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_data`
--

INSERT INTO `member_data` (`id`, `name`, `email`, `phone`, `address`, `city`, `weight`, `op1`, `op2`, `op3`) VALUES
(1, 'Miloni', 'shahzeal99@gmail.com', 98076543, 'Malad', 'Mumbai', '45', 'Google', 'No', 'Vip'),
(2, 'purvi', 'purviparmar3011@gmail.com', 5555342, 'Borrivali', 'Mumbai', '50', 'A friend or colleague', 'Yes', 'Vip'),
(3, 'disha', 'disha@gmail.com', 9845127410, 'Mira Road', 'Mumbai', '45', 'Google', 'Yes', 'Beginner'),
(4, 'deesha', 'deesh.kp1212@gmail.com', 9854123674, 'Malad', 'Mumbai', '45', 'Google', 'Yes', 'Beginner');

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `cvc` varchar(255) NOT NULL,
  `cexp` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`id`, `name`, `email`, `cno`, `cvc`, `cexp`, `amount`) VALUES
(1, 'Miloni', 'shahzeal99@gmail.com', '78654', '788', '56788', '3456'),
(2, 'purvi', 'purviparmar3011@gmail.com', '56778', '43566', '676', '5000'),
(3, 'purvi', 'purviparmar3011@gmail.com', '56778', '43566', '676', '5000'),
(4, 'disha', 'disha@gmail.com', '2540', '154', '12/21', '2500'),
(5, 'deesha', 'deesh.kp1212@gmail.com', '455', '1845', '22/22', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `email`, `password`) VALUES
(1, 'miloni', 'shahmiloni@gmail.com', '17c0d4ee5ba4da3cd4dd04d7d5d56c1c'),
(2, 'kishor', 'kish@gmail.com', '866e09729ff6bea8cd0aac76e9d74d88'),
(3, 'purvi', 'shahmiloni51@gmail.com', '4c4410b38783a9531caec2898e78ad59'),
(4, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
(5, 'disha', 'disha@gmail.com', '741fd4e081208df4bb46052b08abb511'),
(6, 'deesha', 'deesh.kp1212@gmail.com', 'd1e3960696d110c8afbe002567920dd0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_data`
--
ALTER TABLE `member_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_data`
--
ALTER TABLE `member_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
