-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 09:03 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewuCourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `courseId` varchar(50) NOT NULL,
  `section` int(50) NOT NULL,
  `room` int(10) NOT NULL,
  `time` float(10,2) NOT NULL,
  `day` varchar(10) NOT NULL,
  `Instructor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseId`, `section`, `room`, `time`, `day`, `Instructor`) VALUES
(1, 'Cse105', 1, 8, 8.30, 'MW', 'dssh'),
(3, 'Cse109', 1, 112, 8.30, 'MW', 'FAZ'),
(4, 'Cse109', 2, 113, 1.30, 'ST', 'FAZ'),
(6, 'Cse109', 3, 100, 10.10, 'MW', ''),
(7, 'Cse225', 5, 550, 11.50, 'MW', 'MSJ'),
(8, 'Cse477', 1, 521, 11.50, 'MW', 'DSRM'),
(9, 'Cse442', 1, 1, 10.10, 'TR', 'NYA'),
(10, 'Cse435', 2, 3, 10.10, 'MW', 'TBA'),
(12, 'Cse475', 1, 567, 1.30, 'ST', 'AKD'),
(18, 'Cse207', 1, 10, 10.10, 'TR', ''),
(19, 'Cse105', 2, 1, 1.30, 'ST', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
