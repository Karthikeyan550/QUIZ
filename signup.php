<?php
    $Name = $_POST['name'];
    $EmailAddress =$_POST['email'];
    $password=$_POST['password1'];
    $repeatpassword=$_POST['password2'];
    $degree=$_POST['degree'];
    $year=$_POST['year'];
    $branch=$_POST['branch'];
    $age = $year - $dob_year; // $age calculates the user's age determined by only the year
    if ($Name=='') { // this checks if the current month is before the user's month of birth
        $Name=NULL;
    } 

    //add all initial data into an matrix variable for easier access to them later
    //To access rowone use $rows[0][0], rowtwo $rows[1][0] ect.
    //The matrix is an array which contains multiple array. eg. 2-dimensional arrays
    //To get all the variables with $r1X simply retrieve the first array of the matrix eg $rows[0]
    $rows = array(array($_POST['Name']),array($_POST['EmailAddress']),array($_POST['password']),array($_POST['repeatpassword']),array($_POST['degree'],array($_POST['year'],array($_POST['branch']))));

    //Similarities between row1 and row2 made me incoporate modulo value as an argument.
    

    //Creating the forth row by nested forloops.
    //The first loop iterates over the entries in a row (in your example this would be the letters e.g r1a r1b ect)
    //The second (inner) loop iterates of the rows (in you example this would be the number you had in your variables.)
    //The sum over each of the three rows are added, then bound to 1-12 range, before being added to the forth row.
    $password=password_hash($pwd_peppered, PASSWORD_ARGON2ID);
    $repeatpassword=password_hash($pwd_peppered, PASSWORD_ARGON2ID);
    include("database.php"); 
    ?>
  
   