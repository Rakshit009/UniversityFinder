-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2021 at 07:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UniversityFinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `College`
--

CREATE TABLE `College` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `College`
--

INSERT INTO `College` (`id`, `Name`, `location`, `details`, `Image`) VALUES
(1, 'IIT Delhi', 'Delhi', 'Indian Institute of Technology Delhi is one of the Twenty Three IITs created to be Centres of Excellence for training, research and development in science, engineering and technology in India. Established as College of Engineering in 1961.', 'iitdelhi.jpg'),
(2, 'IIT Bombay', 'Mumbai', 'Indian Institute of Technology Bombay is a public technical and research university located in Powai in Mumbai, Maharashtra, India', 'iitbombay.jpg'),
(3, 'IIT Lucknow', 'Lucknow', 'Indian Institute of Information Technology, Lucknow is an Indian Institute of Information Technology in Lucknow that focuses on Information Technology. Fo', 'iitlucknow.jpg'),
(4, 'IIT Banglore', 'Banglore', 'The International Institute of Information Technology, Bangalore is a private technical and research university in Bangalore, India.', 'iitbanglore.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`id`, `Name`) VALUES
(2, 'Bachelor of Technology'),
(3, 'P.G. Diploma of I.I.T. Delhi'),
(4, 'Master of Business Administration'),
(5, 'Master of Design'),
(6, 'Master of Technology'),
(7, 'Master of Science (Research)'),
(8, 'Doctor of Philosophy');

-- --------------------------------------------------------

--
-- Table structure for table `Degree`
--

CREATE TABLE `Degree` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Degree`
--

INSERT INTO `Degree` (`id`, `Name`) VALUES
(1, 'Bachelor of Arts'),
(2, 'Bachelor of Commerce'),
(3, 'Bachelor of Science'),
(4, 'Bachelor of Education'),
(5, 'B.A.-B.Ed. Integrated Course'),
(6, 'B.Sc.-B.Ed. Integrated Course');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `College`
--
ALTER TABLE `College`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Degree`
--
ALTER TABLE `Degree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `College`
--
ALTER TABLE `College`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Courses`
--
ALTER TABLE `Courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Degree`
--
ALTER TABLE `Degree`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
