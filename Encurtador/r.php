<?php
$host = 'localhost'; 
$db  = 'encurtador_links';
$user = 'root';
$pass = 'Z2liKsAkDw8g3lys';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { die("Erro: " . $e->getMessage()); }

if (!$_GET['c']) {
    header("Location: index.php");
    exit;
}

$codigo = $_GET['c'];
$stmt = $pdo->prepare("SELECT url_original FROM links WHERE codigo = ?");
$stmt->execute([$codigo]);
$link = $stmt->fetch(PDO::FETCH_ASSOC);

if ($link) {
    $update = $pdo->prepare("UPDATE links SET visualizacoes = visualizacoes + 1 WHERE codigo = ?");
    $update->execute([$codigo]);
    header("Location: " . $link['url_original']);
    exit;
} else {
    echo "<h1>Link não encontrado!</h1>";
    echo "<a href='index.php'>Criar um novo link curto</a>";
    exit;
}
?>