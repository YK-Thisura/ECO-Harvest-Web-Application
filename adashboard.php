<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Harvest</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }  @import url('https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap');

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

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        .action-buttons {
            text-align: center;
        }

        .edit-button, .delete-button {
            padding: 8px 12px;
            margin: 2px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            text-transform: uppercase;
        }

        .edit-button {
            background-color: #4CAF50;
            color: white;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
        }

        .edit-form {
            display: none;
            background-color: #f9f9f9;
        }

        .edit-form input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        .edit-form button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<header>
    <div class="back-btn" onclick="goBack()">
        <img src="images/index/logo.png" alt="Logo" style="width: 100px; height: auto;">
      </div>
      <div class="title-text">Welcome to Admin Dashboard </div> 
</header>
<body>



<?php
// Replace these variables with your database credentials
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

// Handle delete request
if(isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];
    $deleteSql = "DELETE FROM register WHERE email='$deleteId'";
    if ($conn->query($deleteSql) === TRUE) {
        echo "";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Handle edit request
if(isset($_POST['edit_name']) && isset($_POST['edit_email']) && isset($_POST['edit_password'])) {
    $editName = $_POST['edit_name'];
    $editEmail = $_POST['edit_email'];
    $editPassword = $_POST['edit_password'];

    $editSql = "UPDATE register SET name='$editName', password='$editPassword' WHERE email='$editEmail'";
    
    if ($conn->query($editSql) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// SQL query to retrieve data from the register table
$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Password</th><th>Action</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td class='action-buttons'>";
        echo "<button class='edit-button' onclick=\"editFunction('" . $row["name"] . "', '" . $row["email"] . "', '" . $row["password"] . "')\">Edit</button>";
        echo "<button class='delete-button' onclick=\"deleteFunction('" . $row["email"] . "')\">Delete</button>";
        echo "</td>";
        echo "</tr>";

        // Add an edit form for each row
        echo "<tr id='editForm-" . $row["email"] . "' style='display: none;'>";
        echo "<td><input type='text' id='editName-" . $row["email"] . "' value='" . $row["name"] . "'></td>";
        echo "<td><input type='text' id='editEmail-" . $row["email"] . "' value='" . $row["email"] . "' disabled></td>";
        echo "<td><input type='text' id='editPassword-" . $row["email"] . "' value='" . $row["password"] . "'></td>";
        echo "<td><button onclick=\"saveEdit('" . $row["email"] . "')\">Save</button></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>


<script>
    function editFunction(name, email, password) {
        // Hide current row and show the edit form for the specific row
        document.getElementById('editForm-' + email).style.display = 'table-row';
    }

    function saveEdit(email) {
        // Get values from the edit form
        var newName = document.getElementById('editName-' + email).value;
        var newPassword = document.getElementById('editPassword-' + email).value;

        // Submit the form to handle the update
        var form = document.createElement('form');
        form.method = 'post';
        form.action = '';
        form.style.display = 'none';

        var inputName = document.createElement('input');
        inputName.type = 'text';
        inputName.name = 'edit_name';
        inputName.value = newName;
        form.appendChild(inputName);

        var inputEmail = document.createElement('input');
        inputEmail.type = 'text';
        inputEmail.name = 'edit_email';
        inputEmail.value = email;
        form.appendChild(inputEmail);

        var inputPassword = document.createElement('input');
        inputPassword.type = 'text';
        inputPassword.name = 'edit_password';
        inputPassword.value = newPassword;
        form.appendChild(inputPassword);

        document.body.appendChild(form);
        form.submit();
    }

    function deleteFunction(email) {
        // Prompt for confirmation before deleting
        if (confirm("Are you sure you want to delete this record?")) {
            // Redirect to the same page with delete parameter
            window.location.href = '?delete=' + email;
        }
    }
       // JavaScript function to go back to the previous state
       function goBack() {
      // Assuming your home page URL is "index.html" or adjust accordingly
      window.location.href = "index.php";
    }

</script>

</body>
</html>
