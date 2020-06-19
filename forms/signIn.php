<?php
 require_once "../config/Database.php";

 session_start();
if (isset($_SESSION['user'])) {
    header('Location: ../project.php');
    return;
}

function haveAccount($acc){
    if(sizeof($acc) != 0){
        return true;
    } else{
        throw new Exception("Login or Password incorrect!");
    }
}



if (isset($_POST['login'])) {
    header('Content-Type: application/json');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = 'select * from user where username = "' . $username . '" and password = "' . $password . '";';
    $res = Database::getData($sql);

    try{
        haveAccount($res);
        session_start();
        $_SESSION['user'] = array(
            'username' => $username
        );
        // json
        echo json_encode(array('message'=>'success'));
        return;
    }
    catch(Exception $not){
        echo json_encode(array('message'=>'Login or password incorrect'));
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
            border-radius: 15px;width: 400px;height: 470px;
            margin-left: 450px; margin-top: 100px;
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

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .signin {
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

        .signin:hover {
            opacity: 1;
        }


        a {
            color: dodgerblue;
        }
    </style>
</head>
<body>

<form action="/action_page.php">
    <div class="container">
        <h1>Sign in form</h1>
        <hr>

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="User name" name="uname" id="uname" required>


        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Password" name="psw" id="psw" required>

        <hr>
        <p>Already have not an account? <a  href="signUp.php">Register</a>.</p>
        <p><a href="project.php" style="color: blue">Bookshop</a> </p>
        <button type="button" class="signin" id="button-login">Sign in</button>
    </div>
    <script>
        $('document').ready(function(){
            $('#button-login').click(function(){
                $.post('signIn.php', {login: 'login', username: $('#uname').val(), password: $('#psw').val()})
                .done(function(msg){
                    if (msg['message'] == 'success') {
                        alert('Successfully logged in');
                        location.reload();
                    }else{
                        alert(msg['message']);
                    }
                });
            });
        });
    </script>
</form>

</body>
</html>
