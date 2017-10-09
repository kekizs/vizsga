-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: vizsga
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `foglalas`
--

DROP TABLE IF EXISTS `foglalas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foglalas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `erkezes` varchar(45) NOT NULL,
  `vejszaka` int(11) NOT NULL,
  `vendegid` int(11) NOT NULL,
  PRIMARY KEY (`id`,`erkezes`),
  KEY `vendeg_fk_idx` (`vendegid`),
  CONSTRAINT `vendeg_fk` FOREIGN KEY (`vendegid`) REFERENCES `vendeg` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foglalas`
--

LOCK TABLES `foglalas` WRITE;
/*!40000 ALTER TABLE `foglalas` DISABLE KEYS */;
/*!40000 ALTER TABLE `foglalas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendeg`
--

DROP TABLE IF EXISTS `vendeg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendeg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(100) NOT NULL,
  `cim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefonszam` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendeg`
--

LOCK TABLES `vendeg` WRITE;
/*!40000 ALTER TABLE `vendeg` DISABLE KEYS */;
INSERT INTO `vendeg` VALUES (1,'Kéki Zsolt','Ifjúmunkás út 15','kekizsolti@gmail.com','0630480335'),(2,'Kéki Zsolt','Ifjúmunkás út 15','kekizsolti@gmail.com','0630480335'),(3,'Kéki Zsolt','Ifjúmunkás út 15','kekizsolti@gmail.com','0630480335'),(4,'Kéki Zsolt','Ifjúmunkás út 15','kekizsolti@gmail.com','0630480335'),(5,'Kéki Zsolt','Ifjúmunkás út 15','kekizsolti@gmail.com','0630480335'),(6,'Kéki Zsolt','Ifjúmunkás út 15','kekizsolti@gmail.com','0630480335');
/*!40000 ALTER TABLE `vendeg` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-09 10:11:12
