-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 02:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sneakerhead`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `Id` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Totalammount` int(100) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phnumber` int(100) NOT NULL,
  `Paymentoption` varchar(100) NOT NULL,
  `Product` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`Id`, `UserName`, `Totalammount`, `Fullname`, `Address`, `Phnumber`, `Paymentoption`, `Product`) VALUES
(1, 'Siddhart', 1550000, 'SiddharthaShrestha', 'Dallu,kathmandu', 2147483647, 'CashonDelievry', ''),
(2, 'Siddhartha', 117300000, 'Siddhartha Shrestha', 'newroad,kathmandu', 987232323, 'Home', ''),
(5, 'Siddhartha', 101740000, 'Siddhartha Shrestha', 'Dallu,Kathamndu', 2147483647, 'Cash on Delievery', ''),
(6, 'Siddhartha', 101740000, 'Siddhartha Shrestha', 'Dallu,Kathamndu', 2147483647, 'Cash on Delievery', ''),
(7, 'Siddhartha', 101740000, 'Siddhartha Shrestha', 'Dallu,Kathamndu', 2147483647, 'Cash on Delievery', ''),
(8, 'Siddhartha', 117300000, 'Shree Krishna', 'newroad,kathmandu', 992883555, 'Cash on Delievery', ''),
(9, 'Siddhartha', 117300000, 'jethalal', 'newroad,kathmandu', 2147483647, 'Cash on Delievery', ''),
(10, 'Siddhartha', 101740000, 'Siddhartha Shrestha', 'Dallu,Kathamndu', 2147483647, 'Cash on Delievery', ''),
(11, 'Siddhartha', 101740000, 'Siddhartha Shrestha', 'Dallu,Kathamndu', 2147483647, 'Cash on Delievery', ''),
(12, 'siddhart', 32700000, 'Ram', 'dallu', 2147483647, 'Cash on Delievery', ''),
(13, 'siddhartha', 14800000, 'Siddhartha Shrestha', 'Nayabazar,kathmandu', 2147483647, 'Cash on Delievery', 'Nike Air Jordon 1 (10), Nike Air Jordon 5 (10)'),
(14, 'siddhartha', 14800000, 'Krishna', 'krishna road', 2147483647, 'Cash on Delievery', 'Nike Air Jordon 1 (10), Nike Air Jordon 5 (10)'),
(15, 'siddhartha', 4500000, 'Clonex', 'hanuman dokha', 992838283, 'Cash on Delievery', 'Balenciaga Cameo  (10)'),
(16, 'siddhartha', 6800000, 'Clonex', 'hanuman dokha', 2147483647, 'Cash on Delievery', 'Converse Blue Off White (10), Nike Air Jordon 1 (10)'),
(17, 'hanuman', 18500000, 'Hanuman', 'hanuman dokha', 1929920303, 'Cash on Delievery', 'Balenciaga Cameo  (10), Balenciaga Speed LT  (20)'),
(18, 'Siddhart', 800000, 'Siddhartha Shrestha', 'Dallu,Kathamndu', 2147483647, 'Cash on Delievery', 'Nike Air Jordon 1 (10)');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `Id` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `PCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`Id`, `PName`, `PPrice`, `Image`, `PCategory`) VALUES
(1, 'Nike Air Jordon 1', '80000', 'Uploadimage/product-1.jpg', 'Nike'),
(2, 'Nike Air Jordon 5', '1400000', 'Uploadimage/4.jpg', 'Nike'),
(7, 'Converse Blue Off White', '600000', 'Uploadimage/collection-1.jpg', 'Converse'),
(8, 'Nike Travis Scott ', '10000000', 'Uploadimage/product-2.jpg', 'Nike'),
(9, 'Nike Jordon Blue Dunk Low', '100000000', 'Uploadimage/collection-2.jpg', 'Nike'),
(14, 'Nike Jordon 4', '400000', 'Uploadimage/product-4.jpg', 'Nike'),
(15, 'Balenciaga Cameo ', '450000', 'Uploadimage/Balenciaga sneakers for Men.jpg', 'Balenciaga'),
(16, 'Balenciaga Speed LT ', '700000', 'Uploadimage/Balenciaga Speed LT Sneakers.jpg', 'Balenciaga'),
(17, 'Balenciaga Blue Train', '500000', 'Uploadimage/cameo.jpg', 'Balenciaga'),
(18, 'Balenciaga Men Runner', '340000', 'Uploadimage/rrrr.jpg', 'Balenciaga'),
(19, 'Balenciaga Men Triple', '50000', 'Uploadimage/s.jpg', 'Balenciaga'),
(20, 'Balenciaga Track', '450000', 'Uploadimage/bal.jpg', 'Balenciaga'),
(22, 'Converse Chuck Taylor All Star ', '800000', 'Uploadimage/convvsdv.jpg', 'Converse'),
(23, 'Converse AllStar White ', '400000', 'Uploadimage/Converse.jpg', 'Converse'),
(25, 'Nike Panda Dunk', '8000000', 'Uploadimage/aaaa.jpg', 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `UserName`, `Email`, `Number`, `Password`) VALUES
(1, 'Siddhartha', 'siddhartha@gmail.com', '1223233232', 'apple'),
(13, 'Sudama', 'krishna@gmail.com', '98283723727', 'apple'),
(15, 'Siddhart', 'siddhart@gmail.com', '9288382399', 'apple'),
(17, 'Krishna', 'lord@gmail.com', '12233232', 'apple'),
(18, 'Hanuman', 'hanuman@gmail.com', '2883283283', 'apple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
