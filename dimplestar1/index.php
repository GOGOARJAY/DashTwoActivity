<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dimple Star Transport</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
 
  <nav class="navbar">
    <div class="logo">
      <a href="index.php">
        <img src="images/logo.png" alt="Dimple Star Logo">
      </a>
      <span>Dimple Star Transport</span>
    </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="terminal.php">Terminals</a></li>
      <li><a href="routeschedule.php">Routes & Schedules</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="book/php">Book Now</a></li>
    </ul>
    <div class="auth-buttons">
      <?php
        if(isset($_SESSION['email'])){
          $email = $_SESSION['email'];
          echo "Welcome, ". $email. "!";
          echo " <a href='logout.php'>Logout</a>";
        }
        if(empty($email)){
          echo "<a href='signlog.php'>SignUp / Login</a>.";
        }
      ?>
    </div>
  </nav>


  <div class="carousel">
    <img src="images/b1.png" class="active" alt="Bus 1">
    <img src="images/b2.png" alt="Bus 2">
    <img src="images/b3.png" alt="Bus 3">
    <img src="images/b4.png" alt="Bus 4">

    <div class="controls">
      <button id="prev">&#10094;</button>
      <button id="next">&#10095;</button>
    </div>
  </div>

 
  <div class="content">
    <h1>Welcome to Dimple Star Transport</h1>
    <p>Safe, comfortable, and affordable bus rides across the country.</p>
  </div>


  <div class="contact">
    <h2>Contact Us</h2>
    <p>0929 209 0712</p>
    <p>Block 1 lot 10, Southpoint Subd.</p>
    <p>Brgy Banay-Banay, Cabuyao, Laguna</p>
  </div>


  <footer class="footer">
    <div class="footer-logo">
      <a href="index.php">
        <img src="images/logo.png" alt="Dimple Star Logo">
      </a>
    </div>
    <p>© Dimple Star Transport</p>
  </footer>

  <script>
    const images = document.querySelectorAll(".carousel img");
    const prev = document.getElementById("prev");
    const next = document.getElementById("next");
    let index = 0;

    function showImage(i) {
      images.forEach(img => img.classList.remove("active"));
      images[i].classList.add("active");
    }

    prev.addEventListener("click", () => {
      index = (index - 1 + images.length) % images.length;
      showImage(index);
    });

    next.addEventListener("click", () => {
      index = (index + 1) % images.length;
      showImage(index);
    });

    setInterval(() => {
      index = (index + 1) % images.length;
      showImage(index);
    }, 5000);
  </script>
</body>
</html>
