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

<h2 class="styled-heading">AGENTS VIEW</h2>

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
        <a href="agent.php" class="button">BACK</a>
    </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  
         
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
            padding: 100px;
            border: 5px solid #ccc;
            border-radius: 20px;
        }
    </style>
</head>
<body>

   <body>

    <div class="center-container">
        <div class="centered-content">
           
    <form action="agentview2.php" method="POST">
        <label for="AGENT_CODE">AGENT CODE:</label>
        <input type="text" id="AGENT_CODE" name="AGENT_CODE" required><br><br>
        <input type="submit" value="VIEW">
    </form>
        </div>
    </div>

</body>
</html> 
</head>

</body>
</html>