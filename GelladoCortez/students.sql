-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 05:59 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` varchar(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cdes` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `cdes`) VALUES
('IT 212', 'S.A.D', 'System Analysis and Design'),
('IT 212-L', 'S.A.D', 'System Analysis and Design Lab');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `idno` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`idno`, `lname`, `fname`, `mname`, `course`, `sex`) VALUES
('15-037-056', 'Armandona', 'Maria', 'M.', 'BSIT', 'F'),
('15-037-046', 'Flormata', 'Allysa', 'C.', 'BSIT', 'F'),
('15-037-069', 'Bello', 'Alexandra', 'B.', 'BSIT', 'F'),
('15-037-080', 'Benusa', 'Noel', 'D.', 'BSIT', 'M'),
('15-037-011', 'Gellado', 'Janelyn Ann', 'C.', 'BSIT', 'F'),
('15-037-044', 'Cortez', 'Franchesca Marie', 'C.', 'BSIT', 'F'),
('15-037-022', 'Orias', 'Al Francis', 'P.', 'BSIT', 'M'),
('15-037-048', 'Cortez', 'Olivia Marie', 'C.', 'BSIT', 'F'),
('15-037-123', 'World', 'Hello', 'C.', 'BSIT', 'M'),
('15-037-088', 'Caridad', 'Brixx', 'M.', 'BSIT', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
