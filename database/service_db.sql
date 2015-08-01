-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 01 Αυγ 2015 στις 19:35:13
-- Έκδοση διακομιστή: 5.6.24
-- Έκδοση PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `service_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `service_tb`
--

CREATE TABLE IF NOT EXISTS `service_tb` (
  `id` int(11) NOT NULL,
  `eidos` varchar(50) DEFAULT NULL,
  `pelatis` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `perigrafi` varchar(500) DEFAULT NULL,
  `sxolia` varchar(500) DEFAULT NULL,
  `paralavi` varchar(50) DEFAULT NULL,
  `paradosi` varchar(10) NOT NULL,
  `texnikos` varchar(50) NOT NULL,
  `kostos` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `service_tb`
--
ALTER TABLE `service_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `service_tb`
--
ALTER TABLE `service_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
