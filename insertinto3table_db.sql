-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 03:06 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insertinto3table_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `contact_number` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `last_name`, `first_name`, `contact_number`, `gender`) VALUES
(2, 'Obal', 'Maria', '09999999999', 'Female'),
(4, 'toledo', 'junil', '09678678888', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `student_info1`
--

CREATE TABLE `student_info1` (
  `course_id` int(11) NOT NULL,
  `course` text NOT NULL,
  `teacher` text NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info1`
--

INSERT INTO `student_info1` (`course_id`, `course`, `teacher`, `student_id`) VALUES
(2, 'BS Accountancy', 'Mam Maricar Bautista', 2),
(4, 'BS Computer Science', 'Sir John Doe', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student_info2`
--

CREATE TABLE `student_info2` (
  `subject_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `section` text NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info2`
--

INSERT INTO `student_info2` (`subject_id`, `subject`, `section`, `student_id`) VALUES
(2, 'Eng301', 'B203', 2),
(4, 'Math201', 'B201', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_info1`
--
ALTER TABLE `student_info1`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_info2`
--
ALTER TABLE `student_info2`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info1`
--
ALTER TABLE `student_info1`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info2`
--
ALTER TABLE `student_info2`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_info1`
--
ALTER TABLE `student_info1`
  ADD CONSTRAINT `student_info1_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`student_id`) ON DELETE CASCADE;

--
-- Constraints for table `student_info2`
--
ALTER TABLE `student_info2`
  ADD CONSTRAINT `student_info2_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`student_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
