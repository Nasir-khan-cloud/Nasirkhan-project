-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 07:24 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `level` longtext COLLATE utf8_unicode_ci NOT NULL,
  `authentication_key` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(2) NOT NULL DEFAULT '1' COMMENT '0=enable;1=disable;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `level`, `authentication_key`, `created_date`, `photo`, `username`, `active`) VALUES
(2, 'Yasir Arafat', 'yasirarafat1995@gmail.com', 'arafat', '1', '', '2017/11/19', 'image/admin/photo_yasirarafat1995@gmail.com.jpg', 'arafat', 1),
(10, 'fahmida faia', 'adminfaizasinthi@gmail.com', 'faiza', 'Documentation and Support', '', '2018/08/14', 'image/admin/photo_adminfaizasinthi@gmail.com.', 'faiza', 1),
(11, 'Mahmudul Hasan ', 'mahmudul@dmp.com', 'mahmudul', 'Web Designer', '', '2018/08/14', 'image/admin/photo_mahmudul@dmp.com.', 'mahmudul', 1),
(12, 'Shahiduzzaman Rony', 'rony@dmp.com', 'rony', 'Database Analyst', '', '2018/08/14', 'image/admin/photo_rony@dmp.com.', 'rony', 1);

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `owner_name` text NOT NULL,
  `area` text NOT NULL,
  `sector` text NOT NULL,
  `block` text NOT NULL,
  `section` text NOT NULL,
  `zip` text NOT NULL,
  `overview` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `name`, `owner_name`, `area`, `sector`, `block`, `section`, `zip`, `overview`, `username`, `password`, `status`) VALUES
(1, 'Yasir Arafat', 'yasir Arafat', 'dsfs', 'gsgdf', 'sgfdg', 'sdgdg', 'zfdgd', 'sgsdf', 'arafat', 'arafat', 1),
(2, 'fdjgsdnf', 'fgsdgsfdgds', 'sfgdsgsdf', 'sfgdsg', 'dafsag', 'sgsg', 'asgdsag', 'asdgasf', '2', '2', 1),
(3, 'Akter Manjil', 'Soib Ali', 'Mirpur', 'mirpur', '', 'mirpur 2', '1216', '', 'username', 'password', 1),
(4, 'xczcz', 'czxcz', 'cz', 'xczxc', 'xczx', 'zcz', '', 'xczxc', 'username', 'password', 1),
(5, '????? ? ??????', 'sdfsd', 'fsdfs', 'dfsdf', '', 'mirpur 2', '', '', 'username', 'password', 1),
(6, 'fgierh', 'jhdgfj', 'negfjen', 'efmgn', '', '', '', '', 'username', 'password', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `notice_id` int(11) NOT NULL,
  `notice_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_timestamp` int(11) NOT NULL,
  `created_date` date DEFAULT NULL,
  `active` int(2) NOT NULL DEFAULT '1' COMMENT '0=enable;1=disable;'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`notice_id`, `notice_title`, `notice`, `create_timestamp`, `created_date`, `active`) VALUES
