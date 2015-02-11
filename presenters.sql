-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2015 at 01:55 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ogilvyone`
--

-- --------------------------------------------------------

--
-- Table structure for table `presenters`
--

CREATE TABLE IF NOT EXISTS `presenters` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `presented` int(1) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `presenters`
--

INSERT INTO `presenters` (`number`, `name`, `presented`) VALUES
(1, 'Susanna Fouch  ', 0),
(2, 'Priscila Sheen  ', 0),
(3, 'Dulce Dvorak  ', 0),
(4, 'Leopoldo Laverty  ', 0),
(5, 'Nerissa Letarte  ', 0),
(6, 'Quyen Caba  ', 0),
(7, 'Antoinette Wiedemann  ', 0),
(8, 'Krishna Perea  ', 0),
(9, 'Sonny Defalco  ', 0),
(10, 'Giovanna Willhite  ', 0),
(11, 'Desmond Desiderio  ', 0),
(12, 'Twana Wigley  ', 0),
(13, 'Joanna Carley  ', 0),
(14, 'Shonta Swayze  ', 0),
(15, 'Erline Alleman  ', 0),
(16, 'Bree Wirta''s', 0),
(17, 'Tania Michelin  ', 0),
(18, 'Sabina Billingsly  ', 0),
(19, 'Henrietta Glassford  ', 0),
(20, 'Wenona Voges  ', 0),
(21, 'Elisa Knepper  ', 0),
(22, 'Hilaria Escalante  ', 0),
(23, 'Delila Mcelroy  ', 0),
(24, 'Florine Dowless  ', 0),
(25, 'Toney Kopecky  ', 0),
(26, 'Garnet Biscoe  ', 0),
(27, 'Charmain Franson  ', 0),
(28, 'Gwen Monty  ', 0),
(29, 'Emeline Thronson  ', 0),
(30, 'Manuela Nadal  ', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
