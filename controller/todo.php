<?php
$todos = $query->getAll('todos');
var_dump($todos);
require 'view/todo.view.php';