(1, 'Project', 'Metropolitan ', 0, '2018-05-03', 1),
(2, 'xxx', 'As resident of the above referenced premises, you are hereby notified that I (we) have elected not to renew the lease of the Premises and will vacate on, ..', 0, '2018-08-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `resident_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authentication_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `father` text COLLATE utf8_unicode_ci NOT NULL,
  `mother` text COLLATE utf8_unicode_ci NOT NULL,
  `nid_number` text COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` int(11) NOT NULL,
  `active` int(2) NOT NULL DEFAULT '1' COMMENT '0=enable;1=disable;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`resident_id`, `name`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `phone`, `email`, `authentication_key`, `occupation`, `photo`, `department_id`, `father`, `mother`, `nid_number`, `permanent_address`, `marital_status`, `active`) VALUES
(1, 'nasir khan ', '1996-07-06', 'male', '', 'b+', 'fjcfghfg', '01877588530', 'gdfgfgf', '', 'sfsdf', NULL, NULL, 'fgdfg', 'fgdfgt', 'dfgfgf', 'fgdfgdf', 2, 1),
(2, 'fgsndg sd', '2018-05-16', 'male', '', 'fgsdgsddfgdf', 'dfjsnbhu', '243633524fgsdg', 'bbjbh@133.com', '', 'dsfsjdn gsdg', NULL, NULL, 'nsjdfjsd ', 'jfsdgsd', 'j324iu32r', 'bhjbjhhj', 1, 1),
(3, 'sdfsf', '', 'Select an option', '', '', 'sdf', '', '', '', 'sfs', NULL, NULL, 'sdf', '', '', 'sdfsdf', 2, 1),
(4, 'faiza', '', '2', '', '', 'mirpur', '', '', '', 'ghj', NULL, NULL, 'ggjh', 'gjh', '2234', 'mrpur', 2, 1),
(5, 'dfuh', '2018-09-04', '1', '', '', 'sdfjh', '', '', '', 'hjh', NULL, NULL, 'hjh', 'hjhj', 'hjh', 'jh', 2, 1),
(6, 'sdfisj', '2018-09-14', '2', '', '', 'jhfs', '363', 'jhh@sdfjks.com', '', 'h', NULL, NULL, 'jhjk', 'jhjjk', 'jhj', 'hjkhj', 2, 1),
(7, 'hjkh', '2018-09-13', '1', '', 'B+', 'jhk', '76876', 'hjh', '', 'jh', NULL, NULL, 'hjhj', 'hjhj', 'hjhj', 'jhjk', 1, 1),
(8, 'hjkh', '2018-09-13', '3', '', '', '', '', '', '', 'jhj', NULL, NULL, '', '', '', '', 0, 1),
(9, 'afaf', '2018-09-11', '2', '', '', 'bhj', '2342', 'jhjh', '', 'jhj', NULL, NULL, 'hjj', 'hjhj', 'hjh', 'jhjhk', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resident_to_house`
--

CREATE TABLE `resident_to_house` (
  `id` int(11) DEFAULT NULL,
  `house_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `flat_no` text NOT NULL,
  `join_date` date NOT NULL,
  `comment` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_to_house`
--

INSERT INTO `resident_to_house` (`id`, `house_id`, `resident_id`, `flat_no`, `join_date`, `comment`, `status`) VALUES
(NULL, 1, 1, 'fdsf', '0000-00-00', 'dsgsdg', 2),
(NULL, 2, 2, '345', '0000-00-00', 'lskfjgisnfsd', 1),
(NULL, 3, 1, '435', '0000-00-00', 'fsdfsf', 2),
(NULL, 4, 1, 'saad', '0000-00-00', 'adasd', 2),
(NULL, 5, 1, '', '0000-00-00', '', 2),
(NULL, 1, 1, '', '0000-00-00', '', 2),
(NULL, 3, 1, 'fgefdgd', '0000-00-00', 'fdgd', 2),
(NULL, 6, 1, 'erte', '0000-00-00', 'tert', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `system_id` int(10) NOT NULL,
  `system_name` longtext NOT NULL,
  `system_title` longtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `currency` varchar(50) NOT NULL COMMENT 'bdt',
  `language` varchar(50) NOT NULL,
  `academic_year` varchar(200) DEFAULT NULL,
  `establish_date` date NOT NULL,
  `board` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `ins_code` varchar(200) NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `active` int(2) NOT NULL DEFAULT '1' COMMENT '0=enable;1=disable;'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`system_id`, `system_name`, `system_title`, `email`, `phone`, `address`, `currency`, `language`, `academic_year`, `establish_date`, `board`, `district`, `city`, `ins_code`, `logo`, `active`) VALUES
(1, 'Dhaka Metropolitan Police', 'Dhaka Metropolitan Police Resident Management', 'yasirarafat1995@gmail.com', '123456789', 'ঢাকা, বাংলাদেশ', 'BDT', 'bangla', '', '2017-12-28', 'Madrasah', 'Dhaka', 'Dhaka', '3423', 'image/photo_.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`system_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `system_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
