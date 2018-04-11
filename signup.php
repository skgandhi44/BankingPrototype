<?php

    session_start();

    // Database connections

    error_reporting(E_ERROR | E_WARNING | E_PASE | E_NOTICE);
    ini_set('display_errors', 1); 
    
    include("account.php");
    
    $db = mysqli_connect($hostname, $username, $password, $project);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    mysqli_select_db($db, $project);

    $firstname = "";
    $lastname = "";
    $email = "";
    $amount = "";
    $errors = array();

    // Inserting information into database table

    if(isset($_POST['registration'])){
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $amount = mysqli_real_escape_string($db, $_POST['amount']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password_confirm = mysqli_real_escape_string($db, $_POST['password_confirm']);
        
        // Checking if all input are not empty.
        if(empty($firstname)){
            array_push($errors, "Firstname is required!");
        }
        
        if(empty($lastname)){
            array_push($errors, "lasttname is required!");
        }
        
        if(empty($email)){
            array_push($errors, "Email is required!");
        }
        
        if(empty($amount)){
            array_push($errors, "Amount is required!");
        }
        
        if(empty($password)){
            array_push($errors, "Password is required!");
        }
        
        if($password != $password_confirm){
            array_push($errors, "Two password does not match!");
        }
        
        // if there is no error, it will save client into the database
        if(count($errors) == 0){
            $insert = "INSERT INTO client (firstname, lastname, email, amount, password) 
                    VALUES ('$firstname', '$lastname', '$email', '$amount', '$password')";
            
            mysqli_query($db, $insert);
            
            $_SESSION['email'] = $email;
            header('location: index.php');
        }
    }

    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password_1']);

        if(empty($email)){
            array_push($errors, "Email is required!");
        }

        if(empty($password)){
            array_push($errors, "Password is required!");
        }

        if(count($errors) == 0){
            $query = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($db, $query);

            if(mysqli_num_rows($result) == 1){
                $_SESSION['email'] = $email;
                header('location: index.php');

            } else {
                array_push($errors, "wrong username/password");
            }
        }
    }

        
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['email']);
        header('location: login.php');
    }

?>