-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 09:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `addr` varchar(35) NOT NULL,
  `msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `tel`, `addr`, `msg`) VALUES
(1, 'Henry Brown', 'henryb@gmail.com', '773566897', '123, Vajira Road, Kandy', 'Do you offer almond milk alternatives for your lattes?'),
(9, 'Emily Caldera', 'emily.caldera@gmail.com', '768945779', '456, Galle Road, Colombo 03', 'Can I book a coffee tasting event for a group of 10?'),
(10, 'Supun Dissanayake', 'supundis@gmail.com', '715898964', '23, Peradeniya Road, Kandy', 'I loved the pumpkin latte last year. Will it be returning this season?'),
(11, 'Natalie Unamboowe', 'natalia.umb@gmail.com', '716644235', '101, Galle Road, Mt. Lanvinia', 'Is the Blueberry Americano on your website, a dark or medium roast?'),
(12, 'Hirushi Edirisooriya', 'hirushie@gmail.com', '715236452', 'No.39, Lake Road, Kandy', 'Do you have a detailed flavor profile for the Turkish NightShade pack?'),
(13, 'Dilini Wijesinghe ', 'dwijesinghe@gmail.com', '773212334', '50, Deal Place, Colombo 03', 'Can you accommodate a reservation for 20 people next Friday evening?'),
(14, 'Sophia Martin', 'sophiamartin@email.com', '769899666', '103, Rosmead Place, Colombo 07', 'Is it possible to buy your signature roast beans in bulk?'),
(15, 'Anusha Herath', 'Anushah@gmail.com', '754236321', '75, Robert Lane, Kandy', 'Do you offer a loyalty card or a rewards program?'),
(16, 'Olivia Turner', 'olivia.turner@email.com', '778956231', 'No.63, Galle Road, Mt. Lavinia', 'Can I get a sample of the Caramel Macchiato blend before buying a larger pack?'),
(17, 'David Lee', 'david.lee@gmail.com', '715632147', 'No.46, Aniwatte Road, Kandy', 'I had the best cappuccino at your shop! What beans do you use?'),
(18, 'Liam Cooper', 'liam.cooper@email.com', '779645213', 'Hilton Residence, Colombo 02', 'How much caffeine is in the Scarlett Ground pack per serving?');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(10) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_type` varchar(25) NOT NULL,
  `prod_qty` varchar(15) NOT NULL,
  `price` varchar(30) NOT NULL,
  `delv_date` varchar(20) NOT NULL,
  `prod_img` varchar(50) NOT NULL,
  `sup_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_type`, `prod_qty`, `price`, `delv_date`, `prod_img`, `sup_id`) VALUES
