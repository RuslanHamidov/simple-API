<?php

$connect = mysqli_connect('localhost', 'username', '', 'db_name');

if (!$connect) {
    die('Error connect to database!');
}