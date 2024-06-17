<?php
$connect = mysqli_connect("localhost", "root", "", "book_store");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Call the stored procedure
    $sql = "CALL signUp('$email', '$password')";
    $result = $connect->query($sql);

    if ($result) {
        echo "user signned up successfully";
        header("Location: http://localhost:8080/book_Store/index.php");

    }
}

// Close connection
$connect->close();
?>