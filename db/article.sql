-- Adminer 4.8.0 MySQL 8.0.25 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `content` text,
  `publish_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `publish_date`) VALUES
(2,	'testp',	'testol',	'testing',	'2021-06-25 00:00:00'),
(6,	'sdgsdgsd',	'sdgsdg',	'testing',	'2021-08-31 00:00:00'),
(7,	'rahwana',	'rahwanas',	'rahwana',	'2021-11-26 00:00:00');

-- 2021-06-02 11:49:04
