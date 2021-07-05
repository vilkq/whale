-- --------------------------------------------------------
-- Хост:                         localhost
-- Версия сервера:               8.0.15 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных qwut
CREATE DATABASE IF NOT EXISTS `qwut` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `qwut`;

-- Дамп структуры для таблица qwut.adm
CREATE TABLE IF NOT EXISTS `adm` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы qwut.adm: ~1 rows (приблизительно)
DELETE FROM `adm`;
/*!40000 ALTER TABLE `adm` DISABLE KEYS */;
INSERT INTO `adm` (`id`, `login`, `pass`) VALUES
	(1, 'adm', '4fea28c4a708335fbd36db8166edc95c');
/*!40000 ALTER TABLE `adm` ENABLE KEYS */;

-- Дамп структуры для таблица qwut.obj
CREATE TABLE IF NOT EXISTS `obj` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(64) NOT NULL DEFAULT '0',
  `description` varchar(8192) NOT NULL DEFAULT '0',
  `level` tinyint(255) NOT NULL DEFAULT '0',
  `ancestor` tinyint(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы qwut.obj: ~6 rows (приблизительно)
DELETE FROM `obj`;
/*!40000 ALTER TABLE `obj` DISABLE KEYS */;
INSERT INTO `obj` (`id`, `name`, `description`, `level`, `ancestor`) VALUES
	(1, 'Имя_1', 'Описание_1', 0, 0),
	(2, 'Имя_2', 'Описание_2', 0, 0),
	(3, 'Имя_3', 'Описание_3', 1, 1),
	(4, 'Имя_4', 'Описание_4', 2, 1),
	(8, 'Имя_5', 'Описание_5', 0, 3),
	(15, 'Name_6', 'Описание_22', 3, 3);
/*!40000 ALTER TABLE `obj` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
