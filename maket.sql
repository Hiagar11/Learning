-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 30 2020 г., 11:45
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `maket`
--

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `name`, `content`, `date`) VALUES
(1, 'first', 'Акции на размещение баннерного панно 20% до конца июля', '2020-10-15'),
(2, 'second', 'Мы работаем в обычном режиме с 15 июня!', '2020-10-10'),
(3, 'thrid', 'Как правильно подобрать рекламный канал?', '2020-10-08'),
(4, 'test', 'Что делать, если очень хочется на работу?', '2020-09-14'),
(5, 'test2', 'Почему Rocket Business самая успешная компания нашего времени? ', '2020-12-10'),
(6, 'test 4', 'Сколько нужно верстальщиков, чтобы скрутить лампочку? ', '2022-10-15'),
(7, 'test 3 ', 'Правда ли сотрудники с легким юмором дают коллективу сплоченность? ', '1995-08-11'),
(8, 'test', 'Сколько нужно совершить намеков, чтобы не оказаться навязчивым? ', '2020-11-23'),
(9, 'dsf', 'Насколько прав оказался Васильев А.А. сказав: \"Дорогу осилит идущий\"?', '2020-11-25');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
