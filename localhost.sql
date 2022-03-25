-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Giu 11, 2020 alle 19:25
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_riccardoberetta`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `bibite`
--

CREATE TABLE IF NOT EXISTS `bibite` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `prezzo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dump dei dati per la tabella `bibite`
--

INSERT INTO `bibite` (`id`, `nome`, `prezzo`) VALUES
(1, 'acqua', '1.00'),
(3, 'vino bianco/rosso', '5.00'),
(2, 'bibita', '3.00'),
(6, 'CAFFE''', '2.00'),
(4, 'Birra 40 cl', '5.00'),
(5, 'Cappuccino, The', '2.50');

-- --------------------------------------------------------

--
-- Struttura della tabella `dolci`
--

CREATE TABLE IF NOT EXISTS `dolci` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `prezzo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `dolci`
--

INSERT INTO `dolci` (`id`, `nome`, `prezzo`) VALUES
(1, 'dessert fatto in casa', '5.00'),
(2, 'crostata alle ciliege', '2.50'),
(3, 'gelato', '3.50');

-- --------------------------------------------------------

--
-- Struttura della tabella `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idusr` int(11) NOT NULL AUTO_INCREMENT,
  `tavolo` smallint(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idusr`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `login`
--

INSERT INTO `login` (`idusr`, `tavolo`, `password`) VALUES
(1, 1, '518529b118f1ece3ee51e91639482d12'),
(2, 2, '88b258c5a7d81f06befe599dec2fed04'),
(3, 3, 'a45719bdb237b80f5deca5bcbc37e9f2'),
(4, 4, '983e175c0d243c82cd1366ef5aa12f64');

-- --------------------------------------------------------

--
-- Struttura della tabella `ordinazioni`
--

