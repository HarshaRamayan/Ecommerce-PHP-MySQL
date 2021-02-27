<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
        <script src="login.js"></script>
        </head>
    <body>
        <!-- <form method="post" class="modal-body" id="modalbody">
                    Username <input type="email" name="user" id="username"><br>
                    Passwoord <input type="password" name="pass" id="password"><br>
                    <input type="submit" value="Submit" class="btn btn-primary">
                    </form> -->
            <!-- Modal -->
           <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
            </button> -->

            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                <form id="loginform">
                        Email <input type="email" name="user" id="email" class= "form-control"><br>
                        Passwoord <input type="password" name="pass" id="password" class= "form-control"><br>
                    <input type="submit" value="Login" class="btn btn-primary">
                    <div id="para"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="">Forgot Password?</a>
                    <a href="signup.php" type="button" class="btn btn-primary">SignUp</a>
                </div>
                </div>
            </div>
            </div>
            
                

               

    </body>
</html>