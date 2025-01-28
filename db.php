<?php

$servidor = "localhost";
$usuario = "root";
$senha="admin";
$database = "sakila";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = 'SELECT * FROM actor';
$result_actors = mysqli_query($conexao, $query);

$query = 'SELECT * FROM payment';
$result_payment = mysqli_query($conexao, $query);

$query = 'SELECT * FROM film_actor';
$result_film_actors = mysqli_query($conexao, $query);
