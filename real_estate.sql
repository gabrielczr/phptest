-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2019 at 02:47 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

DROP TABLE IF EXISTS `housing`;
CREATE TABLE IF NOT EXISTS `housing` (
  `id_housing` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pc` int(4) DEFAULT NULL,
  `area` int(3) DEFAULT NULL,
  `price` int(7) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_housing`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housing`
--

INSERT INTO `housing` (`id_housing`, `title`, `address`, `city`, `pc`, `area`, `price`, `photo`, `type`, `description`) VALUES
(51, 'Apartment for sale', '33 rue AAA', 'Luxembourg', 7888, 55, 350000, './uploads/321312.jpg', 'sale', 'lorem ipsum dolor sic amet'),
(34, 'qweqwe', 'lux limpÃ¨ertsberg', 'belval', 1234, 22, 1231, './uploads/night_crawler.jpg', 'letting', 'lorem ipsum'),
(35, 'My dream Home', 'lux limpÃ¨ertsberg', 'belval', 1234, 22, 1231, './uploads/fight club.jpg', 'letting', 'lorem ipsum'),
(50, 'Apartment for sale', '33 rue AAA', 'Luxembourg', 7888, 55, 350000, './uploads/321312.jpg', 'sale', 'lorem ipsum dolor sic amet'),
(37, 'My dream Home', 'lux limpÃ¨ertsberg', 'belval', 1234, 22, 500000, './uploads/123.jpg', 'sale', 'lorem ipsum'),
(46, 'My dream Home2', 'sdf', 'belval', 1889, 48, 500000, './uploads/2312.jpg', 'sale', 'a dreamy apartment located near the city center'),
(49, 'Apartment for sale', '33 rue AAA', 'Luxembourg', 7888, 55, 350000, './uploads/321312.jpg', 'sale', 'lorem ipsum dolor sic amet'),
(48, 'Apartment for sale', '33 rue AAA', 'Luxembourg', 7888, 55, 350000, './uploads/321312.jpg', 'sale', 'lorem ipsum dolor sic amet'),
(45, 'Apartment 222', 'lux belval', 'belval', 1723, 22, 1300, './uploads/3213.jpg', 'letting', 'lorem ipsum dolor sic amet'),
(47, 'My dream Home', 'lux limpÃ¨ertsberg', 'Luxembourg', 1889, 48, 500000, './uploads/2312.jpg', 'sale', 'a dreamy apartment located near the city center'),
(41, 'My dream Home2', 'dsafdsf', 'Luxembourg', 1231, 67, 500000, './uploads/123.jpg', 'sale', 'a dreamy apartment located near the city center'),
(42, 'My dream Home2', 'dsafdsf', 'Luxembourg', 1231, 67, 500000, './uploads/123.jpg', 'sale', 'a dreamy apartment located near the city center'),
(43, 'My dream Home2', '33 Rue de ZZZ', 'Luxembourg', 1889, 48, 1231, './uploads/123.jpg', 'letting', 'a dreamy apartment located near the city center'),
(44, 'Apartment 222', 'lux belval', 'belval', 1723, 22, 1300, './uploads/3213.jpg', 'letting', 'lorem ipsum dolor sic amet'),
(52, 'Apartment for sale', '33 rue AAA', 'Luxembourg', 7888, 55, 350000, './uploads/321312.jpg', 'sale', 'lorem ipsum dolor sic amet'),
(53, 'Apartment for sale', '33 rue AAA', 'Luxembourg', 7888, 55, 350000, './uploads/321312.jpg', 'sale', 'lorem ipsum dolor sic amet'),
(54, 'Apartment for sale', '33 rue AAA', 'Luxembourg', 7888, 55, 350000, './uploads/321312.jpg', 'sale', 'lorem ipsum dolor sic amet'),
(55, 'My dream Home is gone', 'dsafdsf', 'Esch Sur Alzette', 1723, 55, 1300, './uploads/3213.jpg', 'letting', 'a dreamy apartment located near the city center');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
