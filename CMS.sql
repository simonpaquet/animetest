-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 07:06 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `menu_title` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `css` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `menu_title`, `page`, `body`, `css`) VALUES
(1, 'J''aime les accueils', 'Accueil', 'accueil', '	<h1>Chatons et animes!</h1>\r\n	<p>\r\n		Les chatons et les animes sont les passions de ma vie!</p>\r\n	<img src="images/Chaton-roux.jpg" width="160" height="90"><br/>\r\n	<img src="images/Fd.jpg" width="192" height="120"><br/>\r\n', ''),
(2, 'J''aime les chatons!', 'Petits chats', 'chatons', '<h1>Chatons!</h1>\r\n	<p>\r\n		Les chatons c''est trop mignon!</p>\r\n	<img src="images/Chaton-roux.jpg" width="160" height="90"><br/>\r\n	<img src="images/omg-croomignon.jpg" width="204" height="152"><br/>\r\n	<img src="images/petit-chat-chaton-poussin.jpg" width="204" height="152"><br/>\r\n', ''),
(3, 'J''aime les anime!1!', 'Animemememe', 'anime', '	<h1>Animes!</h1>\r\n	<p>\r\n		Les animes c''est trop trop fort!</p>\r\n	<img src="images/Fd.jpg" width="192" height="120"><br/>\r\n	<img src="images/key_art_mushi_shi.jpg"><br/>\r\n', ''),
(4, 'Yann4TW', 'Yann4TW', 'lololololol', 'Yann for the win', '#menu a{font-size: 12px; color:#f90;}'),
(9, 'Judith', 'JUDIIIITH', 'juju', '<h1>Yayyyy</h1>\r\n<marquee>LOLOLOLOL C''est tout moisit</marquee>', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
