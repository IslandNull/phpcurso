<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
                $d = isset($_GET["dia"])?$_GET["dia"]:1;
                switch ($d) {
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        echo "Dia de semana! Voce deve ir a aula!";
                        break;

                    default:
                        echo "Fim de semana! Voce não precisa ir a aula!";
                }
            ?>
            <br/><hr/>
            <a href="aula.html" class="botao">Voltar</a>
        </div>
    </body>
</html>
