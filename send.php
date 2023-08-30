<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "digitech";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





if(isset($_POST['submit'])) {
    $name = $_POST['yname']; 
    $email = $_POST['yemail']; 
    $subject = $_POST['ysubject']; 
    $phone = $_POST['yphone']; 
    $message = $_POST['message']; 

    try {
        // Ensure you have an active database connection here (assuming $con is your connection object)
        $insertQuery = "
            INSERT INTO digitech (name, email, subject, phone, message)
            VALUES ('$name', '$email', '$subject', '$phone', '$message')
        ";
        
        $query = mysqli_query($conn, $insertQuery);

        if ($query) {
            echo "Data inserted successfully!";
            header("Location: index.php");
        } else {
            echo "Error: " . mysqli_error($con); // Display error message if query fails
        }
    } catch (Exception $e) {
      echo "Error: " . mysqli_error($con); // Display error message if query fails
        exit; // Terminate script execution after redirection
    }
}
// Close the connection
$conn->close();
?>
