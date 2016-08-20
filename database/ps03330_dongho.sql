-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2016 at 03:11 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps03330_dongho`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

CREATE TABLE `chitiethd` (
  `SOHD` int(11) NOT NULL,
  `MADH` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethd`
--

INSERT INTO `chitiethd` (`SOHD`, `MADH`, `SOLUONG`) VALUES
(111, 1, 2),
(222, 2, 1),
(333, 3, 1),
(444, 4, 1),
(555, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dongho`
--

CREATE TABLE `dongho` (
  `MADH` int(11) NOT NULL,
  `TENDH` varchar(30) NOT NULL,
  `GIA` int(20) NOT NULL,
  `MALOAI` int(11) NOT NULL,
  `XUATXU` varchar(12) NOT NULL,
  `HINH` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dongho`
--

INSERT INTO `dongho` (`MADH`, `TENDH`, `GIA`, `MALOAI`, `XUATXU`, `HINH`) VALUES
(1, 'Tissot T095.417.11.067.00', 12400000, 1, 'Swiss', '1.jpg'),
(2, 'Citizen CA0030.52E', 11061000, 2, 'Japan', '2.jpg'),
(3, 'Orient Star SDK05001W0', 13293000, 1, 'Japan', '3.jpg'),
(4, 'Orient SDJ05003W0', 10953000, 1, 'Japan', '4.jpg'),
(5, 'Seiko SNE375P1', 5922000, 2, 'Japan', '5.jpg'),
(6, '1', 1, 1, '1', '1.jpg'),
(7, '7', 7, 1, '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `SOHD` int(11) NOT NULL,
  `MAKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`SOHD`, `MAKH`) VALUES
(111, 1),
(222, 2),
(333, 3),
(444, 4),
(555, 5);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(11) NOT NULL,
  `HOTEN` varchar(30) NOT NULL,
  `DIACHI` varchar(30) NOT NULL,
  `SODT` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `HOTEN`, `DIACHI`, `SODT`) VALUES
(1, 'Ta Duc Tan', '123, Q.Thu Duc', '0909688316'),
(2, 'Lo Thanh Phu', '11, Q.11', '0905436624'),
(3, 'Tran Minh Long', '311, Q.Thu Duc', '01218990052'),
(4, 'Le Tu Duy Khanh', '114, Q.8', '0933179917'),
(5, 'Bui Dang Hiep', '205, Q.Tan Binh', '0982963998'),
(6, '6', '6', '6');

-- --------------------------------------------------------

--
-- Table structure for table `loaidongho`
--

CREATE TABLE `loaidongho` (
  `MALOAI` int(11) NOT NULL,
  `TENLOAI` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaidongho`
--

INSERT INTO `loaidongho` (`MALOAI`, `TENLOAI`) VALUES
(1, 'Automatic'),
(2, 'Quartz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`SOHD`,`MADH`),
  ADD KEY `CHITIETHD_SANPHAM` (`MADH`);

--
-- Indexes for table `dongho`
--
ALTER TABLE `dongho`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `SANPHAM_LOAISANPHAM` (`MALOAI`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`SOHD`),
  ADD KEY `HOADON_KHACHHANG` (`MAKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `loaidongho`
--
ALTER TABLE `loaidongho`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `CHITIETHD_HOADON` FOREIGN KEY (`SOHD`) REFERENCES `hoadon` (`SOHD`),
  ADD CONSTRAINT `CHITIETHD_SANPHAM` FOREIGN KEY (`MADH`) REFERENCES `dongho` (`MADH`);

--
-- Constraints for table `dongho`
--
ALTER TABLE `dongho`
  ADD CONSTRAINT `SANPHAM_LOAISANPHAM` FOREIGN KEY (`MALOAI`) REFERENCES `loaidongho` (`MALOAI`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `HOADON_KHACHHANG` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
