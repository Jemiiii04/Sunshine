-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 09:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunshine`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutusbot`
--

CREATE TABLE `aboutusbot` (
  `id` int(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutusbot`
--

INSERT INTO `aboutusbot` (`id`, `image1`, `title1`, `subtitle`) VALUES
(1, '2102team4.webp', 'Ratan J. Batliboi', 'Board Chair & hon Trustee'),
(2, '8524team5.webp', 'Praveen Kadle', 'Trustee & Hon Treasurer'),
(3, '3549team6.webp', 'Pervin Varma', 'Trustee');

-- --------------------------------------------------------

--
-- Table structure for table `aboutuscard`
--

CREATE TABLE `aboutuscard` (
  `id` int(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutuscard`
--

INSERT INTO `aboutuscard` (`id`, `image1`, `title1`, `description1`) VALUES
(1, '5234about-card-1.gif', 'Taking Responsibility', 'To enable people to take responsibility for the situation of deprived Indian children...\r\n'),
(2, '2089about-card-2.gif', 'Mobilising Potential', 'To make people discover their potential for action and change.\r\n'),
(3, '4338about-card-3.gif', 'Inspiring Collective Action', '\r\nTo enable peoples’ movements encompassing diverse segments, working in partnership to secure, protect & honour the rights of India’s children.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `aboutusgrid`
--

CREATE TABLE `aboutusgrid` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutusgrid`
--

INSERT INTO `aboutusgrid` (`id`, `title`, `subtitle`, `description`, `video`, `image`) VALUES
(1, 'Over 4 decades of ensuring', 'happier childhoods', 'Sunshine NGO Institute is a dedicated non-profit organization committed to driving positive change in communities through education, empowerment, and advocacy. Our mission is to provide resources and initiatives that uplift underprivileged individuals and', 'AU.mp4', 'AB2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `aboutusmc`
--

CREATE TABLE `aboutusmc` (
  `id` int(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutusmc`
--

INSERT INTO `aboutusmc` (`id`, `image1`, `title1`, `subtitle`) VALUES
(1, '2477team1.jpg', 'Puja Marwaha', 'Chief Executive'),
(2, '9340team2.jpg', 'Yamini Kapoor', 'DIRECTOR - Resource Generation'),
(3, '8338team3.webp', 'Vatsala Mamgain', 'DIRECTOR - Communication');

-- --------------------------------------------------------

--
-- Table structure for table `aboutustitle`
--

CREATE TABLE `aboutustitle` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutustitle`
--

INSERT INTO `aboutustitle` (`id`, `title`, `description`, `image`) VALUES
(4, 'Our Vision', 'A happy, healthy and creative child whose rights are protected and honoured in a society that is built on respect for dignity, justice and equity for all.', 'AB1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `consultus`
--

CREATE TABLE `consultus` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `typeofconsultation` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultus`
--

INSERT INTO `consultus` (`id`, `name`, `email`, `phone_no`, `typeofconsultation`, `message`) VALUES
(1, 'jemi04', 'jemi@gmail.com', 2147483647, 'Child Labour', 'heyyyyy thereeee');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `full_name`, `phone_no`, `email`, `message`, `date`) VALUES
(1, 'jemi jyani', '78462138', 'jyanijaimen@gmail.com', 'heyyy thereee', '2025-02-25 15:03:56'),
(2, 'jemi jyani', '2147483647', 'jemi@gmail.com', 'ert54rs', '2025-02-25 15:04:15'),
(3, 'jemi jyani', '2147483647', 'jemi@gmail.com', 'ert54rs', '2025-02-25 15:06:18'),
(4, 'gddfg dsgdf', '123', 'jyanijaimen@gmail.com', 'defrf4', '2025-02-25 15:06:36'),
(6, 'jemi patel', '9876543210', 'jyanijaimen@gmail.com', 'heyyyy thereee!!!!', '2025-02-28 11:41:34'),
(7, 'jemi jyani', '9876543210', 'jemi04@gmail.com', 'Heyyyy thereeeee!!!!!!!!!!!!', '2025-03-06 12:06:41'),
(9, 'jemi jyani', '9876543210', 'jemi04@gmail.com', 'your ngo is helping many needy people.', '2025-03-20 11:09:34'),
(10, 'jemi jyani', '9876543210', 'jemi04@gmail.com', 'your ngo is helping many needy people.', '2025-03-20 11:09:36'),
(11, 'jemi jyani', '9876543210', 'jemi04@gmail.com', 'your ngo is helping many needy people.', '2025-03-20 11:34:33'),
(12, 'jemi jyani', '9876543210', 'jemi04@gmail.com', 'your ngo is helping many needy people.', '2025-03-20 11:34:35'),
(13, 'jemi jyani', '78985221', 'jemijyani@gmail.com', 'heyyy thereee!!!! you are doing great at you ngo by helping needy people. ', '2025-03-20 11:35:50'),
(14, 'jemi jyani', '78985221', 'jemijyani@gmail.com', 'heyyy thereee!!!! you are doing great at you ngo by helping needy people. ', '2025-03-20 11:35:52'),
(15, 'jemi jyani', '45623126213', 'jemi04@gmail.com', 'heyyy thereee!!!! you are doing great at you ngo by helping needy people.', '2025-03-20 11:40:05'),
(16, 'jemi jyani', '45623126213', 'jemi04@gmail.com', 'heyyy thereee!!!! you are doing great at you ngo by helping needy people.', '2025-03-20 11:41:49'),
(17, 'jemi jyani', '45623126213', 'jemi04@gmail.com', 'heyyy thereee!!!! you are doing great at your ngo by helping needy people.', '2025-03-20 11:41:58'),
(18, 'jemi jyani', '78985221', 'jemijyani@gmail.com', 'heyyyyy thereeee', '2025-03-20 11:55:48'),
(19, 'gddfg dsgdf', '78985221', 'jemi21@gmail.com', 'etdfhry46arf', '2025-03-20 12:19:05'),
(20, 'jemi jyani', '9876543210', 'jemi04@gmail.com', 'heyyy thereee!!!! you are doing great at you ngo by helping needy people.', '2025-03-20 12:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`) VALUES
(15, 'WHAT WE DO?', 'SUNSHINE’s flagship programme Mission Education works with the objective of empowering underprivileged children by providing education, nutrition, and wellness support. The programme is well aligned to the New Education Policy (2020), and the SDG Goal 4 (Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all). Mission Education works with children (3-18 years) living in difficult circumstances, children from poor families, differently abled children, disaster-struck children, abandoned and street children, and children living in tribal belts, remote villages and hard to reach areas.'),
(18, 'WHAT HEALTHCARE DOES?', 'SUNSHINE’s comprehensive and community-centric health programme takes primary healthcare services to the doorsteps of underserved communities in both rural and urban India. Following a two pronged approach, the programme provides curative as well as preventive services, addressing the gaps in availability, accessibility and affordability of healthcare. \r\n'),
(19, 'Statistics on Child Labour in India', 'While we are working tirelessly to stop child labour in India, it remains a widespread problem and the numbers are alarming. It is a complex issue that requires sustained efforts to build a safer and happier environment for our children. '),
(20, 'OUR MISSION', 'Our mission is to illuminate paths to equality and empowerment for women and girls. We are committed to creating a society where every woman has the resources, confidence, and support to realize her full potential. With compassion, courage, and resilience as our guiding values, we strive to break barriers, build confidence, and nurture change-makers. Sunshine NGO shines brighter with every empowered woman who transforms her life and inspires those around her. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `date`, `name`, `email`, `password`, `phone_no`) VALUES
(11, '2025-02-28 10:56:58', 'jemi04', 'jemi@gmail.com', '8522', '75211682'),
(12, '2025-02-28 12:29:40', 'jemi04', 'jemi04@gmail.com', 'jemi04', '9327393608');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Jaimin Jayani', 'jemi04@gmail.com', 'jemi04'),
(2, 'Urmi Chudasama', 'urmi20@gmail.com', 'urmi20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutusbot`
--
ALTER TABLE `aboutusbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutuscard`
--
ALTER TABLE `aboutuscard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutusgrid`
--
ALTER TABLE `aboutusgrid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutusmc`
--
ALTER TABLE `aboutusmc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutustitle`
--
ALTER TABLE `aboutustitle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultus`
--
ALTER TABLE `consultus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutusbot`
--
ALTER TABLE `aboutusbot`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aboutuscard`
--
ALTER TABLE `aboutuscard`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aboutusgrid`
--
ALTER TABLE `aboutusgrid`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutusmc`
--
ALTER TABLE `aboutusmc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutustitle`
--
ALTER TABLE `aboutustitle`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consultus`
--
ALTER TABLE `consultus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
