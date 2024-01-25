<?php
if (isset($_GET['login'])) {
    if ($_GET['login'] == 'success') {
        echo "<script language='javascript'>";
        echo "alert('Successfully Logged in')";
        echo "</script>";
    } elseif ($_GET['login'] == 'failed') {
        echo "<script language='javascript'>";
        echo "alert('WRONG INFORMATION')";
        echo "</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <a href="login.html">Login</a>
    <a href="signup.html">Signup</a>
</body>
</html>