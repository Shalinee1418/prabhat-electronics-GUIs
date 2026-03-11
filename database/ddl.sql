CREATE TABLE user
(
email VARCHAR(255) PRIMARY KEY,
password VARCHAR(255)
);

CREATE TABLE supplier
(
supplier_id INT AUTO_INCREMENT PRIMARY KEY,
phone CHAR(10) UNIQUE NOT NULL,
email VARCHAR(255),
address CHAR(255)
);

CREATE TABLE purchase
(
    purchase_id INT AUTO_INCREMENT PRIMARY KEY,
    supplier_id INT AUTO_INCREMENT UNIQUE NOT NULL,
    purchase_number INT AUTO_INCREMENT UNIQUE NOT NULL,
    purchase_date DATE NOT NULL,
    tax_amount DECIMAL NOT NULL,
    total_amount DECIMAL  AUTO_INCREMENT NOT NULL,
    date DATE NOT NULL,
    payment_status ENUM,
    unit_price DECIMAL NOT NULL

)
CREATE TABLE purchase_items
(
    purchase_item_id INT AUTO_INCREMENT PRIMARY KEY,
    purchase_id INT AUTO_INCREMENT UNIQUE NOT NULL,
    stock_item_id INT AUTO_INCREMENT UNIQUE NOT NULL,
    quantity INT AUTO_INCREMENT NOT NULL,


)
CREATE TABLE stock_items
(

)