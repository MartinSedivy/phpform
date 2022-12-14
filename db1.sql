-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:3306
-- Vytvořeno: Pon 28. lis 2022, 04:57
-- Verze serveru: 10.5.15-MariaDB-0+deb11u1
-- Verze PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `db1`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `Registration`
--

CREATE TABLE `Registration` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_surname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `Registration`
--

INSERT INTO `Registration` (`id`, `user_id`, `user_email`, `user_name`, `user_surname`, `password`) VALUES
(1, 5897573631539799, 'martin@sedivy.cz', 'Martin', 'Sedivy', '1234');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_surname` (`user_surname`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `email` (`user_email`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `Registration`
--
ALTER TABLE `Registration`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
