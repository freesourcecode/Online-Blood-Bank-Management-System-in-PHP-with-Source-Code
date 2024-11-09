-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 06:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `bloodid` int(10) NOT NULL,
  `Bloodname` varchar(50) NOT NULL,
  `Availibility` varchar(50) NOT NULL,
  `unit` int(5) NOT NULL,
  `hospital` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `hospital` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` int(12) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`hospital`, `address`, `city`, `contact`, `date`, `time`) VALUES
('Makati Hospital', 'Brgy. 1, Poblacion', 'Kabankalan City', 2147483647, '0000-00-00', '12:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `fullname`, `age`, `bloodgroup`, `city`, `phno`, `gender`) VALUES
(1, 'july King', 21, 'AB+', 'Kabankalan City', '09120118874', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `bloodgroup` varchar(4) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `user`, `pass`, `useremail`, `bloodgroup`, `gender`, `massage`) VALUES
(2, 'adones', '12345', 'adones@gmail.com', 'AB+', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `requestblood`
--

CREATE TABLE `requestblood` (
  `id` int(50) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `unit` int(100) NOT NULL,
  `time-for-flood` varchar(10) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestblood`
--

INSERT INTO `requestblood` (`id`, `user`, `Address`, `bloodgroup`, `phno`, `unit`, `time-for-flood`, `time`, `message`) VALUES
(1, 'adones', 'Brgy. Suay, Himamaylan City', 'AB+', '09123456789', 1, 'Tomorrow M', '2021-02-03 02:47:46.353556', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`bloodid`);

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`hospital`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`,`fullname`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`,`useremail`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `bloodid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
