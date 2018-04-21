<?php require ( "assets/php/controllers/login_functions.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login - easyIT</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Fonts and icons     -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="assets/css/login/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/login/login-register.min.css" rel="stylesheet" />
    <link href="assets/css/particles/particles-js.min.css" rel="stylesheet" />
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
        .modal-content {
            margin-top: 30%;
        }
    </style>
</head>

<body>
    <div id="particles-js">
        <div class="container">
            <div class="modal show login" id="loginModal">
                <div class="modal-dialog login animated">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">easyIT - Login</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box">
                                <div class="content">
                                    <div class="error"></div>
                                    <div class="form loginBox">
                                        <form method="post" accept-charset="UTF-8">
                                            <input id="loginUsername" class="form-control" type="text" placeholder="Username" name="Username">
                                            <input id="loginPassword" class="form-control" type="password" placeholder="Password" name="loginPassword">
                                            <input id="loginUser" class="btn btn-default btn-login" type="button" value="Login">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="content registerBox" style="display:none;">
                                    <div class="form">
                                        <form accept-charset="UTF-8">
                                            <input id="registerUsername" class="form-control" type="text" placeholder="Username" name="registerUsername">
                                            <input id="registerName" class="form-control" type="text" placeholder="Name" name="registerName">
                                            <input id="registerPassword" class="form-control" type="password" placeholder="Password" name="registerPassword">
                                            <input id="registerPasswordConfirmation" class="form-control" type="password" placeholder="Repeat Password" name="registerPasswordConfirmation">
                                            <input id="registerUser" class="btn btn-default btn-register" type="button" value="Create">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="forgot login-footer">
                                <p><span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                                    ?</span>
                                </p>
                            </div>
                            <div class="forgot register-footer" style="display:none">
                                <p><span>Already have an account?</span>
                                    <a href="javascript: showLoginForm();">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="assets/js/login/login-register.min.js" type="text/javascript"></script>
<script src="assets/js/particles/particles.min.js" type="text/javascript" defer="defer"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

</html>