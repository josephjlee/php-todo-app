<?php
require 'config.php';
require 'core/Db.php';
require 'core/QueryBuilder.php';
require 'core/Router.php';

$pdo = Db::make($config['database']);
$query = new QueryBuilder($pdo);

