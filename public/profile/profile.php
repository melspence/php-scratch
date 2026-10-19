<?php

declare(strict_types=1);

$name = "Alice";
$age = 28;
$isMember = true;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
<h1>Welcome, <?= htmlspecialchars($name) ?> </h1>
<p>Age: <?= $age ?></p>

<?php if ($isMember): ?>
    <p>Thanks for being a member</p>
<?php else: ?>
    <p>Please consider joining our membership program</p>
<?php endif; ?>


</body>
</html>
