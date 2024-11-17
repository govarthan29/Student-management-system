-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 08:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etf`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_details`
--

CREATE TABLE `s_details` (
  `SID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NearestCity` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Guardian` varchar(50) NOT NULL,
  `Subject_1` varchar(50) NOT NULL,
  `Subject_2` varchar(50) NOT NULL,
  `Subject_3` varchar(50) NOT NULL,
  `Subject_4` varchar(50) NOT NULL,
  `Subject_5` varchar(50) NOT NULL,
  `Subject_6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_details`
--

INSERT INTO `s_details` (`SID`, `FirstName`, `LastName`, `Email`, `NearestCity`, `Course`, `Guardian`, `Subject_1`, `Subject_2`, `Subject_3`, `Subject_4`, `Subject_5`, `Subject_6`) VALUES
(12, 'hg', 'gfjg', 'Kireesan@gmail.com', 'jaffna', 'degree', 'PQR', 'etf', 'ordbms', '', '', 'HCL', ''),
(100, 'ABC', 'CDE', 'Go@gmail.com', 'jaffna', 'degree', 'PQR', '', '', '', '', '', ''),
(102, '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_details`
--
ALTER TABLE `s_details`
  ADD PRIMARY KEY (`SID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
