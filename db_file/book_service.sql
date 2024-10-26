-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 02:50 PM
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
-- Database: `book_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'password', '2024-10-26 09:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `book_service`
--

CREATE TABLE `book_service` (
  `id` int(250) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `service` varchar(100) NOT NULL,
  `service_date` date NOT NULL DEFAULT current_timestamp(),
  `special_request` varchar(1000) NOT NULL,
  `contact_date` date NOT NULL,
  `contact_number` int(11) NOT NULL,
  `create_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_service`
--

INSERT INTO `book_service` (`id`, `fullname`, `email`, `service`, `service_date`, `special_request`, `contact_date`, `contact_number`, `create_at`) VALUES
(1, 'gerald', 'gee@gmail.com', 'Web Development', '2024-10-20', 'hakjfhkjagbklfjbk.jesnfklhs', '0000-00-00', 0, 2147483647),
(2, 'hulkluk', 'hulk@gmail.com', 'Android Development', '2024-10-20', 'kjahdkjahkjsdhkja', '0000-00-00', 0, 2147483647),
(3, 'adwfdawf', 'ahah@gmail.com', 'Web Design', '2024-10-20', 'dawdawd', '0000-00-00', 0, 2147483647),
(4, 'dadawd', 'faf@gmail.com', 'Web Development', '2024-10-22', 'gdhdth', '0000-00-00', 0, 2147483647),
(5, 'addad', 'asda@gmail.com', 'Web Development', '2024-10-22', 'asfafaewf', '0000-00-00', 0, 2147483647),
(6, 'addad', 'asda@gmail.com', 'Web Development', '2024-10-22', 'asfafaewf', '0000-00-00', 0, 2147483647),
(7, 'addad', 'asda@gmail.com', 'Web Development', '2024-10-22', 'asfafaewf', '0000-00-00', 0, 2147483647),
(8, 'adwda', 'awa@gmail.com', 'Android Development', '2024-10-22', 'dadwadeafsr', '0000-00-00', 0, 2147483647),
(9, 'adwda', 'awa@gmail.com', 'Android Development', '2024-10-22', 'dadwadeafsr', '0000-00-00', 0, 2147483647),
(10, 'first', 'first@gmail.com', 'Android Development', '2024-10-22', 'dadwadeafsr', '0000-00-00', 0, 2147483647),
(11, 'first1', 'first@gmail.com', 'Android Development', '2024-10-22', 'dadwadeafsr', '0000-00-00', 0, 2147483647),
(12, 'second', 'first@gmail.com', 'Android Development', '2024-10-22', 'dadwadeafsr', '0000-00-00', 0, 2147483647),
(13, 'second2', 'first@gmail.com', 'Android Development', '2024-10-22', 'dadwadeafsr', '0000-00-00', 0, 2147483647),
(14, 'dela', 'dela@gmail.com', 'Web Development', '2024-10-22', 'afafeaf', '0000-00-00', 0, 2147483647),
(15, 'dela1', 'dela@gmail.com', 'Web Development', '2024-10-22', 'afafeaf', '0000-00-00', 0, 2147483647),
(16, 'dela2', 'dela@gmail.com', 'Web Development', '2024-10-22', 'afafeaf', '0000-00-00', 0, 2147483647),
(17, 'gerald', 'th@gmail.com', 'Web Development', '2024-10-22', 'jakgdkjgawjgdjaw', '0000-00-00', 0, 2147483647),
(18, 'sec4', 'sec@gmail.com', 'Web Development', '2024-10-22', 'fsegtdjutki', '0000-00-00', 0, 2147483647),
(19, 'ahhmm', 'dela@gmail.com', 'Web Development', '2024-10-22', 'afafeaf', '0000-00-00', 0, 2147483647),
(20, 'das', 'das@gmail.com', 'Android Development', '2024-10-23', 'dadwdaw', '0000-00-00', 0, 2147483647),
(21, 'das', 'das@gmail.com', 'Android Development', '2024-10-23', 'dadwdaw', '0000-00-00', 0, 2147483647),
(25, 'aaa', 'gerald_dc1997@yahoo.com', 'Android Development', '2024-10-23', 'sakjdjgafaw', '0000-00-00', 0, 2147483647),
(26, 'aaa', 'gerald_dc1997@yahoo.com', 'Android Development', '2024-10-23', 'sakjdjgafaw', '0000-00-00', 0, 2147483647),
(27, 'qwe', 'qwe@gmail.com', 'Web Design', '2024-10-23', 'hghjfgfwa', '0000-00-00', 0, 2147483647),
(28, 'woow', 'wow@gmail.com', 'Web Development', '2024-10-23', 'adwfage', '0000-00-00', 0, 2147483647),
(29, 'woow', 'wow@gmail.com', 'Web Development', '2024-10-23', 'adwfage', '0000-00-00', 0, 2147483647),
(30, 'woow', 'wow@gmail.com', 'Web Development', '2024-10-23', 'adwfage', '0000-00-00', 0, 2147483647),
(31, 'woow', 'wow@gmail.com', 'Web Development', '2024-10-23', 'adwfage', '0000-00-00', 0, 2147483647),
(32, 'woow', 'wow@gmail.com', 'Web Development', '2024-10-23', 'adwfage', '0000-00-00', 0, 2147483647),
(33, 'aw', 'aw@gmail.com', 'Web Development', '2024-10-23', 'dshtfjstdid', '0000-00-00', 0, 2147483647),
(34, 'aw', 'aw@gmail.com', 'Web Development', '2024-10-23', 'dshtfjstdid', '0000-00-00', 0, 2147483647),
(35, 'sa', 'sa@gmail.com', 'Web Development', '2024-10-23', 'gdrhgdtzhd', '0000-00-00', 0, 2147483647),
(36, 'woow', 'wow@gmail.com', 'Web Development', '2024-10-23', 'adwfage', '0000-00-00', 0, 2147483647),
(37, 'das', 'das@gmail.com', 'Web Development', '2024-10-23', 'ajkgwygw', '0000-00-00', 0, 2147483647),
(38, 'das', 'das@gmail.com', 'Web Development', '2024-10-23', 'ajkgwygw', '0000-00-00', 0, 2147483647),
(39, 'yan', 'yan@gmail.com', 'Web Development', '2024-10-23', 'bjhvhjfgfg', '0000-00-00', 0, 2147483647),
(40, 'nice', 'nice@gmail.com', 'Web Development', '2024-10-23', 'awfsaegegsthe5ahahahahahah', '0000-00-00', 0, 2147483647),
(41, 'ahah12', 'ahah@gmail.com', 'Web Development', '2024-10-24', 'faegsey', '0000-00-00', 0, 2147483647),
(42, 'dad12', 'dad@gmail.com', 'Web Development', '2024-10-24', 'fsaegeshrs', '0000-00-00', 0, 2147483647),
(43, 'dad13', 'dad@gmail.com', 'Web Development', '2024-10-24', 'dafagst', '0000-00-00', 0, 2147483647),
(44, 'safe13', 'dad@gmail.com', 'Web Development', '2024-10-24', 'sagstvjdyilf', '0000-00-00', 0, 2147483647),
(45, 'safe14', 'dad@gmail.com', 'Android Development', '2024-10-24', 'aegsetcjvdtidl', '0000-00-00', 0, 2147483647),
(46, 'ser1', 'ser@gmail.com', 'Web Development', '2024-10-24', 'hagufjlkrhsgljos;tidushiotrsjhio', '0000-00-00', 0, 2147483647),
(47, 'dad12', 'dad@gmail.com', 'Android Development', '2024-10-24', 'hsgfasytfsyfufsr', '0000-00-00', 0, 2147483647),
(48, 'fa1', 'dad@gmail.com', 'Android Development', '2024-10-24', 'kdjfshzfuiesgy', '0000-00-00', 0, 2147483647),
(49, 'sad', 'sad1@gmail.com', 'Web Development', '2024-10-25', 'daseihfiueshuif', '0000-00-00', 0, 2147483647),
(50, '01gerald', 'ada@gmail.com', 'Android Development', '2024-10-18', 'fagseh5e', '0000-00-00', 0, 2147483647),
(51, '02gerald', 'gerald@gmail.com', 'Web Development', '2024-10-25', 'dsahfkjhskehf', '0000-00-00', 0, 2147483647),
(52, 'as', 'as@gmail.com', 'Web Development', '2024-10-25', 'dsafesf', '0000-00-00', 0, 2147483647),
(53, 'dawda', 'dado@gmail.com', 'Web Development', '2024-10-25', 'dadad', '0000-00-00', 0, 2147483647),
(54, 'fsef', 'first@gmail.com', 'Web Development', '2024-10-25', 'fsef', '0000-00-00', 0, 2147483647),
(55, 'eg', 'gerald_dc1997@yahoo.com', 'Web Development', '2024-10-25', 'dcfe', '0000-00-00', 0, 2147483647),
(56, 'dad', 'gerald_dc1997@yahoo.com', 'Web Development', '2024-10-25', 'rdgsdhd', '0000-00-00', 0, 2147483647),
(57, 'aw', 'gerald_dc1997@yahoo.com', 'Web Development', '2024-10-25', 'awa', '0000-00-00', 0, 2147483647),
(58, 'dawdsf', 'gerald_dc1997@yahoo.com', 'Web Development', '2024-10-25', 'fwfwf', '0000-00-00', 0, 2147483647),
(59, 'das12', 'gerald_dc1997@yahoo.com', 'Web Development', '2024-10-25', 'ewefec5hvyjilo', '0000-00-00', 0, 2147483647),
(60, 'awdaw', 'gerald_dc1997@yahoo.com', 'Web Development', '2024-10-25', 'dawdaw', '0000-00-00', 0, 2147483647),
(61, 'aaaaaaa', 'aa@gmail.com', 'Web Development', '2024-10-25', 'dadadadada', '0000-00-00', 0, 2147483647),
(62, 'da4', 'das@gmail.com', 'Web Development', '2024-10-25', 'dawfs', '0000-00-00', 0, 2147483647),
(63, 'das', 'gerald_dc1997@yahoo.com', 'Web Development', '2024-10-25', 'dwarfc3sf', '0000-00-00', 0, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_service`
--
ALTER TABLE `book_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_service`
--
ALTER TABLE `book_service`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
