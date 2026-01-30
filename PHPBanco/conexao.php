<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "escola";

//Criar conexão
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

//testar se deu certo
if(!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
?>