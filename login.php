<?php 

    include("signup.php");
?>

<!DOCTYPE html>
<html>
    <title>Login</title>
    
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
        <!------------------------------ Nav bar -------------------------------------->
        <nav class = "navbar navbar-default navbar-fixed-top" id = "nav_holder">
            <div class = "container-fluid" >

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target = "#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class = "sr-only">Toggle</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    
                    <a class = "navbar-brand" href = "#">
                        <b><p>World Bank</p></b>
                    </a>
                    
                </div>
            </div>
        </nav>
        
        <div class = "login-page">
            <div class = "form">

                <!-------------------- INSIDE HTML BODY, PHP FORM START HERE -------------------------->

                <form class = "login-form" action = "login.php" method = "post">

                    <h1 id = "header">Login</h1>

                    <?php include("errors.php"); ?>
                    
                    <input type = "email" name = "email" placeholder = "Enter Email" autocomplete = "off" value = "<?php echo $email; ?>">
                    <input type = "password" name = "password_1" placeholder = "Enter Password">
    
                    <button id = "btn" type = "submit" name = "login">Sign In</button>

                    <br>

                    <p>
                        Not a member? <a href = "registration.php">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>