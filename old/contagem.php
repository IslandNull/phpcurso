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
            $v1 = isset($_GET["v1"])?$_GET["v1"]:0;
            $v2 = isset($_GET["v2"])?$_GET["v2"]:0;
            $inc = isset($_GET["inc"])?$_GET["inc"]:0;

            if ($v2 < $v1) {
                while ($v2 < $v1) {
                    echo $v1 . " ";
                    $v1 -= $inc;
                }
            }else {
                while ($v1 <= $v2) {
                    echo $v1 . " ";
                    $v1 += $inc;
                }
            }

            ?>
        </div>
    </body>
</html>
