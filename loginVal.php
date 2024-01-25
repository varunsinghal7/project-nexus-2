<?php
try {
    $servername = "localhost:3306";
    $dbname = "varun";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=varun",
        $username, $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["loginUsername"]);
    $password = test_input($_POST["loginPassword"]);

    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();
    $users = $stmt->fetchAll();

    $found = false;

    foreach ($users as $user) {
        if (($user['username'] == $username) && ($user['password'] == $password)) {
            $found = true;
            break; // Exit the loop once a matching user is found
        }
    }

    if ($found) {
        header("location: index.php?login=success");
    } else {
        header("location: index.php?login=failed");
    }
}
?>
