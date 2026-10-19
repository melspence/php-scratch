<?php

declare(strict_types=1);

if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] !== "" && $_POST['password'] !== "") {
    $email = $_POST['email'];
    $password = $_POST['password'];
} else {
    echo "Invalid email or password";
}

