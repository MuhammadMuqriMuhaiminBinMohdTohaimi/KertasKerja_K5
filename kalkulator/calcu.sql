-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 03:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calcu`
--

-- --------------------------------------------------------

--
-- Table structure for table `kira`
--

CREATE TABLE `kira` (
  `n1` int(255) NOT NULL,
  `n2` int(255) NOT NULL,
  `op` varchar(10) NOT NULL,
  `result` int(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kira`
--

INSERT INTO `kira` (`n1`, `n2`, `op`, `result`, `catatan`) VALUES
(0, 0, 'op', 0, ''),
(3, 3, '+', 6, ''),
(32, 3, '+', 35, 'catatan'),
(32, 3, '+', 35, 'hahahahaa tu pon tak tahu ke'),
(90, 9, '+', 99, 'hahaha tu pon tak tahu'),
(90, 9, '+', 99, 'hahaha tu pon tak tahu'),
(90, 9, '+', 99, 'Sorry No command found'),
(21, 21, '+', 42, 'konek');

-- --------------------------------------------------------

--
-- Table structure for table `loginpengguna`
--

CREATE TABLE `loginpengguna` (
  `username` varchar(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginpengguna`
--

INSERT INTO `loginpengguna` (`username`, `password`) VALUES
('admin', 123),
('hahaha', 909),
('hazim', 2001),
('jojo', 2003),
('kaka', 2004),
('muqri', 2002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginpengguna`
--
ALTER TABLE `loginpengguna`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
