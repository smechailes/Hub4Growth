-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 03:16 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cids`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `description` text,
  `email` varchar(150) DEFAULT NULL,
  `phone` text,
  `fax` varchar(150) DEFAULT NULL,
  `address` text,
  `pobox` varchar(150) DEFAULT NULL,
  `link` text,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `description`, `email`, `phone`, `fax`, `address`, `pobox`, `link`, `added_date`, `updated_date`) VALUES
(1, 'This is Our New Contact Info.', '', '9876543210', '', '', '7765', 'fb.com/cids', '2017-09-12 15:54:55', NULL),
(2, 'segs', '', 'sgsfd', '', '', 'gsfgs', '', '2017-09-12 15:58:45', NULL),
(3, '', 'fafadf', 'fadf', 'fadsfad', 'fad', 'afadf', '', '2017-09-12 16:02:17', NULL),
(4, '', 'info@cids.com', '0987654321', '014478332', 'Pulchowk,Lalitpur', '6532', 'fb.com/cidsnepal', '2017-09-12 16:03:50', NULL),
(5, '', 'info@cids.com', '0987654321', '014478332', 'Pulchowk,Lalitpur', '6532', 'fb.com/cidsnepal', '2017-09-12 16:04:29', NULL),
(6, 'dsaf', 'new@cids.com', '9801234567', '5357463', 'ktm', '1242', 'fb.com/cids', '2017-09-12 16:08:01', NULL),
(7, 'efa', 'fjiab@jhsaobvo', 'ue387238', '878987987', 'shfi', '7878', 'ahdfoua/afca', '2017-09-12 16:32:59', NULL),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec arcu vestibulum, elementum ligula a, finibus augue. Donec euismod, velit et rutrum pulvinar, turpis diam luctus enim, quis egestas neque ex sit amet ipsum. Nunc sit amet interdum massa. Ut tincidunt est eros, sed scelerisque lacus pellentesque ut. Sed augue arcu, auctor non aliquet quis, ultrices quis ante. Donec imperdiet metus ac magna finibus sodales. Donec iaculis urna sollicitudin auctor rhoncus.', 'info@cids.com', '+977-9841806109, +977-9851215787', '+977-1-5525830', 'Pulchowk, Lalitpur, Nepal', '1157', 'https://www.facebook.com/nepal', '2017-09-12 16:53:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `fullname`, `email`, `subject`, `message`, `added_date`) VALUES
(1, 'Ansuman', 'smechailes@gmail.com', 'What is your goal?', 'I would like to know what is your goal.', '2017-08-26 10:47:11'),
(2, 'Binod', 'binod@gmail.com', 'hello', 'hello', '2017-08-26 14:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `org_events`
--

CREATE TABLE `org_events` (
  `id` int(11) NOT NULL,
  `event_title` text COLLATE utf8_unicode_ci,
  `event_location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `event_summary` text COLLATE utf8_unicode_ci,
  `event_description` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `pos_title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pos_description` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  `added_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `pos_title`, `pos_description`, `message`, `added_by`, `status`, `added_date`, `updated_date`) VALUES
(1, 'CEO', 'Main person of company', NULL, 1, 1, '2017-08-26 14:59:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `user_password`, `status`, `role_id`, `added_date`, `updated_date`) VALUES
(1, 'Admin', 'admin', 'e62a3f6cb73ede63968f989b2c9584f32ec8c420', 1, 1, '2017-08-26 11:06:43', '2017-09-12 14:52:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_events`
--
ALTER TABLE `org_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `org_events`
--
ALTER TABLE `org_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `org_events`
--
ALTER TABLE `org_events`
  ADD CONSTRAINT `org_events_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
