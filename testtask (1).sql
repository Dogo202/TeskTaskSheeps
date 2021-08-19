-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 19 2021 г., 18:12
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
(1, 16);

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `comment` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_sheeps` int(11) NOT NULL,
  `killed_sheeps` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_dead_sheeps` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `most_inhabited` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `less_inhabited` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`id`, `comment`, `action`, `total_sheeps`, `killed_sheeps`, `not_dead_sheeps`, `time`, `most_inhabited`, `less_inhabited`) VALUES
(1, 'Была добавлена новая овца = Овечка11', '+ Овца', 11, '0', '11', 'день 2', '2', '3'),
(2, 'Была убита овца = овечка7', '- Овца', 11, '1', '11', 'день 2', '2', '3'),
(3, 'Была добавлена новая овца = Овечка11', '+ Овца', 11, '1', '12', 'день 3', '2', '3'),
(4, 'Была добавлена новая овца = Овечка13', '+ Овца', 13, '1', '13', 'день 4', '1', '3'),
(5, 'Была убита овца = овечка13', '- Овца', 13, '2', '13', 'день 4', '2', '3'),
(6, 'Была добавлена новая овца = Овечка13', '+ Овца', 13, '2', '14', 'день 5', '1', '3'),
(7, 'Была добавлена новая овца = Овечка15', '+ Овца', 15, '2', '15', 'день 6', '1', '3'),
(8, 'Была убита овца = овечка6', '- Овца', 15, '3', '15', 'день 6', '1', '3'),
(9, 'Была добавлена новая овца = Овечка16', '+ Овца', 16, '3', '16', 'день 7', '1', '3'),
(10, 'Была добавлена новая овца = Овечка17', '+ Овца', 17, '3', '17', 'день 8', '1', '3'),
(11, 'Была убита овца = овечка4', '- Овца', 17, '4', '17', 'день 8', '1', '2'),
(12, 'Была добавлена новая овца = Овечка18', '+ Овца', 18, '4', '18', 'день 9', '1', '2'),
(13, 'Была добавлена новая овца = Овечка19', '+ Овца', 19, '4', '19', 'день 9', '1', '2'),
(14, 'Была добавлена новая овца = Овечка20', '+ Овца', 20, '4', '20', 'день 10', '1', '2'),
(15, 'Была убита овца = овечка10', '- Овца', 20, '5', '20', 'день 10', '1', '2'),
(16, 'Была добавлена новая овца = Овечка21', '+ Овца', 21, '5', '21', 'день 11', '1', '2'),
(17, 'Была добавлена новая овца = Овечка22', '+ Овца', 22, '5', '22', 'день 12', '1', '2'),
(18, 'Была убита овца = овечка12', '- Овца', 22, '6', '22', 'день 12', '1', '2'),
(19, 'Была добавлена новая овца = Овечка23', '+ Овца', 23, '6', '23', 'день 13', '1', '2'),
(20, 'Была добавлена новая овца = Овечка24', '+ Овца', 24, '6', '24', 'день 13', '1', '2'),
(21, 'Была добавлена новая овца = Овечка25', '+ Овца', 25, '6', '25', 'день 14', '1', '4'),
(22, 'Была убита овца = овечка22', '- Овца', 25, '7', '25', 'день 14', '1', '2'),
(23, 'Была добавлена новая овца = Овечка26', '+ Овца', 26, '7', '26', 'день 14', '1', '2'),
(24, 'Была добавлена новая овца = Овечка27', '+ Овца', 27, '7', '27', 'день 15', '1', '2'),
(25, 'Была убита овца = овечка16', '- Овца', 27, '8', '27', 'день 15', '1', '2'),
(26, 'Была добавлена новая овца = Овечка28', '+ Овца', 28, '8', '28', 'день 16', '1', '2'),
(27, 'Была убита овца = овечка25', '- Овца', 28, '9', '28', 'день 16', '1', '2'),
(28, 'Была убита овца = овечка24', '- Овца', 28, '10', '28', 'день 16', '1', '2'),
(29, 'Была добавлена новая овца = Овечка29', '+ Овца', 29, '10', '29', 'день 16', '1', '2'),
(30, 'Была убита овца = овечка1', '- Овца', 29, '11', '29', 'день 16', '1', '2'),
(31, 'Была добавлена новая овца = Овечка30', '+ Овца', 30, '11', '30', 'день 16', '1', '2'),
(32, 'Была добавлена новая овца = Овечка31', '+ Овца', 31, '11', '31', 'день 16', '1', '2');

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
(2, 1, 2),
(3, 1, 3),
(5, 2, 5),
(7, 3, 7),
(8, 3, 7),
(9, 4, 9),
(12, 2, 11),
(14, 1, 13),
(15, 1, 15),
(17, 1, 17),
(18, 3, 18),
(19, 1, 19),
(20, 3, 20),
(21, 4, 21),
(23, 1, 23),
(26, 1, 26),
(27, 4, 27),
(28, 4, 28),
(29, 1, 29),
(30, 1, 30),
(31, 2, 31);

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
(2, 'овечка2'),
(3, 'овечка3'),
(5, 'овечка5'),
(7, 'овечка8'),
(8, 'овечка7'),
(9, 'овечка8'),
(14, 'Овечка13'),
(15, 'Овечка15'),
(17, 'Овечка17'),
(18, 'Овечка18'),
(19, 'Овечка19'),
(20, 'Овечка20'),
(21, 'Овечка21'),
(23, 'Овечка23'),
(26, 'Овечка26'),
(27, 'Овечка27'),
(28, 'Овечка28'),
(29, 'Овечка29'),
(30, 'Овечка30'),
(31, 'Овечка31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `paddock`
--
ALTER TABLE `paddock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `paddock_sheep`
--
ALTER TABLE `paddock_sheep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `sheeps`
--
ALTER TABLE `sheeps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
