<?php
//SCRIPT DE CONEXAO COM O BANCO DE DADOS
$Hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "formulario-faesa";

$conn = mysqli_connect($Hostname,$usuario,$senha,$bancodedados);