(31, 'Hawaiian Kona Blend', 'Coffee Beans', '5kg', '$35/kg', '2022-08-10', 'Hawaiian Kona Blend.jpg', 66),
(32, 'Colombia Light Roast', 'Coffee Beans', '5kg', '$28/kg', '2022-08-12', 'Colombia Light roast.jpg', 66),
(33, 'Vermont Maple Syrup', 'Flavoring', '3L', '$16/L', '2022-08-09', 'vermont maple syrup.jpg', 66),
(34, 'Oregon Hazelnut Spread', 'Sauce', '3L', '$17/L', '2022-08-15', 'oregon hazelnut spread.jpg', 66),
(35, 'Alaskan Blueberry Essence', 'Flavoring', '3L', '$15/L', '2022-08-14', 'alaskan blueberry essence.jpg', 66),
(36, 'Arabica Coffee Beans', 'Coffee Bean', '30 kg', '$7/kg', '2022-09-01', 'Arabica Coffee Beans.jpg', 67),
(37, 'Vanilla Extract', 'Flavoring', '3L', '$10/L', '2022-09-02', 'Vanilla Extract.jpg', 67),
(38, 'Espresso Roast Beans', 'Coffee Bean', '20 kg', '$8/kg', '2022-09-01', 'Espresso Roast Beans.jpg', 67),
(39, 'Caramel Syrup', 'Syrup', '2L', '$12/L', '2022-09-03', 'Caramel Syrup.jpg', 67),
(40, 'Cocoa Powder', 'Additive', '50 kg', '$5/kg', '2022-09-02', 'Cocoa Powder.jpg', 67),
(41, 'Robusta Coffee Beans', 'Coffee Bean', '40 kg', '$6/kg', '2022-09-02', 'Robusta Coffee Beans.jpg', 68),
(42, 'Peppermint Extract', 'Flavoring', '2L', '$9/L', '2022-09-01', 'Peppermint-Extract.jpg', 68),
(43, 'Chocolate Syrup', 'Syrup', '4L', '$11/L', '2022-09-03', 'Chocolate Syrup.jpg', 68),
(44, 'Whipped Cream', 'Topping', '40 cans', '$4/can', '2022-09-02', 'Whipped Cream.jpg', 68),
(45, 'Pumpkin Spice Blend', 'Additive', '20 kg', '$6/kg', '2022-09-03', 'Pumpkin Spice Blend.jpg', 68),
(46, 'Single Origin Coffee Bean', 'Coffee Bean', '35 kg', '$10/kg', '2022-09-01', 'Single Origin Coffee Bean.jpg', 69),
(47, 'Hazelnut Extract', 'Flavoring', '3L', '$11/L', '2022-09-02', 'Hazelnut Extract.jpg', 69),
(48, 'Mocha Sauce', 'Syrup', '5L', '$13/L', '2022-09-02', 'Mocha Sauce.jpg', 69),
(49, 'Organic Milk', 'Base', '50 liters', '$3/L', '2022-09-03', 'Organic Milk.jpg', 69),
(50, 'Raw Sugar', 'Sweetener', '60 kg', '$4/kg', '2022-09-04', 'Raw Sugar.jpg', 69),
(51, 'Light Roast Beans', 'Coffee Bean', '40 kg', '$6.5/kg', '2022-09-01', 'Light Roast Beans.jpg', 70),
(52, 'Almond Milk', 'Base', '40L', '$3/L', '2022-09-02', 'Almond Milk.jpg', 70),
(53, 'Cookie Butter Syrup', 'Syrup', '5L', '$15/L', '2022-09-02', 'Cookie Butter Syrup.jpg', 70),
(54, 'Matcha Powder', 'Additive', '20 kg', '$15/kg', '2022-09-03', 'Matcha Powder.jpg', 70),
(55, 'Cinnamon Sticks', 'Additive', '50 packs', '$8/pack', '2022-09-03', 'cinnamon-sticks.jpg', 70),
(56, 'Dark Roast Beans', 'Coffee Bean', '40 kg', '$7/kg', '2022-09-15', 'Dark Roast Beans.jpg', 71),
(57, 'Coconut Milk', 'Base', '45L', '$3/L', '2022-09-15', 'Coconut Milk.jpg', 71),
(58, 'Toffee Nut Syrup', 'Syrup', '5L', '$12/L', '2022-09-24', 'Toffee Nut Syrup.jpg', 71),
(59, 'Agave Nectar', 'Sweetener', '5L', '$10/L', '2022-09-24', 'Agave Nectar.jpg', 71),
(60, 'Chai Spice Blend', 'Additive', '25 kg', '$7/kg', '2022-09-24', 'Chai Spice Blend.jpg', 71);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(10) NOT NULL,
  `sup_name` varchar(25) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `addr` varchar(35) NOT NULL,
  `sup_img` varchar(50) NOT NULL,
  `log_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_name`, `tel`, `email`, `addr`, `sup_img`, `log_id`) VALUES
(65, 'Administrator', '81 994 9525', 'admin@cafeshaun.com', 'Café Shaun, No. 24, Kandy', 'adminProPic.jpg', 1),
(66, 'Charith', '773844196', 'charith@gmail.com', 'No.44, Galle Road, Mt. Lavinia', 'charithProPic.jpg', 2),
(67, 'BeanBurst Distributors', '11 979 7978', 'contact@beanburst.com', '123,Galle Road, Mt. Lavinia', 'BeanBurst Distributors-logos.jpeg', 3),
(68, 'Mocha Mountain Imports', '11 574 7478', 'mmiinfo@mochaimports.com', '245, Union Place, Colombo 02', 'Mocha Mountain Imports-logos.jpeg', 4),
(69, 'CaféCrafters Wholesale', '11 773 7908', 'cafe.support@ccrafters.co', '89, Colombo Road, Maharagama', 'CaféCrafters Wholesale-logos.jpeg', 5),
(70, 'RoastRidge Suppliers', '81 653 7978', 'dist.info@roastridge.com', '77, Kandy Road, Kiribathgoda', 'RoastRidge Suppliers-logos.jpeg', 6),
(71, 'JavaJungle Trade', '11 253 7171', 'trade@javajungle.org', '31, Stafford Avenue, Colombo 06', 'JavaJungle Trade-logos.jpeg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `log_id` int(10) NOT NULL,
  `una` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`log_id`, `una`, `pass`, `type`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'charith', '123', ''),
(3, 'beanuser', '123', ''),
(4, 'mmiusr', '123', ''),
(5, 'cwuser', '123', ''),
(6, 'ridadm', '123', ''),
(7, 'jtrade', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `sup_id` (`sup_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sup_id`) REFERENCES `supplier` (`sup_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `user` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
