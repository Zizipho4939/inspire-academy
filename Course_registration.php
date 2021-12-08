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
            <div class="inspire-academy-name">
                <b><h1>INSPIRE ACADEMY INITIATIVE</h1></b>
            </div>
            <div class="reg-name"><b>COURSE REGISTRATION</b></div>
            <form action="CRUD.php" method="post">
                <?php 
                session_start();
                $name = $_SESSION['name'];
                $password = $_SESSION['password'];
        
                $query = "SELECT * FROM learner WHERE name='$name' AND password='$password';";
                $res = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($res);

                if($data['grade'] == 6 or $data['grade'] == 7){
                    echo "<div class='form-check-box'>";
                        echo "Subject: <br />"; 
                        echo "<input type='checkbox' name='mathematics' value='mathematics' /> Mathematics <br />";
                        echo "<input type='checkbox' name='ict' value='ICT' /> ICT <br />";
                    echo "</div>";
                }
                elseif($data['grade'] >= 8 and $data['grade'] <= 12){
                    echo "<div class='form-check-box'>";
                        echo "Course: <br />"; 
                        echo "<input type='checkbox' name='mathematics' value='mathematics' /> Mathematics <br />";
                        echo "<input type='checkbox' name='ict' value='ICT' /> ICT <br />";
                        echo "<input type='checkbox' name='Physical_science' value='physical_science' /> Physical Science <br />";
                        echo "<input type='checkbox' name='Accounting' value='accounting' /> Accounting <br />";
                    echo "</div>";
                }
                else{
                    echo "You must be between grade 6 and 12 to register for a course!";
                }

                ?>
                <div class="form-input">
                    <button type="submit" name="course-save" class="save-button">Save</button>
                </div>
            </form>
        </div>
        
    </body>
</html>