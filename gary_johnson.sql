-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: wm95.wedos.net:3306
-- Generation Time: Aug 25, 2016 at 06:23 PM
-- Server version: 5.6.23
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d115172_seckar`
--

-- --------------------------------------------------------

--
-- Table structure for table `gary_johnson`
--

CREATE TABLE IF NOT EXISTS `gary_johnson` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `web` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `age` int(11) NOT NULL,
  `loc` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `dscr` varchar(100) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data for table `gary_johnson`
--

INSERT INTO `gary_johnson` (`id`, `name`, `web`, `age`, `loc`, `dscr`) VALUES
(1, 'Alois Sečkár', 'http://alois-seckar.cz', 28, 'CZE (Praha)', 'Programátor, člen Republikového výboru Strany svobodných občanů');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gary_johnson`
--
ALTER TABLE `gary_johnson`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gary_johnson`
--
ALTER TABLE `gary_johnson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
