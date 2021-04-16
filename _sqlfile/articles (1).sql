-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2021 at 07:10 AM
-- Server version: 8.0.19
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Article_id` int NOT NULL,
  `Theme` varchar(255) NOT NULL,
  `Text_article` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Data_published` date DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Article_id`, `Theme`, `Text_article`, `Data_published`, `Author`) VALUES
(1, 'mashinalar', 'salom bu mashina', '2021-03-09', NULL),
(2, 'nimadir', '\r\niPrice Group report offers insights on daily e-commerce activity in the Philippines and Southeast. Statistically, you stand a better chance for success if you have some sort of strategic ask in almost everything that you do -- in-person, on the phone, over email, or on social media.\r\n\r\nThink about it: If you make one additional ask per day and convert at around 10 percent. Then you have three people each month providing you with benefits that youd have missed otherwise Its essential to make sure that your ask relates to some direct path to what you want, whether it is revenue, a business relationship or anything else of prime importance to you.\r\n\r\n\r\n\r\nMusic can help you get into -- losing yourself in the task at hand. Even repetitive tasks or mundane assignments seem more bearable, or even fun, when your favorite tunes are in your ears.\r\n\r\nSet a bigger goals and chase them everyday\r\nPlus, your eyes won’t be so prone to checking the time. Check out these and more reasons to bring your music to work in this Zing Instruments infographic below. A great piece of music is an instant mood lifter. Plenty of scientific evidence backs this up - we`re happier bunnies when listening to music.\r\n\r\nHaving specific asks\r\nNulla rhoncus orci varius purus lobortis euismod. Fusce tincidunt dictum est et rhoncus. Vivamus hendrerit congue nisi, et nisl tincida vestibulum elit tincidunt eu. Vivamus ac pharetra orci, in feugiat massa. Proin congue mauris pretium, ultricies tortor in, aliquam urna. Vivamus mi tortor, finibus a interdum ac, ultricies in elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere hendrerit ex eu scelerisque.\r\n\r\nAttraction needs attention\r\nIn order to attract what you want, you actually have to consciously and strategically think about what you want and focus in on it. Then, you need to take some sort of action using the same four strategies you use to ask for help in order to make it happen. You cant get what you want sitting around on your couch. You need to put yourself out there and stimulate interest in person, via email, by phone and through social media.\r\n\r\nStylish article pages\r\nmake it happen\r\nStimulating interest i person can be powerful, especially i you surround yourself wit the riht people ad the over the phone. Asan example, ifyoure working wih a charity organization, tell a story about how much money you helped raise fo another charity youre affiliated wih.\r\n\r\nIf you win an important award i an industry, put it i your email signature  a tagline i a piece of social content. Showcasing your wins organically an authentically will attract more of the same.\r\n\r\nLit of features\r\nReusable components\r\nMultiple niches\r\nLightning f\r\nBEM methodology\r\nOrganized JS/Sass files\r\nSummary\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. nd finally the subconscious i the mechanism through which thought impulses which are repeated regularly wit feeling nd emotion are quickened, charged. nd finally the subconscious s the mechanism through which thought impulses which are repeated regularly wit feeling nd emotion.', '2021-03-22', NULL),
(3, 'niam', '  <p style=\"text-align: center;\">\r\n    <img title=\"TinyMCE Logo\" src=\"//www.tiny.cloud/images/glyph-tinymce@2x.png\" alt=\"TinyMCE Logo\" width=\"110\" height=\"97\" />\r\n  </p>\r\n\r\n  <h2 style=\"text-align: center;\">Welcome to the TinyMCE editor demo!</h2>\r\n\r\n  <h2>Got questions or need help?</h2>\r\n\r\n  <ul>\r\n    <li>Our <a href=\"https://www.tiny.cloud/docs/\">documentation</a> is a great resource for learning how to configure TinyMCE.</li>\r\n    <li>Have a specific question? Try the <a href=\"https://stackoverflow.com/questions/tagged/tinymce\" target=\"_blank\" rel=\"noopener\"><code>tinymce</code> tag at Stack Overflow</a>.</li>\r\n    <li>We also offer enterprise grade support as part of <a href=\"https://www.tiny.cloud/pricing\">TinyMCE premium plans</a>.</li>\r\n  </ul>\r\n\r\n  <h2>A simple table to play with</h2>\r\n\r\n  <table style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n    <thead>\r\n      <tr>\r\n        <th>Product</th>\r\n        <th>Cost</th>\r\n        <th>Really?</th>\r\n      </tr>\r\n    </thead>\r\n    <tbody>\r\n      <tr>\r\n        <td>TinyMCE</td>\r\n        <td>Free</td>\r\n        <td>YES!</td>\r\n      </tr>\r\n      <tr>\r\n        <td>Plupload</td>\r\n        <td>Free</td>\r\n        <td>YES!</td>\r\n      </tr>\r\n    </tbody>\r\n  </table>\r\n\r\n  <h2>Found a bug?</h2>\r\n\r\n  <p>\r\n    If you think you have found a bug please create an issue on the <a href=\"https://github.com/tinymce/tinymce/issues\">GitHub repo</a> to report it to the developers.\r\n  </p>\r\n\r\n  <h2>Finally ...</h2>\r\n\r\n  <p>\r\n    Don\'t forget to check out our other product <a href=\"http://www.plupload.com\" target=\"_blank\">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.\r\n  </p>\r\n  <p>\r\n    Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.\r\n  </p>', '2021-03-22', NULL),
(4, 'karocha nmiadonask', '<p>lksc</p><p>c</p><p>sc</p><p>sdv</p><p>sr</p><p>ber</p><p>fnsfr</p><p>ned</p><p>jn</p><p>edtjn</p><p>ejt</p><p>edt</p><p>&nbsp;</p>', '2021-03-28', NULL),
(5, 'maqolalar sharti', '<p><strong>Scientific and practical journal of \"Bulletin of the National Institute of&nbsp;Fine Arts and Design named after Kamoliddin Bekhzod\"</strong></p><p>The scientific and practical journal&nbsp;of&nbsp;\"Bulletin of the National Institute of Fine Arts and Design named after Kamoliddin Behzod\" has been publishing since 2020. The magazine aims to&nbsp;promote the country`s scientific and creative achievements in the field of art education and culture,&nbsp;and also aims to cover the&nbsp;news&nbsp;and problems in these areas.&nbsp;Moreover, there&nbsp;will be articles in the sections&nbsp;of&nbsp;\"Fine Arts\", \"Applied Art\", \"Design\", \"History of Art and Museum Business\", \"Young Researchers\", \"Review and Art History\".</p><p>&nbsp;The following requirements are imposed&nbsp;upon the&nbsp;&nbsp;articles submitted&nbsp;to the journal:</p><p>- Abstract (Uzbek, Russian, English)</p><p>- Keywords (Uzbek, Russian, English)</p><p>-&nbsp;The text of the article should be writtenin Times New Roman, size 14, spacing 1.5</p><p>-&nbsp;References&nbsp;will be given in the text</p><p>- Articles should be 8-10 pages</p><p>- A 3x4 photo of the author must be attached to the article</p><p>&nbsp;</p><p><strong>&nbsp; &nbsp; &nbsp;Articles&nbsp;for the journal are accepted in the following areas:</strong></p><p>1. Fine arts</p><p>2. Applied arts</p><p>3. Design</p><p>4.&nbsp;Art history</p><p>5. Museology</p><p>6.&nbsp;Art review and art criticism</p><p>7.&nbsp;Art history and theory</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '2021-03-28', NULL),
(6, 'dsfgijnk', '<p>sdfgh</p>', '2021-03-28', NULL),
(7, 'swdcfv', '<p>opidgvrefh</p><p>rfh</p><p>rehreh</p><p>reherh</p><p>erhj</p><p>rehreh</p><p>&nbsp;</p>', '2021-03-28', NULL),
(8, 'swdcfv', '<p>dsgtryujikll</p>', '2021-03-28', NULL),
(9, 'swdcfvwergtyure', '<p>errrrrrrrrrrrrrrrrrrrrrrrrrrrjmipjprewign</p>', '2021-03-28', NULL),
(10, 'swdcfvwergtyure', '<p>dssfghj</p>', '2021-03-28', NULL),
(11, '123', '<p>tdezgxjyrxjgfxjynf</p>', '2021-04-02', NULL),
(12, 'salom 123', '<p>aughvibjaoefbwev</p><p>wev</p><p>we</p><p>v</p><p>wsv</p><p>&nbsp;</p>', '2021-04-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ARTICLE_ID` int NOT NULL,
  `THEME` varchar(100) NOT NULL,
  `TEXT_ARTICLE` text NOT NULL,
  `DATA_PUBLISHED` date DEFAULT NULL,
  `Author_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ARTICLE_ID`, `THEME`, `TEXT_ARTICLE`, `DATA_PUBLISHED`, `Author_id`) VALUES
(2, 'nimadir karoche', '<p><strong>Scientific and practical journal of \"Bulletin of the National Institute of&nbsp;Fine Arts and Design named after Kamoliddin Bekhzod\"</strong></p><p>The scientific and practical journal&nbsp;of&nbsp;\"Bulletin of the National Institute of Fine Arts and Design named after Kamoliddin Behzod\" has been publishing since 2020. The magazine aims to&nbsp;promote the countrys scientific and creative achievements in the field of art education and culture,&nbsp;and also aims to cover the&nbsp;news&nbsp;and problems in these areas.&nbsp;Moreover, there&nbsp;will be articles in the sections&nbsp;of&nbsp;\"Fine Arts\", \"Applied Art\", \"Design\", \"History of Art and Museum Business\", \"Young Researchers\", \"Review and Art History\".</p><p>&nbsp;The following requirements are imposed&nbsp;upon the&nbsp;&nbsp;articles submitted&nbsp;to the journal:</p><p>- Abstract (Uzbek, Russian, English)</p><p>- Keywords (Uzbek, Russian, English)</p><p>-&nbsp;The text of the article should be writtenin Times New Roman, size 14, spacing 1.5</p><p>-&nbsp;References&nbsp;will be given in the text</p><p>- Articles should be 8-10 pages</p><p>- A 3x4 photo of the author must be attached to the article</p><p>&nbsp;</p><p><strong>&nbsp; &nbsp; &nbsp;Articles&nbsp;for the journal are accepted in the following areas:</strong></p><p>1. Fine arts</p><p>2. Applied arts</p><p>3. Design</p><p>4.&nbsp;Art history</p><p>5. Museology</p><p>6.&nbsp;Art review and art criticism</p><p>7.&nbsp;Art history and theory</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '2021-03-25', 10),
(3, 'nimadir karoche', '<p><strong>Scientific and practical journal of \"Bulletin of the National Institute of&nbsp;Fine Arts and Design named after Kamoliddin Bekhzod\"</strong></p><p>The scientific and practical journal&nbsp;of&nbsp;\"Bulletin of the National Institute of Fine Arts and Design named after Kamoliddin Behzod\" has been publishing since 2020. The magazine aims to&nbsp;promote the countrys scientific and creative achievements in the field of art education and culture,&nbsp;and also aims to cover the&nbsp;news&nbsp;and problems in these areas.&nbsp;Moreover, there&nbsp;will be articles in the sections&nbsp;of&nbsp;\"Fine Arts\", \"Applied Art\", \"Design\", \"History of Art and Museum Business\", \"Young Researchers\", \"Review and Art History\".</p><p>&nbsp;The following requirements are imposed&nbsp;upon the&nbsp;&nbsp;articles submitted&nbsp;to the journal:</p><p>- Abstract (Uzbek, Russian, English)</p><p>- Keywords (Uzbek, Russian, English)</p><p>-&nbsp;The text of the article should be writtenin Times New Roman, size 14, spacing 1.5</p><p>-&nbsp;References&nbsp;will be given in the text</p><p>- Articles should be 8-10 pages</p><p>- A 3x4 photo of the author must be attached to the article</p><p>&nbsp;</p><p><strong>&nbsp; &nbsp; &nbsp;Articles&nbsp;for the journal are accepted in the following areas:</strong></p><p>1. Fine arts</p><p>2. Applied arts</p><p>3. Design</p><p>4.&nbsp;Art history</p><p>5. Museology</p><p>6.&nbsp;Art review and art criticism</p><p>7.&nbsp;Art history and theory</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '2021-03-25', 8),
(4, 'nimadir karoche', '<p><strong>Scientific and practical journal of \"Bulletin of the National Institute of&nbsp;Fine Arts and Design named after Kamoliddin Bekhzod\"</strong></p><p>The scientific and practical journal&nbsp;of&nbsp;\"Bulletin of the National Institute of Fine Arts and Design named after Kamoliddin Behzod\" has been publishing since 2020. The magazine aims to&nbsp;promote the countrys scientific and creative achievements in the field of art education and culture,&nbsp;and also aims to cover the&nbsp;news&nbsp;and problems in these areas.&nbsp;Moreover, there&nbsp;will be articles in the sections&nbsp;of&nbsp;\"Fine Arts\", \"Applied Art\", \"Design\", \"History of Art and Museum Business\", \"Young Researchers\", \"Review and Art History\".</p><p>&nbsp;The following requirements are imposed&nbsp;upon the&nbsp;&nbsp;articles submitted&nbsp;to the journal:</p><p>- Abstract (Uzbek, Russian, English)</p><p>- Keywords (Uzbek, Russian, English)</p><p>-&nbsp;The text of the article should be writtenin Times New Roman, size 14, spacing 1.5</p><p>-&nbsp;References&nbsp;will be given in the text</p><p>- Articles should be 8-10 pages</p><p>- A 3x4 photo of the author must be attached to the article</p><p>&nbsp;</p><p><strong>&nbsp; &nbsp; &nbsp;Articles&nbsp;for the journal are accepted in the following areas:</strong></p><p>1. Fine arts</p><p>2. Applied arts</p><p>3. Design</p><p>4.&nbsp;Art history</p><p>5. Museology</p><p>6.&nbsp;Art review and art criticism</p><p>7.&nbsp;Art history and theory</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '2021-03-25', 10),
(5, 'nimadir karoche', '<p><strong>Scientific and practical journal of \"Bulletin of the National Institute of&nbsp;Fine Arts and Design named after Kamoliddin Bekhzod\"</strong></p><p>The scientific and practical journal&nbsp;of&nbsp;\"Bulletin of the National Institute of Fine Arts and Design named after Kamoliddin Behzod\" has been publishing since 2020. The magazine aims to&nbsp;promote the countrys scientific and creative achievements in the field of art education and culture,&nbsp;and also aims to cover the&nbsp;news&nbsp;and problems in these areas.&nbsp;Moreover, there&nbsp;will be articles in the sections&nbsp;of&nbsp;\"Fine Arts\", \"Applied Art\", \"Design\", \"History of Art and Museum Business\", \"Young Researchers\", \"Review and Art History\".</p><p>&nbsp;The following requirements are imposed&nbsp;upon the&nbsp;&nbsp;articles submitted&nbsp;to the journal:</p><p>- Abstract (Uzbek, Russian, English)</p><p>- Keywords (Uzbek, Russian, English)</p><p>-&nbsp;The text of the article should be writtenin Times New Roman, size 14, spacing 1.5</p><p>-&nbsp;References&nbsp;will be given in the text</p><p>- Articles should be 8-10 pages</p><p>- A 3x4 photo of the author must be attached to the article</p><p>&nbsp;</p><p><strong>&nbsp; &nbsp; &nbsp;Articles&nbsp;for the journal are accepted in the following areas:</strong></p><p>1. Fine arts</p><p>2. Applied arts</p><p>3. Design</p><p>4.&nbsp;Art history</p><p>5. Museology</p><p>6.&nbsp;Art review and art criticism</p><p>7.&nbsp;Art history and theory</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '2021-03-25', 7),
(7, 'nimadir karoche', '<p>jp0inws</p><p>wjc[wc</p><p>wckwckwc</p><p>wc</p><p>wc</p><p>ws</p><p>c</p><p>wsc</p><p>s</p><p>wc</p><p>ws</p><p>vf</p><p>e3g</p><p>rd</p><p>ed</p><p>g</p><p>wsrh[oedh[oejh</p><p>wr]hpjws</p><p>]hkws</p><p>kgh</p><p>wskh</p><p>wkh</p><p>kwer</p><p>hkwe</p><p>hkw</p><p>k</p><p>&nbsp;</p>', '2021-03-25', 6),
(8, 'nimadir karoche', '<p>sljas</p><p>sd</p><p>sdv</p><p>sd</p><p>vsd</p><p>v s</p><p>dv</p><p>sdv&nbsp;</p><p>sd</p><p>vsd</p><p>v&nbsp;</p><p>s</p><p>&nbsp;</p>', '2021-03-26', 8),
(10, 'obsd', '<p>lxjksd</p><p>nkjsdcwed]wecwecwe</p><p>we</p><p>cfwe</p><p>cw</p><p>ec</p><p>we</p><p>fcw</p><p>e</p><p>we</p><p>vw</p><p>ev</p><p>&nbsp;</p>', '2021-03-27', 12),
(11, 'kariche s`', '<p>;ldmcss</p><p>dc</p><p>sd</p><p>c</p><p>sd</p><p>c</p><p>sdv</p><p>&nbsp;</p>', '2021-03-28', 9);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AUTHOR_id` int NOT NULL,
  `Author_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `User_password` varchar(50) NOT NULL,
  `FName` varchar(40) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `User_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AUTHOR_id`, `Author_username`, `User_password`, `FName`, `LName`, `Email`, `User_data`) VALUES
(6, 'ljsbad', '1234', 'lsj cs', 'lkc sc', 'sas@jkns.com', '2021-03-15'),
(7, 'shaxzod', '1234', 'shaxa', 'matka', 'shakhza@hma.com', '2021-03-15'),
(8, 'shaxzod', 'asd', 'shaxa', 'matka', 'shakhza@hma.com', '2021-03-15'),
(9, 'sds', 'skncso', 'shaik', 'snks', 'span@nodjks.dc', '2021-03-15'),
(10, 'shaxa', '1234', 'shaxzodbek', 'Matkarimov', 'shakhzad12@gmail.com', '2021-03-15'),
(11, '1', '1', '11', 'd', 'shaa@noad.cd', '2021-03-21'),
(12, '1', '1', '11', 'd', 'shaa@noad.cd', '2021-03-28'),
(13, 'asdf', '1234', 'asdf', 'asdf', 'shaas@ksj.dc', '2021-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `author_to_article`
--

CREATE TABLE `author_to_article` (
  `AUTHOR_id` int DEFAULT NULL,
  `Article_id` int DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `author_to_article`
--

INSERT INTO `author_to_article` (`AUTHOR_id`, `Article_id`, `role`) VALUES
(1, 1, 'muharrir');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Desription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_id`, `Name`, `Desription`) VALUES
(1, 'Applied art', 'This is a test descriptio'),
(2, 'Art history', 'this is a test description'),
(3, 'Art history and theory', 'this is a test description'),
(4, 'Art rewiew and critism', 'this is a test description'),
(5, 'Design', 'this is a test description'),
(6, 'Fine arts', 'this is a test descriptio'),
(7, 'Museology', 'This is a test description');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int NOT NULL,
  `comment_text` varchar(255) DEFAULT NULL,
  `data_commented` varchar(20) NOT NULL,
  `AUTHOR_id` int DEFAULT NULL,
  `Article_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_text`, `data_commented`, `AUTHOR_id`, `Article_id`) VALUES
(1, 'salom bla bla', '2021-03-09', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text,
  `data_send` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `email`, `name`, `subject`, `message`, `data_send`) VALUES
(1, 'esfd@biws.dws', 'dsfawdsf', 'dfcv', 'dsdvwedfcv', '2021-03-28'),
(2, 'shakhzad12@gmail.com', 'shaxzod', 'nmadir test karoche', ' bus test message sababi tekshitib ko`rish kerak', '2021-03-28'),
(3, '', '', '', 'sdx', '2021-03-28'),
(4, '', '', '', 'sdxsd', '2021-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `log_in_history`
--

CREATE TABLE `log_in_history` (
  `login_id` int NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `login_data` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_hesh`
--

CREATE TABLE `password_hesh` (
  `PASSWORD_id` int NOT NULL,
  `password_hesh` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password_data` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging`
--

CREATE TABLE `tagging` (
  `Tagging_id` int NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Article_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ARTICLE_ID`),
  ADD KEY `Author_id` (`Author_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AUTHOR_id`);

--
-- Indexes for table `author_to_article`
--
ALTER TABLE `author_to_article`
  ADD KEY `AUTHOR_id` (`AUTHOR_id`),
  ADD KEY `Article_id` (`Article_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `AUTHOR_id` (`AUTHOR_id`),
  ADD KEY `Article_id` (`Article_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `log_in_history`
--
ALTER TABLE `log_in_history`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `password_hesh`
--
ALTER TABLE `password_hesh`
  ADD PRIMARY KEY (`PASSWORD_id`);

--
-- Indexes for table `tagging`
--
ALTER TABLE `tagging`
  ADD PRIMARY KEY (`Tagging_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Article_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ARTICLE_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AUTHOR_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_in_history`
--
ALTER TABLE `log_in_history`
  MODIFY `login_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_hesh`
--
ALTER TABLE `password_hesh`
  MODIFY `PASSWORD_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tagging`
--
ALTER TABLE `tagging`
  MODIFY `Tagging_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`Author_id`) REFERENCES `author` (`AUTHOR_id`);

--
-- Constraints for table `author_to_article`
--
ALTER TABLE `author_to_article`
  ADD CONSTRAINT `author_to_article_ibfk_1` FOREIGN KEY (`AUTHOR_id`) REFERENCES `author` (`AUTHOR_id`),
  ADD CONSTRAINT `author_to_article_ibfk_2` FOREIGN KEY (`Article_id`) REFERENCES `article` (`Article_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`AUTHOR_id`) REFERENCES `author` (`AUTHOR_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`Article_id`) REFERENCES `article` (`Article_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
