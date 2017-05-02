-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 10:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bola`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE IF NOT EXISTS `pemain` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id`, `nama`, `posisi`, `negara`) VALUES
(0, 'Marcus Rashford', 'Striker', 'Inggris'),
(2, 'Jesse Lingard', 'Gelandang Serang', 'Inggris'),
(3, 'Ezra Walian', 'Striker', 'Indonesia'),
(4, 'Juan Mata', 'Gelandang', 'Spanyol'),
(5, 'Ander Hererra', 'Gelandang Bertahan', 'Spanyol'),
(6, 'Paul Pogba', 'Gelandang Tengah', 'Perancis'),
(7, 'David De Gea', 'Kiper', 'Spanyol'),
(8, 'Eric Bailly', 'Bek', 'Pantai Gading'),
(9, 'Marcelo', 'Bek kiri', 'Brazil'),
(10, 'Rafael da silva', 'bek kanan', 'Brazil'),
(11, 'Antonie Griezman', 'Striker', 'Perancis'),
(12, 'Lionel Messi', 'Striker', 'Argentina'),
(13, 'Cristiano Ronaldo', 'Sriker', 'Portugal'),
(14, 'Iker Casillas', 'Kiper', 'Spanyol'),
(15, 'Gianluigi Buffon', 'Kiper', 'Italia'),
(16, 'Antonio Valencia', 'Bek kanan', 'Ekuador'),
(17, 'Marcos Alonso', 'Bek kiri', 'Spanyol'),
(18, 'Luke Shaw', 'Bek kiri', 'Inggris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
