<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
<nav class="navbar">
        <div class="logo">Portfolio Page</div>
        <ul class="nav-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services/Services.php">services</a></li>
          <li><a href="contact.php">contact</a></li>
          <li><a href="projects/Projects.html">Projects</a></li>
        </ul>

        <div class="hamburger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        
    </nav>

    <h2>Contact Us</h2>
    <form action="process_contact.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        } else {
            // Process the form data (e.g., save to database, send email)
            // For demonstration, we'll just echo the data
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Message: $message<br>";
        }
    }
?>
</html>