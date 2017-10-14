CREATE DATABASE `poetry`
USE `poetry`;

CREATE TABLE `books` (
  `bid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bhash` varchar(64) NOT NULL,
  `tag` varchar(64) NOT NULL,
  `name` varchar(256) NOT NULL,
  `author` varchar(256) NOT NULL,
  `intro` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `updatetime` datetime NOT NULL,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `bhash` (`bhash`),
  KEY `tag` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `chapters` (
  `cid` bigint(64) unsigned NOT NULL AUTO_INCREMENT,
  `bid` bigint(20) unsigned NOT NULL,
  `chash` varchar(64) NOT NULL,
  `name` varchar(256) NOT NULL,
  `text` mediumtext NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `hash` (`chash`),
  KEY `bid` (`bid`),
  CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `books` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;