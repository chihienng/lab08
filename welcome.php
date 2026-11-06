<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
</head>
<body>

    <?php include 'header.inc'; ?>

    <h2>Welcome!</h2>

    <p>
        Hello, <?php echo htmlspecialchars($_SESSION['user']); ?>!
    </p>

    <p>You have successfully logged in.</p>

    <?php include 'footer.inc'; ?>

</body>
</html>