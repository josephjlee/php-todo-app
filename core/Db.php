<?php
class Db {
  public static function make ($database) {
    return new Pdo($database['dsn'], $database['username'], $database['password'], $database['options']);
  }
}