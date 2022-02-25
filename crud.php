<?php
require_once "config.php";

$sql = "SELECT * FROM products WHERE featured=1";
$featured = $conn->query($sql);



unset($pdo);