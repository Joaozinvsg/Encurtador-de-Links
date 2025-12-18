<?php
$host = 'localhost'; 
$db  = 'encurtador_links';
$user = 'root';
$pass = 'Z2liKsAkDw8g3lys';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { die("Erro: " . $e->getMessage()); }

function gerarCodigo($tamanho = 5) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $codigo = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $codigo;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url_original = $_POST['url_original'];
    
    do {
        $codigo_unico = gerarCodigo(5);
        $stmt = $pdo->prepare("SELECT id FROM links WHERE codigo = ?");
        $stmt->execute([$codigo_unico]);
        $existe = $stmt->fetch();
    } while ($existe);

    $sql = "INSERT INTO links (url_original, codigo) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$url_original, $codigo_unico]);

    header("Location: index.php?codigo=" . $codigo_unico);
    exit;
}
?>