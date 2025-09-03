<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dimple Star Transport - Routes & Schedules</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="icon" href="images/icon.ico" type="image/x-con">
  <style>
    <?php include("style/style.css"); ?>
  </style>
</head>
<body>


<div class="navbar">
  <div class="logo">
    <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
    Dimple Star Transport
  </div>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="terminal.php">Terminals</a></li>
    <li><a class="active" href="routeschedule.php">Routes / Schedules</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="book.php">Book Now</a></li>
  </ul>
  <div class="auth-buttons">
    <div>
      <?php
        if(isset($_SESSION['email'])){
          $email = $_SESSION['email'];
          echo "Welcome, ". $email ."! ";
          echo "<a href='logout.php'>Logout</a>";
        }
        if(empty($email)){
          echo "<a href='signlog.php'>Login</a>";
        }
      ?>
    </div>
    <h3><?php include_once("php_includes/date_time.php"); ?></h3>
  </div>
</div>


<div class="content">
  <h1>Routes & Schedules</h1>
  <p>(All trips are vice versa)</p>

  <table class="routes-table">
    <tr>
      <th>Origin</th>
      <th>Regular Schedule</th>
      <th>Destination</th>
    </tr>
    <tr>
      <td>Ali Mall Cubao Terminal</td>
      <td>9:00 am / 10:00 am / 1:00 pm / 4:00 pm</td>
      <td>San Jose</td>
    </tr>
    <tr>
      <td>Alabang Terminal</td>
      <td>6:00 am / 7:00 am / 2:00 pm / 6:00 pm / 10:00 pm</td>
      <td>San Jose</td>
    </tr>
    <tr>
      <td>Cabuyao Terminal</td>
      <td>8:00 am / 9:00 am / 4:00 pm / 8:00 pm</td>
      <td>San Jose</td>
    </tr>
    <tr>
      <td>Espana Terminal</td>
      <td>4:30 am / 5:30 am / 12:00 am / 4:00 pm / 8:00 pm</td>
      <td>San Jose</td>
    </tr>
    <tr>
      <td>San Lazaro Terminal</td>
      <td>3:00 am / 4:30 am / 11:00 am / 3:00 pm / 7:00 pm</td>
      <td>San Jose</td>
    </tr>
    <tr>
      <td>Pasay Terminal</td>
      <td>5:00 am / 6:00 am / 1:00 pm / 3:00 pm</td>
      <td>San Jose</td>
    </tr>
  </table>
</div>


<footer>
  <div class="footer-logo">
    <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport"></a>
  </div>
  <p>&copy; Dimple Star Transport</p>
</footer>

</body>
</html>
