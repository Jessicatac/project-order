<link href="css/web20.css" rel="stylesheet" type="text/css" />
<style>

a {
  text-decoration: none; /* Remove underline */
  color: inherit; /* Inherit text color from parent */
}

/* Style for the button link */
.button-link {
  display: inline-block; /* Make it a block-level element */
  padding: 10px 20px; /* Adjust padding as needed */
  background-color: #3498db; /* Set background color */
  color: #fff; /* Set text color */
  border: 1px solid #2980b9; /* Add a border */
  border-radius: 5px; /* Add border-radius for rounded corners */
  transition: background-color 0.3s ease; /* Add a smooth transition for background color */
}

/* Hover effect */
.button-link:hover {
  background-color: #2980b9; /* Change background color on hover */
}

.styled-heading {
  background-color: #3498db; /* Set the background color */
  color: #fff; /* Set the text color */
  padding: 10px; /* Add padding for spacing */
  border-radius: 5px; /* Add border-radius for rounded corners */
}
</style>

<h2 class="styled-heading">ORDERS VIEW</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Style the button */
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid #3498db;
            color: #3498db;
            border-radius: 5px;
        }

        /* Add hover effect */
        .button:hover {
            background-color: #3498db;
            color: #fff;
        }

        /* Align the button to the right */
        .align-right {
            text-align: right;
        }
    </style>
</head>
<body>

    <?php
    // Your PHP code or logic can go here
    ?>

    <div class="align-right">
        <a href="orders.php" class="button">BACK</a>
    </div>

</body>
</html>



<?php
// Database configuration
$servername = "localhost"; // Your MySQL server address
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "order"; // Name of the database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the ORD_NUM from the form
    $ORD_NUM = $_POST['ORD_NUM'];

    // SQL query to select a record by ORD_NUM
    $sql = "SELECT ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION FROM orders WHERE ORD_NUM = '$ORD_NUM'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if a record was found
    if ($result->num_rows > 0) {
        // Output data from the selected record
        while ($row = $result->fetch_assoc()) {
            echo "ORD_NUM: $ORD_NUM<br>";
            echo "ORD_AMOUNT: " . $row['ORD_AMOUNT'] . "<br>";
            echo "ADVANCE_AMOUNT: " . $row['ADVANCE_AMOUNT'] . "<br>";
            echo "ORD_DATE: " . $row['ORD_DATE'] . "<br>";
            echo "CUST_CODE: " . $row['CUST_CODE'] . "<br>";
            echo "AGENT_CODE: " . $row['AGENT_CODE'] . "<br>";
            echo "ORD_DESCRIPTION: " . $row['ORD_DESCRIPTION'] . "<br><br></br>";
           } 
    } else {
        echo "No record found for ORDERS NUMBER: $ORD_NUM.";
    }
}

// Close the database connection
$conn->close();
?>
