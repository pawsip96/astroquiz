-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 21 Mar 2021, 21:21
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `db_astro`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT 0,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(64, 1, 0, 'Earth'),
(65, 1, 0, 'Mars'),
(66, 1, 1, 'Mercury'),
(67, 1, 0, 'Venus'),
(68, 2, 0, 'Vegetable'),
(69, 2, 0, 'Time period'),
(70, 2, 0, 'Unit of speed'),
(71, 2, 1, 'Unit of length'),
(72, 3, 1, '6×10^24 kg'),
(73, 3, 0, '34 tons'),
(74, 3, 0, '8×10^12 kg'),
(75, 3, 0, '6×10^8 kg'),
(76, 4, 1, '384 400 km'),
(77, 4, 0, '12 005 100 km'),
(78, 4, 0, '45 780 miles'),
(79, 4, 0, '1 au'),
(80, 5, 0, 'Jimmy'),
(81, 5, 1, 'Proxima Centauri'),
(82, 5, 0, 'Jupiter'),
(83, 5, 0, 'Andromeda'),
(84, 6, 0, 'Earth'),
(85, 6, 0, 'Venus'),
(86, 6, 0, 'Mars'),
(87, 6, 1, 'Jupiter'),
(88, 7, 0, 'Bruce Springsteen '),
(89, 7, 0, 'Adam Malysz'),
(90, 7, 1, 'Nicolaus Copernicus'),
(91, 7, 0, 'Ozzy Osborne '),
(92, 8, 1, 'July 20, 1969'),
(93, 8, 0, 'July 02, 1963'),
(94, 8, 0, 'July 13, 1968'),
(95, 8, 0, 'June 20, 1969'),
(96, 9, 0, 'Neil Armstrong'),
(97, 9, 0, 'Louis Armstrong'),
(98, 9, 0, 'Yuri Armstrong'),
(99, 9, 1, 'Yuri Gagarin'),
(100, 10, 0, 'John'),
(101, 10, 1, 'Laika'),
(102, 10, 0, 'Rupert'),
(103, 10, 0, 'Sergiei');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesNo`, `ques`) VALUES
(17, 1, 'What is the smallest planet in the solar system by dimensions ?'),
(18, 2, 'What is the astronomical unit?'),
(19, 3, 'How much does The Earth weight?'),
(20, 4, 'What is the distance between Earth and Moon?'),
(21, 5, 'What is name of nearest star to Sun?'),
(22, 6, 'What is the biggest planet in Solar system?'),
(23, 7, 'Who invented heliocentric theory?'),
(24, 8, 'What day and year did Apollo 11 land on the moon?'),
(25, 9, 'Who was the first man in space?'),
(26, 10, 'What is the name of first dog in space?');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `name`, `username`, `password`, `email`, `status`) VALUES
(1, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indeksy dla tabeli `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT dla tabeli `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
