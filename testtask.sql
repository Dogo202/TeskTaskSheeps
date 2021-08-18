-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 18 2021 г., 19:12
-- Версия сервера: 5.7.29-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testtask`
--

-- --------------------------------------------------------

--
-- Структура таблицы `day`
--

CREATE TABLE `day` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `day`
--

INSERT INTO `day` (`id`, `day`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `total_sheeps` int(11) NOT NULL,
  `killed_sheeps` int(11) NOT NULL,
  `not_dead_sheeps` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `most_inhabited` int(11) NOT NULL,
  `less_inhabited` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `paddock`
--

CREATE TABLE `paddock` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `paddock`
--

INSERT INTO `paddock` (`id`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Структура таблицы `paddock_sheep`
--

CREATE TABLE `paddock_sheep` (
  `id` int(11) NOT NULL,
  `paddock_id` int(11) NOT NULL,
  `sheep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `paddock_sheep`
--

INSERT INTO `paddock_sheep` (`id`, `paddock_id`, `sheep_id`) VALUES
(1, 1, 4),
(2, 2, 3),
(3, 1, 2),
(4, 2, 1),
(5, 3, 5),
(6, 2, 6),
(7, 3, 7),
(8, 3, 8),
(9, 4, 9),
(10, 3, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `sheeps`
--

CREATE TABLE `sheeps` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sheeps`
--

INSERT INTO `sheeps` (`id`, `name`) VALUES
(1, 'овечка1'),
(2, 'овечка2'),
(3, 'овечка3'),
(4, 'овечка4'),
(5, 'овечка5'),
(6, 'овечка6'),
(7, 'овечка7'),
(8, 'овечка8'),
(9, 'овечка9'),
(10, 'овечка10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `paddock`
--
ALTER TABLE `paddock`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `paddock_sheep`
--
ALTER TABLE `paddock_sheep`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sheeps`
--
ALTER TABLE `sheeps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `day`
--
ALTER TABLE `day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `paddock`
--
ALTER TABLE `paddock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `paddock_sheep`
--
ALTER TABLE `paddock_sheep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `sheeps`
--
ALTER TABLE `sheeps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
