<?php
include_once("conexao.php");

// Dica de segurança: Limpar o ID para evitar injeção de SQL básica
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * FROM alunos WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="stylelist.css">
</head>
<body>
    <div class="container">
        <h1>Editar Aluno</h1>
        
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" 
                   value="<?php echo $dados['nome']; ?>">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" 
                   value="<?php echo $dados['email']; ?>">

            <button type="submit" style="background: #003a79; color: white;">Salvar Alterações</button>
        </form>

        <a href="lista.php" class="btn-voltar">Cancelar</a>
    </div>
</body>
</html>