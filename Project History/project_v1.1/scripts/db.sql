-- ----------
-- Napmaps by Group 4
-- Table: log
-- ----------
DROP TABLE log;

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_product` text NOT NULL,
  `id_packing` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=357 DEFAULT CHARSET=latin2;



-- ----------
-- Napmaps by Group 4
-- Table: products
-- ----------
DROP TABLE products;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `lat` FLOAT NOT NULL,
  `lng` FLOAT NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin2;

-- ----------
-- Napmaps by Group 4
-- Table: users
-- ----------
DROP TABLE users;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `passwd` varchar(32) NOT NULL,
  `level` int(11) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Table with users data.';

INSERT INTO users VALUES("1","root","63a9f0ea7bb98050796b649e85481845","2","0");

