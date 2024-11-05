<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            // var_dump($_GET); // $_GET $_POST $_COOKIES
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";
            echo "É um prazer te conhecer, <b>$nome $sobrenome</b>! Este é o meu site.";
        ?>
        <p><a href="javascript:history.go(-">Voltar para a página anterior</a></p>
    </main>
</body>
</html>