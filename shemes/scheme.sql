-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 08:42 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheme`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `event` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g_scheme`
--

CREATE TABLE `g_scheme` (
  `department` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_scheme`
--

INSERT INTO `g_scheme` (`department`, `description`) VALUES
('Adi Dravidar and Tribal Welfare Department', 'Persons kept as bonded labour are released and rehabilitated by providing financial assistance as grant, to the tune of Rs.20,000/- Of this, a sum of Rs.1000/- each will be given immediately on relief from Bondage. Remaining (Rs.19,000/-) amount will be given for the rehabilitation through various kinds. Moreover House site pattas, houses under group housing scheme through IRDP, drinking water facility and Bank loan assistance are provided to them. Released bonded labour without any caste and creed .'),
('Adi Dravidar and Tribal Welfare Department', 'WDWdswfds'),
('Adi Dravidar and Tribal Welfare Department', 'WDWdswfds'),
('Adi Dravidar and Tribal Welfare Department', 'waedqadas');

-- --------------------------------------------------------

--
-- Table structure for table `p_scheme`
--

CREATE TABLE `p_scheme` (
  `department` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `update_detail`
--

CREATE TABLE `update_detail` (
  `email` varchar(100) NOT NULL,
  `pno` varchar(100) NOT NULL,
  `gscheme` varchar(100) NOT NULL DEFAULT 'no',
  `pscheme` varchar(100) NOT NULL DEFAULT 'no',
  `exam` varchar(100) NOT NULL DEFAULT 'no',
  `workshop` varchar(100) NOT NULL DEFAULT 'no',
  `other` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_detail`
--

INSERT INTO `update_detail` (`email`, `pno`, `gscheme`, `pscheme`, `exam`, `workshop`, `other`) VALUES
('sangeethapandian9@gmail.com', '8667261353', 'Yes', 'Yes', 'Yes', 'Yes', 'no'),
('buddhablock18@gmail.com', '8667261353', 'Yes', 'Yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('buddhablock18@gmail.com', 'sasesusha9'),
('sangeethac@buddhablock.in', 'admin!@#$%'),
('sangeethapandian9@gmail.com', 'sasesusha9');

-- --------------------------------------------------------

--
-- Table structure for table `u_detail`
--

CREATE TABLE `u_detail` (
  `email` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `p_no` varchar(100) NOT NULL,
  `update` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_detail`
--

INSERT INTO `u_detail` (`email`, `f_name`, `l_name`, `p_no`, `update`) VALUES
('sangeethapandian9@gmail.com', 'sangeetha', 'Pandian', '8667261353', 'A/C'),
('', '', '', '', 'Agriculture Department'),
('buddhablock18@gmail.com', 'sangeetha', 'Pandian', '8667261353', 'A/C');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `event` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
