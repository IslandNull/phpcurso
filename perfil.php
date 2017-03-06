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
        $a = $_GET["ano"];
        $data = date('Y');
        $idade = $data - $a;
        if (($_GET["ano"] > 0)) {
          $a = $_GET["ano"];
          echo "Você nasceu em $a e tem $idade anos. <br/>";
          if ($idade<16) {
            $v = "não pode votar";
          }elseif ($idade<18) {
              $d = "não pode dirigir";
            }else {
              $d = "pode dirigir";
            }
            if (($idade>=16 && $idade<18) || ($idade>65)) {
              $v = "é opcional";
            }else {
              $v = "é obrigatorio";
            }
          }else {
          echo "Você não digitou sua data de nascimento!";
        };
        echo "Com essa idade o voto $v e voce $d.";
    ?>
  </div>
  </body>
</html>
