<?php
  if(isset($_SERVER['QUERY_STRING'])&&!empty($_SERVER['QUERY_STRING']))
  echo "<script type='text/javascript'> var bol='1';</script>";
  else
  echo "<script type='text/javascript'> var bol='0';</script>";
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>
    Course Registration
  </title>
  <!-- Style -- Can also be included as a file usually style.css -->
  <style type="text/css">
	table.table-style-three {
      font-family: verdana, arial, sans-serif;
      font-size: 11px;
      color: #333333;
      border-width: 1px;
      border-color: #3A3A3A;
      border-collapse: collapse;
    }
    table.table-style-three th {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #FFA6A6;
      background-color: #D56A6A;
      color: #ffffff;
    }
    table.table-style-three a {
      color: #ffffff;
      text-decoration: none;
    }

    table.table-style-three tr:hover td {
      cursor: pointer;
    }
    table.table-style-three tr:nth-child(even) td{
      background-color: #F7CFCF;
    }
    table.table-style-three td {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #FFA6A6;
      background-color: #ffffff;
    }
      h1{
          text-align: center;
          color: darkgreen;
      }
      body{
          background-color:bisque;
      }
</style>

</head>
<body>
    <h1>STUDENT COURSE REGISTRATION SYSTEM</h1>

  <?php require_once("config.php"); ?>

  <!-- Table goes in the document BODY -->
  <table class="table-style-three">
      <thead>
      <!-- Display CRUD options in TH format -->
      <tr>
        <th><a href="createNewRecord.php">Create a new Course</a></th>
      </tr>
      <tr>
        <th><a href="displayAllRecords.php">Display Courses</a></th>
      </tr>
      <tr>
        <th><a href="displayRegisteredUsers.php">Display Course Registrations</a></th>
      </tr>  
      <!--<tr>
        <th><a href="displayAllRecords.php">Delete A Record (D)</a></th>
      </tr>
       <tr>
        <th><a href="deactivateThisUser.php">Deactivate User Status (D)</a></th>
      </tr>-->

      </thead>
  </table>

</body>
<script type="text/javascript">
if(bol=="1")
      alert("Successfully Registered");
</script>
</html>
