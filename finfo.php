<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a MySQL database connection
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "ecoharvest";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the form
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $phone = $_POST["phone"];
    $website = $_POST["website"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $province = $_POST["province"];
    $zipCode = $_POST["zipCode"];
    $query = $_POST["query"];

    // Insert data into the database
    $sql = "INSERT INTO fdashboard (firstName, lastName, email, birthday, phone, website, street, city, province, zipCode, query) 
            VALUES ('$firstName', '$lastName', '$email', '$birthday', '$phone', '$website', '$street', '$city', '$province', '$zipCode', '$query')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
