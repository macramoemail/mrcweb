<?php

$pdo = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;port=3306;dbname=heroku_24a114f3d5d6c88','bf15af4a5ab3b2', '59c5c27b');

//$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=misc','postgres', 'new-password');

// See the "errors"
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
