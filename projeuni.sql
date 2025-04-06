-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2025 at 07:06 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeuni`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `departman` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `name`, `departman`, `text`) VALUES
(3, 'Reza@gmail.com', 'Ø±Ø¶Ø§ ', 'Ø§Ù†ØªÙ‚Ø§Ø¯Ø§Øª Ùˆ Ù¾ÛŒØ´Ù†Ù‡Ø§Ø¯Ø§Øª', 'Ù†Ø§Ù† Ø¨Ø§Ú¯Ø¯ÛŒ Ú©Ù‡ Ø¯Ø³ØªÙ… Ø±Ø³ÛŒØ¯ Ø®ÛŒÙ„ÛŒ Ø®Ø´Ú© Ø´Ø¯Ù‡ Ø¨ÙˆØ¯'),
(4, 'amir@gmail.com', 'Ø§Ù…ÛŒØ±', 'Ø§Ù†ØªÙ‚Ø§Ø¯Ø§Øª Ùˆ Ù¾ÛŒØ´Ù†Ù‡Ø§Ø¯Ø§Øª', 'Ø¯ÙˆÙ†Ø§Øª Ù‡Ø§Ø´ÙˆÙ† ÙˆØ§Ù‚Ø¹Ø§ Ø¹Ø§Ù„ÛŒÙ‡'),
(5, 'ahmad@gmail.com', 'Ø§Ø­Ù…Ø¯', 'Ù…Ø§Ù„ÛŒ', 'Ù¾ÙˆÙ„ Ù…Ø§Ø±Ùˆ Ø¹ÙˆØ¯Øª Ù†Ù…ÛŒØ¯ÛŒØ¯ ØŸ'),
(6, 'ali@gmail.com', 'ali', 'Ù¾Ø´ØªÛŒØ¨Ø§Ù†', 'ØªØ³Øª '),
(7, 'reza.viper.199@gmail.com', 'sdasd', 'Ø§Ù†ØªÙ‚Ø§Ø¯Ø§Øª Ùˆ Ù¾ÛŒØ´Ù†Ù‡Ø§Ø¯Ø§Øª', 'asdasdads'),
(8, 'reza.viper.199@gmail.com', 'sdasd', 'Ø§Ù†ØªÙ‚Ø§Ø¯Ø§Øª Ùˆ Ù¾ÛŒØ´Ù†Ù‡Ø§Ø¯Ø§Øª', 'asdasdads');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `productcode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `image`, `text`, `date`, `status`, `productcode`) VALUES
(17, 'Ù…Ø´Ù‡Ø¯- ØªÙ‡Ø±Ø§Ù† ', '2510000', 'mashhad-hotel-min-1650998611.jpg', 'Ø³Ø§Ø¹Øª Ù¾Ø±ÙˆØ§Ø² 23:00', '1398-12-05', 'active', '3564');

-- --------------------------------------------------------

--
-- Table structure for table `rezerv`
--

DROP TABLE IF EXISTS `rezerv`;
CREATE TABLE IF NOT EXISTS `rezerv` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mabda` varchar(255) NOT NULL,
  `maghsad` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezerv`
--

INSERT INTO `rezerv` (`id`, `name`, `lastname`, `mabda`, `maghsad`, `tel`, `passport`) VALUES
(16, 'Ø²Ù‡Ø±Ø§', 'Ø§Ù…ÛŒÙ†ÛŒ', 'tehran ', 'dubai', '2323232', 'yes'),
(17, 'Ù…Ø±ÛŒÙ…', 'Ø§Ù…ÛŒØ±ÛŒ', 'esfehan', 'dubai', '3432434', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
