# Host: localhost  (Version: 5.5.53)
# Date: 2019-12-24 11:49:50
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "sql_user"
#

DROP TABLE IF EXISTS `sql_user`;
CREATE TABLE `sql_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `blog` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "sql_user"
#

/*!40000 ALTER TABLE `sql_user` DISABLE KEYS */;
INSERT INTO `sql_user` VALUES (1,'ADmin','ADmin','3166124481@qq.com','http://www.f4ckweb.top/'),(2,'admin888','admin888','fuck@0xnull.org','http://www.0xnull.org/');
/*!40000 ALTER TABLE `sql_user` ENABLE KEYS */;
