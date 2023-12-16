<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit;
}
?>
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

<h2 class="styled-heading">AGENTS RECORD</h2>
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
$servername = "localhost"; // Your MySQL server address
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "order"; // Name of the database

   
// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the HTML form
$CUST_CODE = $_POST['CUST_CODE'];
$CUST_NAME = $_POST['CUST_NAME'];
$CUST_CITY = $_POST['CUST_CITY'];
$WORKING_AREA = $_POST['WORKING_AREA'];
$CUST_COUNTRY = $_POST['CUST_COUNTRY'];
$GRADE = $_POST['GRADE'];
$OPENING_AMT = $_POST['OPENING_AMT'];
$RECEIVE_AMT = $_POST['RECEIVE_AMT'];
$PAYMENT_AMT = $_POST['PAYMENT_AMT'];
$OUTSTANDING_AMT = $_POST['OUTSTANDING_AMT'];
$PHONE_NO = $_POST['PHONE_NO'];
$AGENT_CODE = $_POST['AGENT_CODE'];


echo "<h2>CUSTOMER:</h2>";
echo "CUST_CODE: " . $CUST_CODE . "<br>";
echo "CUST_NAME: " . $CUST_NAME . "<br>";
echo "CUST_CITY: " . $CUST_CITY . "<br>";
echo "WORKING_AREA: " . $WORKING_AREA . "<br>";
echo "CUST_COUNTRY: " . $CUST_COUNTRY . "<br>";
echo "GRADE: " . $GRADE . "<br>";
echo "OPENING_AMT: " . $OPENING_AMT . "<br>";
echo "RECEIVE_AMT: " . $RECEIVE_AMT . "<br>";
echo "PAYMENT_AMT: " . $PAYMENT_AMT . "<br>";
echo "OUTSTANDING_AMT: " . $OUTSTANDING_AMT . "<br>";
echo "PHONE_NO: " . $PHONE_NO . "<br>";
echo "AGENT_CODE: " . $AGENT_CODE . "<br><br></br>";




// Insert the data into the database
$sql = "INSERT INTO customer (CUST_CODE,  CUST_NAME, CUST_CITY,  WORKING_AREA, CUST_COUNTRY, GRADE, OPENING_AMT, RECEIVE_AMT, PAYMENT_AMT, OUTSTANDING_AMT,  PHONE_NO,  AGENT_CODE) VALUES ('$CUST_CODE', '$CUST_NAME', '$CUST_CITY', '$WORKING_AREA', '$CUST_COUNTRY', '$GRADE', '$OPENING_AMT', '$RECEIVE_AMT', '$PAYMENT_AMT', '$OUTSTANDING_AMT', '$PHONE_NO', '$AGENT_CODE')";

if ($conn->query($sql) === TRUE) {
    echo "Customer submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo '</div>';
echo '</div>';
// Close the database connection
$conn->close();
?>
