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

-- insert data for both
INSERT INTO product (description, price, category, brand) 
VALUES ('Mouse negro',400,'Electronics','Actek');

INSERT INTO product (description, price, category, brand) 
VALUES ('Laptop Asus',24000,'Electronics','Asus');

INSERT INTO product (description, price, category, brand) 
VALUES ('Auricular Astro 50',4000,'Electronics','Astro');

INSERT INTO product (description, price, category, brand) 
VALUES ('Celular Samsung',24000,'Electronics','Samsung');

INSERT INTO product (description, price, category, brand) 
VALUES ('Mesa rectangular',2800,'Furniture','Life time');

CREATE USER studenttics WITH PASSWORD '1234567890';
GRANT ALL PRIVILEGES ON DATABASE sales to studenttics;
GRANT ALL PRIVILEGES ON TABLE product TO studenttics;