CREATE TABLE IF NOT EXISTS `ordinazioni` (
  `idord` smallint(6) NOT NULL AUTO_INCREMENT,
  `pizze` varchar(300) NOT NULL,
  `bibite` varchar(300) NOT NULL,
  `dolci` varchar(300) NOT NULL,
  `codtav` smallint(20) NOT NULL,
  `act` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idord`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dump dei dati per la tabella `ordinazioni`
--

INSERT INTO `ordinazioni` (`idord`, `pizze`, `bibite`, `dolci`, `codtav`, `act`) VALUES
(1, 'NAPOLI,\r\nTONNO E CIPOLLE,\r\nMARINARA,\r\nCIPOLLE,\r\n', 'ACQUA,\r\nBIBITE,\r\nBIRRA 40 CL.,\r\n', 'GELATO,\r\nCROSTATA ALLE CILIGIE,\r\n', 1, '1'),
(33, 'CIPOLLE,\r\nCIPOLLE,\r\nSICILIANA,\r\n', 'ACQUA, \r\nBIBITE,\r\n', 'DESSERT FATTO IN CASA,\r\nGELATO, \r\n', 4, '1'),
(34, 'NAPOLI,\r\nMARGHERITA, \r\nTONNO E CIPOLLE,\r\n4 STAGIONI,\r\n4 STAGIONI,\r\n4 STAGIONI,\r\n4 STAGIONI,\r\n4 STAGIONI,\r\n4 STAGIONI,\r\n4 STAGIONI,\r\n4 STAGIONI,\r\n', 'ACQUA,\r\nVINO BIANCO/ROSSO,\r\nVINO BIANCO/ROSSO,\r\nVINO BIANCO/ROSSO,\r\nVINO BIANCO/ROSSO,\r\nVINO BIANCO/ROSSO,\r\nVINO BIANCO/ROSSO,\r\nVINO BIANCO/ROSSO,\r\nVINO BIANCO/ROSSO,\r\nCAPPUCCINO, THE,\r\nCAPPUCCINO, THE,\r\nCAPPUCCINO, THE,\r\n', 'GELATO,\r\nGELATO,\r\nGELATO,\r\nGELATO,\r\nGELATO,\r\nGELATO,\r\nGELATO,\r\nGELATO,\r\n', 2, '1'),
(31, 'MARGHERITA,\r\n', 'ACQUA,\r\n', 'CROSTATA ALLE CILIGIE,\r\n', 4, '1'),
(32, 'NAPOLI,\r\nTONNO E CIPOLLE,\r\n', 'ACQUA,\r\nACQUA,\r\n', 'GELATO,\r\nGELATO,\r\n', 1, '1'),
(30, 'NAPOLI,\r\nTONNO E CIPOLLE,\r\n', 'BIBITE,\r\n', 'GELATO,\r\n', 3, '1'),
(29, 'MARGHERITA,\r\n', 'BIBITE,\r\n', 'CROSTATA ALLE CILIGIE,\r\n', 2, '1'),
(28, 'MARGHERITA,\r\nMARINARA,\r\n', 'BIBITE,\r\nBIRRA 40 CL.,\r\n', '', 1, '1'),
(27, 'NAPOLI,\r\nFUNGHI,\r\n4 STAGIONI,\r\nVERDURE,\r\nSICILIANA,\r\n', 'ACQUA,\r\nBIBITE,\r\nBIRRA 40 CL.,\r\n', 'DESSERT FATTO IN CASA,\r\nCROSTATA ALLE CILIGIE,\r\n', 1, '1'),
(24, 'MARGHERITA, \nNAPOLI,\nTONNO E CIPOLLE,\nSALSICCIA,\n', 'ACQUA,\r\nBIRRA 40 CL.,\r\n', 'GELATO,\r\nCROSTATA ALLE CILIGIE,\r\n', 4, '1'),
(41, 'NAPOLI,\r\n4 STAGIONI,\r\nMARINARA,\r\n', 'ACQUA,\r\nACQUA,\r\n', 'CROSTATA ALLE CILIEGE,\r\nGELATO,\r\n', 2, '0'),
(36, 'MARINARA,\r\nMARGHERITA,\r\n', 'ACQUA, \r\nBIBITA,\r\n', 'DESSERT FATTO IN CASA,\r\nGELATO,\r\n', 1, '1'),
(37, 'MARGHERITA,\r\nMARGHERITA,\r\n', 'BIBITA,\r\n', 'GELATO,\r\n', 4, '1'),
(38, 'NAPOLI,\r\nNAPOLI,\r\n', 'ACQUA,\r\nACQUA,\r\n', 'DESSERT FATTO IN CASA,\r\nDESSERT FATTO IN CASA,\r\n', 1, '0'),
(39, 'NAPOLI,\r\nNAPOLI,\r\n', 'ACQUA,\r\nACQUA,\r\n', 'DESSERT FATTO IN CASA,\r\nDESSERT FATTO IN CASA,\r\n', 1, '1'),
(40, 'NAPOLI,\r\nNAPOLI,\r\n', '', '', 1, '1'),
(42, 'FUNGHI,\r\nDIAVOLA,\r\nSALSICCIA,\r\n', 'CAPPUCCINO, THE,\r\nBIRRA 40 CL,\r\n', 'DESSERT FATTO IN CASA,\r\nGELATO,\r\n', 3, '0'),
(43, 'NAPOLI,\r\nDIAVOLA,\r\nSALSICCIA,\r\nSICILIANA,\r\n', 'ACQUA,\r\nACQUA,\r\nACQUA,\r\n', 'GELATO,\r\nGELATO,\r\nGELATO,\r\n', 1, '0');

-- --------------------------------------------------------

--
-- Struttura della tabella `pizze`
--

CREATE TABLE IF NOT EXISTS `pizze` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ingredienti` varchar(150) NOT NULL,
  `prezzo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dump dei dati per la tabella `pizze`
--

INSERT INTO `pizze` (`id`, `nome`, `ingredienti`, `prezzo`) VALUES
(2, 'napoli', 'pomodoro, mozzarella e acciughe', '6.50'),
(1, 'margherita', 'pomodoro e mozzarella', '5.50'),
(3, 'Funghi', 'pomodoro, mozzarella e funghi', '6.50'),
(4, 'Diavola', 'pomodoro, mozzarella e salame piccante', '7.00'),
(5, 'Tonno e cipolle', 'pomodoro, mozzarella, tonno e cipolle', '7.50'),
(6, '4 Stagioni', 'pomodoro, mozzarella, funghi, prosciutto cotto, carciofi e olive nere', '8.00'),
(7, 'Salsiccia', 'pomodoro, mozzarella e salsiccia', '8.50'),
(8, 'Verdure', 'pomodoro, mozzarella e verdure grigliate', '7.50'),
(9, 'marinara', 'pomodoro e aglio', '4.50'),
(10, 'siciliana', 'pomodoro, olive, acciughe e capperi', '6.50'),
(11, 'cipolle', 'pomodoro, mozzarella e cipolle', '6.50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
