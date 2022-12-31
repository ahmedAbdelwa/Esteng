-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2022 at 05:47 PM
-- Server version: 5.1.62
-- PHP Version: 5.4.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `OOB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Datasite`
--

CREATE TABLE IF NOT EXISTS `Datasite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fast_name` varchar(255) NOT NULL,
  `En_name` varchar(255) NOT NULL,
  `Email_user` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Pr_name` varchar(255) NOT NULL,
  `Pr_phone` int(11) NOT NULL,
  `Pr_Job` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Birth` varchar(255) NOT NULL,
  `Su_type` varchar(255) NOT NULL,
  `Ac_type` varchar(255) NOT NULL,
  `SuAc_date` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Datasite`
--

INSERT INTO `Datasite` (`id`, `Fast_name`, `En_name`, `Email_user`, `Phone`, `Pr_name`, `Pr_phone`, `Pr_Job`, `Nationality`, `State`, `Birth`, `Su_type`, `Ac_type`, `SuAc_date`, `Sex`) VALUES
(15, 'ØµÙØ§Ø¡ Ø§Ù„Ù‡Ø§Ø¯ÙŠ Ù…Ø­Ù…Ø¯ ', 'Safa elhade', 'safa@host.com', 2147483647, 'Elhade', 98656265, 'ÙƒÙˆØ§Ø¯Ø± Ø·Ø¨ÙŠØ©', 'egypt', 'Cairo', 'Cairo Egypt', 'private', 'bakaluryus', '2022-12-28', 'f'),
(13, 'Ù…Ø­Ù…Ø¯ ÙØªØ­ÙŠ Ø¹Ù„ÙŠ Ù…Ø­Ù…Ø¯', 'Mohamed fathe ali Mohamed ', 'mohali2w.@gmail.com', 2147483647, 'Mohamed fathe ali', 2147483647, 'Ø§Ø¹Ù…Ø§Ù„ Ø­Ø±Ø©', 'sudan', 'Ø§Ù„Ø®Ø±Ø·ÙˆÙ…', 'Ø¨Ø­Ø±ÙŠ', 'private', 'bakaluryus', '2022-12-13', 'm'),
(14, 'Ù…Ø­Ù…ÙˆØ¯ Ø¬Ø§Ø¯ Ø§Ù„Ù„Ù‡ Ø¹Ù„ÙŠ Ø¹Ø«Ù…Ø§Ù†', 'Mhmood jad allh ali ', 'mohalioo2w.@gmail.com', 2147483647, 'Noor Khalid', 2147483647, 'ØªØ¬Ø§Ø±', 'sudan', 'Ø§Ù…Ø¯Ø±Ù…Ø§Ù†', 'Ø§Ù…Ø¨Ø¯Ù‡', 'public', 'diploma', '2022-12-15', 'm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
