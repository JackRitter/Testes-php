<?php
// Habilita exibição de erros para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verifica se veio via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $idade = $_POST['idade'] ?? '';
    $data = $_POST['data'] ?? '';
    $sexo = $_POST['sexo'] ?? 'Não informado';
} else {
    echo "Nenhum dado recebido.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Dados Recebidos:</h2>
    <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
    <p><strong>Idade:</strong> <?= htmlspecialchars($idade) ?></p>
    <p><strong>Data:</strong> <?= htmlspecialchars($data) ?></p>
    <p><strong>Sexo:</strong> <?= htmlspecialchars($sexo) ?></p>
</body>
</html>
