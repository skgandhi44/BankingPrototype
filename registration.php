<?php include("signup.php"); ?>

<!DOCTYPE html>
<html>
    <title>Sign UP</title>
    
    <head>
        <!------------------- LINK TO STYLE.CSS FILE ----------------------------->
        <link rel = "stylesheet" href = "css/style.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel = "stylesheet" href = "css/style.css">
    </head>
    
    <script type = "text/javascript">
        
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
        
    </script>
    
    <body>
        <div class = "login-page">
            <div class = "form">
        
                <form class = "register-form" action = "registration.php" method = "POST">

                    <?php include('errors.php'); ?>

                    <input type = "text" name = "firstname" placeholder = "Enter Firstname" value = "<?php echo $firstname; ?>">
                    <input type = "text" name = "lastname" placeholder = "Enter Lastname" value = "<?php echo $lastname; ?>">
                    
                    <input type = "email" name = "email" placeholder = "Enter Email" value = "<?php echo $email; ?>">
                    <input type = "number" name = "amount" placeholder = "Deposit Amount" min = "50" value = "<?php echo $amount; ?>">
                    
                    <input type = "password" name = "password" placeholder = "Enter Password">
                    <input type = "password" name = "password_confirm" placeholder = "Confirm Password">

                    <button type = "submit" name = "registration">Sign Up</button>

                    <p>
                        Already a member? <a href = "login.php">Sign In</a>
                    </p>
                    
                </form>
            </div>
        </div>
    </body>
</html>