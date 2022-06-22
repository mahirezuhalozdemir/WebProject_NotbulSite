
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
(44, 'Bir dairenin Ã§evresinin o dairenin Ã§apÄ±na oranÄ±dÄ±r. Ä°rrasyonel bir sayÄ±dÄ±r.', 'Pi', '2022-06-21 00:16:42', 6, 'Geometri'),
(45, 'Dil insanlar arasÄ±nda anlaÅŸmayÄ± saÄŸlayan oluÅŸtur. Kendine ait kurallarÄ± vardÄ±r.', 'Dil', '2022-06-21 00:19:36', 6, 'YabancÄ± Dil'),
(46, 'TÃ¼rev ve integral matematiÄŸin en Ã¶nemli temel konularÄ±ndan biridir. MÃ¼hendislik alanÄ±nda da Ã§okca kullanÄ±lan bu konuyu Ã¶ÄŸrenmek oldukÃ§a karmaÅŸÄ±ktÄ±r.Ä°ki kavram birbirinin tersidir.TÃ¼rev deÄŸiÅŸim miktarÄ±dÄ±r.Ä°ntegral ise belirli aralÄ±ktaki deÄŸiÅŸim toplamÄ±dÄ±r.', 'TÃ¼rev', '2022-06-21 00:27:34', 7, 'Matematik'),
(47, 'Asitler suda Ã§Ã¶zÃ¼ndÃ¼ÄŸÃ¼nde hidrojen deriÅŸimi artan maddelerdir.Hidrojen iyonu Ã§Ã¶zeltiyi asidik yapar.Asitler mavi turnusol kaÄŸÄ±dÄ±nÄ± kÄ±rmÄ±ya Ã§eviri. Bazlarla tepkimeye girerek tuz ve su oluÅŸtururlar.GÄ±dalarÄ±n Ã§oÄŸu asit iÃ§erir. Limon asedik asit, elma malÄ±k asit iÃ§erir.', 'Asit', '2022-06-21 00:31:56', 7, 'Kimya'),
(48, 'levha tektoniÄŸi veya levha hareketlerinin yapÄ±sÄ±nÄ± araÅŸtÄ±rÄ±r.Bir jeoloji alt disiplinidir.oysa tektonik, yeryuvarÄ±nÄ±n bÃ¼yÃ¼k Ã¶lÃ§ekli yapÄ±larÄ± ve bunlarÄ± oluÅŸturan kuvvetler ve hareketler Ã¼zerinde durur.', 'Tektonik', '2022-06-21 00:35:50', 7, 'CoÄŸrafya'),
(49, 'Baz suda iyonlaÅŸtÄ±klarÄ±nda ortama OH- iyonu veren ve elektron Ã§ifti verebilen maddelerdir. Bazlar da asitler gibi tehlikeli maddelerdir.Suda iyonlaÅŸtÄ±klarÄ±nda hidroksit iyonu deriÅŸimi artar.', 'Baz Nedir?', '2022-06-21 07:34:17', 8, 'Kimya'),
(50, 'CanÄ±larda kemiklerden oluÅŸmuÅŸ eklem ve baÄŸlaral birbirine tutturulmuÅŸ etrafÄ± kaslarla sarÄ±lÄ± destek veren yapÄ±ya denir.', 'Ä°skelet Nedir?', '2022-06-21 07:36:57', 8, 'Biyoloji'),
(51, 'sayma sayÄ±sÄ±dÄ±r. negatif ve pozitif olabilir.', 'tamsayÄ±', '2022-06-21 07:45:26', 9, 'Matematik'),
(53, 'qqqq', 'DoÄŸal SayÄ±', '2022-06-22 09:59:25', 1, 'Matematik'),
(54, 'aaa', 'Tam Sayi', '2022-06-22 10:02:02', 1, 'Geometri'),
(56, 'adae', 'Åžerife burd', '2022-06-21 08:09:11', 10, 'YabancÄ± Dil'),
(57, 'aa', 'ÅŸ n', '2022-06-21 08:10:00', 10, 'Biyoloji'),
(58, 'q', 'ÅŸ Ã¶', '2022-06-21 08:10:43', 10, 'Biyoloji'),
(59, 'd', 'Ã¶ ÄŸ', '2022-06-21 08:11:51', 10, 'Biyoloji'),
(60, 'Ã¶', 'Tam Sayi', '2022-06-21 08:12:09', 10, 'Biyoloji'),
(61, 'z', 'hh', '2022-06-21 08:12:47', 10, 'Biyoloji'),
(62, 'dd', 'DoÄŸal SayÄ±', '2022-06-21 08:14:32', 10, 'Biyoloji'),
(63, 'a', 'doÄŸal sayi', '2022-06-21 08:15:15', 10, 'Biyoloji'),
(64, '', 'doÄŸal sayi', '2022-06-21 08:20:30', 10, 'Biyoloji'),
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- Tablo döküm verisi `user`

INSERT INTO `user` (`id`, `u_name`, `u_lastname`, `u_email`, `dateOfRegistration`, `u_status`, `pass_word`) VALUES
(1, 'zuhal', 'ozdemir', 'zuhal@mail.com', '2022-06-20 10:43:54', 'highschool', '1234'),
(7, 'KÃ¼bra', 'Ã–zcan', 'kubra@mail.com', '2022-06-21 00:24:06', 'university', 'zsaz'),
(6, 'Asiye', 'Derin', 'asiye@mail.com', '2022-06-20 23:43:48', 'secondarySchool', 'rewer'),
(8, 'Ahmet', 'Ã‡elik', 'ahmet@mail.com', '2022-06-21 07:32:01', 'primarySchool', '1234'),
(9, 'selim', 'aydÄ±n', 'selim@mail.com', '2022-06-21 07:38:08', 'highschool', '1234'),
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

