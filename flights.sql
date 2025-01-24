-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 24, 2025 at 08:10 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spaceinc`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `payload` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `window` varchar(100) NOT NULL,
  `ship` varchar(100) NOT NULL,
  `propability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `type`, `payload`, `date`, `window`, `ship`, `propability`) VALUES
(1, 'Orbital', 'Starlinks', '27-01-2025, 20:21 UTC+1', '27-01-2025, 20:21 -> 28-01-2025, 00:52', 'FALCON 9 BLOCK 5', 'unconfirmed'),
(2, 'Orbital', 'NanoSatelites', '03-02-2025, 21:43 UTC+1', 'no information', 'KINEIS 16-20', 'confirmed'),
(3, 'Moon examination', 'Rover, hopper, PRIME-1', 'NET February 2025', 'no information', 'FALCON 9 BLOCK 5', 'undetermined'),
(4, 'Suborbital', 'Starlink dummies', 'NET February 2025', 'no information', 'STARSHIP (BLOCK 1/BLOCK 2)', 'undetermined');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
