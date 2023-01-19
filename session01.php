<?php
session_start();

// session変数を定義して値を入れよう

$_SESSION["keyword"] = "sleepy";
$_SESSION["array"] = [1, 2, 3, 4];

var_dump($_SESSION["array"]);
exit();
