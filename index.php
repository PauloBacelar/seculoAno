<?php
    // Função
    function seculoAno($ano) {
        if($ano > 0) {
            return ceil(($ano / 100));
        } else {
            return ceil(($ano * -1) / 100);
        }
    }

    // Obtendo os valores digitados pelo usuário
    if(isset($_GET['ano'])) {
        $ano = $_GET['ano'];
        $seculo = seculoAno($ano);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função secularAno()</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="01-seculo-ano.php" method="GET">
        <input type="number" name="ano">
        <button type="submit">Encontrar século</button>

        <p class="seculo" name="seculo">
            <?php if(isset($_GET['ano']) && $ano > 0) {
                echo "O ano $ano é do século $seculo";
            } else if (isset($_GET['ano']) && $ano < 0) {
                echo "O ano " . intval($ano) * -1 . " a.C. é do século $seculo a.C";
            } else {
                echo "Digite um ano para encontrar o século";
            } ?>
        </p>
    </form>
</body>
</html>