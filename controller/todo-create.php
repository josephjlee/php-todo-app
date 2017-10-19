<?php 
$todo = $_REQUEST['todo'];
$query->createTodo($todo);
header('Location: /');
