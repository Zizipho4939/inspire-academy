<?php
    include 'config.php'
?>

<?php

    if(isset($_GET['sign-in'])){
        $name = $_GET['name'];
        $password = $_GET['password'];

        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;

        $query = "SELECT * FROM learner WHERE name='$name' AND password='$password';";
        $res = mysqli_query($conn, $query);
        $data = mysqli_fetch_array($res);
        if($data['name'] == $name){
            header("Location: main.php"); 
        }
        else{
            echo "Incorrect details or you are not a registered user!";
            header("Location: Registration.php");
             
        }
    }

    if(isset($_POST['reg-save'])){
        $isRegistered = $_POST['isRegistered'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $id = $_POST['id'];
        $grade = $_POST['grade'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "$isRegistered"=="yes";

        if("$isRegistered"=="yes" or "$isRegistered"=="Yes" or "$isRegistered"=="YES"){
            $query = "INSERT INTO learner (ID, name, surname, Identity, email, grade, password) VALUES ('0','$name','$surname','$id','$email','$grade','$password');";
            $res = mysqli_query($conn, $query);
            if($res){
                session_start();
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
                header("Location: Course_registration.php");
            }
        }
        else{
            echo "You need to be registered at a school (full-time) or preparing for a deferred/supplementary exam to register!";
        }
    }

    if(isset($_POST['course-save'])){
        session_start();
        $name = $_SESSION['name'];
        $password = $_SESSION['password'];

        $query = "SELECT * FROM learner WHERE name='$name' AND password='$password';";
        $res = mysqli_query($conn, $query);
        $data = mysqli_fetch_array($res);

        $user_id = $data['ID'];

        if($data['grade'] == 6 or $data['grade'] == 7){
            $maths = $_POST['mathematics'];
            $ict = $_POST['ict'];

            

            $query1 = "INSERT INTO mathematics (ID, learner_id) VALUES ('0','$user_id ')";
            $res1 = mysqli_query($conn, $query1);
            $query2 = "INSERT INTO ict (ID, learner_id) VALUES ('0','$user_id ')";
            $res2 = mysqli_query($conn, $query2);
            if($res1 and $res2){
                header("Location: main.php");
            }
        }
        elseif($data['grade'] >= 8 and $data['grade'] <= 12){
            $maths = $_POST['mathematics'];
            $ict = $_POST['ict'];
            $physical_science = $_POST['Physical_science'];
            $accounting = $_POST['Accounting'];

            if(isset($_POST['mathematics'])){
                $query1 = "INSERT INTO mathematics (ID, learner_id) VALUES ('0','$user_id ')";
                $res1 = mysqli_query($conn, $query1);
            }
            if(isset($_POST['ict'])){
                $query2 = "INSERT INTO ict (ID, learner_id) VALUES ('0','$user_id ')";
                $res2 = mysqli_query($conn, $query2);
            }
            if(isset($_POST['Physical_science'])){
                $query3 = "INSERT INTO physical_science (ID, learner_id) VALUES ('0','$user_id ')";
                $res3 = mysqli_query($conn, $query3);
            }
            if(isset($_POST['Accounting'])){
                $query4 = "INSERT INTO accounting (ID, learner_id) VALUES ('0','$user_id ')";
                $res4 = mysqli_query($conn, $query4);
            }

            header("Location: main.php");
        }
        
    }

    if(isset($_POST['delete-account'])){
        session_start();
        $name = $_SESSION['name'];
        $password = $_SESSION['password'];

        $query = "DELETE FROM learner WHERE name='$name' AND password='$password';";
        $res = mysqli_query($conn, $query);
        if($res){
            header("Location: index.php");
        }
                

    }


?>