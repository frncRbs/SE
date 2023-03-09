-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 02:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculturedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int(50) NOT NULL,
  `content1.1` varchar(250) NOT NULL,
  `content1.2` varchar(250) NOT NULL,
  `content2.1` varchar(250) NOT NULL,
  `content2.2` varchar(250) NOT NULL,
  `content3.1` varchar(250) NOT NULL,
  `content3.2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `content1.1`, `content1.2`, `content2.1`, `content2.2`, `content3.1`, `content3.2`) VALUES
(3, 'Ayala District City', 'Agriculturist', 'Ayala District City', 'Agriculture', 'Ayala District City', 'Agriculturers');

-- --------------------------------------------------------

--
-- Table structure for table `home_imgs`
--

CREATE TABLE `home_imgs` (
  `id` int(20) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_imgs`
--

INSERT INTO `home_imgs` (`id`, `image1`, `image2`, `image3`) VALUES
(4, 'img/81c6178eb95418ae8a886498e81c61a2agriBack.jpg', 'img/81c6178eb95418ae8a886498e81c61a2agriBack1.jpg', 'img/81c6178eb95418ae8a886498e81c61a2agriBack2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `role`, `status`, `image`) VALUES
(26, 'admin', 'admin', 'admin', 'a', 'Admin', 'Active', 'img/a0ddc6c1a90f60d434c948992a143da9awit.jpg'),
(29, 'France', 'Rebollos', 'france123', 'a', 'User', 'Active', 'img/f8bfa3bdbe2e5bfa2f626228f8224897Okeeeh kayeee.png'),
(30, 'Gemini', 'Soleso', 'Gemini', 's', 'User', 'Active', 'img/a02bd106a02e4d5802861efd2f001f80awit.jpg'),
(31, 'morfydd', 'alar', 'morf', 'a', 'User', 'Active', 'img/117e54be734bd30ba022f4d99f091eb2user_icon.png'),
(32, 'Jethro', 'Guerrero', 'jethro', 'a', 'User', 'Active', 'img/7738559652c8ea6faee4e54ab1683e54Okeeeh kayeee.png'),
(33, 'Niel', 'Soleso', 'niel', 'a', 'User', 'Active', 'img/753ea4ea5e05c7938b76e35a55b56c6dpudPanda.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_imgs`
--
ALTER TABLE `home_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_imgs`
--
ALTER TABLE `home_imgs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
