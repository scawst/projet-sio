-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 23 Avril 2023 à 01:51
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `adresse` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `adresse`, `email`) VALUES
(17, 'Jean', 'luis', '456 Test', 'louis.jean@gmail.com'),
(18, 'Louis', 'Pierre', '234 rue ', 'lj@gmlail.com'),
(19, 'Louis', 'Jean', '456 Test', 'louis.jean@gmail.com'),
(20, 'Louis', 'Jean', '456 Test', 'louis.jean@gmail.com'),
(21, 'Louis', 'Jean', '456 Test', 'louis.jean@gmail.com'),
(22, 'Louis', 'Jean', '456 Test', 'louis.jean@gmail.com'),
(25, 'Louis', 'Jean', '456 Test', 'louis.jean@gmail.com'),
(30, 'Louis', 'David', '456 Test', 'louis.jean@gmail.com'),
(32, 'Louis', 'David', '456 Test', 'louis.jean@gmail.com'),
(33, 'Louis', 'David', '456 Test', 'louis.jean@gmail.com'),
(34, 'Louis', 'David', '456 Test', 'louis.jean@gmail.com'),
(35, 'Louis', 'David', '456 Test', 'louis.jean@gmail.com'),
(36, 'Louis', 'David', '456 Test', 'louis.jean@gmail.com'),
(37, 'Louis', 'David', '456 Test', 'louis.jean@gmail.com'),
(38, 'Louis', 'Pierre', '123 RERERER', 'lj@gmlail.com'),
(39, 'Louis', 'Pierre', '123 RERERER', 'lj@gmlail.com'),
(40, 'Louis', 'Pierre', '123 RERERER', 'lj@gmlail.com'),
(41, 'Louis', 'Pierre', '123 RERERER', 'lj@gmlail.com'),
(42, 'Louis', 'Pierre', '123 RERERER', 'lj@gmlail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
