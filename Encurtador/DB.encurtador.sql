CREATE DATABASE encurtador_links;
USE encurtador_links;

CREATE TABLE links (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url_original TEXT NOT NULL,
    codigo VARCHAR(10) NOT NULL UNIQUE,
    visualizacoes INT DEFAULT 0,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
);