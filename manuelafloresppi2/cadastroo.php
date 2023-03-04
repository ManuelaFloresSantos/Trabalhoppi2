<?php
require_once('banco.php');
require_once('tabelas.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="verificacao.css" media="screen" />
      <title> Verificação </title>
</head>

<body>

      <h1 class="titulo"> Verifique se seus dados estão corretos </h1>
      <p class="subtitulo"> <strong> caso não estejam corretos, por favor, <a href="cadastro.php"> REFAÇA SEU CADASTRO! </a> </strong> <br> <br> <br>

            <?php
            $dados = select_dados();
            foreach ($dados as $item) {
                  $nome = $item['nome_dados'];
                  $email = $item['email_dados'];
                  $favorito = $item['nome_cardapio'];
                  $aniver = $item['data_dados'];
                  $cidade = $item['nome_cidades'];
                  $aceito = $item['promocoes_dados'];
                  $observacao = $item['obs_dados'];

                  echo "<form method='post' action='deletar.php'>";
                  echo "Seu nome: $nome", "<br>", "<br>";
                  echo "Seu email: $email", "<br>", "<br>";
                  echo "Seu sabor favorito: $favorito", "<br>",  "<br>";
                  echo "Sua data de aniverário: $aniver", "<br>", "<br>";
                  echo "Sua cidade: $cidade", "<br>", "<br>";
                  echo "Você aceita receber as promoções por email: $aceito", "<br>", "<br>";
                  echo "A sua observação: $observacao", "<br>", "<br>";
                  echo "<input type='hidden' name='id_dados' value='{$item['id_dados']}'>'";
                  echo '<input type="submit" name="deletar" value="deletar">';
                  echo '</form> <br> <br>';
                  echo "----------------------------------------------------", "<br>", "<br>";
            }



            ?>

            <button type="submit" class="botao"> <a href="aceito.html"> Prosseguir </a></button>




</body>

</html>