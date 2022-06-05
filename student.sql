-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 03:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `nsuballo`
--

CREATE TABLE `nsuballo` (
  `n` text DEFAULT NULL,
  `pp1` text DEFAULT NULL,
  `pp2` text DEFAULT NULL,
  `pp3` text DEFAULT NULL,
  `pp4` text DEFAULT NULL,
  `pp5` text DEFAULT NULL,
  `pe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nsuballo`
--

INSERT INTO `nsuballo` (`n`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`, `pe`) VALUES
('ravi', 'sub1', 'na', 'na', 'na', 'na', 0),
('rajesh', 'sub2', 'na', 'na', 'na', 'na', 22),
('aaa', 'sub1', 'na', 'na', 'na', 'na', 2),
('bhagwan', 'sub3', 'sub2', 'na', 'na', 'na', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suballo`
--

CREATE TABLE `suballo` (
  `Name` text DEFAULT 'na',
  `Pre1` text DEFAULT 'na',
  `Pre2` text DEFAULT 'na',
  `Pre3` text DEFAULT 'na',
  `Pre4` text DEFAULT 'na',
  `Pre5` text DEFAULT 'na',
  `Perc` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suballo`
--

INSERT INTO `suballo` (`Name`, `Pre1`, `Pre2`, `Pre3`, `Pre4`, `Pre5`, `Perc`) VALUES
('ravi', 'sub1', 'na', 'na', 'na', 'na', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nsuballo`
--
ALTER TABLE `nsuballo`
  ADD UNIQUE KEY `n` (`n`) USING HASH;

--
-- Indexes for table `suballo`
--
ALTER TABLE `suballo`
  ADD UNIQUE KEY `Name` (`Name`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
