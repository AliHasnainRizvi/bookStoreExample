-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2016 at 10:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quickwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_desp` varchar(1000) NOT NULL,
  `prod_img_path` varchar(100) NOT NULL,
  `prod_detail` varchar(100) NOT NULL,
  `prod_stock` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_price`, `prod_desp`, `prod_img_path`, `prod_detail`, `prod_stock`) VALUES
(1, 'The Essential Rumi (English)', 350, 'Essential Rumi New Expanded Edition The best-selling Rumi book ever is now better than ever! This revised and expanded edition of the comprehensive one-volume edition of Americas most popular poet includes a new introduction by Coleman Barks, and 81 new poems never published before. The ecstatic, spiritual poetry of Rumi is more popular than ever, and The Essential Rumi continues to be far and away the top-selling title of all Rumi books.', 'img/rumi.jpg', 'Translated by - Coleman Barks, Paper Back', 8),
(2, 'The Kite Runner', 180, 'n Afghan-American writer, Khaled Hosseini practiced medicine for over 10 years before becoming a full time writer post the success of his debut novel: The Kite Runner. Hosseini''s other works include A Thousand Splendid Suns and And The Mountains Echoed. He is the founder of a non-profit organization, The Khaled Hosseini Foundation, which aims at providing humanitarian assistance to the people of Afghanistan. Hosseini is also a Goodwill Envoy to the United Nations High Commissioner for Refugees, the UN Refugee Agency.', 'img/kite.jpg', 'Author - Khaled Hosseini,Paper Back', 14),
(3, 'To Kill a Mockingbird', 115, ' She is the author of the acclaimed To Kill a Mockingbird, and was awarded the Pulitzer Prize, the Presidential Medal of Freedom and numerous other literary awards and honours. She died on 19 February 2016.', 'img/kill.jpg', 'Author - Harper Lee,Paper Back', 8),
(4, '1984', 240, 'Nineteen Eighty-Four, often published as 1984, is a dystopian novel by English author George Orwell published in 1949.The novel is set in Airstrip One (formerly known as Great Britain), a province of the superstate Oceania in a world of perpetual war, omnipresent government surveillance and public manipulation, dictated by a political system euphemistically named English Socialism (or Ingsoc in the government''s invented language, Newspeak) under the control of a privileged elite of the Inner Party, that persecutes individualism and independent thinking as "thoughtcrime."', 'img/1984.jpg', 'Author - George Orwell, Hard Cover', 5),
(5, 'The Alchemist', 160, 'The Alchemist presents a simple fable, based on simple truths and places it in a highly unique situation. And though we may sniff a bestselling formula, it is certainly not a new one: even the ancient tribal storytellers knew that this is the most successful method of entertaining an audience while slipping in a lesson or two. Brazilian storyteller Paulo Coehlo introduces Santiago, an Andalusian shepherd boy who one night dreams of a distant treasure in the Egyptian pyramids. And so he''s off: leaving Spain to literally follow his dream.', 'img/the_alchemist.jpg', 'Author - Paulo Coelho, Paper Back', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
