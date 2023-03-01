
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` nvarchar(255) NOT NULL,
  `password` nvarchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '3677b23baa08f74c28aba07f0cb6554e');

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `uimg` varchar(100) ,
  `proofno` varchar(30) NOT NULL,
  `haddress` varchar(200) NOT NULL,
  `caddress` varchar(250) NOT NULL,
  `rdate` date NOT NULL,
  `multiLine` varchar(500) ,
  `depatment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`ID`, `fname`, `email`, `phone`, `uimg`, `proofno`, `caddress`, `haddress`, `rdate`, `multiLine`, `depatment`) VALUES
(1, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', 'ngu', 'A'),
(2, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A'),
(3, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A'),
(4, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A'),
(5, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A'),
(6, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A'),
(7, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A'),
(8, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A'),
(9, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A'),
(10, 'afsar', 'afsar.sdq@gmail.com', 2147483647, '', 0, 'kda, motinagar', 'kda, motinagar', '0000-00-00', '', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`(
  `id` int(11) NOT NULL,
  `fname` nvarchar(255) NOT NULL,
  `email` nvarchar(255) NOT NULL,
  `password` nvarchar(300) NOT NULL,
  `contactno` nvarchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `password`, `contactno`) VALUES
(12, 'afsar', 'afsar.sdq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '123'),
(13, 'Afsar', 'afsar.sdq@gmail.com', '3677b23baa08f74c28aba07f0cb6554e', '8090648046');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cdetails`
--
ALTER TABLE `cdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
