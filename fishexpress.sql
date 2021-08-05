-- Database: `fishexpress`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `adddata` (IN `name` VARCHAR(30), IN `em` VARCHAR(30), IN `pno` VARCHAR(30), IN `addr` VARCHAR(30), IN `cname` VARCHAR(30), IN `fh1` VARCHAR(30), IN `rt1` INT(30), IN `fh2` VARCHAR(30), IN `rt2` INT(30), IN `fh3` VARCHAR(30), IN `rt3` INT(30))  NO SQL
INSERT INTO seller(name,email,phno,address,compname,fish1,rate1,fish2,rate2,fish3,rate3) values(name,em,pno,addr,cname,fh1,rt1,fh2,rt2,fh3,rt3)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `BNo` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `compname` varchar(25) NOT NULL,
  `fishName` varchar(15) NOT NULL,
  `fishQty` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--
-- Triggers `buyer`
--
DELIMITER $$
CREATE TRIGGER `adddate` AFTER INSERT ON `buyer` FOR EACH ROW insert into datetime VALUES(SYSDATE())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `datetime`
--

CREATE TABLE `datetime` (
  `issue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datetime`
--
-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SNo` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ratings` int(3) NOT NULL,
  `text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--
-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `SelNo` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `address` varchar(75) NOT NULL,
  `compname` varchar(25) NOT NULL,
  `fish1` varchar(15) NOT NULL,
  `rate1` int(7) NOT NULL,
  `fish2` varchar(15) NOT NULL,
  `rate2` int(7) NOT NULL,
  `fish3` varchar(15) NOT NULL,
  `rate3` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SNo` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`BNo`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`SelNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SNo`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `BNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SNo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `SelNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
