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
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $emailaddress = mysqli_real_escape_string($conn, $_POST['emailaddress']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $enrollmentid = mysqli_real_escape_string($conn, $_POST['enrollmentid']);
    $batch = mysqli_real_escape_string($conn, $_POST['batch']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);

    $query = "INSERT INTO noc (fullname, emailaddress, phonenumber, enrollmentid, batch, branch) 
              VALUES ('$fullname', '$emailaddress', '$phonenumber', '$enrollmentid', '$batch', '$branch')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('DATA INSERTED SUCCESSFULLY')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Form not submitted.";
}

mysqli_close($conn);
?>
