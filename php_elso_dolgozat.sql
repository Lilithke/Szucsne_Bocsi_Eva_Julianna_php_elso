-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 04. 21:01
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `php_elso_dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `haztartasi_gepek`
--

CREATE TABLE `haztartasi_gepek` (
  `id` int(11) NOT NULL,
  `gep` varchar(100) NOT NULL,
  `gyarto` varchar(150) NOT NULL,
  `sorozat` varchar(150) NOT NULL,
  `megjelenes` date NOT NULL,
  `smart_funkcio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `haztartasi_gepek`
--

INSERT INTO `haztartasi_gepek` (`id`, `gep`, `gyarto`, `sorozat`, `megjelenes`, `smart_funkcio`) VALUES
(106, 'mosogep', 'Gorenje', 'WS168LNST', '2024-02-29', 1),
(107, 'mosogep', 'Whirlpool', 'WRSB725DEU', '2023-10-29', 1),
(108, 'mosogep', 'Beko', 'WUE6511XWW', '2022-05-18', 0),
(109, 'mosogep', 'Indesit', 'BTWL50300EUN', '2020-08-24', 0),
(110, 'mosogep', 'Electrolux', 'EW8F249PS', '2023-01-30', 1),
(111, 'mosogep', 'Tesla', 'WF81490MS', '2024-01-02', 1),
(112, 'mosogep', 'Bosch', 'WGG2440REU', '2023-05-16', 1),
(113, 'huto', 'Gorenje', 'NRS9182VB', '2024-01-02', 1),
(114, 'huto', 'Whirlpool', 'W7X92OWH', '2022-05-12', 0),
(115, 'huto', 'Beko', 'RSSA290M31WN', '2020-12-14', 0),
(116, 'huto', 'Indesit', 'LI7S2EW\r\n', '2023-02-06', 0),
(117, 'huto', 'Electrolux', 'LRB1DE33W', '2023-12-30', 1),
(118, 'huto', 'Tesla', 'RB4600FMX', '2023-07-12', 1),
(119, 'huto', 'Bosch', 'KGV39VLEAS', '2023-08-20', 0),
(120, 'robot_porszivo', 'Gorenje', 'RVC216BK', '2019-10-12', 0),
(121, 'robot_porszivo', 'Xiaomi', 'KGV39VLEAS', '2022-05-15', 1),
(122, 'robot_porszivo', 'Beko', 'VRR60314VW', '2022-10-10', 1),
(123, 'robot_porszivo', 'Samsung', 'VR05R5050WKWB', '2020-05-07', 1),
(124, 'robot_porszivo', 'Electrolux', 'ER61UW1DG', '2022-04-23', 0),
(125, 'robot_porszivo', 'Tesla', 'VCR600W', '2023-11-08', 1),
(126, 'robot_porszivo', 'Karcher', 'RCV3', '2024-02-13', 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `haztartasi_gepek`
--
ALTER TABLE `haztartasi_gepek`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `haztartasi_gepek`
--
ALTER TABLE `haztartasi_gepek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
