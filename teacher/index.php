<?php

ob_start();
session_start();

if ($_SESSION['name'] != 'oasis') {
    header('location: /atd/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ABOGOTI</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/atd/css/main.css">

</head>
<body>

<header>

  <h1>ABOGOTI</h1>
  <hr>
  <h1>Teacher Home</h1>
  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="students.php">Students</a>
  <a href="teachers.php">Faculties</a>
  <a href="attendance.php">Attendance</a>
  <a href="report.php">Report</a>
  <a href="/atd/logout.php">Logout</a>

</div>

</header>

<center>

<div class="row">
    <div class="content">
      <p>Teacher Platform to Maintain</p>
    <img src="/atd/img/3.png" height="500px" width="500px" />

  </div>

</div>

</center>

</body>
</html>
