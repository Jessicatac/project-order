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

<h2 class="styled-heading">EDIT AGENTS</h2>
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
        <a href="editagent1.php" class="button">BACK</a>
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
    // Get the AGENT_CODE from the form
    $AGENT_CODE = $_POST['AGENT_CODE'];
	
    // SQL query to select a record by AGENT_CODE
    $sql = "SELECT AGENT_NAME, WORKING_AREA, COMMISSION, PHONE_NO, COUNTRY FROM agents WHERE AGENT_CODE = '$AGENT_CODE'";

    // Execute the query
    $result = $conn->query($sql);
	
    // Check if a record was found
    if ($result->num_rows > 0) {
        // Output data from the selected record
        while ($row = $result->fetch_assoc()) {
             $AGENT_NAME = $row['AGENT_NAME'];
             $WORKING_AREA = $row['WORKING_AREA'];
             $COMMISSION = $row['COMMISSION'];
             $PHONE_NO = $row['PHONE_NO'];
             $COUNTRY = $row['COUNTRY'];
			
        }
    } else {
        echo "<font style='color: red;'>No record found for CODE:  &nbsp;" .  $AGENT_CODE . "</font>";
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
        <form action="editagent3.php" method="post">
            <div class="centered-content">
                <label for="AGENT_NAME">AGENT NAME</label>
                <input type="text" class="form-control" id="AGENT_NAME" name="AGENT_NAME" value="<?php echo $AGENT_NAME; ?>">
             </div>
            <div class="centered-content">
                <label for="WORKING_AREA">WORKING AREA</label>
                <input type="text" class="form-control" id="WORKING_AREA" name="WORKING_AREA" value="<?php echo $WORKING_AREA; ?>">
            </div>
            <div class="centered-content">
                <label for="COMMISSION">COMMISSION</label>
                <input type="text" class="form-control" id="COMMISSION" name="COMMISSION" value="<?php echo $COMMISSION; ?>">
            </div>
            <div class="centered-content">
                <label for="PHONE_NO">PHONE</label>
                <input type="tel" class="form-control" id="PHONE_NO" name="PHONE_NO" value="<?php echo $PHONE_NO; ?>">
            </div>
            <div class="centered-content">
                <label for="COUNTRY">COUNTRY</label>
                <input type="text" class="form-control" id="COUNTRY" name="COUNTRY" value="<?php echo $COUNTRY; ?>">
            
           
			<input type="hidden" name="AGENT_CODE" value="<?php echo $AGENT_CODE; ?>"><br></br>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
        </body>
        </html> 
        

    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
