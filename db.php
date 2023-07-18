<?php

$db = 'daotest';
$host = 'localhost';
$user = 'root';
$password = 'root';

$conn = new PDO("mysql:dbname=$db;host=$host", $user, $password);