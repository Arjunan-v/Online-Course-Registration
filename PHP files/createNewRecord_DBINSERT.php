<?php



require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
$coursenum = $_POST['coursenum'];
$coursetitle = $_POST['coursetitle'];
$coursedesc = $_POST['coursedesc'];
$professor = $_POST['professor'];
$coursecost = $_POST['coursecost'];
$location = $_POST['location'];


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = createNewUser($coursenum, $coursetitle, $coursedesc, $professor, $coursecost, $location);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
echo $newuser;
?>
