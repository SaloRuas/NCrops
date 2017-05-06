-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table rentsaver.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `post_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table rentsaver.clients: 5 rows
DELETE FROM `clients`;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `name`, `mobile`, `post_code`) VALUES
	(1, 'Salo', '234565435', 'nr232l'),
	(234, 'Test', '2345654', 'gfghggfhf'),
	(15, 'John', '345654', 'nrt233'),
	(2435, 'rent4sure', '324567890', 'ygvybg'),
	(1235, 'Luis', '24567890987', 'gfhgjjkj');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;


-- Dumping structure for table rentsaver.rents
CREATE TABLE IF NOT EXISTS `rents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT '0',
  `address` varchar(50) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table rentsaver.rents: 5 rows
DELETE FROM `rents`;
/*!40000 ALTER TABLE `rents` DISABLE KEYS */;
INSERT INTO `rents` (`id`, `client_id`, `address`, `value`) VALUES
	(1, 1, 'dfgdgdg', 2121210),
	(2, 1, '23456757ythgfhgfh', 1235),
	(3, 15, '322fdsfsdf', 12345),
	(4, 1, 'gdgfchghvgj', 1234),
	(5, 1235, 'hytfdsd200', 200);
/*!40000 ALTER TABLE `rents` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
