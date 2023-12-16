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

<h2 class="styled-heading">ORDERS</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        /* Style the button to make it look like a button */
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
         
    </style>
</head>
<body>

    <?php
    // Your PHP code or logic can go here
    ?>

    <!-- Button with Href -->
    <a href="addorder1.php" class="button">ADD</a>
       <a href="vieworder1.php" class="button">VIEW</a>
          <a href="editorder1.php" class="button">EDIT</a>
            <a href="welcome.php" class="button">BACK</a>

<div>
        <?php
        // Outputting spaces and line breaks
        
        echo "<br>"; // Line break
        echo "&nbsp;&nbsp;&nbsp;"; // Output three non-breaking spaces
     
        ?>
    </div>
</body>
</html>


<?php
$mysqli = new mysqli("localhost", "root", "", "order");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT * FROM orders")) {

    /* determine number of fields in result set */
    $field_cnt = $result->field_count;
    $fieldnames = mysqli_fetch_fields($result);
    
    echo '<table border="1" width="100%">';
    
    $i=0;
    
     foreach ($fieldnames as $val) {
           // printf("Name:     %s\n", $val->name);
	   $fnames[$i]=$val->name;
	    echo '<th>' . $fnames[$i] . '</th>';
	    $i++;	    
    }
   
    
     /* fetch object array */

        while ($row = $result->fetch_row()) {
	  echo '<tr>';
	  for($i=0; $i<$field_cnt; $i++)
	  {
		  echo '<td>' . $row[$i] . '</td>';
	 }
	
	  echo '</tr>';
        }
     echo '</table>';
  
    /* close result set */
    $result->close();
}

/* close connection */
$mysqli->close();

?> 