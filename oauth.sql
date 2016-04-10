-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 06:31 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_oauth`
--

CREATE TABLE `users_oauth` (
  `uo_usr_id` int(11) UNSIGNED NOT NULL COMMENT 'The user ID from your users table',
  `oauth_provider` varchar(10) NOT NULL COMMENT 'The provider: Twitter, Tumblr, LinkedIn, etc.',
  `oauth_provider_usr_id` varchar(99) NOT NULL COMMENT 'The user''s ID from the provider',
  `oauth_username` varchar(99) DEFAULT NULL COMMENT 'The user''s username from the provider',
  `oauth_token` varchar(99) NOT NULL,
  `oauth_secret` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_oauth`
--
ALTER TABLE `users_oauth`
  ADD PRIMARY KEY (`uo_usr_id`,`oauth_provider`),
  ADD KEY `uo_usersid` (`oauth_provider_usr_id`),
  ADD KEY `oauth_username` (`oauth_username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
