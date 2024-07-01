-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2024 at 05:52 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoharvest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('theekshana@gmail.com', '44444');

-- --------------------------------------------------------

--
-- Table structure for table `fdashboard`
--

DROP TABLE IF EXISTS `fdashboard`;
CREATE TABLE IF NOT EXISTS `fdashboard` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `phone` int NOT NULL,
  `website` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zipCode` int NOT NULL,
  `query` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fdashboard`
--

INSERT INTO `fdashboard` (`firstName`, `lastName`, `email`, `birthday`, `phone`, `website`, `street`, `city`, `province`, `zipCode`, `query`) VALUES
('Kusal', 'Mendis', 'kusal@gmail.com', '1996.08.25', 705856875, 'www.kusal.com', '18/2,A Janatha Rd', 'Kotte', 'Uva', 10102, 'My water Supply is not working ,Can you fix that soon'),
('Pathum', 'Nissanka', 'pathum@gmail.com', '2002.10.12', 704133489, 'www.pathum.com', '15/2,c Malwaththa Ro', 'Himaduwa', 'Western', 10100, 'I want more Fertilizer, Current Fertilizer Stock was not Enough.'),
('Dushmantha', 'Chameera', 'chameera@gmail.com', '1994.03.06', 705110778, 'www.chameera.com', '34/A, Sena Rd', 'Walimada', 'South', 20220, 'My crops are damaged by new funge, can you give a speed solution for that');

-- --------------------------------------------------------

--
-- Table structure for table `ologin`
--

DROP TABLE IF EXISTS `ologin`;
CREATE TABLE IF NOT EXISTS `ologin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ologin`
--

INSERT INTO `ologin` (`email`, `password`) VALUES
('wasantha@gmail.com', '55555'),
('adeesha@gmail.com', '55555');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`) VALUES
('Shevon Danial', 'shevon@gmail.com', '12345'),
('Kusal Mendis', 'kusal@gmail.com', '12345'),
('Pathum Nissanka', 'pathum@gmail.com', '12345'),
('Charith Asalanka', 'charith@gmail.com', '12345'),
('Dushmantha Chameera', 'chameera@gmail.com', '12345'),
('Upul Tharanga', 'upul@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
