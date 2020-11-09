-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 09 nov. 2020 à 12:22
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `five_team`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `prenom` char(45) NOT NULL,
  `nom` char(45) NOT NULL,
  `photo` text NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `nom`, `photo`, `description`) VALUES
(1, 'Léon', 'Lambert', 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam sagittis ultricies. Nam vulputate felis augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in aliquet lacus. Sed condimentum scelerisque lorem in vulputate.'),
(2, 'George', 'Marseau', 'https://wl-sympa.cf.tsp.li/resize/728x/jpg/f6e/ef6/b5b68253409b796f61f6ecd1f1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam sagittis ultricies. Nam vulputate felis augue.'),
(3, 'Zoé', 'Martineau', 'data:image/jpeg;base64,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', 'Nunc aliquam sagittis ultricies. Nam vulputate felis augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in aliquet lacus. Sed condimentum scelerisque lorem in vulputate.'),
(4, 'Rémy', 'Rocheleau', 'https://www.paricilademocratie.com/image/1681/7/visualiser.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam sagittis ultricies.'),
(6, 'Philippe', 'Garreau', 'https://media.gettyimages.com/photos/business-traveler-at-hotel-reception-picture-id755654001?k=6&m=755654001&s=612x612&w=0&h=I7WKux3T0DzYM0a7fgVmMzp59oN7sqvb7yvp233i19E=', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo sem sit amet nibh sollicitudin, id mollis metus elementum. Vestibulum vitae sem sit amet arcu tincidunt laoreet.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
