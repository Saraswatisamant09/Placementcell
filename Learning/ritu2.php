<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "saras";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   echo" ";

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $yourfeedback = mysqli_real_escape_string($conn, $_POST['yourfeedback']);

    // Use backticks for 'any' column, and use prepared statements
    $insert_query = "INSERT INTO feedback (`name`, `email`, `yourfeedback`) 
                    VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $insert_query);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $yourfeedback);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('THANKS!!! FOR YOUR FEEDBACK')</script>";
        } else {
            echo "Error executing statement: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
} else {
    echo "Form not submitted.";
}

mysqli_close($conn);
?>
