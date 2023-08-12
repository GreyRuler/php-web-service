<?php

session_start();

unset($_SESSION['username']);

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'post.php';
header("Location: http://$host$uri/$extra");
