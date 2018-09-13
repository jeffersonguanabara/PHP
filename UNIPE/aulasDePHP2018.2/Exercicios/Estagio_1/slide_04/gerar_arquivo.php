<?php

$frase1 = $_POST['frase1'];
$frase2 = $_POST['frase2'];
$frase3 = $_POST['frase3'];

gravar_arquivo($frase1);
gravar_arquivo($frase2);
gravar_arquivo($frase3);

imprimir_arquivo();

function gravar_arquivo($frase) {
  $arquivo = fopen('_arquivos/arquivo_teste.txt', 'ab+');
  fwrite($arquivo, $frase."\n");
  fclose($arquivo);
  return "";
}

function imprimir_arquivo() {
  $arquivo = fopen('_arquivos/arquivo_teste.txt', 'rb');
  while (!feof($arquivo)) {
    $linha = fgets($arquivo);
    echo $linha."<br />";
  }
  fclose($arquivo);
  return "";
 }

?>
