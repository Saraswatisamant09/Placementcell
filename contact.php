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
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
    $anyquery = mysqli_real_escape_string($conn, $_POST['anyquery']);

    // Use backticks for 'any' column, and use prepared statements
    $insert_query = "INSERT INTO cont (`firstname`, `lastname`, `rollno`, `anyquery`) 
                    VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $insert_query);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $rollno, $anyquery);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('DATA INSERTED SUCCESSFULLY')</script>";
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
