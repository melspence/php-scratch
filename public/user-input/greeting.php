<?php

declare(strict_types=1);

if (isset($_POST['name']) &&  $_POST["name"] !== "") {
    $name = $_POST['name'];
    echo "Hello, " . htmlspecialchars($name) . "!";
} else {
    echo "Please enter your name.";
}