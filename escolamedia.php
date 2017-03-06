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
    $nota1 = number_format($_GET["n1"],1);
    $nota2 = number_format($_GET["n2"],1);
    $media = ($nota1+$nota2)/2;

    echo "A média entre $nota1 e $nota2 é $media<br/>";

    if ($media>=0 && $media<5) {
      $res = "reprovado.";
    }elseif ($media>=5 && $media<7) {
      $res = "de recuperação.";
    }else {
      $res = "aprovado.";
    }
    echo "A média do aluno é $media, e ele esta $res";
  ?>
  <a href="escolamedia.html"><br/>Voltar</a>
  </div>
  </body>
</html>
