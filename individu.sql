-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 avr. 2023 à 13:55
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `form`
--

-- --------------------------------------------------------

--
-- Structure de la table `individu`
--

DROP TABLE IF EXISTS `individu`;
CREATE TABLE IF NOT EXISTS `individu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `individu`
--

INSERT INTO `individu` (`id`, `nom`, `prenom`, `mail`, `mdp`) VALUES
(10, 's', 's', '', '$2y$10$eivCxF7EZ7kmvjlnf2WhueAirI3Aw6pPaLMsQS3nLEG'),
(33, 'Hanot', 'Thery', 'theryhanot44@gmail.com', '$2y$10$I3BpUSRxzVEbKYLLRFgb6OSdiR1BuWjchKt88TSUwqO'),
(31, 'ddddDD', 'gfedfvdzsDFDF', 'adadadada@gmail.com', '$2y$10$g57gKTF.h9NbFh6Ooe1p1eXoAmpJHTArbUspQPrXGMN'),
(32, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaAA', 'a@gmail.com', '$2y$10$tafsudXBP91RSID5nc/0C.kEmtFYb96CdjWZGCtOGVU'),
(30, 'ddddDD', 'gfedfvdzsDFDF', 'adadadada@gmail.com', '$2y$10$.zK/1WlUiSlJO2K6JVWO5uxlg1o9MAdd5OGX5QipyxT'),
(29, 'ddddDD', 'gfedfvdzsDFDF', 'adadadada@gmail.com', '$2y$10$3f/UBEyKawqoH01Ovz7EQ.GpN7Vb.vwLR7o9OErfo9U'),
(28, 'ffffffffFFF', 'FFFFFFFFFFf', 'adadadada@gmail.com', '$2y$10$UnxxfWM2TcD.FdDGi03W9O9RXIx2XOoF2Yjn75uu22t');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
