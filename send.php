<?php


$servername = "localhost";
$username = "root";
$password = "Digitalcotech@12345";
$database = "digitech";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





if(isset($_POST['submit'])) {
    session_start();

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
            $_SESSION['success_message'] = "Thanks for connecting! We will get back to you soon.";
            header("Location: index.php");
        } else {
            $_SESSION['error_message'] = "'Sorry, something went wrong. Please try again later.";
            header("Location: index.php");
        }
    } catch (Exception $e) {
        $_SESSION['error_message'] = "'Sorry, something went wrong. Please try again later.";
        header("Location: index.php");
    }
}
// Close the connection
$conn->close();
?>
