<?php

include 'db.php';

$first_name_actor = $_POST['first_name'];
$last_name_actor = $_POST['last_name'];

$query = "INSERT INTO actor(first_name, last_name) VALUES ('$first_name_actor', '$last_name_actor')";

mysqli_query($conexao, $query);

header('Location: index.php?page=actors');

?>