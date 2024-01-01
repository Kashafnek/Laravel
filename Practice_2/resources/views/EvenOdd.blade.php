<?php

$path = $_SERVER['REQUEST_URI'];
$parts = explode('/', trim($path, '/'));

if (isset($parts[1])) {

    $id = $parts[1];
    if ($id % 2 == 0) {
        echo $id . " is Even!";
    } else {
        echo $id . " is Odd!";
    }
}
else {
    echo "ID is not provided in the URL.";
}
?>
