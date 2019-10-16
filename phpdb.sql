-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 04:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'kozayar', '2468');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(3, 'G-Shock'),
(6, 'Alexandre Christie Watch'),
(9, 'á€žá€á€„á€¹á€¸á€¡á€á€ºá€€á€¹á€¡á€œá€€á€¹á€™á€ºá€¬á€¸'),
(11, 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `icon` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `icon`) VALUES
(7, 'Tin Htut Khine', 'tinhtutkhine.max@gmail.com', 'Location', 'To donate books');

-- --------------------------------------------------------

--
-- Table structure for table `c_order`
--

CREATE TABLE `c_order` (
  `id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_phone` varchar(100) NOT NULL,
  `c_cty` varchar(100) NOT NULL,
  `c_pay` varchar(100) NOT NULL,
  `c_note` text NOT NULL,
  `c_cart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_order`
--

INSERT INTO `c_order` (`id`, `c_name`, `c_email`, `c_phone`, `c_cty`, `c_pay`, `c_note`, `c_cart`) VALUES
(1, 'Demo', 'example@gamil.com', '0873823', 'Myanmar', 'Cash On Delivery', '-', 'a:2:{i:7;s:1:\"1\";i:8;s:1:\"2\";}'),
(2, 'Alexandre Christie Watch', 'watch@gmail.com', '09 3773487', 'Myanmar', 'Cash On Delivery', '-', 'a:2:{i:7;s:1:\"1\";i:8;s:1:\"2\";}');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_cat` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `p_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_price`, `p_cat`, `img`, `p_desc`) VALUES
(16, 'abcd', '', 'á€žá€á€„á€¹á€¸á€¡á€á€ºá€€á€¹á€¡á€œá€€á€¹á€™á€ºá€¬á€¸', 'third.png', 'efgh'),
(17, 'abcd', '', 'á€žá€á€„á€¹á€¸á€¡á€á€ºá€€á€¹á€¡á€œá€€á€¹á€™á€ºá€¬á€¸', 'blue.png', 'efgh'),
(18, 'kaka', '', 'á€žá€á€„á€¹á€¸á€¡á€á€ºá€€á€¹á€¡á€œá€€á€¹á€™á€ºá€¬á€¸', 'logo.png', 'dgdfgfg'),
(24, 'ddd', '', 'Alexandre Christie Watch', 'ipad.jpg', 'dddd'),
(31, 'kozayar', '', 'á€žá€á€„á€¹á€¸á€¡á€á€ºá€€á€¹á€¡á€œá€€á€¹á€™á€ºá€¬á€¸', 'intro-bg.jpg', 'dffvdffdhgfhfghfg'),
(33, 'U Kyaw Thein', '', 'Books', 'intro-bg.jpg', 'Bar Nyar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_order`
--
ALTER TABLE `c_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `c_order`
--
ALTER TABLE `c_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
