<?php 

    include("signup.php");

?>

<!DOCTYPE html>
<html>
    <title>Withdraw</title>
    
    <head>
        <!------------------- LINK TO STYLE.CSS FILE ----------------------------->
        <link rel = "stylesheet" href = "css/style.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
    </head>
    
    <style type = "text/css">
    
        /************************* Main Page Index.php  ************************/

        body{
            background-color: #76b852;
        }
    
    </style>
    
    <body>
        
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
                        <strong>Welcome, <?php echo $_SESSION['email']; ?></stronger>
                    </a>

                </div>
            </div>
        </nav>
    </body>
</html>