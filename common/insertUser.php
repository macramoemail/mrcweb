<?php
require_once "connection.php";

$sql = "INSERT INTO users_mac (name, email, password)
          VALUES (:name, :email, :password)";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':password' => $_POST['password']));

/*
if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

    // Data validation
    if ( strlen($_POST['name']) < 1 || strlen($_POST['password']) < 1) {
        $_SESSION['error'] = 'Missing data';
        header("Location: add.php");
        return;
    }

    if ( strpos($_POST['email'],'@') === false ) {
        $_SESSION['error'] = 'Invalid E-mail Address';
        header("Location: add.php");
        return;
    }

    $sql = "INSERT INTO users (name, email, password)
              VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']));
    $_SESSION['success'] = 'Record Added';
    header( 'Location: index.php' ) ;
    return;
}
*/


?>
