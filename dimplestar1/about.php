<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dimple Star Transport - About Us</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="icon" href="images/icon.png" type="image/png"> 
</head>
<body>


<div class="navbar">
  <div class="logo">
    <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
    Dimple Star Transport
  </div>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="about.php">About Us</a></li>
    <li><a href="terminal.php">Terminals</a></li>
    <li><a href="routeschedule.php">Routes / Schedules</a></li>
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
        } else {
          echo "<a href='signlog.php'>Login</a>";
        }
      ?>
    </div>
    <h3><?php include_once("php_includes/date_time.php"); ?></h3>
  </div>
</div>


<div class="about">
  <h1>ABOUT US</h1>

  <div class="about-photo">
    <img src="images/oldbus.jpg" alt="Old Bus"> 
    <div class="caption">
      Photo taken on October 16, 1993. Napat Transit (now Dimple Star Transport) NVR-963 (Fleet No. 800) going to Alabang.  
      Jeepneys under the Light Rail Line in Taft Ave near United Nations Avenue, Ermita, Manila, Philippines.
    </div>
  </div>

  <h2>History</h2>
  <p>
    Year 2004 of May changes has been made, Napat Transit became Dimple Star Transport.
  </p>

  <table class="about-table">
    <tr>
      <td>
        <h2>Mission</h2>
        <p>To provide superior transport service to Metro Manila and Mindoro Province commuters.</p>
      </td>
      <td>
        <h2>Vision</h2>
        <p>To lead the bus transport industry through its innovation service to the riding public.</p>
      </td>
    </tr>
  </table>

  <div id="fb" style="margin-top:40px; text-align:center;">
    <?php include_once("php_includes/fblike.php"); ?>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="footer-logo">
    <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport"></a>
  </div>
  <p>&copy; <?php echo date("Y"); ?> Dimple Star Transport</p>
</footer>

</body>
</html>
