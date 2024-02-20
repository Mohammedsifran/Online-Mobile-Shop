-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2019 at 04:08 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `it18231274`
--
CREATE DATABASE IF NOT EXISTS `it18231274` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `it18231274`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `itemcode` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL,
  `instock` int(11) NOT NULL,
  `warranty` varchar(20) NOT NULL,
  PRIMARY KEY (`itemcode`),
  UNIQUE KEY `itemcode` (`itemcode`),
  KEY `itemcode_2` (`itemcode`),
  KEY `itemcode_3` (`itemcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemcode`, `name`, `model`, `cost`, `instock`, `warranty`) VALUES
('#Iphonex', 'Iphone', 'Iphone x Plus', 130000, 46, '3 Years'),
('#Nokia3', 'Nokia', 'NokIA Lumia 3', 48000, 18, '1 Years'),
('#samsungj8', 'samsung', 'J8', 50000, 5, '1 Year');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
