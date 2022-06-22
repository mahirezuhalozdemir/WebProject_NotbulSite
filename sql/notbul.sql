
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `notbul`
-- Tablo için tablo yapısı `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_turkish_ci NOT NULL,
  `contentHeader` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `releaseDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `category` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


INSERT INTO `note` (`id`, `content`, `contentHeader`, `releaseDate`, `user_id`, `category`) VALUES
(44, 'Bir dairenin çevresinin o dairenin alanına oranıdır. irrasyonel bir sayıdır.', 'Pi', '2022-06-21 00:16:42', 6, 'Geometri'),
(57, 'aa', 'fvg', '2022-06-21 08:10:00', 10, 'Biyoloji'),
(58, 'q', 'hbf jhfj', '2022-06-21 08:10:43', 10, 'Biyoloji'),
(59, 'd', 'fr', '2022-06-21 08:11:51', 10, 'Biyoloji'),
(60, 'ffvf', 'Tam Sayi', '2022-06-21 08:12:09', 10, 'Biyoloji'),
(61, 'z', 'hh', '2022-06-21 08:12:47', 10, 'Biyoloji'),
(62, 'dd', 'Doğal Sayı', '2022-06-21 08:14:32', 10, 'Biyoloji'),
(63, 'a', 'doğal sayi', '2022-06-21 08:15:15', 10, 'Biyoloji'),
(64, '', 'doğal sayi', '2022-06-21 08:20:30', 10, 'Biyoloji'),
(65, 'aaa', 'sayi ', '2022-06-21 08:21:45', 10, 'Biyoloji'),
(67, '', 'df d', '2022-06-22 09:26:32', 1, 'Biyoloji'),
(73, 'aa', 'fe dej', '2022-06-22 11:56:58', 1, 'Geometri'),
(74, 'xsx', 'ws', '2022-06-22 11:57:05', 1, 'Geometri'),
(75, 'sd', 'sxc', '2022-06-22 11:57:12', 1, 'Geometri'),
(77, 'zz', 'sss', '2022-06-22 11:57:57', 1, 'Biyoloji'),
(78, 'aa', 'aa', '2022-06-22 11:58:06', 1, 'Matematik'),
(79, 'aaaaaaaaaaaa', 'mat', '2022-06-22 12:01:19', 1, 'Matematik'),
(80, 'Canlı ya da organizma,biyoloji ve ekolojide fonksiyonlarını yaşama mümkün olduğunca uyum sağlayarak sürdüren basit yapı moleküllerinin veya karmaşık organ sistemlerinin bir araya gelmesiyle oluşan varlıklardır', 'Canlı Nedir?', '2022-06-22 12:14:59', 1, 'Biyoloji'),
(81, 'Biçimlerin sayıların ve niceliklerin yapılarını özelliklerini aralarındaki bağıntıları akıl yürütme yoluyla inceleyen ve aritmetik, geometri cebir ve dallara ayıran bilim.', 'Matematik Nedir', '2022-06-22 12:22:04', 1, 'Matematik'),
(82, 'bhb', 'bjb', '2022-06-22 12:22:53', 1, 'Matematik'),
(83, 'nergiz', 'nergiz', '2022-06-22 12:35:24', 11, 'Biyoloji'),
(84, 'ssss', 'ldkej djh', '2022-06-22 12:51:13', 11, 'YabancÄ± Dil');

-- --------------------------------------------------------
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(15) NOT NULL,
  `u_lastname` varchar(25) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `dateOfRegistration` timestamp NOT NULL DEFAULT current_timestamp(),
  `u_status` varchar(15) NOT NULL,
  `pass_word` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Tablo döküm verisi `user`

INSERT INTO `user` (`id`, `u_name`, `u_lastname`, `u_email`, `dateOfRegistration`, `u_status`, `pass_word`) VALUES
(1, 'zuhal', 'ozdemir', 'zuhal@mail.com', '2022-06-20 10:43:54', 'highschool', '1234'),
(7, 'Kübra', 'ozcan', 'kubra@mail.com', '2022-06-21 00:24:06', 'university', 'zsaz'),
(6, 'Asiye', 'Derin', 'asiye@mail.com', '2022-06-20 23:43:48', 'secondarySchool', 'rewer'),
(8, 'Ahmet', 'çelik', 'ahmet@mail.com', '2022-06-21 07:32:01', 'primarySchool', '1234'),
(9, 'selim', 'aydın', 'selim@mail.com', '2022-06-21 07:38:08', 'highschool', '1234'),
(10, 'ahmet metin', 'yhd', 'metin@mail.com', '2022-06-21 08:03:23', 'highschool', '4532'),
(11, 'nergiz', 'sadiyeva', 'nergiz@mail.com', '2022-06-22 12:34:35', 'highschool', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

