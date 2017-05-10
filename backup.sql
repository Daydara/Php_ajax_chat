-- MySQL dump 10.16  Distrib 10.1.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: chat
-- ------------------------------------------------------
-- Server version	10.1.22-MariaDB-

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tchat`
--

DROP TABLE IF EXISTS `tchat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tchat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tchat`
--

LOCK TABLES `tchat` WRITE;
/*!40000 ALTER TABLE `tchat` DISABLE KEYS */;
INSERT INTO `tchat` VALUES (1,'bienvenue','Youss'),(2,'Salut','Will'),(6,'salut','youss'),(7,'salut','max'),(8,'coucou','ada'),(9,'kiii','ada'),(10,'wech','ada'),(11,'dadadadadada','ada'),(13,'tu vas marcher oui','will'),(14,'bonjour coucou toi','ada'),(15,'wech','ada'),(16,'salut ca va','ada'),(17,'oui et toi','ada'),(18,'ça va','ada'),(19,'papapapa','ada'),(20,'dada','ada'),(21,'123456','ada'),(22,'sa','ada'),(23,'ca va toi','ada'),(26,'fzefz','efz'),(27,'fzefz','efz'),(28,'fy','ada'),(29,'dadadada','123'),(30,'wech alors','123'),(31,'d','123'),(32,'gdgdgdgdgd','123'),(33,'bien ou bien','123'),(34,'salut','123');
/*!40000 ALTER TABLE `tchat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'dddddd','youss','azerty',''),(2,'123','1232','123','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),(3,'alal','alal','ala','c6a378510e0ec1d7809694ebf1d5579f37b1642e'),(4,'aze','aze','aze','9cf95dacd226dcf43da376cdb6cbba7035218921'),(5,'ada','ada','ada','e4ea294c062c525643df036a35ca579b905fa400'),(6,'will','will','will','7c4a8d09ca3762af61e59520943dc26494f8941b'),(7,'AIT LACHGUER','ddddddddd','Youssleeeee','7c4a8d09ca3762af61e59520943dc26494f8941b'),(8,'AIT LACHGUER','mec','Yousslee','7c4a8d09ca3762af61e59520943dc26494f8941b'),(9,'wech','ddddddddd','labas','7c4a8d09ca3762af61e59520943dc26494f8941b'),(10,'wech','mec','ada','7c4a8d09ca3762af61e59520943dc26494f8941b'),(11,'fer','fez','efz','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),(12,'dddddd','mec','www','7c4a8d09ca3762af61e59520943dc26494f8941b'),(13,'AIT LACHGUER','aaaaaaa','vvvvvvv','7c4a8d09ca3762af61e59520943dc26494f8941b'),(14,'cj','vb','123','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),(15,'AIT LACHGUER','Youssef','Ait','40bd001563085fc35165329ea1ff5c5ecbdbbeef');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-10 10:53:24
