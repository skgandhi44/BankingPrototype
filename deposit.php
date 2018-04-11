<?php 

    include("signup.php");

?>

<!DOCTYPE html>
<html>
    <title>Deposit</title>
    
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
    
    <style type = "text/css">
    
        /************************* Main Page Index.php  ************************/

        body{
            background-color: #76b852;
        }
        
        .btn{
            width: 100px;
            height: 35px;
            margin-right: 30px;
            margin-top: 10px;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }

        .btn a{
            color: white;

        }

        .btn a:hover{
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
                
                <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
                    <div class = "nav navbar-nav navbar-right">
                       <button class = "btn btn-danger"><a href = "index.php">Dashboard</a></button>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class = "login-page">
            <div class = "form">
        
                <form class = "login-form">

                    <h1 id = "header">Deposit</h1>

                    <input type = "number" name = "amount" placeholder = "Enter Amount">
                    <button id = "btn" type = "submit" name = "amount">Deposit</button>

                </form>
            </div>
        </div>
    </body>
</html>