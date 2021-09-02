<?php

include 'info.php';
session_start();

echo "Author: $author";

if ($_SESSION['username']) {
    echo 'Hi, ' . $_SESSION['username'] . '<br>';
    echo '<a href="exit.php">exit</a>';
} else {
    echo $form;
}


