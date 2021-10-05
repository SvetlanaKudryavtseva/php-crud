<?php

$pdo = new PDO("mysql:host=127.0.0.1:3308;dbname=test", "root", "");
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement=$pdo->prepare($sql);
$statement->bindParam(":title", $_POST['title']);
$statement->bindParam(":content", $_POST['content']);

$statement->execute(); // true/false


header("Location: ./index.php", true, 303);exit();
?>