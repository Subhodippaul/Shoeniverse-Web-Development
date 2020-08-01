-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 07:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Subhodip', 'subhodippaul2016@gmail.com', 'good'),
(2, 'Ahini Roy', 'ahini@gmail.com', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'New Balance MINIMUS 10V3', 7000),
(2, 'Nike AIR ZOOM VOMERO\r\n                           ', 5499),
(3, 'Reebok FLOAT RIDE 6000\r\n                           ', 4999),
(4, 'Adidas RUNNING SHOES\r\n                           ', 8999),
(5, 'Virgil ADAPT\r\n                           ', 5999),
(6, 'Nike CRAZY CHAOS\r\n                           ', 9999),
(7, 'Adidas ORIGINALS', 8499),
(8, 'Adidas SNEAKERS', 3999),
(9, 'Bata Formal Shoe', 8499),
(10, 'Bata Formal Shoe', 9499),
(11, 'Bata Formal Shoe', 5999),
(12, 'Bata Formal Shoe', 4399);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Subhodip', 'subhodippaul2016@gmail.com', 'e55c46afb316643a118d444e1e500fc5', '9874387465', 'Kolkata', 'South tarapukur, agarpara , n 24 pgs'),
(2, 'Ahini Roy', 'xgdhdf@gmail.com', '87037da7ba3ca1ac6d0f3044fad3346d', '9874387465', 'Kolkata', 'South tarapukur, agarpara , n 24 pgs'),
(3, 'Ahini Roy', 'ahini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9632147852', 'Kolkata', 'South tarapukur, agarpara , n 24 pgs');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(13, 1, 5, 'Confirmed'),
(15, 1, 2, 'Confirmed'),
(16, 1, 3, 'Confirmed'),
(17, 1, 6, 'Confirmed'),
(18, 1, 7, 'Confirmed'),
(19, 1, 4, 'Confirmed'),
(20, 1, 8, 'Confirmed'),
(21, 1, 9, 'Confirmed'),
(22, 1, 10, 'Confirmed'),
(23, 1, 11, 'Confirmed'),
(24, 1, 12, 'Confirmed'),
(25, 1, 2, 'Confirmed'),
(27, 1, 3, 'Confirmed'),
(28, 1, 1, 'Confirmed'),
(29, 1, 2, 'Confirmed'),
(30, 1, 3, 'Confirmed'),
(31, 1, 3, 'Confirmed'),
(32, 1, 2, 'Confirmed'),
(33, 1, 2, 'Confirmed'),
(34, 1, 2, 'Confirmed'),
(35, 2, 12, 'Confirmed'),
(36, 2, 3, 'Confirmed'),
(37, 2, 1, 'Confirmed'),
(38, 2, 4, 'Confirmed'),
(41, 3, 10, 'Confirmed'),
(42, 3, 2, 'Confirmed'),
(43, 3, 3, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
