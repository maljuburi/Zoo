-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 01:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maljuburi`
--

-- --------------------------------------------------------

--
-- Table structure for table `zoo`
--

CREATE TABLE `zoo` (
  `anid` smallint(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `type` enum('Amphibians','Birds','Fish','Invertebrates','Mammals','Reptiles') NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zoo`
--

INSERT INTO `zoo` (`anid`, `name`, `dob`, `type`, `gender`) VALUES
(1, 'Whale', '2017-09-05', 'Mammals', 'Female'),
(2, 'Snake', '2017-09-15', 'Reptiles', 'Female'),
(3, 'Deer', '2017-09-02', 'Mammals', 'Female'),
(4, 'Frog', '2017-09-26', 'Amphibians', 'Male'),
(5, 'Owl', '2017-09-15', 'Birds', 'Male'),
(6, 'Toad', '2017-09-14', 'Amphibians', 'Unknown'),
(7, 'Stork', '2017-09-11', 'Birds', 'Female'),
(8, 'Guppy', '2017-10-02', 'Fish', 'Female'),
(9, 'Kingfisher', '2017-09-07', 'Birds', 'Male'),
(10, 'Silverfish', '2017-08-11', 'Invertebrates', 'Unknown'),
(11, 'Mantis', '2017-10-05', 'Invertebrates', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zoo`
--
ALTER TABLE `zoo`
  ADD PRIMARY KEY (`anid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zoo`
--
ALTER TABLE `zoo`
  MODIFY `anid` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
