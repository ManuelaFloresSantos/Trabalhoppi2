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
    <link rel="stylesheet" type="text/css" href="cadastro.css" media="screen" />

    <title> Sol e Neve - Cadastro </title>

</head>

<body>

    <header class="cabecalho">
        <img class="cabecalhomenufoto" src="logo.png" alt="logo">
        <nav class="cabecalhomenu">
            <a class="cabecalhomenuitem" href="index.html"> Home </a>
            <a class="cabecalhomenuitem" href="cardapio.html"> Cardápio </a>
            <a class="cabecalhomenuitem" href="promocaonao.html"> Promoções </a>
        </nav>

    </header>

    <h1 class="tituloprincipal"> Faça seu cadastro: </h1>



    <!-- FORMULARIO  -->



    <form class="formulario" name="form" method="post" action="executa.php">

        <section class="bodyform">

            <fieldset class="formulario">
                <div>
                    <label> <strong> Seu nome: </strong></label>
                    <input type="text" name="nome" id="name" required>

                </div> <br>

                <div>
                    <label> <strong> Informe seu email: </strong> </label>
                    <input type="email" name="email" id="email" required>
                </div> <br>

                <div>
                    <label> <strong> Seu refresco favorito do <a href="cardapio.html"> nosso Cardapio</a>?</strong> </label> <br> <br>
                    <?php
                    $cardapio = select_cardapio();
                    foreach ($cardapio as $item) {
                        echo "<label> <input type='radio' name='favorito' value='{$item['id_cardapio']}'/> {$item['nome_cardapio']} <br /> </label>";
                    }
                    ?>

                </div> <br>

                <div>
                    <strong> Data de aniversário (para receber brindes!): </strong> <input type="date" name="aniver" required>
                </div> <br>


                <div>

                    <label> <strong> Sua cidade: </strong> </label>
                    <select name="cidade">
                        <!-- trecho php para percorrer a tabela tb_cidades do banco e mostrar no arquivo html -->
                        <?php
                        $cidades = select_cidades();
                        foreach ($cidades as $cidade) {
                            echo "<option value='{$cidade['id_cidades']}'>{$cidade['nome_cidades']}</option>";
                        }
                        ?>
                    </select>

                </div> <br>

                <div>
                    <label> <strong> Marque essa caixinha se deseja receber nossas promoções por email: </strong> </label><br>
                    <input type="checkbox" id="aceito" name="aceito" value="aceito">
                    <label for="aceito"> Aceito! </label>
                </div> <br>

                <div class="campo">

                    <label> <strong> Se necessário, escreva aqui uma observação: </strong> </label> <br>
                    <textarea row="5" style="width: 10em" id="obs" name="obs"> </textarea>
                </div>



                <button type="submit" class="botao">Enviar</button>


            </fieldset>
        </section>


    </form>







</body>

</html>