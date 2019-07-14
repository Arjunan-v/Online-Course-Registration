<?php
//FUNCTION TO DISPLAY ALL COURSES
function fetchAllUsers() {
  global $mysqli, $db_table_prefix;
  $stmt = $mysqli->prepare(
    "SELECT
		coursenum,
		coursetitle,
		coursedesc,
		professor,
        coursecost,
        location

		FROM " . $db_table_prefix . "coursedetails"
  );
  $stmt->execute();
  $stmt->bind_result(
    $coursenum,
    $coursetitle,
	$coursedesc,
	$professor,
    $coursecost,
    $location
  );

  while ($stmt->fetch()) {
    $row[] = array(
      'coursenum'               => $coursenum,
      'coursetitle'             => $coursetitle,
      'coursedesc'              => $coursedesc,
      'professor'               => $professor,
      'coursecost'              => $coursecost,
      'location'                => $location,
    );
  }
  $stmt->close();
  return ($row);
}

//FUNCTION TO ADD NEW COURSE
function createNewUser($coursenum, $coursetitle, $coursedesc, $professor, $coursecost, $location)
{
  global $mysqli, $db_table_prefix;
  //Generate A random userid
  $character_array = array_merge(range('a', 'z'), range(0, 9));
  $rand_string = "";
  for ($i = 0; $i < 6; $i++) {
    $rand_string .= $character_array[rand(
      0, (count($character_array) - 1)
    )];
  }
  $stmt = $mysqli->prepare(
    "INSERT INTO " . $db_table_prefix . "coursedetails (
		coursenum,
		coursetitle,
		coursedesc,
		professor,
        coursecost,
        location
		)
		VALUES (
		?,
		?,
		?,
		?,
        ?,
        ?
		)"
  );
  $stmt->bind_param("ssssss", $coursenum, $coursetitle, $coursedesc, $professor, $coursecost, $location);
  $result = $stmt->execute();
  $stmt->close();
  return $result;

}


//FUNCTION TO REGISTER STUDENT
function createNewRegistration($coursenum, $firstname, $lastname, $address, $email)
{
  global $mysqli, $db_table_prefix;
  //Generate A random userid
  $character_array = array_merge(range('a', 'z'), range(0, 9));
  $rand_string = "";
  for ($i = 0; $i < 6; $i++) {
    $rand_string .= $character_array[rand(
      0, (count($character_array) - 1)
    )];
  }
  $stmt = $mysqli->prepare(
    "INSERT INTO studentdetails (
		coursenum,
        firstname,
		lastname,
		address,
		email
		)
		VALUES (
		?,
        ?,
		?,
		?,
		?
		)"
  );
  $stmt->bind_param("sssss", $coursenum, $firstname, $lastname, $address, $email);
  $result = $stmt->execute();
  $stmt->close();
  return $result;

}

//FUNCTION TO DISPLAY ALL REGISTRATIONS
function fetchAllRegistration() {
  global $mysqli, $db_table_prefix;
  $stmt = $mysqli->prepare(
    "SELECT
		coursenum,
		firstname,
		lastname,
		address,
        email

		FROM " . $db_table_prefix . "studentdetails"
  );
  $stmt->execute();
  $stmt->bind_result(
    $coursenum,
    $firstname,
	$lastname,
	$address,
    $email
  );

  while ($stmt->fetch()) {
    $row[] = array(
      'coursenum'               => $coursenum,
      'firstname'               => $firstname,
      'lastname'                => $lastname,
      'address'                 => $address,
      'email'              => $email
    );
  }
  $stmt->close();
  return ($row);
}
?>