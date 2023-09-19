-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 07:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `aid` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`aid`, `title`, `body`, `start`, `end`, `image_path`, `date_created`) VALUES
(1, 'TEST ANNOUNCEMENT 1', 'TEST ANNOUNCEMENT 1', '2023-08-23', '2023-08-25', 'uploads/images (1).jfif', '2023-08-23'),
(2, 'TEST ANNOUNCEMENT 2', 'TEST ANNOUNCEMENT 2', '2023-08-23', '2023-08-25', 'uploads/images (1).jfif', '2023-08-23'),
(3, 'TEST ANNOUNCEMENT 3', 'TEST ANNOUNCEMENT 3', '2023-08-23', '2023-08-23', 'uploads/images (1).jfif', '2023-08-23'),
(4, 'TEST ANNOUNCEMENT 4', 'TEST ANNOUNCEMENT 4', '2023-08-23', '2023-08-23', 'uploads/images (1).jfif', '2023-08-23'),
(5, 'TEST ANNOUNCEMENT', 'TEST ANNOUNCEMENT', '2023-08-24', '2023-08-29', 'uploads/368697399_326528553144869_1293469090526344343_n.jpg', '2023-08-24'),
(6, 'TESTING LANG TLGA ', 'TESTING LANG TLGA', '2023-08-24', '2023-08-31', 'uploads/368697399_326528553144869_1293469090526344343_n.jpg', '2023-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `role`) VALUES
(1, 'ADMIN'),
(2, 'TEACHER'),
(3, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `eid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `enrollment_type` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `gen_ave` int(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`eid`, `email`, `fname`, `mname`, `lname`, `dob`, `address`, `barangay`, `city`, `zip`, `enrollment_type`, `uid`, `gen_ave`, `level`, `status`, `date_created`) VALUES
(1, 'revcoreitsolution@gmail.com', 'Thres', 'Dela', 'Cruz', '2020-06-28', '10 u206', 'Tarraville', 'Quezon City', '1210', 'NEW', '', 80, '1', 'NEW', '2023-08-28'),
(2, 'revcoreitsolution@gmail.com', 'Thres', 'Dela', 'Cruz', '2017-06-06', '10 u206', 'Tarraville', 'Quezon City', '1210', 'TRANSFEREE', '', 90, '2', 'NEW', '2023-08-28'),
(3, 'revcoreitsolution@gmail.com', 'Enid', 'Enid', 'Enid', '2017-06-06', '10 u206', 'Tarraville', 'Quezon City', '1210', 'NEW', '', 90, '1', 'NEW', '2023-08-28'),
(4, 'revcoreitsolution@gmail.com', 'Enid', 'Enid', 'Enid Test', '2019-10-28', '10 u206', 'Tarraville', 'Quezon City', '1210', 'TRANSFEREE', '', 90, '1', 'APPROVED', '2023-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `forgot_account`
--

CREATE TABLE `forgot_account` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_generated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot_account`
--

INSERT INTO `forgot_account` (`id`, `uid`, `code`, `status`, `date_generated`) VALUES
(1, '870023', 7029, 'RENEWED', '2023-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `lostandfound`
--

CREATE TABLE `lostandfound` (
  `fid` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `foundby` varchar(50) NOT NULL,
  `foundin` varchar(50) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `another` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lostandfound`
--

INSERT INTO `lostandfound` (`fid`, `item`, `foundby`, `foundin`, `image_path`, `status`, `another`, `date`) VALUES
(1, 'IPHONE 64 GB', 'FULLY PAID', 'TEST', 'uploads/368697399_326528553144869_1293469090526344343_n.jpg', 'LOST', '', '2023-08-26'),
(2, 'IPHONE 64 GB', 'FULLY PAID', 'TEST', 'uploads/368697399_326528553144869_1293469090526344343_n.jpg', 'FOUND', '', '2023-08-26'),
(3, 'IPHONE 64 GB', 'FULLY PAID', 'TEST', 'uploads/mybill10082023.png', 'LOST', 'another', '2023-08-28'),
(4, 'I GOT LOST', 'LOST', 'LOST', 'uploads/mybill10082023.png', 'LOST', 'LOST IN PARADISE', '2023-08-28'),
(5, 'LOST MYSELF', 'FINDING', 'NEMO', 'uploads/mybill10082023.png', 'LOST', 'TEST', '2023-08-28'),
(6, 'IPHONE 64 GB', 'FULLY PAID', 'TEST', 'uploads/gmap.png', 'FOUND', 'TEST NOTEES ENID', '2023-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `map_direction`
--

CREATE TABLE `map_direction` (
  `id` int(11) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `building` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_direction`
--

INSERT INTO `map_direction` (`id`, `mid`, `room`, `building`) VALUES
(1, '1', 'ROOM001', 'BUILDING 1'),
(2, '2', 'ROOM002', 'BUILDING 2'),
(3, '3', 'ROOM003', 'BUILDING 3'),
(4, '4', 'ROOM004', 'BUILDING 4'),
(5, '5', 'ROOM005', 'BUILDING 5'),
(6, '6', 'ROOM006', 'BUILDING 6'),
(7, '7', 'ROOM007', 'BUILDING 7'),
(8, '8', 'ROOM008', 'BUILDING 8'),
(9, '9', 'ROOM009', 'BUILDING 9');

-- --------------------------------------------------------

--
-- Table structure for table `remember_me_tokens`
--

CREATE TABLE `remember_me_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remember_me_tokens`
--

INSERT INTO `remember_me_tokens` (`id`, `user_id`, `token`, `expiration_date`) VALUES
(1, 1, 'jReP1vnpbctqORu0akckdcEvKQj6Nm3E', '2023-09-27 20:21:33'),
(2, 1, 'pPWSdkCdGWKpdzKmKIPNFpkRrM9pf6uL', '2023-09-27 21:48:24'),
(3, 3, '18io06Fj6LzT9SkSjWVO2bfktfws2yaJ', '2023-09-27 21:59:39'),
(4, 1, 'a17wRccbXMPVWTHmLm2tPp9VFwZh9nII', '2023-09-27 22:04:47'),
(5, 3, 'CtKuHO2ZMV1UVBiPvF9oOODzrSQxRSEx', '2023-09-27 22:07:06'),
(6, 1, '9B5qSxuTPFpdexBR0VmmX46PbaSscqFK', '2023-10-03 20:04:56'),
(7, 1, 'afpkNr0yTKPu5QHABMRor3Psqh7RPyQX', '2023-10-09 14:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `school_whereabout`
--

CREATE TABLE `school_whereabout` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `room` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_whereabout`
--

INSERT INTO `school_whereabout` (`id`, `uid`, `time_in`, `time_out`, `room`, `date`) VALUES
(1, '934889', '2023-08-21 12:35:38', '2023-08-21 12:35:58', 'RM001', '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `section_legen`
--

CREATE TABLE `section_legen` (
  `sid` int(11) NOT NULL,
  `min` int(50) NOT NULL,
  `max` int(50) NOT NULL,
  `level` int(50) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_legen`
--

INSERT INTO `section_legen` (`sid`, `min`, `max`, `level`, `section`) VALUES
(1, 90, 99, 1, 'SECTION 1'),
(2, 80, 89, 1, 'SECTION 2'),
(3, 75, 79, 1, 'SECTION 3'),
(4, 90, 99, 2, 'SECTION 1'),
(5, 80, 89, 2, 'SECTION 2'),
(6, 75, 79, 2, 'SECTION 3'),
(7, 90, 99, 3, 'SECTION 1'),
(8, 80, 89, 3, 'SECTION 2'),
(9, 75, 79, 3, 'SECTION 3'),
(10, 90, 99, 4, 'SECTION 1'),
(11, 80, 89, 4, 'SECTION 2'),
(12, 75, 79, 4, 'SECTION 3'),
(13, 90, 99, 5, 'SECTION 1'),
(14, 80, 89, 5, 'SECTION 2'),
(15, 75, 79, 5, 'SECTION 3'),
(16, 90, 99, 6, 'SECTION 1'),
(17, 80, 89, 6, 'SECTION 2'),
(18, 75, 79, 6, 'SECTION 3'),
(19, 90, 99, 7, 'SECTION 1'),
(20, 80, 89, 7, 'SECTION 2'),
(21, 75, 79, 7, 'SECTION 3'),
(22, 90, 99, 8, 'SECTION 1'),
(23, 80, 89, 8, 'SECTION 2'),
(24, 75, 79, 8, 'SECTION 3');

-- --------------------------------------------------------

--
-- Table structure for table `subject_matter`
--

CREATE TABLE `subject_matter` (
  `sm` int(11) NOT NULL,
  `grade` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `subjcode` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_matter`
--

INSERT INTO `subject_matter` (`sm`, `grade`, `subject`, `subjcode`, `time`, `room`) VALUES
(1, 1, 'SCIENCE', 'SC001', '7:00 AM - 8:00 AM', 'RM001'),
(2, 1, 'ENGLISH', 'EN001', '9:00 AM - 10:00 AM', 'RM001'),
(3, 1, 'MATH', 'MT001', '11:00 AM - 12:00 AM', 'RM001'),
(4, 1, 'ARALING PANLIPUNAN', 'AP001', '1:00 PM - 2:00 PM', 'RM001'),
(5, 1, 'FILIPINO', 'FIL001', '2:00 PM - 3:00 PM', 'RM001'),
(6, 1, 'MAPEH', 'MH001', '3:00 PM - 4:00 PM', 'RM001'),
(7, 1, 'GMRC', 'GM001', '4:00 PM - 5:00 PM', 'RM001'),
(8, 2, 'SCIENCE', 'SC002', '7:00 AM - 8:00 AM', 'RM002'),
(9, 2, 'ENGLISH', 'EN002', '9:00 AM - 10:00 AM', 'RM002'),
(10, 2, 'MATH', 'MT002', '11:00 AM - 12:00 AM', 'RM002'),
(11, 2, 'ARALING PANLIPUNAN', 'AP002', '1:00 PM - 2:00 PM', 'RM002'),
(12, 2, 'FILIPINO', 'FIL002', '2:00 PM - 3:00 PM', 'RM002'),
(13, 2, 'MAPEH', 'MH002', '3:00 PM - 4:00 PM', 'RM002'),
(14, 2, 'GMRC', 'GM002', '4:00 PM - 5:00 PM', 'RM002'),
(15, 3, 'SCIENCE', 'SC003', '7:00 AM - 8:00 AM', 'RM003'),
(16, 3, 'ENGLISH', 'EN003', '9:00 AM - 10:00 AM', 'RM003'),
(17, 3, 'MATH', 'MT003', '11:00 AM - 12:00 AM', 'RM003'),
(18, 3, 'ARALING PANLIPUNAN', 'AP003', '1:00 PM - 2:00 PM', 'RM003'),
(19, 3, 'FILIPINO', 'FIL003', '2:00 PM - 3:00 PM', 'RM003'),
(20, 3, 'MAPEH', 'MH003', '3:00 PM - 4:00 PM', 'RM003'),
(21, 3, 'GMRC', 'GM003', '4:00 PM - 5:00 PM', 'RM003'),
(22, 4, 'SCIENCE', 'SC004', '7:00 AM - 8:00 AM', 'RM004'),
(23, 4, 'ENGLISH', 'EN004', '9:00 AM - 10:00 AM', 'RM004'),
(24, 4, 'MATH', 'MT004', '11:00 AM - 12:00 AM', 'RM004'),
(25, 4, 'ARALING PANLIPUNAN', 'AP004', '1:00 PM - 2:00 PM', 'RM004'),
(26, 4, 'FILIPINO', 'FIL004', '2:00 PM - 3:00 PM', 'RM004'),
(27, 4, 'MAPEH', 'MH004', '3:00 PM - 4:00 PM', 'RM004'),
(28, 4, 'GMRC', 'GM004', '4:00 PM - 5:00 PM', 'RM004'),
(29, 5, 'SCIENCE', 'SC005', '7:00 AM - 8:00 AM', 'RM005'),
(30, 5, 'ENGLISH', 'EN005', '9:00 AM - 10:00 AM', 'RM005'),
(31, 5, 'MATH', 'MT005', '11:00 AM - 12:00 AM', 'RM005'),
(32, 5, 'ARALING PANLIPUNAN', 'AP005', '1:00 PM - 2:00 PM', 'RM005'),
(33, 5, 'FILIPINO', 'FIL005', '2:00 PM - 3:00 PM', 'RM005'),
(34, 5, 'MAPEH', 'MH005', '3:00 PM - 4:00 PM', 'RM005'),
(35, 5, 'GMRC', 'GM005', '4:00 PM - 5:00 PM', 'RM005'),
(36, 6, 'SCIENCE', 'SC006', '7:00 AM - 8:00 AM', 'RM006'),
(37, 6, 'ENGLISH', 'EN006', '9:00 AM - 10:00 AM', 'RM006'),
(38, 6, 'MATH', 'MT006', '11:00 AM - 12:00 AM', 'RM006'),
(39, 6, 'ARALING PANLIPUNAN', 'AP006', '1:00 PM - 2:00 PM', 'RM006'),
(40, 6, 'FILIPINO', 'FIL006', '2:00 PM - 3:00 PM', 'RM006'),
(41, 6, 'MAPEH', 'MH006', '3:00 PM - 4:00 PM', 'RM006'),
(42, 6, 'GMRC', 'GM006', '4:00 PM - 5:00 PM', 'RM006'),
(43, 7, 'SCIENCE', 'SC007', '7:00 AM - 8:00 AM', 'RM007'),
(44, 7, 'ENGLISH', 'EN007', '9:00 AM - 10:00 AM', 'RM007'),
(45, 7, 'MATH', 'MT007', '11:00 AM - 12:00 AM', 'RM007'),
(46, 7, 'ARALING PANLIPUNAN', 'AP007', '1:00 PM - 2:00 PM', 'RM007'),
(47, 7, 'FILIPINO', 'FIL007', '2:00 PM - 3:00 PM', 'RM007'),
(48, 7, 'MAPEH', 'MH007', '3:00 PM - 4:00 PM', 'RM007'),
(49, 7, 'GMRC', 'GM007', '4:00 PM - 5:00 PM', 'RM007'),
(50, 8, 'SCIENCE', 'SC008', '7:00 AM - 8:00 AM', 'RM008'),
(51, 8, 'ENGLISH', 'EN008', '9:00 AM - 10:00 AM', 'RM008'),
(52, 8, 'MATH', 'MT008', '11:00 AM - 12:00 AM', 'RM008'),
(53, 8, 'ARALING PANLIPUNAN', 'AP008', '1:00 PM - 2:00 PM', 'RM008'),
(54, 8, 'FILIPINO', 'FIL008', '2:00 PM - 3:00 PM', 'RM008'),
(55, 8, 'MAPEH', 'MH008', '3:00 PM - 4:00 PM', 'RM008'),
(56, 8, 'GMRC', 'GM008', '4:00 PM - 5:00 PM', 'RM008');

-- --------------------------------------------------------

--
-- Table structure for table `user_attendance`
--

CREATE TABLE `user_attendance` (
  `id` int(11) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `uid` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_attendance`
--

INSERT INTO `user_attendance` (`id`, `time_in`, `time_out`, `uid`, `date`) VALUES
(1, '2023-08-20 05:45:29', '2023-08-24 02:54:00', '934889', '2023-08-20'),
(2, '2023-08-21 12:16:36', '2023-08-24 02:54:00', '934889', '2023-08-21'),
(3, '2023-08-24 02:48:55', '2023-08-24 02:54:00', '934889', '2023-08-24'),
(4, '2023-08-24 03:31:35', '2023-08-24 03:31:45', '870023', '2023-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `sid` int(11) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` int(10) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`sid`, `uid`, `fname`, `mname`, `lname`, `gender`, `birthdate`, `address`, `contact`, `level`, `section`) VALUES
(1, '870023', 'Enid Dine', 'Angelo Olegna', 'Santiago Ogaitnas', 'Male', '1995-10-02', 'Bulacan, Bulacan', '0916653189', 1, ''),
(2, '684686', 'Enid', 'Angelo', 'Santiago', 'Male', '1995-10-02', 'Bulacan, Bulacan', '0916653189', 1, 'SECTION 1'),
(3, '934889', 'Enid', 'Angelo', 'Santiago', 'Male', '1995-10-02', 'Bulacan, Bulacan', '0916653189', 1, 'SECTION 1'),
(5, '790608', 'Dine', 'Enid', 'Enid Test', '', '2019-10-28', '10', '', 1, 'SECTION 1');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `designation` int(10) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `uid`, `email`, `password`, `designation`, `code`, `status`, `date_created`) VALUES
(1, '870023', 'revcoreitsolution@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 7599, 'INVALID', '2023-08-19'),
(2, '684686', 'revcoreitsolution@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 7962, 'INVALID', '2023-08-19'),
(3, '934889', 'revcoreitsolution@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 3, 7190, 'INVALID', '2023-08-19'),
(7, '790608', 'revcoreitsolution@gmail.com', '8b4f415c24cffe9a3fcf6b927d442b32', 3, 8435, 'INVALID', '2023-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `rid` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `request_type` varchar(100) NOT NULL,
  `date_requested` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`rid`, `uid`, `request_type`, `date_requested`, `status`) VALUES
(1, '934889', 'REPORT OF GRADE', '2023-08-21', 'COMPLETED'),
(2, '934889', 'ENROLLMENT', '2023-08-21', 'IN-PROGRESS'),
(3, '934889', 'GOOD MORAL', '2023-08-21', 'OPEN'),
(4, '934889', 'FORM 137', '2023-08-21', 'OPEN'),
(5, '934889', 'GOOD MORAL', '2023-08-23', 'COMPLETED'),
(6, '934889', 'GOOD MORAL', '2023-08-24', 'IN-PROGRESS'),
(7, '934889', 'FORM 137', '2023-08-24', 'COMPLETED'),
(8, '790608', 'ENROLLMENT', '2023-08-28', 'OPEN');

-- --------------------------------------------------------

--
-- Table structure for table `user_security`
--

CREATE TABLE `user_security` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_security`
--

INSERT INTO `user_security` (`id`, `uid`, `email`, `code`, `status`, `date_created`) VALUES
(1, '870023', 'revcoreitsolution@gmail.com', 9436, 'USED', '2023-08-22'),
(2, '870023', 'revcoreitsolution@gmail.com', 7519, 'USED', '2023-08-23'),
(3, '870023', 'revcoreitsolution@gmail.com', 7011, 'USED', '2023-08-23'),
(4, '870023', 'revcoreitsolution@gmail.com', 8615, 'USED', '2023-08-23'),
(5, '870023', 'revcoreitsolution@gmail.com', 8866, 'USED', '2023-08-23'),
(6, '870023', 'revcoreitsolution@gmail.com', 8017, 'USED', '2023-08-23'),
(7, '870023', 'revcoreitsolution@gmail.com', 6759, 'USED', '2023-08-23'),
(8, '870023', 'revcoreitsolution@gmail.com', 7572, 'USED', '2023-08-23'),
(9, '870023', 'revcoreitsolution@gmail.com', 8567, 'USED', '2023-08-23'),
(10, '870023', 'revcoreitsolution@gmail.com', 7433, 'USED', '2023-08-23'),
(11, '870023', 'revcoreitsolution@gmail.com', 8612, 'USED', '2023-08-23'),
(12, '870023', 'revcoreitsolution@gmail.com', 7459, 'USED', '2023-08-23'),
(13, '870023', 'revcoreitsolution@gmail.com', 9815, 'USED', '2023-08-24'),
(14, '684686', 'revcoreitsolution@gmail.com', 8785, 'USED', '2023-08-24'),
(15, '870023', 'revcoreitsolution@gmail.com', 7243, 'USED', '2023-08-24'),
(16, '934889', 'revcoreitsolution@gmail.com', 8271, 'USED', '2023-08-24'),
(17, '870023', 'revcoreitsolution@gmail.com', 8842, 'USED', '2023-08-24'),
(18, '684686', 'revcoreitsolution@gmail.com', 9397, 'USED', '2023-08-24'),
(19, '934889', 'revcoreitsolution@gmail.com', 7661, 'USED', '2023-08-24'),
(20, '870023', 'revcoreitsolution@gmail.com', 7251, 'USED', '2023-08-26'),
(21, '870023', 'revcoreitsolution@gmail.com', 8079, 'USED', '2023-08-26'),
(22, '870023', 'revcoreitsolution@gmail.com', 7797, 'USED', '2023-08-26'),
(23, '870023', 'revcoreitsolution@gmail.com', 8721, 'USED', '2023-08-26'),
(24, '870023', 'revcoreitsolution@gmail.com', 8422, 'USED', '2023-08-26'),
(25, '870023', 'revcoreitsolution@gmail.com', 7448, 'USED', '2023-08-26'),
(26, '870023', 'revcoreitsolution@gmail.com', 7046, 'USED', '2023-08-26'),
(27, '684686', 'revcoreitsolution@gmail.com', 7218, 'USED', '2023-08-26'),
(28, '870023', 'revcoreitsolution@gmail.com', 7104, 'USED', '2023-08-26'),
(29, '684686', 'revcoreitsolution@gmail.com', 7373, 'USED', '2023-08-26'),
(30, '870023', 'revcoreitsolution@gmail.com', 7692, 'USED', '2023-08-26'),
(31, '684686', 'revcoreitsolution@gmail.com', 6689, 'USED', '2023-08-26'),
(32, '934889', 'revcoreitsolution@gmail.com', 7573, 'USED', '2023-08-26'),
(33, '870023', 'revcoreitsolution@gmail.com', 7619, 'USED', '2023-08-26'),
(34, '870023', 'revcoreitsolution@gmail.com', 7899, 'USED', '2023-08-27'),
(35, '870023', 'revcoreitsolution@gmail.com', 8607, 'USED', '2023-08-28'),
(36, '934889', 'revcoreitsolution@gmail.com', 8779, 'USED', '2023-08-28'),
(37, '870023', 'revcoreitsolution@gmail.com', 6757, 'USED', '2023-08-28'),
(38, '934889', 'revcoreitsolution@gmail.com', 9054, 'USED', '2023-08-28'),
(39, '870023', 'revcoreitsolution@gmail.com', 7232, 'USED', '2023-08-28'),
(40, '934889', 'revcoreitsolution@gmail.com', 8986, 'USED', '2023-08-28'),
(41, '934889', 'revcoreitsolution@gmail.com', 7232, 'USED', '2023-08-28'),
(42, '870023', 'revcoreitsolution@gmail.com', 7663, 'USED', '2023-08-28'),
(43, '870023', 'revcoreitsolution@gmail.com', 8871, 'USED', '2023-08-28'),
(44, '870023', 'revcoreitsolution@gmail.com', 7023, 'USED', '2023-08-28'),
(45, '870023', 'revcoreitsolution@gmail.com', 8472, 'USED', '2023-08-28'),
(46, '870023', 'revcoreitsolution@gmail.com', 8721, 'USED', '2023-08-28'),
(47, '934889', 'revcoreitsolution@gmail.com', 7868, 'USED', '2023-08-28'),
(48, '870023', 'revcoreitsolution@gmail.com', 8574, 'UNUSED', '2023-08-28'),
(49, '870023', 'revcoreitsolution@gmail.com', 7810, 'UNUSED', '2023-08-28'),
(50, '870023', 'revcoreitsolution@gmail.com', 9389, 'UNUSED', '2023-08-28'),
(51, '870023', 'revcoreitsolution@gmail.com', 9114, 'USED', '2023-08-28'),
(52, '870023', 'revcoreitsolution@gmail.com', 7722, 'USED', '2023-08-28'),
(53, '870023', 'revcoreitsolution@gmail.com', 9256, 'USED', '2023-08-28'),
(54, '934889', 'revcoreitsolution@gmail.com', 9408, 'USED', '2023-08-28'),
(55, '870023', 'revcoreitsolution@gmail.com', 7777, 'USED', '2023-08-28'),
(56, '934889', 'revcoreitsolution@gmail.com', 7461, 'USED', '2023-08-28'),
(57, '870023', 'revcoreitsolution@gmail.com', 7247, 'USED', '2023-08-28'),
(58, '870023', 'revcoreitsolution@gmail.com', 6156, 'USED', '2023-09-03'),
(59, '870023', 'revcoreitsolution@gmail.com', 9474, 'USED', '2023-09-03'),
(60, '870023', 'revcoreitsolution@gmail.com', 7777, 'USED', '2023-09-03'),
(61, '870023', 'revcoreitsolution@gmail.com', 2684, 'USED', '2023-09-03'),
(62, '870023', 'revcoreitsolution@gmail.com', 8029, 'USED', '2023-09-03'),
(63, '870023', 'revcoreitsolution@gmail.com', 7097, 'USED', '2023-09-03'),
(64, '870023', 'revcoreitsolution@gmail.com', 6825, 'USED', '2023-09-03'),
(65, '870023', 'revcoreitsolution@gmail.com', 1231, 'USED', '2023-09-03'),
(66, '870023', 'revcoreitsolution@gmail.com', 8478, 'USED', '2023-09-03'),
(67, '870023', 'revcoreitsolution@gmail.com', 8202, 'USED', '2023-09-03'),
(68, '870023', 'revcoreitsolution@gmail.com', 8068, 'USED', '2023-09-03'),
(69, '870023', 'revcoreitsolution@gmail.com', 5513, 'USED', '2023-09-03'),
(70, '870023', 'revcoreitsolution@gmail.com', 8594, 'USED', '2023-09-03'),
(71, '870023', 'revcoreitsolution@gmail.com', 3947, 'USED', '2023-09-03'),
(72, '870023', 'revcoreitsolution@gmail.com', 6869, 'USED', '2023-09-03'),
(73, '870023', 'revcoreitsolution@gmail.com', 1472, 'USED', '2023-09-04'),
(74, '870023', 'revcoreitsolution@gmail.com', 2321, 'USED', '2023-09-04'),
(75, '870023', 'revcoreitsolution@gmail.com', 9131, 'USED', '2023-09-04'),
(76, '870023', 'revcoreitsolution@gmail.com', 1891, 'USED', '2023-09-04'),
(77, '870023', 'revcoreitsolution@gmail.com', 8317, 'USED', '2023-09-04'),
(78, '870023', 'revcoreitsolution@gmail.com', 9749, 'USED', '2023-09-04'),
(79, '870023', 'revcoreitsolution@gmail.com', 3114, 'USED', '2023-09-04'),
(80, '870023', 'revcoreitsolution@gmail.com', 3216, 'USED', '2023-09-04'),
(81, '870023', 'revcoreitsolution@gmail.com', 9046, 'USED', '2023-09-04'),
(82, '870023', 'revcoreitsolution@gmail.com', 7458, 'USED', '2023-09-06'),
(83, '870023', 'revcoreitsolution@gmail.com', 7167, 'USED', '2023-09-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `forgot_account`
--
ALTER TABLE `forgot_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lostandfound`
--
ALTER TABLE `lostandfound`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `map_direction`
--
ALTER TABLE `map_direction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remember_me_tokens`
--
ALTER TABLE `remember_me_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `school_whereabout`
--
ALTER TABLE `school_whereabout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_legen`
--
ALTER TABLE `section_legen`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subject_matter`
--
ALTER TABLE `subject_matter`
  ADD PRIMARY KEY (`sm`);

--
-- Indexes for table `user_attendance`
--
ALTER TABLE `user_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user_security`
--
ALTER TABLE `user_security`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forgot_account`
--
ALTER TABLE `forgot_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lostandfound`
--
ALTER TABLE `lostandfound`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `map_direction`
--
ALTER TABLE `map_direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `remember_me_tokens`
--
ALTER TABLE `remember_me_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school_whereabout`
--
ALTER TABLE `school_whereabout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_legen`
--
ALTER TABLE `section_legen`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subject_matter`
--
ALTER TABLE `subject_matter`
  MODIFY `sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user_attendance`
--
ALTER TABLE `user_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_security`
--
ALTER TABLE `user_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `remember_me_tokens`
--
ALTER TABLE `remember_me_tokens`
  ADD CONSTRAINT `remember_me_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
