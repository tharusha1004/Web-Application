-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2022 at 09:03 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveller`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `date` date NOT NULL,
  `destination` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `tp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `days` int(5) NOT NULL,
  `persons` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`date`, `destination`, `fname`, `tp`, `email`, `days`, `persons`) VALUES
('1990-09-08', 'Ella', 'Janith', '01547575', 'Ruwan', 5, 5),
('2022-03-01', 'Trincomalee', 'Kavinda', '0785957581', 'codse202f004@student.nibm.lk', 4, 2),
('2022-03-01', 'Ella', 'Janith', '0785957581', 'janith.kavinda3003@gmail.com', 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `fname` varchar(50) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phoneno` varchar(12) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `username`, `email`, `phoneno`, `password`, `gender`) VALUES
('abc', 'ABC', 'abc@gmail.com', '1234566', '123', 'unknown');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
