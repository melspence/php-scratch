<?php

declare(strict_types=1);

$name = "";
$message = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        // Here you would typically send the email or save the message to a database
        // For demonstration purposes, we'll just display a success message
        echo "<p>Thank you, $name! Your message has been sent.</p>";
        exit;
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Contact Form</title>
</head>
<body>
<h1>Contact Form</h1>
<div>
    <form method="post" action="form.php">
        <label type="text" for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>" >
        <?php if(isset($errors["name"])): ?>
            <p style="color: red;"><?php echo $errors["name"]; ?></p>
        <?php endif; ?>
        <label type="text" for="message">Message</label>
        <textarea name="message" id="message" ><?php echo htmlspecialchars($message); ?></textarea>
        <?php if(isset($errors["message"])): ?>
            <p style="color: red;"><?php echo $errors["message"]; ?></p>
        <?php endif; ?>
        <button type="submit">Send</button>
    </form>
</div>
</body>
</html>
