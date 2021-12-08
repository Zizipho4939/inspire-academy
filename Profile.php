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

            <div class="inspire-academy-welcome-message">
                <b><h3>Profile page</h3></b>
            </div>
            <div class="user-details">
                <?php
                session_start();
                $name = $_SESSION['name'];
                $password = $_SESSION['password'];;
    
                $query = "SELECT * FROM learner WHERE name='$name' AND password='$password';";
                $res = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($res);

                $surname = $data['surname'];
                $id = $data['Identity'];
                $grade = $data['grade'];
                $email = $data['email'];


                echo "Name: $name<br />";
                echo "Surname: $surname <br />";
                echo "Identity: $id <br />";
                echo "Grade: $grade <br />";
                echo "Email: $email <br />";
                ?>
                <br />
                <br />
                If you want to delete the account give a valid reason! <br /> 

                <form action="CRUD.php" method="post">
                    <div class="form-input">
                        <input type="text" name="valid_reson" placeholder="State your reason!" class="inputs">
                    </div>
                    <div class="form-input">
                        <button type="submit" name="delete-account" class="save-button">Delete</button>
                    </div>
                </form>
                


            </div>
        </div>
        
    </body>
</html>