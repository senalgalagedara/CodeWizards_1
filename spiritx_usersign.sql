-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2025 at 04:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spiritx_usersign`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`user_id`, `username`, `password`, `c_password`) VALUES
(1, 's', '1', '1'),
(2, 'asas', '2', '2'),
(3, 's', '$2y$10$mWAR.Xn.amDvuHkU7maHNesOTozyQ/eB5/98oJgxlhhUH2/C0R5.q', ''),
(4, 'senalsds', '$2y$10$w7b3BfpSMONlbgrNzuR1FetULj7NFceubuVDtjeMGc7c7ZXgp0r9e', ''),
(5, 'sadasd12', '$2y$10$F4AsoXaRsXcJGbRtGPfwxu8szKU8DPKNqgZYOhWfnvBZgQhmwjcRi', 'Senal2629!'),
(6, 'sadasd12', '$2y$10$O5.5l9iI/GHasM.1Is77EuuEI5O7UTtWELJdwwebnGpucq1gZJl1u', 'Senal2629!'),
(7, 'gaganakalhara', '$2y$10$x/21ulu4F27h0I8pO6wexevXByokJGBFJRTeSP9/hdiyPXDryPrhG', 'Kalhara#2003'),
(8, 'Q12345qq', '$2y$10$QdYPi7weEyraofmMzvy9P.wNqkJppgRBlPm.62WdtHoFak84jh65K', 'Kalhara#2003'),
(9, 'Gaganakalhara', '$2y$10$CiF7EdlJTe/Zy.qnQ9InKOLhxwaCtq.tFffYi9L3IiNojBAUNSYyW', '12345#Ab'),
(10, 'senal2003', '$2y$10$XFVHs4.eZDyBk4UO2/ob2em0O0tfQHeVLlu10eaq9QJ21rJz439iK', 'senal2629!A'),
(11, 'Senal2629', '$2y$10$Gmamc6TUn4h488WFcXz5feRM6m80G6yVU/FMZMvb91SovgYcAqisO', 'senal2003!A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
