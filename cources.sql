-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 30 2015 г., 19:49
-- Версия сервера: 5.6.22-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cources`
--

-- --------------------------------------------------------

--
-- Структура таблицы `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `studentId` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `subjectId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `marks`
--

INSERT INTO `marks` (`id`, `studentId`, `mark`, `subjectId`) VALUES
(1, 5, 3, 1),
(2, 1, 5, 2),
(3, 2, 5, 4),
(4, 2, 5, 3),
(5, 1, 3, 1),
(6, 3, 5, 2),
(7, 4, 5, 4),
(8, 3, 5, 3),
(10, 8, 5, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(300) CHARACTER SET utf8 NOT NULL,
  `email` varchar(300) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `login`, `email`) VALUES
(1, 'Вася', 'Пупкин', '123456', ''),
(2, 'Петя', '', '123456', ''),
(3, 'Таня', '', 'Tanya', 'tanya@ya.ru'),
(4, 'Aлексей', '', 'Leha', 'leha@ya.ru'),
(5, 'Надя', '', 'Nadya', 'nadya@ya.ru'),
(6, 'Митя', 'Лайкин', '', ''),
(8, 'Андрей', 'Бесценный', '', ''),
(9, 'Васяв', 'Пупкин', '', ''),
(10, 'Митя', 'Бесценный', '', ''),
(11, 'вапыпвап', 'фвпфывпып', '', ''),
(12, 'выаываыв', 'ываываыва', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(4, 'География'),
(3, 'Информатика'),
(2, 'Математика'),
(1, 'Русский язык');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
