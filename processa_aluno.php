<?php

include 'db.php';
$nome_aluno = $_POST['nome_aluno'];
$data_de_nascimento = $_POST['data_de_nascimento'];

$query = "INSERT INTO ALUNOS(nome_aluno, data_de_nascimento) VALUES('$nome_aluno', '$data_de_nascimento')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');