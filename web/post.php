<?php
// сохранять имя пользователя в сессию
session_start();
$_SESSION['username'] = $_POST['username'];
header("Location: index.php",TRUE,301);