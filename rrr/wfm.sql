-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 06:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_email` varchar(20) NOT NULL,
  `a_password` varchar(20) NOT NULL,
  `a_id` int(20) NOT NULL,
  `a_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_email`, `a_password`, `a_id`, `a_name`) VALUES
('admin@gmail.com', 'adminfwm', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `state_id` int(10) NOT NULL,
  `city_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`state_id`, `city_name`) VALUES
(1, 'Vijayawada'),
(2, 'Hyderabad'),
(3, 'Guntur'),
(4, 'Ongole');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `contact_id` int(20) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `subject`, `message`, `status`, `contact_id`, `created_date`) VALUES
('MAKA SRINIVASULU', 'acbd@gmial.com', 1234567890, '', 'ABJKKNFISD', '', 1, '0000-00-00'),
('MAKA SRINIVASULU', 'brama@gmail.com', 1234567890, 'dcdsdcd', 'sdrytkjh,mvcxfscgvb', '', 2, '0000-00-00'),
('dewfg', 'brama@gmail.com', 6300886243, 'fgfbfgn', 'wefrtjyukiu', '', 3, '2022-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_subject` varchar(30) NOT NULL,
  `f_message` varchar(500) NOT NULL,
  `n_id` varchar(20) NOT NULL,
  `h_id` varchar(20) NOT NULL,
  `f_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_name`, `f_subject`, `f_message`, `n_id`, `h_id`, `f_date`) VALUES
(1, 'bhargav bajjilu', 'F4HKIGBV', 'gfhgkjklkl.jk', '', '4', '0000-00-00'),
(2, 'bhargav bajjilu', 'safsfjghk', 'sdfhgjkkhjgf', '', '4', '2022-04-11'),
(3, 'WAYCT', 'qwfgfm', 'ewrtyukuyt', '1', '', '0000-00-00'),
(4, 'WAYCT', 'zfsdng', 'etylktd', '1', '', '2022-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` int(20) NOT NULL,
  `h_name` varchar(20) NOT NULL,
  `h_email` varchar(20) NOT NULL,
  `h_password` varchar(20) NOT NULL,
  `h_address` varchar(50) NOT NULL,
  `h_city` varchar(20) NOT NULL,
  `h_phoneNo` int(20) NOT NULL,
  `h_profile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `h_name`, `h_email`, `h_password`, `h_address`, `h_city`, `h_phoneNo`, `h_profile`) VALUES
(2, 'RVR', 'rvr@gmail.com', '123456789', 'afwege', 'guntur', 1234567890, 0x6d73643030312e6a7067),
(3, 'subhani hotel', 'subhani@gmail.com', '12345678', '2-34 a, Market yard centre,Chuttigunta, Guntur', 'guntur', 1234567890, 0x46425f494d475f313631343834333132313233312e6a7067),
(4, 'bhargav bajjilu', 'brama@gmail.com', '12345678', 'devapuram', 'guntur', 2147483647, 0x68756e6772792e6a7067),
(5, 'bala hotel', 'bh@gmail.com', '12345678', 'MG Road,Viajaywada', 'vijayawada', 1234567890, 0x61626f7574312e6a7067),
(7, 'RR hotel', 'rr@gmail.com', '12345678', 'Sr nagar', 'hyderabad', 2147483647, 0x626c6f672d362e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `n_id` int(20) NOT NULL,
  `n_email` varchar(20) NOT NULL,
  `n_password` varchar(20) NOT NULL,
  `n_name` varchar(20) NOT NULL,
  `n_address` varchar(50) NOT NULL,
  `n_city` varchar(30) NOT NULL,
  `n_workarea` varchar(30) NOT NULL,
  `n_phoneNo` int(20) NOT NULL,
  `n_profile` blob NOT NULL,
  `n_status` varchar(50) NOT NULL,
  `ngo_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`n_id`, `n_email`, `n_password`, `n_name`, `n_address`, `n_city`, `n_workarea`, `n_phoneNo`, `n_profile`, `n_status`, `ngo_id`) VALUES
