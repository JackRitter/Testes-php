<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Coleta os dados com segurança (usa operador de coalescência nula para evitar erro)
    $nome = $_POST['nome'] ?? '';
    $idade = $_POST['idade'] ?? '';
    $data = $_POST['data'] ?? '';
    $sexo = $_POST['sexo'] ?? 'Não informado'; // Pode estar vazio se nenhuma opção marcada
} else {
    // Redireciona de volta se acessar diretamente sem POST
    header("Location: cadastro.html");
    exit();
}
?>
