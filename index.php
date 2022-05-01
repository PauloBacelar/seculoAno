<?php
// Função
function seculoAno($ano) {
  if ($ano > 0) {
    return ceil(($ano / 100));
  }
  else {
    return ceil(($ano * -1) / 100);
  }
}

// Obtendo os valores digitados pelo usuário
if (isset($_GET['ano'])) {
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <title>Ano/século</title>
    <link rel="stylesheet" href="./styles.css">
  </head>

  <body>
    <form action="index.php" method="GET">
      <input type="number" placeholder="Insira um ano aqui" name="ano" required><br>
      <button type="submit">Encontrar século</button>

      <p class="seculo" name="seculo">
        <?php if(isset($_GET['ano']) && $ano > 0) {
            echo "O ano $ano é do século $seculo";
          } else if (isset($_GET['ano']) && $ano < 0) {
            echo "O ano " . intval($ano) * -1 . " a.C. é do século $seculo a.C";
          } else if (isset($_GET['ano']) && $ano == 0) {
            echo "Não existe ano 0 :/";
          } else {
            echo "Insira um ano";
          } ?>
      </p>
    </form>
  </body>
</html>