<?php

$row = 1;

$nome_arquivo= 'dados.csv';

$objeto= fopen($nome_arquivo, 'r');


if (($handle = fopen($nome_arquivo, "r")) !== FALSE) {

 while (($dados = fgetcsv($handle, 1000, ";")) !== FALSE) {

  echo '<pre>';
  print_r($dados);
  echo '</pre>';
 
}
fclose($objeto);

}
?>

