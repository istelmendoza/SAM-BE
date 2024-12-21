-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 01:31 PM
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
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'assets/fam1.jpg', 'My family is everything to me. We have a big, close-knit family, and I feel incredibly lucky to have my lolo and lola still with us. Their presence means so much to me, and I cherish the time we spend together.\r\n', 'Soft Blue'),
(2, 1, 'assets/fam2/jpg', 'This is my brother\'s family, with his beloved wife and my adorable twin nieces. They\'re such a happy and loving family, and I’m proud to see how much love they share.', 'Soft Blue'),
(3, 1, 'assets/fam3.jpg', 'My twin nieces are absolutely adorable and full of energy. They bring so much joy and laughter to our family with their playful nature and sweet personalities. Watching them grow and seeing their unique bond as twins is such a heartwarming experience.', 'Soft Blue'),
(4, 2, 'assets/sp1.jpg', 'I recently joined an inter-town volleyball league, and it was an amazing experience. Our team worked hard and gave it our all, and we were proud to finish in 4th place. It was a memorable journey filled with teamwork and growth.', 'Bold Red'),
(5, 2, 'assets/sp2.jpg', 'My volleyball team is from the Computer Society, and I’m honored to be the team captain. Leading the team has been an incredible experience, and I’m proud of how we came together and supported each other throughout the league.', 'Bold Red'),
(6, 2, 'assets/sp3.jpg', 'This volleyball team is part of an inter-barangay league, and as the team captain, I’m proud to say we finished in 3rd place. It was a fantastic journey, filled with hard work, teamwork, and dedication from everyone on the team.', 'Bold Red'),
(7, 3, 'assets/fr1.jpg', 'My high school girlfriends are truly special to me. Even though we’re not classmates in college, our bond has remained strong. We still make time for each other, sharing memories and supporting one another through all the changes in our lives. The friendship we built in high school continues to grow', 'Orange'),
(8, 3, 'assets/fr2.jpg', 'My high school boyfriend was a significant part of my teenage years. We shared many unforgettable moments, learning about life and each other. Even though we’ve both moved on, the memories of those times still hold a special place in my heart. He was a big part of my growth and shaped some of the be', 'Orange'),
(9, 3, 'assets/fr3.jpg', 'My college friends have made my college life special. They’ve supported me through all the ups and downs, always there when I needed them. Their friendship means a lot, and I’m grateful for the memories we’ve created together.', 'Orange '),
(10, 4, 'assets/jt1.jpg', 'Spotify is my go-to companion when I’m doing activities. Whether I’m studying, working out, or just relaxing, it always provides the perfect soundtrack to match my mood. The variety of playlists and genres helps me stay focused and energized, making every task feel more enjoyable and comforting.', 'Purple'),
(11, 4, 'assets/jt2.jpg', 'Vlogs like Cong TV, Viy Cortez, Geo Ong, and Mommy Oni’s reality show are my go-to for entertainment. Their authentic and fun content makes me feel connected to their lives, bringing laughter and inspiration with every video.', 'Purple'),
(12, 4, 'assets/jt3.jpg', 'When I’m bored, I turn to Mobile Legends for some fun. It’s a great way to pass the time, offering exciting gameplay and the chance to challenge myself with each match. The action-packed battles and teamwork keep me hooked, making it a perfect way to unwind and enjoy a break.', 'Purple');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family Island', 'I find joy in togetherness, love, and shared memories.', 'Family Island is where love and connection thrive. It’s a place for shared moments, laughter, and meaningful bonds that strengthen family ties.', 'Soft Blue', 'assets/fam island.png', 'Active'),
(2, 'Sports Island', 'I thrive in teamwork, competition, and the energy of volleyball and basketball', 'Sports Island is where my love for volleyball and basketball comes to life. It’s a realm of competition, teamwork, and the thrill of the game. Every match, every pass, and every spike is a reflection of my passion for sports and the drive to achieve greatness with teammates.', 'Bold Red', 'assets/sports island.png', 'Active'),
(3, 'Friendship Island', 'I cherish trust, laughter, and unforgettable adventures with friends.', 'Friendship Island is a place where trust and laughter light the way. It’s filled with adventures, shared experiences, and memories that create lasting bonds. This island reflects the essence of true friendships—supportive, fun, and always there through thick and thin.\r\n\r\n', 'Orange', 'assets/friendship island.png', 'Active'),
(4, 'JoyTune Island', 'I express happiness through TikTok, gaming, music, and entertainment.', 'Joytune Island is my personal haven of entertainment and creativity. It’s a place where I express my love for music, TikTok, gaming, and entertainment. Whether I’m creating content, diving into a game, or enjoying a K-drama, this island radiates the joy I get from my favorite activities.', 'Purple', 'assets/joytune island.png', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
