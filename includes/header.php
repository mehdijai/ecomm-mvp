<?php
function strip_bad_chars($input)
{
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm</title>
    <link href="./css/main.css" rel="stylesheet">
</head>
<body>

<nav class="top-nav">
    <ul class="nav-list">
        <li class="nav-item logo"><a href="/#">Home</a></li>
        <li class="nav-item"><a href="/#">Products</a></li>
        <li class="nav-item"><a href="/#">Categories</a></li>
        <li class="nav-item"><a href="/#">Contact</a></li>
    </ul>
</nav>
