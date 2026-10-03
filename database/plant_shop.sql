CREATE DATABASE IF NOT EXISTS plant_shop;
USE plant_shop;
CREATE TABLE IF NOT EXISTS users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 email VARCHAR(150) UNIQUE NOT NULL,
 password VARCHAR(255) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS products (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 category VARCHAR(50) NOT NULL,
 price DECIMAL(10,2) NOT NULL,
 description TEXT,
 stock INT DEFAULT 10
);
CREATE TABLE IF NOT EXISTS orders (
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT NULL,
 total DECIMAL(10,2) NOT NULL,
 status VARCHAR(30) DEFAULT 'Pending',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO products(name,category,price,description,stock) VALUES
('Snake Plant','Indoor',399,'Low-light friendly plant.',20),
('Peace Lily','Indoor',499,'Elegant flowering indoor plant.',20),
('Aloe Vera','Succulents',299,'Hardy medicinal plant.',25),
('Rose Plant','Flowering',349,'Bright flowering plant.',15);