# ✂️ Encurtador de Links Simples

Um sistema de encurtamento de URLs desenvolvido em PHP puro, focado em performance e redirecionamento de rotas.

O objetivo deste projeto é receber uma URL longa, gerar um código único curto (ex: `AbC12`) e realizar o redirecionamento automático computando visualizações.

![Status do Projeto](https://img.shields.io/badge/Status-Finalizado-green)
![PHP](https://img.shields.io/badge/Backend-PHP-blue)
![MySQL](https://img.shields.io/badge/Database-MySQL-orange)

## 🚀 Funcionalidades

- **Gerador de Hash:** Algoritmo próprio para gerar códigos alfanuméricos aleatórios de 5 caracteres.
- **Verificação de Colisão:** Sistema que garante que o código gerado é único no banco de dados antes de salvar.
- **Redirecionamento:** Uso de headers HTTP (`Location`) para redirecionar o usuário instantaneamente.
- **Contador de Cliques:** Cada acesso ao link curto incrementa automaticamente o contador de visualizações no banco.

## 🛠️ Tecnologias Utilizadas

- **Linguagem:** PHP 8+ (PDO).
- **Banco de Dados:** MySQL.
- **Frontend:** HTML5 + Bootstrap 5.

## 📦 Como rodar o projeto

### 1. Clone o repositório
```bash
git clone [https://github.com/Joaozinvsg/encurtador-links.git](https://github.com/Joaozinvsg/encurtador-links.git)
2. Configure o Banco de Dados
Crie um banco de dados chamado encurtador_links e execute o comando SQL abaixo:

SQL

CREATE DATABASE encurtador_links;
USE encurtador_links;

CREATE TABLE links (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url_original TEXT NOT NULL,
    codigo VARCHAR(10) NOT NULL UNIQUE,
    visualizacoes INT DEFAULT 0,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
);
3. Configuração
Certifique-se de que as credenciais do banco nos arquivos .php estão corretas:

PHP

$host = 'localhost';
$user = 'root';
$pass = ''; // Senha do MySQL
4. Uso
Acesse http://localhost/encurtador/

Cole um link longo e clique em "Encurtar".

O sistema gerará um link no formato: http://localhost/encurtador/r.php?c=CODIGO

👨‍💻 Autor
Desenvolvido por João Vitor Simão Gonçalves (Joaozinvsg).
