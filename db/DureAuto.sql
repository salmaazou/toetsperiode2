-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 10 jan 2023 om 06:09
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-proeftoets`
--
CREATE DATABASE IF NOT EXISTS `php-pdo-crud-toets` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php-pdo-crud-toets`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `DureAuto`
--

DROP TABLE IF EXISTS `DureAuto`;
CREATE TABLE IF NOT EXISTS `DureAuto` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Merk` varchar(200) NOT NULL,
  `Model` varchar(200) NOT NULL,
  `Topsnelheid` smallint(4) NOT NULL,
  `Prijs` int(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `RichestPeople`
--

INSERT INTO `DureAuto` (`Id`, `Merk`, `Model`, `Topsnelheid`, `Prijs`) VALUES
(2, 'Mercedes', 'GW', 258, '200000'),
(3, 'Bugattie', 'Vorig jaar', 374, '223445'),
(4, 'Ferrari', '2018', 166, '7777777'),
(5, 'Maseratie', 'Dit jaar 2023', 191, '456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
