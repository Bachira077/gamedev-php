<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 2){
    echo "Error Login";
    exit;
}

if(strlen($password) < 2){
    echo "Password error";
    exit;
}

$salt = '5648_)(*$#DFS^^';
$password = md5($salt.$password);
require "db.php";

$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

if($query->rowCount() == 0){
    echo "Такого пользователя нет!";
}
else{
    setcookie('login', $login, time() + 3600 *24 * 30, "/");
    header('Location: /user.php');
}