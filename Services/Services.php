<html>
<head>
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Portfolio Page</div>
        <ul class="nav-links">
          <li><a href="../index.html">Home</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="Services.php">services</a></li>
          <li><a href="../contact.php">contact</a></li>
          <li><a href="../projects/Projects.html">Projects</a></li>
        </ul>

        <div class="hamburger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        
    </nav>

    <h2>Our Services</h2>
    <p>Here are some of my skillsets and some services I can offer:</p>
    <ul>
        <li>Custom websites</li>
        <li>Mobile App Development</li>
        <li>Timetabling software (in the works)</li>
        <li>Database design</li>
    </ul>
</body>
</html>

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