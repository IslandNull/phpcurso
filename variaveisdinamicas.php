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
                $i = 1;
                while ($i <= 5) {
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url])?$_GET[$url]:0;
                    $i++;
                }
                echo "$num1 $num2 $num3 $num4 $num5";   
            ?>

        </div>
    </body>
</html>
