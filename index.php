<?php 

    include("signup.php");
    include("function.php");

    if(empty($_SESSION['email'])){
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html>
    <title>Home</title>
    
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

        /************************* Logout button Index.php  ************************/
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

        /************************* Deposit, Withdraw and statement button Index.php  ************************/

        .button .btn{
            width: 200px;
            height: 150px;
            margin-top: 300px;
            margin-left: 250px;
            font-family: monospace;
            font-size: 30px;
            border-radius: 8px;
            text-align: center;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;

        }
        
        .button .btn:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        
        .button .btn a{
            text-decoration: none;
            
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
                
                <!-------------------- Logout button -------------------->
                <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
                    <div class = "nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION['success'])): ?>
                            <div class = "error success">
                                <h3>
                                    <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                    ?>
                                </h3>
                            </div>
                        <?php endif ?>

                        <?php if(isset($_SESSION["email"])): ?>
                            <button class = "btn btn-danger"><a href="index.php?logout='1'">Logout</a></button>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </nav>
            
        
<!----------------------------------- Main layout of bank --------------------------------------->
        
        <div class = "main-page">
            
            <div class = "button">
                <strong>
                    <button type = "submit" class = "btn btn-primary"><a href = "deposit.php">Deposit</a></button>
                    <button type = "submit" class = "btn btn-primary"><a href = "withdraw.php">Withdraw</a></button>
                    <button type = "submit" class = "btn btn-primary"><a href = "statement.php">Statement</a></button>
                </strong>
            </div>
        </div>
    </body>
</html>