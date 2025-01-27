-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2025 at 03:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olympics`
--

-- --------------------------------------------------------

--
-- Table structure for table `athletes`
--

CREATE TABLE `athletes` (
  `id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `medal` enum('Gold','Silver','Bronze') NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `athletes`
--

INSERT INTO `athletes` (`id`, `sport_id`, `name`, `medal`, `description`, `image_url`) VALUES
(1, 1, 'Simone\nBiles', 'Gold', 'One of the greatest and most accomplished gymnasts.', 'assets/gymnasticGold.jpg'),
(2, 1, 'Suni\nLee', 'Silver', 'A talented, determined, and inspiring Olympic gymnast', 'assets/gymnasticSilver.jpg'),
(3, 1, 'Jade Care', 'Gold', 'A powerful and precise gymnastics skills, especially on floor and vault', 'assets/gymnasticGold2.jpg'),
(4, 2, 'Katie Ledecky', 'Gold', ' a dominant and record-breaking Olympic swimmer', 'assets/swimmingGold1.jpg'),
(5, 2, 'Bobby Finke', 'Gold', 'a resilient and record-breaking Olympic distance swimmer.', 'assets/swimmingGold2.jpg\r\n'),
(6, 2, 'Kate Douglass ', 'Gold', 'recognized for her versatile and powerful performances in competitive swimming.', 'assets/swimmingGold3.jpg\r\n'),
(7, 3, 'Spencer Lee', 'Silver', ' A dominance and success in collegiate wrestling, especially in the 125-pound weight class.', 'assets/wrestlingSilver.jpg'),
(8, 3, 'Sarah Hildebrandt', 'Gold', 'A skilled and success in freestyle wrestler, particularly in international competitions.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFY8YVs-5BmOXckeyyKHfzt69Tv39F1RAenA&s');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `description`, `image_url`) VALUES
(1, 'Gymnastics', 'The Summer Olympics feature a range of sports from athletics to gymnastics, showcasing the world’s top athletes.', 'assets/gymnastics.jpg'),
(2, 'Swimming', 'Swimming is one of the most prestigious sports at the Summer Olympics, with numerous world records set.', 'assets/swimmingg.jpg'),
(3, 'Wrestling', 'Wrestling combines strength, technique, and endurance, with athletes competing in various weight classes.', 'assets/wrestling.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athletes`
--
ALTER TABLE `athletes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sport_id` (`sport_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athletes`
--
ALTER TABLE `athletes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `athletes`
--
ALTER TABLE `athletes`
  ADD CONSTRAINT `athletes_ibfk_1` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
