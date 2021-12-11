-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 06:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agonasca`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'asca', 'asca');

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `ent_id` int(11) NOT NULL,
  `ktu_id` int(11) NOT NULL,
  `ev_no` int(11) NOT NULL,
  `members` int(11) NOT NULL,
  `file` varchar(1500) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`ent_id`, `ktu_id`, `ev_no`, `members`, `file`, `status`, `position`) VALUES
(1, 1, 1, 1, 'i love you', 'Approved', 1),
(2, 2, 3, 1, 'i hate you', 'Approved', 0),
(3, 3, 2, 2, 'i really hate everyone', 'Reject', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ev_no` int(10) NOT NULL,
  `ev_name` varchar(50) NOT NULL,
  `entry_date` date NOT NULL,
  `last_date` date NOT NULL,
  `Rules` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ev_no`, `ev_name`, `entry_date`, `last_date`, `Rules`) VALUES
(1, 'dance', '2021-11-03', '2021-11-18', 'guhgiu'),
(2, 'light music', '2021-11-18', '2021-11-26', 'fggiufytdf'),
(3, 'art', '2021-11-03', '2021-11-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `Event_Id` int(30) NOT NULL,
  `Event` varchar(30) NOT NULL,
  `Time` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `ev_no` int(11) NOT NULL,
  `entry_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `KtuId` varchar(30) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ProfilePic` blob NOT NULL,
  `Year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`KtuId`, `Name`, `Password`, `ProfilePic`, `Year`) VALUES
('TVE19MCA 1', '', 'mca2019', '', 2019),
('TVE19MCA 10', '', 'mca2019', '', 2019),
('TVE19MCA 11', '', 'mca2019', '', 2019),
('TVE19MCA 12', '', 'mca2019', '', 2019),
('TVE19MCA 13', '', 'mca2019', '', 2019),
('TVE19MCA 14', '', 'mca2019', '', 2019),
('TVE19MCA 15', '', 'mca2019', '', 2019),
('TVE19MCA 16', '', 'mca2019', '', 2019),
('TVE19MCA 17', '', 'mca2019', '', 2019),
('TVE19MCA 18', '', 'mca2019', '', 2019),
('TVE19MCA 19', '', 'mca2019', '', 2019),
('TVE19MCA 2', '', 'mca2019', '', 2019),
('TVE19MCA 20', '', 'mca2019', '', 2019),
('TVE19MCA 21', '', 'mca2019', '', 2019),
('TVE19MCA 22', '', 'mca2019', '', 2019),
('TVE19MCA 23', '', 'mca2019', '', 2019),
('TVE19MCA 24', '', 'mca2019', '', 2019),
('TVE19MCA 25', '', 'mca2019', '', 2019),
('TVE19MCA 26', '', 'mca2019', '', 2019),
('TVE19MCA 27', '', 'mca2019', '', 2019),
('TVE19MCA 28', '', 'mca2019', '', 2019),
('TVE19MCA 29', '', 'mca2019', '', 2019),
('TVE19MCA 3', '', 'mca2019', '', 2019),
('TVE19MCA 30', '', 'mca2019', '', 2019),
('TVE19MCA 31', '', 'mca2019', '', 2019),
('TVE19MCA 32', '', 'mca2019', '', 2019),
('TVE19MCA 33', '', 'mca2019', '', 2019),
('TVE19MCA 34', '', 'mca2019', '', 2019),
('TVE19MCA 35', '', 'mca2019', '', 2019),
('TVE19MCA 36', '', 'mca2019', '', 2019),
('TVE19MCA 37', '', 'mca2019', '', 2019),
('TVE19MCA 38', '', 'mca2019', '', 2019),
('TVE19MCA 39', '', 'mca2019', '', 2019),
('TVE19MCA 4', '', 'mca2019', '', 2019),
('TVE19MCA 40', '', 'mca2019', '', 2019),
('TVE19MCA 41', '', 'mca2019', '', 2019),
('TVE19MCA 42', '', 'mca2019', '', 2019),
('TVE19MCA 43', '', 'mca2019', '', 2019),
('TVE19MCA 44', '', 'mca2019', '', 2019),
('TVE19MCA 45', '', 'mca2019', '', 2019),
('TVE19MCA 46', '', 'mca2019', '', 2019),
('TVE19MCA 47', '', 'mca2019', '', 2019),
('TVE19MCA 48', '', 'mca2019', '', 2019),
('TVE19MCA 49', '', 'mca2019', '', 2019),
('TVE19MCA 5', '', 'mca2019', '', 2019),
('TVE19MCA 50', '', 'mca2019', '', 2019),
('TVE19MCA 51', '', 'mca2019', '', 2019),
('TVE19MCA 52', '', 'mca2019', '', 2019),
('TVE19MCA 53', '', 'mca2019', '', 2019),
('TVE19MCA 54', '', 'mca2019', '', 2019),
('TVE19MCA 55', '', 'mca2019', '', 2019),
('TVE19MCA 56', '', 'mca2019', '', 2019),
('TVE19MCA 57', '', 'mca2019', '', 2019),
('TVE19MCA 58', '', 'mca2019', '', 2019),
('TVE19MCA 59', '', 'mca2019', '', 2019),
('TVE19MCA 6', '', 'mca2019', '', 2019),
('TVE19MCA 60', '', 'mca2019', '', 2019),
('TVE19MCA 7', '', 'mca2019', '', 2019),
('TVE19MCA 8', '', 'mca2019', '', 2019),
('TVE19MCA 9', '', 'mca2019', '', 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`ent_id`),
  ADD KEY `foreign key` (`ev_no`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ev_no`);

--
-- Indexes for table `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`Event_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`KtuId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `ent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ev_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `live`
--
ALTER TABLE `live`
  MODIFY `Event_Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entry`
--
ALTER TABLE `entry`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`ev_no`) REFERENCES `event` (`ev_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
