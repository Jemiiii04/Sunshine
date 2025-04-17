<?php
session_start();
include 'conn.php'; // <-- Your DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password !== $confirm) {
        header("Location: index.php?error=nomatch");
        exit();
    }

    // Make sure the user is logged in or has email in session
    if (!isset($_SESSION['email'])) {
        header("Location: index.php?error=sessionmissing");
        exit();
    }

    $email = $_SESSION['email'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Update password in the database
    $sql = "UPDATE password SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashedPassword, $email);

    if ($stmt->execute()) {
        header("Location: index.php?password=changed");
        exit();
    } else {
        header("Location: index.php?error=dberror");
        exit();
    }
}
?>
