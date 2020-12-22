-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 04:20 PM
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
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donorinfo`
--

CREATE TABLE `donorinfo` (
  `serial` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `BloodGroup` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Lastdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorinfo`
--

INSERT INTO `donorinfo` (`serial`, `Name`, `BloodGroup`, `Phone`, `Age`, `Lastdate`) VALUES
(3, 'sakil mia', 'A+', '01679162664', '23', '2020-12-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donorinfo`
--
ALTER TABLE `donorinfo`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donorinfo`
--
ALTER TABLE `donorinfo`
  MODIFY `serial` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
