<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dimple Star Transport - Contact Us</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="icon" href="images/icon.ico" type="image/x-con">
  <style>
    <?php include("style/style.css"); ?>

   
    .contact-container {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
      text-align: left;
      line-height: 1.8;
    }

    .contact-container h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 36px;
      color: #004d40;
    }

    .contact-info {
      margin-bottom: 30px;
      font-size: 16px;
      color: #333;
    }

    .contact-form label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #004d40;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .contact-form textarea {
      resize: vertical;
      height: 120px;
    }

    .contact-form button {
      margin-top: 20px;
      background: #004d40;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .contact-form button:hover {
      background: #00796b;
    }
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
    <li><a href="routeschedule.php">Routes / Schedules</a></li>
    <li><a class="active" href="contact.php">Contact</a></li>
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


<div class="contact-container">
  <h1>CONTACT US</h1>

  <div class="contact-info">
    <p><strong>Dimple Star Transport</strong></p>
    <p>Block 1 lot 10, Southpoint Subd.<br>
       Brgy Banay-Banay, Cabuyao, Laguna</p>
    <p><strong>Phone:</strong> 0929 209 0712</p>
  </div>

  <div class="contact-form">
    <h2>Message Form</h2>
    <form action="send_message.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Example: aaron@gwaps.com" required>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="footer-logo">
    <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport"></a>
  </div>
  <p>&copy; Dimple Star Transport</p>
</footer>

</body>
</html>
