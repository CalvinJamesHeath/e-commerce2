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
                           `item_description` varchar(1000) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_year` int(4) NOT NULL,
  `item_bateria` varchar(255) NOT NULL,
  `item_juegos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Datos exportables DB `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_description`, `item_price`, `item_image`, `item_year`, `item_bateria`,`item_juegos`) VALUES
                                                                                                              (1, 'Nokia 5110', 'El Nokia 5110 fue un teléfono que revolucionó la industria de muchas maneras en 1998. Aunque ahora parece enorme, el Nokia 5110 tiene un tamaño significativamente reducido en comparación con la mayoría de los modelos de teléfonos de la época. La batería tiene una capacidad de 900 mAh, que se puede sustituir por otra de mayor tamaño, hasta 1200 mAh. Incluso tiene un accesorio para insertar dos tarjetas SIM al mismo tiempo, lo que lo convierte en un teléfono móvil empresarial. Aunque su pantalla es una LCD monocromática y no una pantalla Siemens S10 a color, el 5110 ha traído consigo dos innovaciones legendarias.', 140.00, 'img/Nokia_5110.png', 1998, 'Batería tipo: ion litio

Capacidad batería: 900 Amperios hora', 'Logic, Memory y Snake'); 
                                                                                                              


-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);