(1, 'wayct@gmail.com', '12345678', 'WAYCT', 'VV PALEM', 'guntur', 'Ongole', 1234567890, 0x646f776e6c6f6164202832292e706e67, '', 0),
(2, 'eda@gmail.com', '12345678', 'Eda Foundation', '6-2 abc,Yusafguda,Hyderabad', 'hyderabad', 'YusefGuda', 1234567890, 0x6d73643030322e6a7067, '', 0),
(3, 'hh@gmail.com', '12345678', 'Helping Hands', 'svn colony,Guntur', 'guntur', 'guntur', 1234567890, 0x646f776e6c6f6164202835292e6a7067, '', 0),
(4, 'abcdef@gmail.com', '12345678', 'abcdef', 'fdfavd ', 'vijayawada', 'vijayawada', 1234567890, 0x6170706c652d746f7563682d69636f6e2d37327837322e706e67, '', 0),
(5, 'spngo@gmail.com', '12345678', 'spandana ngo', 'SVN Colony Guntur', 'guntur', 'Guntur', 1234567890, 0x626c6f672d322e6a7067, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `r_id` varchar(30) NOT NULL,
  `n_id` varchar(30) NOT NULL,
  `msg_type` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `notify_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `r_id` int(50) NOT NULL,
  `ngo_id` varchar(30) NOT NULL,
  `h_id` varchar(30) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_type` varchar(30) NOT NULL,
  `food_qty` varchar(30) NOT NULL,
  `cooked_time` time NOT NULL,
  `pickup_time` time NOT NULL,
  `expiry_time` time NOT NULL,
  `r_date` date NOT NULL,
  `v_id` int(20) NOT NULL,
  `v_address` varchar(30) NOT NULL,
  `v_phoneNo` int(10) NOT NULL,
  `v_city` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`r_id`, `ngo_id`, `h_id`, `food_name`, `food_type`, `food_qty`, `cooked_time`, `pickup_time`, `expiry_time`, `r_date`, `v_id`, `v_address`, `v_phoneNo`, `v_city`, `status`) VALUES
(25, '1', '4', 'wergthnj', 'efgdhj', '234', '03:02:00', '03:42:00', '00:00:00', '2022-04-11', 0, '', 0, '', 'accept'),
(38, '1', '', 'rice', '', '11', '00:00:00', '00:00:00', '00:00:00', '2022-04-12', 15, '', 0, '', 'accept'),
(39, '5', '', 'AakPaak', '', '10', '00:00:00', '00:00:00', '00:00:00', '2022-04-12', 16, 'Darsi', 1234567890, 'guntur', 'accept'),
(40, '5', '', 'rice', '', '99', '00:00:00', '00:00:00', '00:00:00', '2022-04-12', 17, 'SVN Colony', 2147483647, 'guntur', 'accept'),
(41, '2', '', 'food', '', '5', '00:00:00', '00:00:00', '00:00:00', '2022-04-12', 18, 'sr nagar', 2147483647, 'hyderabad', 'accept'),
(42, '2', '7', 'biryani', 'non veg', '10 kg', '12:12:00', '01:00:00', '03:00:00', '2022-04-12', 0, '', 0, '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `v_id` int(20) NOT NULL,
  `v_phoneNo` varchar(20) NOT NULL,
  `v_address` varchar(30) NOT NULL,
  `v_city` varchar(30) NOT NULL,
  `v_date` date NOT NULL,
  `v_email` varchar(30) NOT NULL,
  `v_foodqty` varchar(30) NOT NULL,
  `v_foodname` varchar(30) NOT NULL,
  `v_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`v_id`, `v_phoneNo`, `v_address`, `v_city`, `v_date`, `v_email`, `v_foodqty`, `v_foodname`, `v_name`) VALUES
(7, '1234567890', 'wegrtukyfjjdf', 'guntur', '2022-04-11', 'brama@gmail.com', '2 kg', 'biryani', 'MAKA SRINIVASULU'),
(8, '1234567890', 'sdfrgkyufkrft', 'guntur', '2022-04-11', 'ytj@gmail.com', '12 kg', 'Snacks', 'RRR hotel'),
(9, '1234567890', 'sdgfhj,ghvn', 'hyderabad', '2022-04-11', 'rrr@gmail.com', '2 kg', 'food', 'Ram'),
(15, '7711223344', 'tdkugufuf', 'guntur', '2022-04-12', 'rrr@gmail.com', '11', 'rice', 'WAYCT'),
(16, '1234567890', 'Darsi', 'guntur', '2022-04-12', 'br@gmail.com', '10', 'AakPaak', 'Ram'),
(17, '6300886243', 'SVN Colony', 'guntur', '2022-04-12', 'hr@gmail.com', '99', 'rice', 'Krish'),
(18, '6300886243', 'sr nagar', 'hyderabad', '2022-04-12', 'roh@gmail.com', '5', 'food', 'Rohit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notify_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `h_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `n_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notify_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `r_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `v_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
