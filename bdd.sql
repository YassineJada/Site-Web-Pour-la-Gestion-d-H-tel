-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 fév. 2021 à 14:00
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('yassine_jada', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`Type`) VALUES
('Double room (1bed)'),
('double room (2bed)'),
('Single Room'),
('Triple room');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `CIN` varchar(10) NOT NULL,
  `Nom` varchar(20) DEFAULT NULL,
  `Prénom` varchar(20) DEFAULT NULL,
  `Date_Naissance` date DEFAULT NULL,
  `Adresse` varchar(100) DEFAULT NULL,
  `Télé` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `genre` char(5) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CIN`, `Nom`, `Prénom`, `Date_Naissance`, `Adresse`, `Télé`, `email`, `genre`, `mdp`, `username`) VALUES
('AA101010', 'bouchbouk', 'Yassine', '2001-10-10', 'casablanca', 101010101, 'yassine.jada@gmail.com', 'Mr', '101010', 'Jada_bouch'),
('BB187761', 'Jada', 'Yassine', '0000-00-00', 'Casablanca', 708234333, 'yassine.jada01@gmail.com', 'Mr', NULL, ''),
('J553036', 'Ait hassou', 'mohammed', '2001-09-27', 'Agadir ', 600854585, 'mohammed.aithassou@gmail.com', 'Mr', '123123', 'Moh_aithassou'),
('Jc1245022', 'Jada22', 'Ayoub22', '2001-10-23', 'ahsxsa', 2147483647, 'yassine.jada@gmail.com', 'Mlle', '123456', '7878jhjnj88'),
('JL2321', 'Younes', 'Bouchbouk', '2001-10-23', 'Rue salma', 680413729, 'younssca@gmail.com', 'Mr', '123456', 'younes_lamo');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `CIN` varchar(10) NOT NULL,
  `date_db` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `Type` varchar(50) NOT NULL,
  `Num_C` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`CIN`, `date_db`, `date_fin`, `Type`, `Num_C`) VALUES
('JL2321', '2021-01-27', '2021-02-02', 'Single Room', 1),
('JL2321', '2021-02-20', '2021-02-25', 'Triple room', 4),
('AA101010', '2021-02-01', '2021-03-10', 'Single Room', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`Type`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CIN`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Num_C`),
  ADD KEY `fk_reservation_chambre` (`Type`),
  ADD KEY `CIN` (`CIN`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Num_C` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_chambre` FOREIGN KEY (`Type`) REFERENCES `chambre` (`Type`),
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`CIN`) REFERENCES `client` (`CIN`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
