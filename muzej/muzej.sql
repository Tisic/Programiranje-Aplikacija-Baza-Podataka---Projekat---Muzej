-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 04:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muzej`
--

-- --------------------------------------------------------

--
-- Table structure for table `eksponati`
--

CREATE TABLE `eksponati` (
  `EksponatID` int(11) NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Opis` text DEFAULT NULL,
  `Istorija` text DEFAULT NULL,
  `DatumPrijema` date DEFAULT NULL,
  `Vrsta` varchar(100) DEFAULT NULL,
  `Lokacija` varchar(100) DEFAULT NULL,
  `Slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eksponati`
--

INSERT INTO `eksponati` (`EksponatID`, `Naziv`, `Opis`, `Istorija`, `DatumPrijema`, `Vrsta`, `Lokacija`, `Slika`) VALUES
(1, 'Mona Liza', 'Slika Leonarda da Vinčija', 'Nacrtana u periodu renesanse', '1503-01-01', 'Slika', 'Sala 1', 'liza.jpg'),
(2, 'Stari grčki vaza', 'Vaza iz perioda antičke Grčke', 'Izrađena oko 500. godine p.n.e.', '2020-01-15', 'Vaza', 'Sala 2', 'vaza.jpg'),
(3, 'Egipatska mumija', 'Mumija faraona iz starog Egipta', 'Oko 3000 godina stara', '2019-12-01', 'Mumija', 'Sala 3', 'mumija.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eksponati_izložbe`
--

CREATE TABLE `eksponati_izložbe` (
  `EksponatID` int(11) NOT NULL,
  `IzložbaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eksponati_izložbe`
--

INSERT INTO `eksponati_izložbe` (`EksponatID`, `IzložbaID`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `istorija`
--

CREATE TABLE `istorija` (
  `IstorijaID` int(11) NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Opis` text DEFAULT NULL,
  `DatumDogađaja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `istorija`
--

INSERT INTO `istorija` (`IstorijaID`, `Naziv`, `Opis`, `DatumDogađaja`) VALUES
(1, 'Renesansa', 'Period umetnosti i kulture između 14. i 17. veka', '1400-01-01'),
(2, 'Antička Grčka', 'Civilizacija koja je postojala od 8. veka p.n.e. do 6. veka n.e.', '0800-01-01'),
(3, 'Stari Egipat', 'Drevna civilizacija u severoistočnoj Africi', '3000-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `izložbe`
--

CREATE TABLE `izložbe` (
  `IzložbaID` int(11) NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Opis` text DEFAULT NULL,
  `DatumPočetka` date DEFAULT NULL,
  `DatumKraja` date DEFAULT NULL,
  `Lokacija` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `izložbe`
--

INSERT INTO `izložbe` (`IzložbaID`, `Naziv`, `Opis`, `DatumPočetka`, `DatumKraja`, `Lokacija`) VALUES
(1, 'Umetnost Renesanse', 'Izložba posvećena umetnosti renesanse', '2024-05-01', '2024-08-01', 'Galerija 1'),
(2, 'Antička Grčka', 'Izložba posvećena kulturi antičke Grčke', '2024-06-01', '2024-09-01', 'Galerija 2'),
(3, 'Stari Egipat', 'Izložba posvećena starom Egiptu', '2024-07-01', '2024-10-01', 'Galerija 3');

-- --------------------------------------------------------

--
-- Table structure for table `posetioci`
--

CREATE TABLE `posetioci` (
  `PosetilacID` int(11) NOT NULL,
  `Ime` varchar(100) NOT NULL,
  `Prezime` varchar(100) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telefon` varchar(50) DEFAULT NULL,
  `DatumPosete` date DEFAULT NULL,
  `IzložbaID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posetioci`
--

INSERT INTO `posetioci` (`PosetilacID`, `Ime`, `Prezime`, `Email`, `Telefon`, `DatumPosete`, `IzložbaID`) VALUES
(1, 'Marko', 'Marković', 'marko@gmail.com', '0601234567', '2024-05-15', 1),
(2, 'Jovana', 'Jovanović', 'jovana@gmail.com', '0607654321', '2024-06-20', 2),
(3, 'Nikola', 'Nikolić', 'nikola@gmail.com', '0612345678', '2024-07-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ime`, `prezime`, `email`, `password`) VALUES
('1', '1', '1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
('Lazar', 'Tisic', 'Tisic@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eksponati`
--
ALTER TABLE `eksponati`
  ADD PRIMARY KEY (`EksponatID`);

--
-- Indexes for table `eksponati_izložbe`
--
ALTER TABLE `eksponati_izložbe`
  ADD PRIMARY KEY (`EksponatID`,`IzložbaID`),
  ADD KEY `IzložbaID` (`IzložbaID`);

--
-- Indexes for table `istorija`
--
ALTER TABLE `istorija`
  ADD PRIMARY KEY (`IstorijaID`);

--
-- Indexes for table `izložbe`
--
ALTER TABLE `izložbe`
  ADD PRIMARY KEY (`IzložbaID`);

--
-- Indexes for table `posetioci`
--
ALTER TABLE `posetioci`
  ADD PRIMARY KEY (`PosetilacID`),
  ADD KEY `IzložbaID` (`IzložbaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eksponati`
--
ALTER TABLE `eksponati`
  MODIFY `EksponatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `istorija`
--
ALTER TABLE `istorija`
  MODIFY `IstorijaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `izložbe`
--
ALTER TABLE `izložbe`
  MODIFY `IzložbaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posetioci`
--
ALTER TABLE `posetioci`
  MODIFY `PosetilacID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eksponati_izložbe`
--
ALTER TABLE `eksponati_izložbe`
  ADD CONSTRAINT `eksponati_izložbe_ibfk_1` FOREIGN KEY (`EksponatID`) REFERENCES `eksponati` (`EksponatID`),
  ADD CONSTRAINT `eksponati_izložbe_ibfk_2` FOREIGN KEY (`IzložbaID`) REFERENCES `izložbe` (`IzložbaID`);

--
-- Constraints for table `posetioci`
--
ALTER TABLE `posetioci`
  ADD CONSTRAINT `posetioci_ibfk_1` FOREIGN KEY (`IzložbaID`) REFERENCES `izložbe` (`IzložbaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
