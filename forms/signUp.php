<?php
require_once "../config/Database.php";

session_start();
if (isset($_SESSION['user'])) {
    header('Location: ../project.php');
    return;
}

if (isset($_POST['register'])) {
    header('Content-Type: application/json');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = 'insert into user(username, password, email) values("' . $username . '", "' . $password . '", "'. $email . '");';
    if (Database::executeData($sql)) {
        echo json_encode(array('message'=>'success'));
        $_SESSION['user'] = array(
            'username' => $username
        );
        return;
    }else{
        echo json_encode(array('message'=>'Error in registration'));
        return;
    }
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
            background-image: url("https://i.pinimg.com/736x/23/46/ca/2346ca2662fdb6071b4e3bcb26975b75.jpg");
            background-size: cover;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            padding: 16px;
            background-image: url("https://www.forumdaily.com/wp-content/uploads/2018/05/Depositphotos_73146765_m-2015.jpg");
            border-radius: 15px;width: 400px;height: 610px;
           margin-left: 450px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            border-radius: 7px;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .button-registration {
            background-color: blue;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            border-radius: 8px;
            height: 45px;
        }

        .registerbtn:hover {
            opacity: 1;
        }


        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>
    <a class="" href="project.php" style="color: saddlebrown; font-size: 30px; text-decoration: none; margin-top: 23px; margin-left: 170px; position: absolute;  ">Bookshop</a>

    <form action="/action_page.php">
    <div class="container">
        <h1>Registration form</h1>
        <hr>

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="User name" name="uname" id="uname" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Password" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <p>Already have an account? <a href="signIn.php">Sign in</a>.</p>
        <button type="button" class="button-registration">Register</button>
    </div>

    <script>
        $('document').ready(function(){
            $('.button-registration').click(function(){
                if ($('#psw').val() != $('#psw-repeat').val()) {
                    alert('Passwords do not match')
                }else{
                    $.post('signUp.php', {
                        register: 'register', 
                        username: $('#uname').val(), 
                        email: $('#email').val(),
                        password: $('#psw').val()
                    }).done(function(msg){
                        if (msg['message'] == 'success') {
                            alert('Successfully registered');
                            location.reload();
                        }else{
                            alert(msg['message']);
                        }
                    });
                }
            });
        });
    </script>
</form>

</body>
</html>
