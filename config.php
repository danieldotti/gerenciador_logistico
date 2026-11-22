<?php
// Se seu MySQL usa senha, altere o quarto argumento.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gerenciador_logistico;charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Erro ao conectar ao banco. Inicie o MySQL no XAMPP, importe database/banco.sql no phpMyAdmin e confira config.php.');
}
function h($valor) { return htmlspecialchars((string)$valor, ENT_QUOTES, 'UTF-8'); }
function buscarTodos($pdo, $tabela) { return $pdo->query("SELECT * FROM $tabela ORDER BY id DESC")->fetchAll(); }
function redirecionar($pagina, $msg = 'Registro salvo com sucesso!') { header('Location: index.php?pagina='.$pagina.'&msg='.urlencode($msg)); exit; }
