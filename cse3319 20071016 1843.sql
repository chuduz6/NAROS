-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	4.1.22-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema cse3310
--

CREATE DATABASE IF NOT EXISTS cse3310;
USE cse3310;

--
-- Definition of table `example`
--

DROP TABLE IF EXISTS `example`;
CREATE TABLE `example` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `fname` varchar(45) NOT NULL default '',
  `lname` varchar(45) NOT NULL default '',
  `address` varchar(45) NOT NULL default '',
  `address2` varchar(45) NOT NULL default '',
  `dob` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `example`
--

/*!40000 ALTER TABLE `example` DISABLE KEYS */;
INSERT INTO `example` (`id`,`fname`,`lname`,`address`,`address2`,`dob`) VALUES 
 (1,'David','Smith','100 Stree St','City, TX 76012','2000-10-01 00:00:00'),
 (2,'Carla','Hayes','200 Av.','City, TX 76023','1995-01-05 00:00:00'),
 (3,'Joe','Scott','110 Stree St','City, TX 76022','1991-02-03 00:00:00'),
 (4,'John','Middle','220 Av.','City, TX 76002','1985-12-09 00:00:00'),
 (5,'David','Smith','134 Stree St','City, TX 76003','1990-11-01 00:00:00'),
 (6,'Carla','Hayes','2560 Av.','City, TX 76002','1998-01-15 00:00:00'),
 (7,'Joe','Scott','123 Stree St','City, TX 76002','1997-02-23 00:00:00'),
 (8,'John','Middle','2230 Av.','City, TX 76003','1985-09-29 00:00:00')
 ;
/*!40000 ALTER TABLE `example` ENABLE KEYS */;


--
-- Definition of table `relation`
--

DROP TABLE IF EXISTS `relation`;
CREATE TABLE `relation` (
  `id1` int(10) unsigned NOT NULL default '0',
  `id2` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id1`,`id2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relation`
--

/*!40000 ALTER TABLE `relation` DISABLE KEYS */;
INSERT INTO `relation` (`id1`,`id2`) VALUES 
 (1,1),
 (1,2),
 (2,2);
/*!40000 ALTER TABLE `relation` ENABLE KEYS */;


--
-- Definition of table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE `table1` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

/*!40000 ALTER TABLE `table1` DISABLE KEYS */;
INSERT INTO `table1` (`id`,`name`) VALUES 
 (1,'Jose Silva'),
 (2,'Joao Manoel');
/*!40000 ALTER TABLE `table1` ENABLE KEYS */;


--
-- Definition of table `table2`
--

DROP TABLE IF EXISTS `table2`;
CREATE TABLE `table2` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `lastname` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

/*!40000 ALTER TABLE `table2` DISABLE KEYS */;
INSERT INTO `table2` (`id`,`lastname`) VALUES 
 (1,'Pereira'),
 (2,'Madeira');
/*!40000 ALTER TABLE `table2` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
