<?php

require_once "banco.php";

// BUSCA OS DADOS ENVIADO POR POST DO FORMULARIO
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_STRING);

$query = "insert into dadosmensagem(Nome, Email, Telefone, Mensagem) values ('$nome','$email','$telefone','$mensagem')";

//ABRE CONEXAO E EXECUTA A QUERY
mysqli_query($conn,$query);

//RETORNA PARA PAGINA INDEX COM PARAMETRO PARA EXIBIÇÃO DE MENSAGEM DE SUCESSO
header("Location:index.php?mensagem=202");

?>