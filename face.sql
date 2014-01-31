-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2014 at 02:24 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `face`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `user_id` int(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `filename`, `user_id`) VALUES
(1, '007.JPG', 1),
(2, '18MO.JPG', 1),
(3, '1984B.JPG', 1),
(4, '35380_wallpaper280.jpg', 1),
(5, '35461_wallpaper280.jpg', 1),
(6, '0204016L.JPG', 1),
(7, '0204021L.JPG', 1),
(8, '253026.JPG', 1),
(9, '347003.JPG', 1),
(10, '347027.JPG', 1),
(11, '377007.JPG', 1),
(12, '377042.JPG', 1),
(13, '0447075L.JPG', 1),
(14, '479033.JPG', 1),
(15, '479040.JPG', 1),
(16, '479047.JPG', 1),
(17, '513045.JPG', 1),
(18, '1360100L.JPG', 1),
(19, '3410291.JPG', 1),
(20, '3410401.JPG', 1),
(21, '5lnD9h000.jpeg', 3),
(22, '1198-.jpg', 3),
(23, '2004_Yamaha___YZF_R1.jpg', 3),
(24, '2007-yamaha-R1.jpg', 3),
(25, '35046-0Falls20State20Park.jpg', 3),
(26, '39844-100_0636.jpg', 3),
(27, '1256921611iS3W36T[1].jpg', 3),
(28, '1256925046PFLmAcs[1].jpg', 3),
(29, 'Baby.jpg', 3),
(30, 'BMW S1000RR rac.jpg', 3),
(31, 'bmw-s1000rr1.jpg', 3),
(32, 'Cute_Girl.jpg', 3),
(33, 'd1.jpg', 3),
(34, 'footer_redbg.jpg', 3),
(35, 'Green_Rose.jpg', 3),
(36, 'it-s-a-fact-the-2009-6_1280x0w.jpg', 3),
(37, 'jpg_virtual-yamaha-r1-tuning.jpg', 3),
(38, 'Lighting_Jump.jpg', 3),
(39, 'matrix03a-0800.jpg', 3),
(40, 'paypal.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `photoid1` int(11) DEFAULT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `isBlocked` enum('1','2') DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `photoid1` (`photoid1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `photoid1`, `p1`, `p2`, `p3`, `isBlocked`) VALUES
(1, 'arjun2504@gmail.com', 1, 1, 2, 3, '2'),
(2, 'srijff@gmail.com', 3, 1, 27, 865, '2'),
(3, 'harishganapathi@hotmail.com', 40, 140, 148, 339, '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
