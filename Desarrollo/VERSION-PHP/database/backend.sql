SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `tek-store`
--

-- --------------------------------------------------------

 -- 
 -- Table structure for table 
 --

CREATE TABLE `product` (
                           `item_id` int(11) NOT NULL,
                           `item_brand` varchar(200) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Datos exportables DB `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_price`, `item_image`, `item_year`) VALUES
                                                                                                              (1, 'Nokia 5110', 140.00, 'img/Nokia_5110.png', 1998),
                                                                                                              (2, 'Siemens M50', 110.00, 'img/EDIT-TEL_0001_71e9da0e93c15fb1f419f4c8d3e6323f.jpg', 2002),
                                                                                                              (3, 'Nokia 1100', 105.00, 'img/EDIT-TEL_0002_NOKIA-tel-fono-m-vil-desbloqueado-1100-celular-cl-sico-GSM-900-1800-soporta-varios-idiomas.jpg', 2003),
                                                                                                               (4, 'Nokia 8260', 120.00, 'img/EDIT-TEL_0003_Capa 1.jpg', 2008),
                                                                                                              (5, 'Alcatel One Touch Easy', 95.00, 'img/EDIT-TEL_0004_450_1000.jpg', 2002),
                                                                                                              (6, 'Alcatel One Touch Easy', 95.00, 'img/EDIT-TEL_0005_Capa 2.jpg', 2002);
                                                                                                              

-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);


 -- 
 -- Table structure for table 
 --

CREATE TABLE `televisores` (
                           `item_id` int(11) NOT NULL,
                           `item_brand` varchar(200) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Datos exportables DB `televisores`
--

INSERT INTO `televisores` (`item_id`, `item_brand`, `item_price`, `item_image`, `item_year`) VALUES
                                                                                                              
                                                                                                              (7, 'Radiola 31TE220/1BB', 95.00, 'img/IMG-TV_0001_vintage-tv-television-antigua-caja-madera-aislada-blanco-trayectoria-recortes-objeto_1484-2108.jpg', 1980),
(8, 'Samsung 29', 105.00, 'img/IMG-TV_0002_televisión-antigua-de-la-caja-madera-aislada-en-blanco-vintage-tv-con-trayectoria-recortes-para-el-objeto-t.jpg', 1980),
(9, 'Grundig T 1000 Color', 110.00, 'img/IMG-TV_0003_vintage-old-tv-isolated-on-260nw-794090569.jpg', 1967),
(10, 'Metz Nordkap', 110.00, 'img/IMG-TV_0004_vintage-tv-on-white-background-260nw-56958796.jpg', 1981),
(11, 'Yunost 406BE', 105.00, 'img/IMG-TV_0005_isolated-photo-old-black-orange-260nw-1894451473.jpg', 1989),
(12, 'Westinghouse 19”', 150.00, 'img/IMG-TV_0006_18ab744c395f85c12724d79dcf7c6fbf.jpg', 1969);

-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Indexes for table `televisores`
--
ALTER TABLE `televisores`
  ADD PRIMARY KEY (`item_id`);

 -- 
 -- Table structure for table 
 --

CREATE TABLE `videoconsolas` (
                           `item_id` int(11) NOT NULL,
                           `item_brand` varchar(200) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Datos exportables DB `videoconsolas`
--

INSERT INTO `videoconsolas` (`item_id`, `item_brand`, `item_price`, `item_image`, `item_year`) VALUES
                                                                                                              
                                                                                                              (13, 'Game Boy Advance', 180.00, 'img/img-videocons_0000_D_NQ_NP_740717-MLA41429495208_042020-O.jpg', 2001),
(14, 'Nintendo Game Boy', 190.00, 'img/img-videocons_0001_D_NQ_NP_983037-MLA32736626961_112019-V.jpg', 1989),
(15, 'Nintendo NES', 220.00, 'img/img-videocons_0002_45496590024.jpg', 1983),
(16, 'Super Nintendo Entertainment System', 160.00, 'img/img-videocons_0003__noticias2010_-3801344.jpg', 1990),
(17, 'Intellivision', 300.00, 'img/img-videocons_0004_images-4.jpg', 1982),
(18, 'Atari 2600', 200.00, 'img/img-videocons_0005_1920px-Atari-2600-Wood-4Sw-Set.jpg', 1983);


-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Indexes for table `videoconsolas`
--
ALTER TABLE `videoconsolas`
  ADD PRIMARY KEY (`item_id`);

-- 
 -- Table structure for table 
 --

CREATE TABLE `camaras` (
                           `item_id` int(11) NOT NULL,
                           `item_brand` varchar(200) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Datos exportables DB `camaras`
--

INSERT INTO `camaras` (`item_id`, `item_brand`, `item_price`, `item_image`, `item_year`) VALUES
                                                                                                              
                                                                                                             (19, 'Cámara Holga Retro', 500.00, 'img/img-cam_0000_1000_F_106140449_qa8ieA2uPeNqTOni3WO4DbPCwRByfPYL.jpg', 1972),
(20, 'Cámara Rangefinder 35mm', 450.00, 'img/img-cam_0001_71TDERC1cOL._AC_SX355_.jpg', 1979),
(21, 'Cámara Canon Retro', 250.00, 'img/img-cam_0002_camaras-antiguas_estilo-vintage.jpg', 1979),
(22, 'Cámara Kodak Retina IA', 280.00, 'img/img-cam_0003_150233331-una-vieja-cámara-de-cine-sobre-fondo-blanco-vista-frontal-aislar-.jpg', 1937),
(23, 'Zeiss Ikon Contaflex Super BC', 280.00, 'img/img-cam_0004_500_F_106267947_gUpW4HAz6yN6aP6mz1Z0otWNs1c88Qse.jpg', 1965),
(24, 'Cámara Rollei 35', 170.00, 'img/img-cam_0005_istockphoto-627102320-612x612.jpg', 1966);



-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Indexes for table `camaras`
--
ALTER TABLE `camaras`
  ADD PRIMARY KEY (`item_id`);
