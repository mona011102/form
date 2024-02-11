<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if customerId parameter is provided
if (isset($_GET['customerId'])) {
    // Sanitize the input to prevent SQL injection (you should use prepared statements for better security)
    $customerId = htmlspecialchars($_GET['customerId']);

    // Fetch data for the specific customer ID
    $sql = "SELECT * FROM feedbackform WHERE customer_id = '$customerId'";
} else {
    // Fetch all data if customerId is not provided
    $sql = "SELECT * FROM feedbackform";
}

// Fetch data from the database
$result = $conn->query($sql);

// Fetch the data as an associative array
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

// Return the data as JSON
echo json_encode($data);
?>
