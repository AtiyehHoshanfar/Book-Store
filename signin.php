<?php
$connect = mysqli_connect("localhost", "root", "", "book_store");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Call the stored procedure
    $sql = "CALL loginUser('$email', '$password')";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // User is authenticated
        echo "User logged in successfully";
        header("Location: http://localhost:8080/book_Store/index.php");

    } else {
        // User is not authenticated
        echo "Invalid email or password";
    }
}

// Close connection
$connect->close();
?>