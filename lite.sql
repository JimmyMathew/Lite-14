-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2014 at 12:25 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lite`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(50) NOT NULL,
  `member1` varchar(50) NOT NULL,
  `member2` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `points` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `team`, `member1`, `member2`, `type`, `username`, `password`, `points`) VALUES
(100, ' Praveen Kumar', '', '', 'Administrator', 'praveen', '310893', ''),
(101, ' Jimmy Mathew', '', '', 'Administrator', 'jimmy', '210792', ''),
(103, ' Kevin Miranda', '', '', 'Administrator', 'kevin', '260892', ''),
(109, ' Sharon Mary Barron', '', '', 'Registration', 'sharon', '280393', ''),
(110, ' Amirtha Savari', '', '', 'Registration', 'amirtha', 'amirtha', ''),
(111, ' Suresh Arockiasamy', '', '', 'Registration', 'suresh', 'suresh', ''),
(114, ' Arun Joshua', '', '', 'Registration', 'joshua', 'joshua', ''),
(115, ' Edvin Raj', '', '', 'Registration', 'edvin', 'edvin', ''),
(116, ' Vijaya Peterraj', '', '', 'Staff', 'vijaya', 'vijaya', ''),
(117, ' Kanageswari', '', '', 'Staff', 'kanageswari', 'kanageswari', ''),
(118, ' Antony alexander', '', '', 'Staff', 'alex', 'alex', ''),
(119, ' Albert', '', '', 'Staff', 'albert', 'albert', ''),
(120, ' Douglas', '', '', 'Registration', 'douglas', 'douglas', ''),
(122, 'Sacred Heart College', '  Augustin L', '  Lakshmanan J', 'Web Design', 'web01', 'web01', '10'),
(127, 'Sacred Heart College', '  Krishnamoorthy T', '  Raja M', 'Reverse Coding', 'reverse01', 'reverse01', '14'),
(128, 'Sacred Heart College', '  Vimalraj A', '  Meganathan V', 'Quiz', 'quiz01', 'quiz01', '9'),
(136, 'Guru Nanak College', '  Karthikeyan U', '  Ashwini P V', 'Reverse Coding', 'reverse02', 'reverse02', '8'),
(137, 'Guru Nanak College', '  Lavanya M', '  Aswini A', 'Reverse Coding', 'reverse03', 'reverse03', '10'),
(138, 'Guru Nanak College', '  Sumathi J', '  Jamuna S', 'Web Design', 'web02', 'web02', '14'),
(140, 'Guru Nanak College', '  Lavanya M', '  Aswini A', 'Quiz', 'quiz02', 'quiz02', '9'),
(141, 'Guru Nanak College', '  Saravanan G', '  Mayur Kumar Purohit', 'Gaming', 'game02', 'game02', ''),
(143, 'Guru Nanak College', '  Devi S', '  Rajan ', 'Gaming', 'game03', 'game03', ''),
(146, 'Guru Nanak College', '  Karthikeyan U', '  Raga D', 'Gaming', 'game04', 'game04', ''),
(148, 'Meenakshi College for Women', '  Roshini N', ' ', 'Stress Interview', 'stress02', 'stress02', ''),
(150, 'Meenakshi College for Women', '  Hema Priya R', '  Subhashree A', 'Reverse Coding', 'reverse04', 'reverse04', '14'),
(151, 'Jaya College', '  Manikandan N', ' ', 'Stress Interview', 'stress03', 'stress03', ''),
(152, 'Meenakshi College for Women', '  Nirosha R', '  Swetha N', 'Web Design', 'web03', 'web03', '11'),
(154, 'Meenakshi College for Women', '  Lakshmi Kothai B', '  Pavithra P', 'Web Design', 'web04', 'web04', '9'),
(155, 'Meenakshi College for Women', '  Kirthika Poorani S', '  Shamim Nilofar S', 'Quiz', 'quiz09', 'quiz09', '13'),
(156, 'Meenakshi College for Women', '  Priyadharshini R', '  Aiswarrya P O', 'Web Design', 'web05', 'web05', '11'),
(157, 'Jaya College', '  Manikandan N', '  N Balavignesh', 'Reverse Coding', 'reverse05', 'reverse05', '14'),
(158, 'Jaya College of Arts and Science', '  Manikandan N', ' ', 'Mobile Application', 'mob02', 'mob02', ''),
(159, 'Jaya College', '  Nausheen S', '  Manikandan N', 'Paper Presentation', 'paper03', 'paper03', ''),
(160, 'University of Madras', '  Umma Hany W', ' ', 'Stress Interview', 'stress04', 'stress04', ''),
(161, 'SDNB Vaishnav College', '  Karthika S', '  Archana S ', 'Reverse Coding', 'reverse06', 'reverse06', '15'),
(162, 'SDNB Vaishnav College', '  Jayalakshmi R P', '  vandhana R', 'Paper Presentation', 'paper04', 'paper04', ''),
(163, 'SDNB Vaishnav College', '  Lokeshwari S', '  Archana S ', 'Quiz', 'quiz10', 'quiz10', '6'),
(164, 'University of Madras', '  Manju Parkavi', '  Vignesh Babu B R', 'Quiz', 'quiz11', 'quiz11', '0'),
(166, 'University of Madras', '  Devapriya R', '  Raj Kumar K', 'Reverse Coding', 'reverse07', 'reverse07', '13'),
(167, 'University of Madras', '  Siva Shanmugam R', '  Sarath Kumar M', 'Gaming', 'game05', 'game05', ''),
(169, 'University of Madras', '  Vijaya Kumar A', '  Silambarasan C', 'Reverse Coding', 'reverse08', 'reverse08', '12'),
(170, 'Stella Maris', '  Amirta Antony ', '  Komal Surana R', 'Web Design', 'web06', 'web06', '13'),
(171, 'University of Madras', '  Vijaya Kumar A', '  Silambarasan C', 'Software Marketing', 'soft04', 'soft04', ''),
(172, 'University of Madras', '  Vignesh Kumar s', '  Aafreen Nawresh A', 'Software Marketing', 'soft05', 'soft05', ''),
(173, 'University of Madras', '  Sarath Kumar M', '  Umma Hany W', 'Software Marketing', 'soft06', 'soft06', ''),
(174, 'Stella Maris College', '  Komal Surana R', '  Amirta Antony ', 'Gaming', 'game06', 'game06', ''),
(175, 'Jaya College of Arts and Science', '  Arun Kumar S', '  Manikandan N', 'Quiz', 'quiz14', 'quiz14', '11'),
(176, 'Jaya College of Arts and Science', '  Mei Gnana Soorya N', '  Harish Kumar D', 'Gaming', 'game07', 'game07', ''),
(177, 'Jaya college', '  Gokula Kannan P', '  N Balavignesh', 'Web Design', 'web07', 'web07', '9'),
(178, 'Stella Maris', '  Saranya', '  Advin Priscilla D', 'Reverse Coding', 'reverse09', 'reverse09', '14'),
(179, 'University of Madras', '  Siva Shanmugam R', '  Manju Parkavi', 'Reverse Coding', 'reverse10', 'reverse10', '6'),
(180, 'Sacred heart College', '  Srinath S', ' ', 'Stress Interview', 'stress05', 'stress05', ''),
(181, 'Stella Maris College ', '  Advin Priscilla D', ' ', 'Stress Interview', 'stress06', 'stress06', ''),
(182, 'DB Jain College', '  Preeti yadav', ' ', 'Stress Interview', 'stress07', 'stress07', ''),
(184, 'D B Jain College', '  Partha Sarathy r', '  Preeti yadav', 'Quiz', 'quiz15', 'quiz15', '11'),
(185, 'Sacred Hearts', '  Vimalraj A', '  Meganathan V', 'Gaming', 'game01', 'game01', ''),
(186, 'Guru Nanak College', '  Monizha S', '  Vidhya m', 'Gaming', 'game08', 'game08', ''),
(187, 'University of Madras', '  Vignesh Kumar s', '  Raj Kumar K', 'Gaming', 'game09', 'game09', ''),
(188, 'D B Jain College', '  Gopi A', '  Vijay L', 'Gaming', 'game10', 'game10', ''),
(189, 'D B Jain College', '  Balamurugan D', '  Nithiya R', 'Gaming', 'game11', 'game11', ''),
(190, 'Sacred Hearts', '  Krishnamoorthy T', '  Lakshmanan J', 'Gaming', 'game12', 'game12', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `event1` varchar(50) NOT NULL,
  `event2` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `college`, `email`, `mobile`, `event1`, `event2`) VALUES
(1, ' Meganathan V', 'Sacred Heart College', 'meganath047@gmail.com', '9585017047', 'Quiz', 'Gaming'),
(2, ' Lakshmanan J', 'Sacred Heart College', 'lakshmananmca@gmail.com', '9566675767', 'Web Design', ''),
(3, ' ThanguTamil K', 'Sacred Heart College', 'tamilmath08@gmail.com', '8870962988', 'Software Marketing', ''),
(5, ' Krishnamoorthy T', 'Sacred Heart College', 'kavipriya001@gmail.com', '9786647022', 'Reverse Coding', 'Software Marketing'),
(6, ' Srinath S', 'Sacred Heart College', 'ssrinathsrinath@gmail.com', '9500841212', 'Stress Interview', 'Mobile Application'),
(8, ' Raja M', 'Sacred Heart College', 'rajaprem131@gmail.com', '9487044958', 'Software Marketing', 'Reverse Coding'),
(9, ' Augustin L', 'Sacred Heart College', 'augustincs18@gmail.com', '9943705224', 'Web Design', ''),
(10, ' Vimalraj A', 'Sacred Heart College', 'vimalraj014@gmail.com', '9940640412', 'Quiz', 'Gaming'),
(14, ' Hema Priya R', 'Meenakshi College for Women', 'hemapr71@gmail.com', '9840886006', 'Reverse Coding', 'Web Design'),
(16, ' Swetha N', 'Meenakshi College for Women', 'nswetha113@gmail.com', '9498065556', 'Web Design', 'Reverse Coding'),
(18, ' Karthika S', 'S D N B Vaishnav College for Women', 'karthikasundarraj@gmail.com', '9791042675', 'Reverse Coding', ''),
(19, ' Lokeshwari S', 'S D N B Vaishnav College for Women', 'mathicharu26@gmail.com', '9176747460', 'Quiz', ''),
(22, ' Manikandan N', 'Jaya College of Arts and Science', 'manik-72@gmail.com', '9566127365', 'Reverse Coding', 'Mobile Application'),
(23, ' N Balavignesh', 'Jaya College of Arts and Science', 'nbalavignesh@yahoo.in', '8807399952', 'Web Design', ''),
(24, ' Arjun Kumar S', 'Jaya College of Arts and Science', 'sharun.kumar11@gmail.com', '9003223351', 'Quiz', ''),
(25, ' Nausheen S', 'Jaya College of Arts and Science', 'naushnob@gmail.com', '7845248905', 'Mobile Application', ''),
(26, ' Madhavan P', 'Sacred Heart College', 'madhavan134@gmail.com', '8148308200', 'Paper presentation', 'Software Marketing'),
(27, ' Daniel Joseph S', 'Sacred Heart College', 'danifromindia@gmail.com', '8098735281', 'Paper presentation', 'Software Marketing'),
(28, ' Ranjitha R', 'Meenakshi College for Women', 'ranjitha.raja19@gmail.com', '9042180985', 'Paper presentation', 'Quiz'),
(29, ' Kirthika Poorani S', 'Meenakshi College for Women', 'kirthikapoorani@gmail.com', '8754413456', 'Paper presentation', 'Quiz'),
(30, ' Saranya', 'Stella Maris College', 'saranyaveera@gmail.com', '2134876556', 'Gaming', ''),
(31, ' Priscilla', 'Stella Maris College', 'abc@gmail.com', '2134876556', 'Stress Interview', 'Gaming'),
(33, ' Amirta Antony ', 'Stella Maris College', 'amirtha_antony25@gmail.com', '9176250652', 'Web Design', 'Gaming'),
(34, ' Komal Surana R', 'Stella Maris College', 'loveprincess007@gmail.com', '9551333573', 'Web Design', 'Gaming'),
(35, ' Karthikeyan U', 'Guru Nanak College', 'karthikatasc@gmail.com', '9677827752', 'Reverse Coding', 'Gaming'),
(36, ' Aswini A', 'Guru Nanak College', 'jothiaswini@gmail.com', '9486159099', 'Quiz', 'Reverse Coding'),
(38, ' Lavanya M', 'Guru Nanak College', 'lakshmilavly@gmail.com', '9962238022', 'Quiz', 'Reverse Coding'),
(39, ' Jamuna S', 'Guru Nanak College', 'jamuna.rkt@gmail.com', '9789966113', 'Web Design', 'Reverse Coding'),
(40, ' Vidhya m', 'Guru Nanak College', 'vidhyamohan37@gmail.com', '9940270024', 'Quiz', ''),
(41, ' Rajan ', 'Guru Nanak College', 'abcd@gmail.com', '9840243080', 'Gaming', ''),
(42, ' Monizha S', 'Guru Nanak College', 'monizha25@gmail.com', '9788785188', 'Quiz', ''),
(43, ' Devi S', 'Guru Nanak College', 'vijayasrinivasan@gmail.com', '9789001788', 'Gaming', 'Quiz'),
(44, ' Raga D', 'Guru Nanak College', 'rogudevaraj02@gmail.com', '8438183826', 'Gaming', 'Quiz'),
(45, ' Sivakumar S', 'Guru Nanak College', 'sivagncm1993@gmail.com', '9566154110', 'Stress Interview', 'Quiz'),
(46, ' Saravanan G', 'Guru Nanak College', 'saraganesh10@gmail.com', '8148382844', 'Gaming', ''),
(47, ' Mayur Kumar Purohit', 'Guru Nanak College', 'mayurpuroshit20@gmail.com', '9710497902', 'Gaming', ''),
(48, ' Ashwini P V', 'Guru Nanak College', 'ashwinikarthi93@gmail.com', '9894307913', 'Reverse Coding', 'Quiz'),
(49, ' Sumathi J', 'Guru Nanak College', 'lesiya005@gmail.com', '8939706085', 'Web Design', 'Reverse Coding'),
(50, ' Subhashree A', 'Meenakshi College for Women', 'subhashree.ashokan@yahoo.com', '2134876556', 'Reverse Coding', 'Quiz'),
(51, ' Pavithra P', 'Meenakshi College for Women', 'pavitramegnon@gmail.com', '9087566544', 'Quiz', 'Web Design'),
(53, ' Roshini N', 'Meenakshi College for Women', 'roshini93@gmail.com', '9876543210', 'Stress Interview', 'Quiz'),
(54, ' Aiswarrya P O', 'Meenakshi College for Women', 'aishu92p@gmail.com', '2134876556', 'Web Design', ''),
(55, ' Priyadharshini R', 'Meenakshi College for Women', 'rmpriyad16@gmail.com', '9876543210', 'Web Design', 'Quiz'),
(57, ' Lakshmi Kothai B', 'Meenakshi College for Women', 'lakshmi007balasubramanian@gmail.com', '2134876556', 'Quiz', 'Web Design'),
(58, ' Nirosha R', 'Meenakshi College for Women', 'nirosha.shankar@gmail.com', '9962565336', 'Web Design', ''),
(59, ' Shamim Nilofar S', 'Meenakshi College for Women', 'shamimnilofor93@gmail.com', '9677295737', 'Quiz', ''),
(60, ' Silambarasan C', 'University of Madras', 'csilambarasan12@gmail.com', '7418478729', 'Software Marketing', 'Reverse Coding'),
(61, ' Archana S ', 'S D N B Vaishnav College for Women', 'archanasoman93@gmail.com', '8190974075', 'Quiz', 'Reverse Coding'),
(62, ' Jayalakshmi R P', 'S D N B Vaishnav College for Women', 'jayapartha09@gmail.com', '9710083486', 'Paper presentation', ''),
(63, ' vandhana R', 'S D N B Vaishnav College for Women', 'vandhubablu05@gmail.com', '9840227529', 'Paper presentation', ''),
(64, ' Vignesh Kumar s', 'University of Madras', 'vigneshkumarbca11@gmail.com', '2134876556', 'Software Marketing', 'Quiz'),
(65, ' Vijaya Kumar A', 'University of Madras', 'anbuvijay05@gmail.com', '9943165012', 'Software Marketing', 'Reverse Coding'),
(66, ' Raj Kumar K', 'University of Madras', 'rajkumarunom@gmail.com', '9500691070', 'Reverse Coding', 'Gaming'),
(67, ' Umma Hany W', 'University of Madras', 'dsfs@gmail.com', '9876543210', 'Software Marketing', 'Quiz'),
(68, ' Devapriya R', 'University of Madras', 'rdeva42@gmail.com', '9042894938', 'Reverse Coding', 'Quiz'),
(69, ' Aafreen Nawresh A', 'University of Madras', 'anawresh@gmail.com', '9087269801', 'Software Marketing', 'Quiz'),
(70, ' Sarath Kumar M', 'University of Madras', 'abc@gmail.com', '7299377657', 'Gaming', 'Software Marketing'),
(71, ' Vignesh Babu B R', 'University of Madras', 'abc@gmail.com', '9790884912', 'Quiz', 'Reverse Coding'),
(72, ' Siva Shanmugam R', 'University of Madras', 'jk@gmail.com', '9080666807', 'Gaming', 'Reverse Coding'),
(73, ' Manju Parkavi', 'University of Madras', 'jj@gmail.com', '8056296151', 'Quiz', 'Reverse Coding'),
(74, ' Mei Gnana Soorya N', 'Jaya College of Arts and Science', 'manik_72@hotmail.com', '9566127365', 'Gaming', ''),
(75, ' Gokula Kannan P', 'Jaya College of Arts and Science', 'manik_72@hotmail.com', '9566127365', 'Web Design', ''),
(76, ' Harish Kumar D', 'Jaya College of Arts and Science', 'manik-72@hotmaill.com', '9566127365', 'Gaming', ''),
(77, ' Arun Kumar S', 'Jaya College of Arts and Science', 'hfhfvhn@fdgr.com', '45646456', 'Quiz', ''),
(78, ' Nithiya R', 'D B Jain College', 'Nithyasweety143@gmail.com', '8056022387', 'Quiz', 'Reverse Coding'),
(79, ' Divyabharathi', 'D B Jain College', 'Divyabharathy113@gmail.com', '9790714676', 'Quiz', 'Reverse Coding'),
(80, ' Nandhini M', 'D B Jain College', 'Srinand1993@gmail.com', '9940178153', 'Quiz', 'Reverse Coding'),
(81, ' Preeti yadav', 'D B Jain College', 'preetiyadav10907@gmail.com', '99626557665', 'Stress Interview', 'Reverse Coding'),
(82, ' Balamurugan D', 'D B Jain College', 'Bala.ds93@gmail.com', '8939400228', 'Gaming', 'Reverse Coding'),
(84, ' Advin Priscilla D', 'Stella Maris', 'praveb@gmail.co', '3169456', 'Reverse Coding', ''),
(85, ' Suriya K', 'D B Jain College', 'Suriya.krishna11@gmail.com', '8015212677', 'Quiz', 'Reverse Coding'),
(86, ' Logesh K', 'D B Jain College', 'logeshbca6196@gmail.com', '9994715844', 'Gaming', 'Reverse Coding'),
(87, ' Vijay L', 'D B Jain College', 'vijaylogar6666@gmail.com', '7845760986', 'Gaming', 'Mobile Application'),
(88, ' Gopi A', 'D B Jain College', 'agopi.agopi@gmail.com', '8608405363', 'Gaming', 'Reverse Coding'),
(89, ' Partha Sarathy r', 'D B Jain College', 'sarathyxaso333@gmail,.com', '8754472762', 'Gaming', 'Reverse Coding');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `points` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

