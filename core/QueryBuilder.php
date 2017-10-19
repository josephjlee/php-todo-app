<?php
class QueryBuilder {
  public $pdo;
  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function getAll($table){
    $statement = $this->pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll();
  }

  public function createTodo($todo){
    $statement = $this->pdo->prepare('insert into todos(text) values(:value)');
    $statement->execute([':value' => $todo]);
  }

}