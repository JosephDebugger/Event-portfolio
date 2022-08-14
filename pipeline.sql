-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 05:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pipeline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'admin', '123##');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `additional_info` varchar(1000) NOT NULL,
  `category` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `date`, `time`, `image`, `description`, `additional_info`, `category`, `priority`) VALUES
(1, 'heading', '2021-09-28', '', '../admin/upload/post/240870251_4388275911210585_8997417831364420946_n.jpg', 'cvncnbnbvnbvnbvnbvn', 'khgjhgjhgjhgjhgjhgjhgjhgjhgjhgytguytuytuytuytuy', 'mercedes', 'audi'),
(2, 'heading', '2021-09-09', '', '../admin/upload/post/240870251_4388275911210585_8997417831364420946_n.jpg', 'fxccbcbvcbvcbvchg hgjfg fjghfhgfhghgfhg', 'fxccbcbvcbvcbvchg hgjfg fjghfhgfhghgfhg', 'mercedes', 'audi'),
(3, 'heading2', '2021-09-14', '', '../admin/upload/post/240870251_4388275911210585_8997417831364420946_n.jpg', '123123123412423rwedfsfwdf', 'rqwrqerwerwerwerw', 'mercedes', 'mercedes'),
(4, 'heading3', '2021-10-09', '', '../admin/upload/post/144856879_100104782115216_5311416105658999661_n.jpg', 'qweqweqweqweq', 'zzzzzzzzz', 'saab', 'saab'),
(6, 'heading4', '2021-09-21', '', '../admin/upload/post/1559372_716129491800425_6531636805335055846_o.jpg', 'fsjkdfsdfksjdfhsdfksjdfhsdfkjshdkfjsdfksjdhfksdjfhskdjfhskdjf', 'sdfsdfsdfsdfsdf', 'mercedes', 'saab'),
(8, 'heading0', '2021-09-21', '06:57:43', '../admin/upload/post/acoustic_guitar_anatomy.jpg', 'rewerwerwerwerwerwerwerwerwerwerwer', 'werwerwerwer', 'saab', 'audi'),
(9, 'বিশ্বমানের নগরী গড়তে আসুন বিশ্বমানের নাগরিক হই', '2021-09-21', '07:06:11', '../Admin/upload/post/Joseph Dias.jpg', 'abc', 'def', 'city corporation', 'volvo'),
(10, 'heading5', '2021-09-21', '04:24:33', '../admin/upload/post/CSE 01406362 (Joseph Dias).png', 'THe j bame of our school is south haliashahar school', 'THe j bame of our school is south haliashahar school', 'saab', 'volvo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
