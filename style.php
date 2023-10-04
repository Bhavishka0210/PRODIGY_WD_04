<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["Name"];
    $email = $_POST["email"];
    $PhoneNo. = $_POST["Phone No."];
    $Subject = $_POST["Subject"];
    $Message = $_POST["Message"];
   
    // Perform server-side validation if needed

    // Generate a receipt
    $receipt = "Receipt\n\n";
    $receipt .= "Name: " . $name . "\n";
    $receipt .= "email: " . $email . "\n";
    $receipt .= "Phone No.: " . $PhoneNo . "\n";
    $receipt .= "Subject: " . $Subject . "\n";
    $receipt .= "Message: " . $Message . "\n";
    $receipt .= "Order Date: " . date("Y-m-d H:i:s"); // Current date and time

    // Send the receipt back to the client
    echo $receipt;
} else {
    // Redirect to the form page if accessed directly
    header("Location: index.html");
}
?>
