<?php

## database
include 'db.php';
## cabecalho
include 'header.php';

## Modularizando a pagina
if(isset($_GET['page'])){
    $pagina = $_GET['page'];
}
else{
    $pagina = 'home';
}

switch ($pagina) {
    case 'actors':
        include 'views/actors.php';
        break;
    case 'payment':
        include 'views/payment.php';
        break;
    case 'inserir actor':
        include 'views/insert_actors.php';
        break;
    case 'atores de filmes':
        include 'views/film_actors.php';
        break;
    default:
        include 'views/home.php';
        break;
}

## rodape
include 'footer.php';