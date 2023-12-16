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

<h2 class="styled-heading">CUSTOMER VIEW</h2>
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
        <a href="customer.php" class="button">BACK</a>
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
    die("Connection failed: " . $conn->connect_error);od
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the CUST_CODE from the form
    $CUST_CODE = $_POST['CUST_CODE'];

    // SQL query to select a record by CUST_CODE
    $sql = "SELECT CUST_NAME, CUST_CITY,  WORKING_AREA, CUST_COUNTRY, GRADE, OPENING_AMT, RECEIVE_AMT, PAYMENT_AMT, OUTSTANDING_AMT,  PHONE_NO,  AGENT_CODE FROM customer WHERE CUST_CODE = '$CUST_CODE'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if a record was found
    if ($result->num_rows > 0) {
        // Output data from the selected record
        while ($row = $result->fetch_assoc()) {
            echo "CUST_CODE: $CUST_CODE<br>";
            echo "CUST_NAME: " . $row['CUST_NAME'] . "<br>";
            echo "CUST_CITY: " . $row['CUST_CITY'] . "<br>";
            echo "WORKING_AREA: " . $row['WORKING_AREA'] . "<br>";
            echo "CUST_COUNTRY: " . $row['CUST_COUNTRY'] . "<br>";
            echo "GRADE: " . $row['GRADE'] . "<br>";
            echo "OPENING_AMT: " . $row['OPENING_AMT'] . "<br>";
            echo "RECEIVE_AMT: " . $row['RECEIVE_AMT'] . "<br>";
            echo "PAYMENT_AMT: " . $row['PAYMENT_AMT'] . "<br>";
            echo "OUTSTANDING_AMT: " . $row['OUTSTANDING_AMT'] . "<br>";
            echo "PHONE_NO: " . $row['PHONE_NO'] . "<br>";
            echo "AGENT_CODE: " . $row['AGENT_CODE'] . "<br><br></br>";
           } 
           
    } else {
        echo "No record found for CUSTOMERCODE $CUST_CODE";
    }
}

// Close the database connection
$conn->close();
?>
