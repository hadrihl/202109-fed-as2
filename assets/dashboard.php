<?php
include("auth_session.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client</title>
    <link rel="stylesheet" href="style.css">
<head>

<body>
    <div class="form">
        <p>Hi, <?php echo $_SESSION['username']; ?> !</p>
        <p>You are now in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>