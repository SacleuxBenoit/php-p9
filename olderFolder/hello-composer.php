<?php

require __DIR__.'/vendor/autoload.php';

session_start();

dump($_GET);
dump($_POST);
dump($_SERVER);
dump($_SESSION);
dump(__DIR__);
dump(__FILE__);

dump($_SESSION);
$_SESSION['foo'] = 123;
dump($_SESSION);