-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 06:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(8) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `status` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `phone`, `avatar`, `status`) VALUES
(1, 'Adam Lloyd', '7782222221', 'Adam-Lloyd.png', 1),
(2, 'Shawn Brown', '6048788888', 'Shawn-Brown.png', 1),
(3, 'Gaetan Kill', '60458785424', 'Gaetan-Kill.png', 1),
(4, 'Holly Calderwood', '7786549235', 'Holly-Calderwood.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(8) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `bed` int(16) NOT NULL,
  `bathroom` int(16) NOT NULL,
  `price` float NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `name`, `address`, `bed`, `bathroom`, `price`, `image_path`, `description`, `status`) VALUES
(26, 'Bosa Properties', '1601 E 4th Avenue\r\nVancouver, BC, V5N 1J7', 1, 1, 1649000, 'house1.jpg', 'Stunning contemporary ½ duplex steps from Commercial Drive. Modern upscale design reminiscent of an art gallery, home boasts private yard, in-floor radiant heat, polished concrete floors, over-height ceilings, built-in audio, basement suite (perfect ', 1),
(27, 'Grandview East', '2071 E 6th Avenue\r\nVancouver, BC, V5N 1P8', 1, 1, 1719000, 'house2.jpeg', '<p>Your home, blending in while standing out. A perfect fit for this charming street on East 6th. Enjoy a crisp cool evening in your south facing front yard, while creating tasteful memories in your one-of-a-kind Fisher Paykel Appliance kitchen. </p>', 1),
(28, 'PARK HOUSE', '403 477 W 59th Avenue\r\nVancouver, BC, V5X 1X4', 1, 1, 1155000, 'house3.jpg', 'PARK HOUSE is the perfect definition of luxury living! This spacious 662 SQFT 1 bed + Flex unit features Kitchen by Italian Scavolini, Miele appliance package and Caesarstone countertops with waterfall edge on the kitchen island.', 1),
(29, 'Open-concept blends', '2073 E 6th Avenue\r\nVancouver, BC, V5N 1P8', 1, 1, 1799000, 'house4.jpg', 'From the open-concept kitchen and living space to the large shaded backyard, there is plenty of room for the whole family to enjoy. ', 1),
(30, 'Waverley', '2686 Waverley Avenue\r\nVancouver, BC, V5S 1E7', 1, 1, 2450450, 'house5.jpg', 'Prime Killarney location! New renovation!Brand new kitchen , new painting and more updates in 2021. Excellent layout! Features radiant heat through out the two levels. Tile roof. 9\' ceiling. 3 bdrms up.', 1),
(31, 'West Dunbar', '3741 W 37th Avenue\r\nVancouver, BC, V6N 2W1', 1, 1, 5980000, 'house6.jpg', 'Situated at West of Dunbar, elegant custom built house on a prime 50\' x 130\' property. With functional open floor plan, the gorgeous main kitchen as well as a fully equipped Wok kitchen led to outdoor space perfectly for entertainment.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
