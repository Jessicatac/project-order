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

<h2 class="styled-heading">UPDATED CUSTOMER RECORD</h2>
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
        <a href="editcust1.php" class="button">BACK</a>
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

$CUST_CODE = $_POST['CUST_CODE'];
// Retrieve data from the HTML form
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


echo '<div class="container">';

echo ' <div class="alert alert-success" role="alert">';


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
echo "AGENT_CODE: " . $AGENT_CODE . "<br><br>";



// Prepare and execute the SQL UPDATE query
$sql = "UPDATE customer
        SET CUST_NAME = '$CUST_NAME',
          CUST_CITY = '$CUST_CITY',
			WORKING_AREA = '$WORKING_AREA',
            CUST_COUNTRY = '$CUST_COUNTRY',
			GRADE = '$GRADE',
            OPENING_AMT = '$OPENING_AMT',
            RECEIVE_AMT  = '$RECEIVE_AMT',
            PAYMENT_AMT  = '$PAYMENT_AMT',
            OUTSTANDING_AMT  = '$OUTSTANDING_AMT',
            PHONE_NO = '$PHONE_NO',
            AGENT_CODE = '$AGENT_CODE'
            
        WHERE CUST_CODE = '$CUST_CODE'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

echo '</div>';
echo '</div>';

// Close the database connection
$conn->close();







   ?>

   


    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
