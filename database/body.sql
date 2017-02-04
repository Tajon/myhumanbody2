-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 12:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhumanbody`
--

-- --------------------------------------------------------

--
-- Table structure for table `body`
--

CREATE TABLE `body` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `action` text NOT NULL,
  `section` text NOT NULL,
  `number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`id`, `name`, `action`, `section`, `number`) VALUES
(1, 'jaw', 'chew', 'head', '2'),
(2, 'neck', 'look', 'head', '7'),
(3, 'shoulder', 'reach', 'arm', '3'),
(4, 'elbow', 'flex', 'arm', '3'),
(5, 'wrist', 'flick', 'arm', '8'),
(6, 'hand', 'grab', 'arm', '27'),
(7, 'groin', 'thrust', 'core', '1'),
(8, 'knee', 'squat', 'leg', '3'),
(9, 'ankle', 'walk', 'leg', '14'),
(10, 'feet', 'stand', 'leg', '26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body`
--
ALTER TABLE `body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
