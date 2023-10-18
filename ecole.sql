-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 18 avr. 2021 à 18:56
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int NOT NULL,
  `nom` varchar(45) NOT NULL,
  `matricule` varchar(45) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `sportif` tinyint DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sexe` varchar(45) DEFAULT NULL,
  `idfiliere` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `matricule`, `date_naissance`, `sportif`, `email`, `sexe`, `idfiliere`) VALUES
(1, 'BIMEME Joseph', '20L001AA', '2000-01-05', 1, 'bimeme@gmail.com', 'M', '1'),
(2, 'FOTSO FOKAM Berliche', '18L002AA', '2000-05-04', 0, 'fotso@gmail.com', 'F', '1'),
(3, 'TCHAMENI Morel', '18L004AA', '1999-05-04', 1, 'tchameni@gmail.com', 'M', '1'),
(4, 'PEWO TIOMELA Ricsson', '18L0045BB', '2000-01-01', 1, 'pewo@gmail.com', 'M', '1'),
(15, 'MAMA Roland Sinclair', 'IGL00AAMM', '2000-06-15', 1, 'mama_roland@gmail.com', 'M', '1'),
(16, 'NOUMO KEMDJO Franky', 'IGL00HHN', '2001-03-09', 1, 'noumo@gmail.com', 'M', '1'),
(17, 'NODEM TCHOFFO Jordan', 'IGL00NN', '2021-04-17', 1, 'nodem@gmail.com', 'M', '1');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `idfiliere` int NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idfiliere`, `libelle`) VALUES
(1, 'Génie Logiciel'),
(2, 'Génie Minier'),
(3, 'Maintenance Industrielle'),
(4, 'Santé');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricule_UNIQUE` (`matricule`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`idfiliere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `idfiliere` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
