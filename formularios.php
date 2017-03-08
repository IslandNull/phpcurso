<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div>
            <form action="variaveisdinamicas.php" method="get">
                <?php
                    $f = 1;

                    while ($f <= 5) {
                        echo "Valor $f: <input type='number' name='v$f' max='100' min='0' value='0'/><br/>";
                        $f++;
                    }
                ?>
                <input type="submit" value="Enviar" class="botao"/>
            </form>
        </div>
    </body>
</html>
