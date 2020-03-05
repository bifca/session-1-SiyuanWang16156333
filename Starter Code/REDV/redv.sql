-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-03-04 11:46:55
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `redv`
--

-- --------------------------------------------------------

--
-- 表的结构 `red`
--

CREATE TABLE `red` (
  `pictureID` int(10) NOT NULL,
  `picture` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `birthday` date NOT NULL,
  `introduction` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `red`
--

INSERT INTO `red` (`pictureID`, `picture`, `name`, `birthday`, `introduction`) VALUES
(1, 'images/1.JPG', 'Red Velvet', '2014-08-01', 'Red velvet is a women\'s singing group launched by South Korea SM Entertainment Co., Ltd. in August 2014.'),
(2, 'images/2.JPG', 'Yeri', '1999-03-05', 'Selected as a trainee of SM company through South Korea\'s \"S.M. casting system\" draft.'),
(3, 'images/3.JPG', 'SeulGi', '1994-02-10', 'In 2007, Korean SM Entertainment Co., Ltd. was selected to become a trainee.'),
(4, 'images/4.JPG', 'Irene', '1991-03-29', 'In 2009, the talent show of South Korea SM Entertainment Co., Ltd. was discovered and officially entered the company to become a trainee.'),
(5, 'images/5.JPG', 'Joy', '1996-09-03', 'She was a member of the group who did not appear through SM rocks. She became an intern through the selection of SM Entertainment in Seoul in 2012.'),
(6, 'images/6.JPG', 'Wendy', '1994-02-21', 'In 2012, she became a trainee of SM Entertainment in Canada.');

-- --------------------------------------------------------

--
-- 表的结构 `RV`
--

CREATE TABLE `RV` (
  `Name` text NOT NULL,
  `Birthday` text NOT NULL,
  `Introduction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `RV`
--

INSERT INTO `RV` (`Name`, `Birthday`, `Introduction`) VALUES
('Red Velvet ', '2014-08-01', 'Red velvet is a women\'s singing group launched by South Korea SM Entertainment Co., Ltd. in August 2014.'),
('Yeri', '1999-03-05', 'Selected as a trainee of SM company through South Korea\'s \"S.M. casting system\" draft.'),
('SeulGi', '1994-02-10', 'In 2007, Korean SM Entertainment Co., Ltd. was selected to become a trainee.'),
('Irene', '1991-03-29', 'In 2009, the talent show of South Korea SM Entertainment Co., Ltd. was discovered and officially entered the company to become a trainee.'),
('Joy', '1996-09-03', 'She was a member of the group who did not appear through SM rocks. She became an intern through the selection of SM Entertainment in Seoul in 2012.'),
('Wendy', '1994-02-21', 'In 2012, she became a trainee of SM Entertainment in Canada.'),
('Red Velvet\r\n', '2014-08-01\r\n', 'Red velvet is a women\'s singing group launched by South Korea SM Entertainment Co., Ltd. in August 2014.');

--
-- 转储表的索引
--

--
-- 表的索引 `red`
--
ALTER TABLE `red`
  ADD PRIMARY KEY (`pictureID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
