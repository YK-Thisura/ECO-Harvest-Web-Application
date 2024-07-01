<?php
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

// Function to delete a record
function deleteRecord($conn, $email) {
    $sql = "DELETE FROM fdashboard WHERE email = '$email'";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "" . $conn->error;
    }
}

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
    if (isset($_POST['record_email'])) {
        $recordEmail = $_POST['record_email'];
        deleteRecord($conn, $recordEmail);
    } else {
        echo "Error: Record email is not set.";
    }
}

// Select all data from the fdashboard table
$sql = "SELECT * FROM fdashboard";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Harvest</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap');

    body {
font-family: 'Signika', sans-serif;
margin: 20px;
font-weight:bold;
padding: 10px;
background-color: white;
position: relative; /* Ensure the body has a relative position */
}


        header {
            background-color: white;
            color: darkgreen;
            text-align: center;
            padding: 15px 0;
        }

        .record-container {
            background-color: #f4f4f4;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: inline-block;
        }

        input[type="submit"] {
            background-color: green;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 3px;
        }

        hr {
            border: 1px solid #ddd;
        }
      
    </style>
</head>
<header>
    <div class="back-btn" onclick="goBack()">
        <img src="images/index/logo.png" alt="Logo" style="width: 100px; height: auto;">
      </div>
      <div class="title-text">Welcome to Field Officer Dashboard </div> 
</header>
<body>


    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<div class='record-container'>";
            echo "<p><strong>Name:</strong> " . $row["firstName"] . " " . $row["lastName"] . "</p>";
            echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
            echo "<p><strong>Birthday:</strong> " . $row["birthday"] . "</p>";
            echo "<p><strong>Phone:</strong> " . $row["phone"] . "</p>";
            echo "<p><strong>Website:</strong> " . $row["website"] . "</p>";
            echo "<p><strong>Address:</strong> " . $row["street"] . " " . $row["city"] . "</p>";
            echo "<p><strong>Province:</strong> " . $row["province"] . "</p>";
            echo "<p><strong>Zip Code:</strong> " . $row["zipCode"] . "</p>";
            echo "<p><strong>Query:</strong> " . $row["query"] . "</p>";
            // Add more fields as needed

            // Delete button inside the loop
            echo "<form method='post' action=''>
                  <input type='hidden' name='record_email' value='" . $row['email'] . "'>
                  <input type='submit' name='delete' value='Approve'>
                  </form>";

            echo "</div>";
        }
    } else {
        echo "<p>No data found</p>";
    }
    ?>
<script>
         // JavaScript function to go back to the previous state
         function goBack() {
      // Assuming your home page URL is "index.html" or adjust accordingly
      window.location.href = "index.php";
    }
</script>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
