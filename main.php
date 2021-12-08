<?php
    include 'config.php'
?>

<html>
    <head>
        <title>Inspire Academy</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        
        <div class="form">
            <div class="inspire-academy-name-home">
                <b><h1>INSPIRE ACADEMY INITIATIVE</h1></b>
            </div>

            <?php
            session_start();
            $name = $_SESSION['name'];
            $password = $_SESSION['password'];
            ?>

            <div class="inspire-academy-welcome-message">
                <b><h3>Welcome <?php echo $name; ?>, choose the option you want to execute: </h3></b>
            </div>

            <div class="home-options">
                <a href="Profile.php">Profile</a>
            </div>
            
        </div>
        
    </body>
</html>