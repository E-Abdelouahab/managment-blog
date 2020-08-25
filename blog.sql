-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 août 2020 à 15:48
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `pub_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`pub_id`, `image`, `description`, `date`, `category`, `user_id`, `title`) VALUES
(36, 'https://static.toiimg.com/thumb/msid-71323979,width-1070,height-580,overlay-toi_sw,pt-32,y_pad-40,resizemode-75,imgsize-54234/71323979.jpg', 'hello world', '0000-00-00', 'news', 17, 'devlopper'),
(37, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSfOL7zeKpnrhJ1LF7pvhbDCNEC7Xll5xrkDw&usqp=CAU', 'frtrtuyre', '0000-00-00', 'gigital', 17, 'technologie'),
(38, 'https://usercontent2.hubstatic.com/13924581.png', 'special day with coders maroocain ', '0000-00-00', 'langage programing', 17, 'programming'),
(39, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSfOL7zeKpnrhJ1LF7pvhbDCNEC7Xll5xrkDw&usqp=CAU', 'FFFFFFFFFFFGGGGGGGGGGHHHHHHHHHHHH', '0000-00-00', 'foot ball', 18, 'Cracking the Coding Interview: 6th EDITION (READ THE DESCRIPTION )'),
(40, 'https://lh3.googleusercontent.com/proxy/nCFOMnpE9Er14b7aAWKRY9SIu4ipX9shF8ClMQxoYQtlwnkT58yZ0y0C86XpmmkPoaeiyjswxofQPJoeD8I_BA6LIHLpdQTyKD7wYovm-RTfrfYZaNNNwGA', 'NEW CAMPUS YOUCODE SAFI MADE IN SIMPLON.CO & OCP GROUP', '0000-00-00', 'School', 17, 'Youcode'),
(41, 'https://img.ev.mu/images/portfolio/pays/136/600x400/854625.jpg', 'warzazate tourism disert sahara', '0000-00-00', 'TOURISM', 17, 'OUARZAZATE'),
(43, 'https://img.ev.mu/images/portfolio/pays/136/600x400/854625.jpg', 'dfhgf', '0000-00-00', 'news', 17, 'OUARZAZATE'),
(44, 'https://yt3.ggpht.com/a/AATXAJysEynEghsvVEHdcjVYfdaDfrimWMiTvtuEVKYTGJM=s900-c-k-c0xffffffff-no-rj-mo', 'dfhterhgf', '0000-00-00', 'tzch', 17, 'google');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`user_id`, `username`, `email`, `password`, `cpassword`) VALUES
(17, 'root', 'root@gmail.com', '63a9f0ea7bb98050796b649e85481845', '63a9f0ea7bb98050796b649e85481845'),
(18, 'abde6', 'abde6@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
