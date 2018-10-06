-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2018 at 07:25 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(50) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `pos_id` int(50) NOT NULL,
  `dates` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `comments`, `pos_id`, `dates`) VALUES
(1, 'Ruben#10 is my best player never see! haha...', 3, '2018-10-04 15:09:49'),
(2, 'Nooooo....he is not good enough as CR#07', 3, '2018-10-04 15:13:22'),
(3, 'it good to see this man at man u as head coach', 2, '2018-10-04 15:47:55'),
(4, 'do you think he will be good as at real madrid ....??', 2, '2018-10-04 15:48:38'),
(5, 'draw again how man u will look', 1, '2018-10-04 15:49:32'),
(6, 'this all because of mourinho..!! suck him and bring zidane', 1, '2018-10-04 15:50:26'),
(7, 'bayern munichen is not in good form as ajax', 3, '2018-10-04 20:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `news_posts`
--

CREATE TABLE `news_posts` (
  `post_id` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `dates` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_posts`
--

INSERT INTO `news_posts` (`post_id`, `title`, `description`, `image`, `dates`) VALUES
(1, 'Mourinho could be sacked next week', 'Manchester United have made Tottenham boss Mauricio Pochettino their preferred choice to succeed Jose Mourinho, claims The Independent.\r\n\r\nIt had been suggested that Zinedine Zidane would be handed th', 'man2.jpg', '2018-10-04 14:16:20'),
(2, 'Robben on Bayern winless run: Things dont go wrong in a week', 'It had been suggested that Zinedine Zidane would be handed the reins if a managerial change is made at Old Trafford, but leading board members have doubts over the Frenchmans suitability to the role.', 'zida2.jpg', '2018-10-04 14:23:08'),
(3, 'Robben on Bayern winless run: Things dont go wrong in a week', 'It had been suggested that Zinedine Zidane would be handed the reins if a managerial change is made at Old Trafford, but leading board members have doubts over the Frenchmans suitability to the role h', 'rube.jpg', '2018-10-04 14:25:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`),
  ADD UNIQUE KEY `comments_id` (`comments_id`);

--
-- Indexes for table `news_posts`
--
ALTER TABLE `news_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news_posts`
--
ALTER TABLE `news_posts`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
