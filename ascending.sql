CREATE DATABASE movies;

USE movies;

CREATE TABLE IF NOT EXISTS movies (
    KODE CHAR(10) NOT NULL,
    name CHAR(100) NOT NULL,
    stock INT NOT NULL,
    price FLOAT NOT NULL,
    PRIMARY KEY (KODE)
);


INSERT INTO movies (KODE, name, stock, price)
VALUES ('MOV1', 'Doraemon', 3, 5000.0);

INSERT INTO movies (KODE, name, stock, price)
VALUES ('MOV2', 'Titanic', 1, 12500.0);

INSERT INTO movies (KODE, name, stock, price)
VALUES ('MOV3', 'Avenger', 5, 100000.0);

INSERT INTO movies (KODE, name, stock, price)
VALUES ('MOV4', 'Batman', 7, 8500.0);

INSERT INTO movies (KODE, name, stock, price)
VALUES ('MOV5', 'Spiderman', 2, 15000.0);

INSERT INTO movies (KODE, name, stock, price)
VALUES ('MOV6', 'Superman', 4, 50000.0);


SELECT * FROM movies WHERE stock < 5 ORDER BY price ASC;
