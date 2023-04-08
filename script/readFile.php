<?php
$caminho = "../database/alunos.csv";

$novoCaminho = realpath($caminho);

$arquivo = fopen($novoCaminho,"r");
$colunas = fgetcsv($arquivo,null,",");

while($linhas = fgetcsv($arquivo,null,",")){
    $alunos[] = array_combine($colunas,$linhas);
}
fclose($arquivo);
?>