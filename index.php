<?php
session_start();

$_SESSION['username'] = $_POST['username'];

if (!isset($_SESSION['username'])) {
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'post.php';
    header("Location: http://$host$uri/$extra");
}

echo 'Hello, ' . $_SESSION['username'];
echo "<a href='exit.php'>Выйти</a>";
