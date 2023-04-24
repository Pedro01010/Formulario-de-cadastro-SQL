<?php
$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '12345';
$dbName = 'formulario';


$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conexao->connect_errno) {
    echo "erro";
} else {
    echo "conexao efetuada com sucesso";
}
