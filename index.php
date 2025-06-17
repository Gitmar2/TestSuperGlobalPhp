<!DOCTYPE html>
<html>
<head>
    <title>Simple Greeting</title>
    <style>
        .error { color: red; }
        .info { margin-top: 20px; border-top: 1px solid #ccc; padding-top: 10px; }
    </style>
</head>
<body>
    <h1>Simple Greeting Page</h1>
    
    <!-- Simple form -->
    <form method="GET">
        <!-- Name -->
        <label>Your Name:</label>
        <input type="text" name="name" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>">
        <br>
        <!-- Age -->
        <label>Your Age:</label>
        <input type="number" name="age" value="<?php echo isset($_GET['age']) ? htmlspecialchars($_GET['age']) : ''; ?>">
        <br>
        <!-- Email -->
        <label>Your Email:</label>
        <input type="email" name="email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
         
    <?php
    // Function to get real IP even behind proxy/ngrok
    function getRealIP() {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $_SERVER['REMOTE_ADDR'];
    }

    // Display submitted data
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo '<div class="info">';
        
        // Name
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            echo "<h2>Hello, " . htmlspecialchars($_GET['name']) . "!</h2>";
        } else {
            echo "<p class='error'>Please enter your name.</p>";
        }
        
        // Age
        if (isset($_GET['age']) && !empty($_GET['age'])) {
            echo "<h2>Your age is " . htmlspecialchars($_GET['age']) . "!</h2>";
        } else {
            echo "<p class='error'>Please enter your age.</p>";
        }
        
        // Email
        if (isset($_GET['email']) && !empty($_GET['email'])) {
            echo "<h2>Email: " . htmlspecialchars($_GET['email']) . "!</h2>";
        } else {
            echo "<p class='error'>Please enter your email.</p>";
        }
        
        // IP Address
        echo "<p><strong>Your IP:</strong> " . getRealIP() . "</p>";
        
        // Browser Info
        echo "<p><strong>Your Browser:</strong> " . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . "</p>";
        
        // Current URL
        echo "<p><strong>Current URL:</strong> " . htmlspecialchars($_SERVER['REQUEST_URI']) . "</p>";
        
        echo '</div>';
    }
    ?>
</body>
</html>