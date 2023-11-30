-- MariaDB
CREATE DATABASE sales CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use sales;

CREATE TABLE product (
  id BIGINT AUTO_INCREMENT
, description VARCHAR (100)
, price FLOAT
, category VARCHAR (100)
, brand VARCHAR (100)
, CONSTRAINT pkproduct PRIMARY KEY (id)
);

GRANT ALL PRIVILEGES ON sales.* TO studenttics@'%' IDENTIFIED BY '1234567890';
GRANT ALL PRIVILEGES ON sales.* TO studenttics@'localhost' IDENTIFIED BY '1234567890';

-- Postgres
CREATE DATABASE sales;
\c sales;
CREATE TABLE product (
  id BIGSERIAL
, description VARCHAR (100)
, price FLOAT
, category VARCHAR (100)
, brand VARCHAR (100)
, CONSTRAINT pkproduct PRIMARY KEY (id)
);


-- Inserción de productos de clarinetes
INSERT INTO product (description, price, category, brand) 
VALUES ('Clarinet Yamaha YCL-255', 1200, 'Musical Instruments', 'Yamaha');

INSERT INTO product (description, price, category, brand) 
VALUES ('Clarinet Buffet Crampon E12', 2000, 'Musical Instruments', 'Buffet Crampon');

-- Inserción de productos de trombones
INSERT INTO product (description, price, category, brand) 
VALUES ('Trombone Bach TB200B', 1500, 'Musical Instruments', 'Bach');

INSERT INTO product (description, price, category, brand) 
VALUES ('Trombone Yamaha YSL-354', 1800, 'Musical Instruments', 'Yamaha');

-- Inserción de productos de trompetas
INSERT INTO product (description, price, category, brand) 
VALUES ('Trumpet Conn 52BSP', 1700, 'Musical Instruments', 'Conn');

INSERT INTO product (description, price, category, brand) 
VALUES ('Trumpet Yamaha YTR-2330', 1200, 'Musical Instruments', 'Yamaha');

-- Creación de usuario y asignación de privilegios
CREATE USER studenttics WITH PASSWORD '1234567890';
GRANT ALL PRIVILEGES ON DATABASE sales TO studenttics;
GRANT ALL PRIVILEGES ON TABLE product TO studenttics;