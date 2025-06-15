<!DOCTYPE html>
<html>
<head>
    <title>Simple Greeting</title>
</head>
<body>
    <h1>Simple Greeting Page</h1>
    
    <!-- Simple form -->
    <form method="GET">
        <!-- Name -->
        <label>Your Name:</label>
        <input type="text" name="name">
        <!-- Age -->
         <label>Your Age:</label>
        <input type="number" name="age">
        <!-- Email -->
        <label>Your Email:</label>
        <input type="email" name="email">
        <button type="submit">Submit</button>
    </form>
         
    <?php
    // Check if name was entered
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<h2>Hello, $name!</h2>";
    }else {
    echo "<p style='color:red;'>Please enter your name.</p>";
    }
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        echo "<h2>Your age is $age!</h2>";
    }
    else {
    echo "<p style='color:red;'>Please enter your age.</p>";
    }
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
        echo "<h2>Email: $email!</h2>";
    }else {
    echo "<p style='color:red;'>Please enter your email.</p>";
    }
   
    echo "<p><strong>Your IP:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>";
    echo "<p><strong>Your Browser:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
    echo "<p><strong>Current Page:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";
    ?>

</body>
</html>