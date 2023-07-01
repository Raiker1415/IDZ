-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 01 2023 г., 12:35
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `user_s_room`
--
CREATE DATABASE IF NOT EXISTS `user_s_room` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `user_s_room`;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`email`, `username`, `password`) VALUES
('admin@gmail.com', 'admin', 'admin'),
('sadmln@gmail.com', 'sub_admln', 'hack'),
('leonard.raiker@gmail.com', 'leon', 'LR_123'),
('isabella1996@gmail.com', 'isabella', 'bella96'),
('vicing225@gmail.com', 'Victor', '1996'),
('gromila@gmail.com', 'Igor231', '231_grom'),
('maximus@gmail.com', 'Max789', '789'),
('raik@gmail.com', 'Raik', '201002'),
('vitya@gmail.com', 'Vitya', '4615'),
('pavlouk@ukr.net', 'Pavlik', '01.07.23'),
('sonic@gmail.com', 'Sonic1', 'SonicX');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
