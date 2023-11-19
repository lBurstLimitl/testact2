-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 05:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbaccessusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `petid` int(255) NOT NULL,
  `medcondition` varchar(255) NOT NULL,
  `medic` varchar(255) NOT NULL,
  `allergy` varchar(255) NOT NULL,
  `surgproced` varchar(255) NOT NULL,
  `treatdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `petid` int(255) NOT NULL,
  `ownerid` int(255) DEFAULT NULL,
  `petname` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`petid`, `ownerid`, `petname`, `breed`, `gender`, `birthdate`) VALUES
(1, NULL, '123', '123', 123, '0000-00-00'),
(2, NULL, '123', '123', 123, '0000-00-00'),
(3, NULL, '123', '123', 123, '0000-00-00'),
(4, 3, '123', '123', 123, '0000-00-00'),
(5, 5, '123', '123', 123, '0000-00-00'),
(6, 7, 'Bea', 'Bea', 0, '0000-00-00'),
(7, 5, 'KOKO', 'ASPIN', 0, '0000-00-00'),
(8, 5, '123', '123', 123, '0000-00-00'),
(9, 5, '123', '123', 123, '0000-00-00'),
(10, 5, '123', '123', 123, '0000-00-00'),
(11, 5, '123', '123', 123, '0000-00-00'),
(12, 5, '123', '123', 123, '0000-00-00'),
(13, 5, '123', '123', 123, '2002-01-15'),
(14, 5, 'aDOd', 'asodDO', 0, '2002-05-04'),
(15, 5, '12311', 'aqwe', 0, '2002-12-03'),
(16, 5, 'asdasd', 'dasdad', 0, '0000-00-00'),
(17, 5, 'asdasd', 'dasdad', 0, '0000-00-00'),
(18, 5, 'asd', 'asd', 0, '2002-12-11'),
(19, 5, '456', '456', 456, '2002-01-23'),
(20, 5, 'rty', 'rty', 0, '2002-12-12'),
(21, 5, 'erte', 'erte', 0, '2002-01-12'),
(22, 5, 'zxc', 'zxc', 0, '2111-12-12'),
(23, 5, 'zxc', 'zxc', 0, '2222-12-12'),
(24, 5, 'zxccc', 'zxccc', 0, '2332-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `transac`
--

CREATE TABLE `transac` (
  `transid` int(255) NOT NULL,
  `ownerid` int(255) NOT NULL,
  `payamount` int(255) NOT NULL,
  `paydate` date NOT NULL,
  `paymethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `regdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact`, `username`, `password`, `regdate`) VALUES
(2, 'Allen', 'Pascual', 'nazarhene@yahoo.com', 0, 'Allen', '500bde0337758c1e07d73f8f1e90d6da4a092e6c', '2023-11-07'),
(3, 'jordan', 'jordan', 'jordan@gmail.com', 0, 'jordan', '1cb5bd5a9e45420321f44c72da5d90d7f0432ffb', '2023-11-07'),
(4, 'poasod', 'aspdoapdo', 'apsodpad@yahoo.com', 0, 'qweqe', '056eafe7cf52220de2df36845b8ed170c67e23e3', '2023-11-07'),
(5, 'Allen', 'Pascual', 'Nazarhene@yahoo.com', 0, 'Allen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2023-11-07'),
(7, 'Bea', 'Bea', 'Bea@gmail.com', 1221, 'Bea', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2023-11-07'),
(8, 'asda', 'asda', 'asda@asdla.com', 123, 'asd', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2023-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `vac`
--

CREATE TABLE `vac` (
  `petid` int(255) NOT NULL,
  `vaccinename` varchar(255) NOT NULL,
  `vdate` date NOT NULL,
  `nextvdate` date NOT NULL,
  `vetinfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD KEY `FK_TO_PET` (`petid`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`petid`),
  ADD KEY `FK_TO_OWNER` (`ownerid`);

--
-- Indexes for table `transac`
--
ALTER TABLE `transac`
  ADD PRIMARY KEY (`transid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vac`
--
ALTER TABLE `vac`
  ADD KEY `FK_TO_PET1` (`petid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transac`
--
ALTER TABLE `transac`
  MODIFY `transid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medical`
--
ALTER TABLE `medical`
  ADD CONSTRAINT `FK_TO_PET` FOREIGN KEY (`petid`) REFERENCES `pets` (`petid`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `FK_TO_OWNER` FOREIGN KEY (`ownerid`) REFERENCES `users` (`id`);

--
-- Constraints for table `vac`
--
ALTER TABLE `vac`
  ADD CONSTRAINT `FK_TO_PET1` FOREIGN KEY (`petid`) REFERENCES `pets` (`petid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
