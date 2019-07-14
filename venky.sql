-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
CREATE TABLE `coursedetails` (
  `coursenum` int NOT NULL,
  `coursetitle` varchar(10) NOT NULL,
  `coursedesc` varchar(40) NOT NULL,
  `professor` varchar(40) NOT NULL,
  `coursecost` int NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Dumping data for table courseregistrationsystem.coursedetails: ~8 rows (approximately)
/*!40000 ALTER TABLE `coursedetails` DISABLE KEYS */;
INSERT INTO `coursedetails` (`coursenum`, `coursetitle`, `coursedesc`, `professor`, `coursecost`, `location`) VALUES
	(1, 'DBMS', 'Database Management Systems', 'SabariNathan', '200$', 'One Pace Plaza'),
	(2, 'AI', 'Artificial Intelligence', 'Indhumathy', '200$', 'Seidenberg'),
	(3, 'CSIC', 'Concepts & Structure Internet Computing', 'Aravind', '200$', 'One Pace'),
	(4, 'CG', 'Computer Graphics', 'Aravind', '200$', 'Seidenberg'),
	(5, 'ADS', 'Algorithms & Data Structures', 'Satish', '200$', 'One Pace'),
	(6, 'OS', 'Operating Systems', 'Karthikeyani', '200$', 'One Pace'),
	(7, 'CS', 'Computer Science', 'NandhuMaata', '200$', 'One Pace'),
	(8, 'IS', 'Information Systems', 'Poonkodi', '200$', 'Seidenberg');
/*!40000 ALTER TABLE `coursedetails` ENABLE KEYS */;
CREATE TABLE `studentdetails` (
  `coursenum` int NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Dumping data for table courseregistrationsystem.studentdetails: ~9 rows (approximately)
/*!40000 ALTER TABLE `studentdetails` DISABLE KEYS */;
INSERT INTO `studentdetails` (`coursenum`, `firstname`, `lastname`, `address`, `email`) VALUES
	(3, 'venky', 'B', 'Jersey', 'venky@gmail.com'),
	(4, 'Bhanu', 'Suryawanshi', 'Newport', 'bhanu@gmail.com'),
	(1, 'Suku', 'Pedamkar', 'Mumbai', 'suku@gmail.com'),
	(2, 'Vignesh', 'Sawant', 'Pune', 'vignesh@gmail.com'),
	(5, 'Siddharth', 'Joshi', 'Kalyan', 'siddharth@gmail.com'),
	(1, 'nidhin', 'Parundekar', 'Pune', 'nidhin@yahoo.com'),
	(7, 'abilash', 'jgjg', 'yyyy', 'abilash@gmail.com'),
	(8, 'animesh', 'Patil', 'Pune', 'animesh@gmail.com'),
	(8, 'Gk', 'GJJJH', 'KHKJH', 'gkaarthi.com');
/*!40000 ALTER TABLE `studentdetails` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
