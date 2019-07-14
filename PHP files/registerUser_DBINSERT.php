<?php
require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
$coursenum = $_POST['coursenum'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$email = $_POST['email'];

//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = createNewRegistration($coursenum, $firstname, $lastname, $address, $email);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
Header("Location: index.php?reg=success");
?>
