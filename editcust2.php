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

<h2 class="styled-heading">EDIT CUSTOMER</h2>
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

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
            $CUST_NAME = $row['CUST_NAME'];
			$CUST_CITY = $row['CUST_CITY'];
			$WORKING_AREA = $row['WORKING_AREA'];
			$CUST_COUNTRY = $row['CUST_COUNTRY'];
			$GRADE = $row['GRADE'];
			$OPENING_AMT = $row['OPENING_AMT'];
			$RECEIVE_AMT = $row['RECEIVE_AMT'];
			$PAYMENT_AMT = $row['PAYMENT_AMT'];
			$OUTSTANDING_AMT = $row['OUTSTANDING_AMT'];
			$PHONE_NO = $row['PHONE_NO'];
			$AGENT_CODE = $row['AGENT_CODE'];
			
        }
    } else {
        echo "<font style='color: red;'>No record found for CUSTOMER CODE:  &nbsp;" .  $CUST_CODE . "</font>";
    }
}
		
		
	?>
	 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        /* Center the content horizontally and vertically */
        .center-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Set the height of the container */
        }

        /* Style for the centered content */
        .centered-content {
            text-align: center;
    
    
        }
    </style>
</head>
<body>

 <div class="container p-3 my-2 bg-light text-dark">	
		
        <form action="editcust3.php" method="post">       
            <div class="centered-content">
                <label for="CUST_NAME">CUSTOMER NAME</label>
                <input type="text" class="form-control" id="CUST_NAME" name="CUST_NAME" value = <?php echo $CUST_NAME; ?>>
            </div>
              <div class="centered-content">
                <label for="CUST_CITY">CUSTOMER CITY</label>
                <input type="text" class="form-control" id="CUST_CITY" name="CUST_CITY" value = <?php echo $CUST_CITY; ?>>
            </div>
            <div class="centered-content">
                <label for="WORKING_AREA">WORKING AREA</label>
                <input type="text" class="form-control" id="WORKING_AREA" name="WORKING_AREA" value = <?php echo $WORKING_AREA; ?>>
            </div>
            <div class="centered-content">
                <label for="CUST_COUNTRY">CUSTOMER COUNTRY</label>
                <input type="text" class="form-control" id="CUST_COUNTRY" name="CUST_COUNTRY" value = <?php echo $CUST_COUNTRY; ?>>
            </div>
            <div class="centered-content">
                <label for="GRADE">GRADE</label>
                <input type="tel" class="form-control" id="GRADE" name="GRADE" value = <?php echo $GRADE; ?>>
            </div>
            <div class="centered-content">
                <label for="OPENING_AMT">OPENING AMOUNT</label>
                <input type="text" class="form-control" id="OPENING_AMT" name="OPENING_AMT" value = <?php echo $OPENING_AMT; ?>>
            </div>
            <div class="centered-content">
                <label for="RECEIVE_AMT">RECEIVE AMOUNT</label>
                <input type="text" class="form-control" id="RECEIVE_AMT" name="RECEIVE_AMT" value = <?php echo $RECEIVE_AMT; ?>>
            </div>
            
            <div class="centered-content">
                <label for="PAYMENT_AMT">PAYMENT AMOUNT</label>
                <input type="text" class="form-control" id="PAYMENT_AMT" name="PAYMENT_AMT" value = <?php echo $PAYMENT_AMT; ?>>
            </div>
            
            <div class="centered-content">
                <label for="OUTSTANDING_AMT">OUTSTANDING AMOUNT</label>
                <input type="text" class="form-control" id="OUTSTANDING_AMT" name="OUTSTANDING_AMT" value = <?php echo $OUTSTANDING_AMT; ?>>
            </div>
    
            <div class="centered-content">
                <label for="PHONE_NO">PHONE NO</label>
                <input type="text" class="form-control" id="PHONE_NO" name="PHONE_NO" value = <?php echo $PHONE_NO; ?>>
            </div>
            <div class="centered-content">
                <label for="AGENT_CODE">AGENT_CODE</label>
                <input type="text" class="form-control" id="AGENT_CODE" name="AGENT_CODE" value = <?php echo $AGENT_CODE; ?>>
            
           
           
			<input type="hidden" name="CUST_CODE" value="<?php echo $CUST_CODE; ?> "><br></br>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>

    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
