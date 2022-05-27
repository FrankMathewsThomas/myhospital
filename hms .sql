-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 10:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(2, 'frank', '12345678', ''),
(3, 'frank', '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(8, 'Homeopath', 0, 20, 500, '2021-11-30', '1:15 PM', '2021-11-29 18:30:00', 1, 1, '2021-11-30'),
(9, 'Dermatologist', 11, 18, 800, '2021-12-03', '4:15 PM', '2021-12-02 18:30:00', 0, 1, '2021-12-03'),
(10, 'General Physician', 10, 18, 300, '2021-11-10', '11:15 AM', '2021-11-09 18:30:00', 1, 1, '2021-11-10'),
(11, 'Ayurveda', 13, 22, 500, '2021-11-25', '3:45 PM', '2021-11-24 18:30:00', 0, 1, '2021-11-25'),
(12, 'Ayurveda', 13, 18, 500, '2021-11-10', '7:15 PM', '2021-11-09 18:30:00', 1, 1, '2021-11-10'),
(13, 'Ayurveda', 13, 18, 500, '2021-11-10', '7:15 PM', '2021-11-09 18:30:00', 1, 1, '2021-11-10'),
(14, 'Gynecologist/Obstetrician', 9, 23, 500, '2021-11-26', '2:45 AM', '2021-11-25 18:30:00', 1, 1, '2021-11-26'),
(15, 'Orthopedic', 16, 18, 400, '2021-11-22', '7:00 PM', '2021-11-21 18:30:00', 1, 0, '2021-11-22'),
(16, 'Ear-Nose-Throat (Ent) Specialist', 15, 18, 300, '2021-11-23', '3:30 PM', '2021-11-22 18:30:00', 1, 1, '2021-11-23'),
(17, 'Homeopath', 12, 26, 400, '2021-11-26', '9:30 AM', '2021-11-25 18:30:00', 1, 1, '2021-11-26'),
(18, '', 0, 16, 0, '', '', '0000-00-00 00:00:00', 1, 1, ''),
(19, 'General Physician', 10, 27, 300, '2021-11-25', '12:15 AM', '2021-11-24 18:30:00', 1, 1, '2021-11-25'),
(20, 'Orthopedic', 16, 18, 400, '2021-11-25', '1:30 PM', '2021-11-24 18:30:00', 1, 0, '2021-11-25'),
(21, 'Orthopedic', 16, 31, 400, '2021-11-25', '3:00 PM', '2021-11-24 18:30:00', 1, 0, '2021-11-25'),
(22, 'Dentist', 14, 18, 600, '2021-11-30', '12:30 PM', '2021-11-29 18:30:00', 1, 1, '2021-11-30'),
(23, 'Orthopedic', 16, 18, 400, '2021-11-30', '3:30 PM', '2021-11-29 18:30:00', 0, 1, '2021-11-30'),
(24, 'Dermatologist', 11, 39, 800, '2021-12-19', '12:00 AM', '2021-12-18 18:30:00', 1, 1, '2021-12-19'),
(25, 'Dermatologist', 11, 18, 800, '2021-12-07', '9:00 PM', '2021-12-06 18:30:00', 1, 1, '2021-12-07'),
(26, 'Dentist', 14, 40, 600, '2021-12-30', '2:00 PM', '2021-12-29 18:30:00', 1, 1, '2021-12-30'),
(27, 'Gynecologist/Obstetrician', 9, 18, 500, '2021-12-09', '3:15 PM', '2021-12-08 18:30:00', 1, 1, '2021-12-09'),
(28, 'Orthopedic', 16, 18, 400, '2021-12-25', '10:45 AM', '2021-12-24 18:30:00', 1, 0, '2021-12-25'),
(29, 'Gynecologist/Obstetrician', 9, 18, 500, '2021-12-13', '3:30 PM', '2021-12-12 18:30:00', 1, 1, '2021-12-13'),
(30, 'Gynecologist/Obstetrician', 9, 18, 500, '2021-12-13', '9:30 PM', '2021-12-12 18:30:00', 1, 1, '2021-12-13'),
(31, 'General Physician', 10, 18, 300, '2021-12-16', '6:30 AM', '2021-12-15 18:30:00', 1, 1, '2021-12-16'),
(32, 'virology', 19, 18, 500, '2021-12-16', '11:30 AM', '2021-12-15 18:30:00', 0, 1, '2021-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(9, 'Gynecologist/Obstetrician', 'Dr.Lijin santhosh', 'Taliparamba\r\nKannur', '500', 9846173680, 'drlijin@gmail.com', 'a44f7c74ed61c342ca9fa6a2709790d1', '2021-11-04 14:03:21', '2021-12-15 09:39:11'),
(10, 'General Physician', 'Dr.Amal Joy', 'Nellikutti\r\nKasargod', '300', 9924875748, 'dramal@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-04 14:04:58', '2021-11-18 19:47:51'),
(12, 'Homeopath', 'Dr.Jacob Kurien', 'Pala\r\nKottayam', '400', 983245751, 'drjacob@gmail.com', 'd9fc36d0e6793feaac9db59cac80b918', '2021-11-09 14:08:17', '2021-11-18 19:48:30'),
(13, 'Ayurveda', 'Dr.Telbin Cherian', 'Chala\r\nPathanamthitta', '500', 9754821485, 'drtelbin@gmail.com', '843c95363a9fde873ce498b2f133a133', '2021-11-09 14:10:05', '2021-11-18 19:48:48'),
(14, 'Dentist', 'Dr.Jose K Emerson', 'Perambra\r\nKozhikode', '600', 9687541547, 'drjose@gmail.com', 'f5379a1f408ea2fad0ea4b8fa95b74bb', '2021-11-09 14:12:06', '2021-11-18 19:49:19'),
(15, 'Ear-Nose-Throat (Ent) Specialist', 'Dr.Kurian Tom', 'Main town\r\nKottayam', '300', 9658471454, 'drkurian@gmail.com', '827df2650e035353736d3734f6c03afa', '2021-11-09 14:13:40', '2021-11-18 19:49:30'),
(16, 'Orthopedic', 'Dr.Frank', 'Paramthottu pala', '400', 7903225989, 'drfrank@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-09 14:15:16', '2021-11-24 18:47:24'),
(18, 'General Physician', 'Dr.ann', 'pala', '500', 9747642958, 'Dr.jacobj@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-15 10:19:08', '2021-12-16 05:40:57'),
(19, 'virology', 'Dr.Jacob jojy', 'erumely', '500', 9876543212, 'Dr.jacob123@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-16 05:42:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2021-11-18 06:37:25', '2021-11-24 18:48:26'),
(2, 'General Physician', '2021-11-18 06:38:12', '2021-11-24 18:48:38'),
(3, 'Dermatologist', '2021-11-18 06:38:48', '2021-11-24 18:48:49'),
(4, 'Homeopath', '2021-11-18 06:39:26', '2021-11-24 18:48:58'),
(5, 'Ayurveda', '2021-11-18 06:39:51', '2021-11-24 18:49:07'),
(6, 'Dentist', '2021-11-18 06:40:08', '2021-11-24 18:49:15'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2021-11-18 06:41:18', '2021-11-24 18:49:23'),
(8, 'Orthopedic', '2021-11-18 13:57:21', '2021-11-24 18:49:32'),
(13, 'Oncology', '2021-12-06 03:43:30', '2021-12-07 19:11:52'),
(14, 'Gsatrologist', '2021-12-08 08:04:04', NULL),
(15, 'oncology', '2021-12-08 08:41:14', NULL),
(16, 'virology', '2021-12-16 05:41:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(4, 'ljin santhosh', 'lijin@gmail.com', 987654324, ' njn oru manadan', '2021-11-17 08:40:40', NULL, NULL, NULL),
(5, 'jacob', 'jacob@gmail.com', 12345678900000, ' ddghxjsxfxgk,x', '2021-11-19 06:32:43', NULL, NULL, NULL),
(6, 'abc', 'abc@gmail.com', 9876543212, ' maintenance', '2021-12-16 05:52:26', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `user_created_at` varchar(10) NOT NULL,
  `user_status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `address`, `city`, `email`, `password`, `gender`, `user_created_at`, `user_status`) VALUES
(1, 'George Mathew', 'dfgdfg', 'kottayam', 'geirgejh@gmail.com', '8d10344331a7ac7665c83d8956bfc992', 'male', '', 1),
(2, 'Jacob Kurien', 'Kolla', 'kottayam', 'jacobkurien03@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', '', 1),
(3, 'vinu', 'valliyakara house', 'pambanar', 'vinurejijohn@yahoo.com', '18a448824db555bc7ce59c32a026c762', 'male', '', 1),
(4, 'anu ', 'mukkakkunnel', 'kottayam', 'anu@gmail.com', '6897b0cb198376e2fb23ef98c4e3eb16', 'male', '', 1),
(6, 'frank mathews thomas', 'valliyakara house', 'kottayam', 'frankmathewsthomas@gmail.com', '26253c50741faa9c2e2b836773c69fe6', 'male', '', 1),
(7, 'frank mathews thomas', ' bgdbt yt', 'kottayam', 'frankmathewsthomas@mca.ajce.in', '202cb962ac59075b964b07152d234b70', 'female', '', 1),
(8, '   ', '       ', '        ', 'frankthomas369boss@gmail.com', '6348f00c8de2754c6b46bba1f96e1aff', 'male', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `bloodgrp` varchar(8) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `dob`, `gender`, `bloodgrp`, `email`, `password`, `regDate`, `updationDate`) VALUES
(16, 'frank mathews thomas', 'paramthottu', 'kottayam', '1998-09-17', 'male', 'b-ve', 'frankthomas369boss@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '2021-11-02 15:04:17', NULL),
(17, 'abraham', 'aaaaaaaa', 'kumily', '2021-11-05', 'male', 'b-ve', 'abraham123@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-05 04:53:29', NULL),
(18, 'frank mathews thomas', 'pme', 'kochi', '1998-09-17', 'male', 'b-ve', 'frankmathewsthomas@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-09 00:22:10', '0000-00-00 00:00:00'),
(19, 'lijin s', 'aaaaaa', 'chan', '2021-11-09', 'male', 'b-ve', 'lijin123@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-09 03:36:35', NULL),
(20, 'vinu12', 'valliyakara house', 'pambanar', '1999-02-23', 'male', 'b +ve', 'vinurejijohn21@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-09 08:42:46', NULL),
(21, '   ', '   ', '000', '2021-11-10', 'female', 'z', 'frankthomas369s@gmail.com', 'a152e841783914146e4bcd4f39100686', '2021-11-10 05:29:12', NULL),
(22, 'Manas', 'KOttooli', 'Kozhikode', '1998-10-28', 'male', '0+', 'manas@gmail.com', '4026492ea6666ecf032478b5f82d3e94', '2021-11-10 10:12:08', NULL),
(23, ' soorya', 'qwesrtyuhijfe', 'Kozhikode', '2021-11-18', 'female', 'b-ve', 'soorya@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-18 10:21:14', NULL),
(24, 'Frank Mathews Thomas', 'Paramthottu h  Pala', 'Pala', '1998-09-17', 'male', 'B-ve', 'frankthomas@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-19 06:24:48', NULL),
(25, '    ', '        ', '          ', '2012-01-10', 'male', 'A+ve', 'abc@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-23 19:00:14', NULL),
(26, 'mrudul', 'thakadiyel', 'erumely', '1999-09-16', 'male', 'A+ve', 'mrudul@gmail.com', 'a93e1669a3924937b28c1bc15061f927', '2021-11-24 03:55:47', NULL),
(27, 'frank thomas', 'paramthottu', 'paika', '2020-11-25', 'male', 'A+ve', 'frankt@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-24 18:39:21', NULL),
(28, 'fmt', 'fmt', 'fmt', '2021-11-05', 'male', 'A+ve', 'fmt@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-24 18:52:39', NULL),
(29, 'aaaa', 'aaaaaaaa', 'aaaaaa', '2021-11-13', 'male', 'A+ve', 'aaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-24 19:01:11', NULL),
(30, 'aaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaa', '2021-11-12', 'male', 'A+ve', 'aaaaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-25 03:42:54', NULL),
(31, 'josek', 'kozhikpode', 'pala', '2021-11-13', 'female', 'A+ve', 'josek@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-25 09:19:28', NULL),
(32, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-11-11', 'male', 'A+ve', 'aaaaaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-25 10:13:40', NULL),
(33, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-11-11', 'male', 'A+ve', 'aaaaaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-25 10:16:19', NULL),
(34, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-11-11', 'male', 'A+ve', 'aaaaaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-25 10:17:20', NULL),
(35, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-11-11', 'male', 'A+ve', 'aaaaaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-25 10:21:39', NULL),
(36, 'chsghsghs', 'hdgshdghs', 'cdcdc', '2021-11-12', 'male', 'A+ve', 'abcc@gmail.com', 'c7f7308602ec59531373c8cb3895a84a', '2021-11-26 05:06:39', NULL),
(37, 'amal', 'eghdfhdgh', 'hgd', '2021-11-05', 'male', 'A+ve', 'amal@gmail.com', '028856008252b913cd01c1b9ebae6191', '2021-11-29 03:55:41', NULL),
(38, 'mrudul', 'thakadiyel', 'kottayam', '2021-11-19', 'male', 'A+ve', 'mr@gmail.com', '43f5da002179ad3e804f971ccfa53990', '2021-11-29 05:50:36', NULL),
(39, 'Manas', 'Pachakkil', 'Kozhikode', '1998-10-28', 'male', 'O+', 'manaspachakkil@gmail.com', '8dd43ae0638e1ce2690e2e3cfa653923', '2021-12-07 07:14:56', '0000-00-00 00:00:00'),
(40, 'Meenu', 'mannattu', 'kumily', '1998-09-13', 'female', 'A+ve', 'meenuphilip1998@gmail.com', 'dcdea80911601421253572d6985f6433', '2021-12-08 08:20:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
