<?php


include_once('conn.php');



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
    exit;
}

if(isset($_GET['action']) && $_GET['action'] == 'get_countries') {
 
    $sql = "SELECT name, phonecode FROM country";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $countries = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($countries);
    } else {
        echo "0 results";
    }

    $conn->close();
    exit;
}

// Close the connection
$conn->close();

exit;
?>
