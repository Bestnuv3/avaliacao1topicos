<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nomecampeao']);
    $sexo = htmlspecialchars($_POST['sexo']);
    $grupo = isset($_POST['grupo']) ? htmlspecialchars($_POST['grupo']) : 'Não selecionado';
    $classes = isset($_POST['classe']) ? $_POST['classe'] : [];
    $historia = htmlspecialchars($_POST['historia']);

    // Exibe os dados
    echo "<!DOCTYPE HTML>
    <html lang='pt-br'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Dados do Campeão</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class='container mt-5'>
            <h1>Dados do Campeão</h1>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Sexo:</strong> $sexo</p>
            <p><strong>Região:</strong> $grupo</p>
            <p><strong>Classes:</strong> " . (count($classes) > 0 ? implode(", ", array_map('htmlspecialchars', $classes)) : 'Nenhuma classe selecionada') . "</p>
            <p><strong>História:</strong> $historia</p>
            <a href='index.html' class='btn btn-primary'>Voltar</a>
        </div>
    </body>
    </html>";
} else {
    header('Location: index.html');
    exit();
}
?>