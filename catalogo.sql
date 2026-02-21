CREATE DATABASE catalogo;

USE catalogo;

CREATE TABLE peliculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descripcion TEXT NOT NULL,
    genero VARCHAR(50) NOT NULL,
    anio INT NOT NULL,
    imagen VARCHAR(255)
);
