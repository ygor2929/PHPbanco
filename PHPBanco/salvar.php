<?php
include_once("conexao.php");

//pegar dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

//comando para inserir no banco
$sql = "insert into alunos (nome, email) values ('$nome','$email')";

if (mysqli_query($conn,$sql)){
    header("Location: lista.php");
    echo "<h1>Aluno Cadastrado com sucesso!</h1>";
    echo "<button><a href='index.html'>voltar</a> </button>";
}else{
    echo "Erro ao cadastrar";
}
?>
