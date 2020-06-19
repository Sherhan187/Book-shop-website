<!DOCTYPE html>
<html>
<head>
    <title>Bookshop</title>
    <script src="star_rating.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="projectm.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="project.php" style="color: blue;">Bookshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Genres of Books
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action and Adventure</a>
                        <a class="dropdown-item" href="#">Anthology</a>
                        <a class="dropdown-item" href="#">Classic</a>
                        <a class="dropdown-item" href="#">Comic and Graphic Novel</a>
                        <a class="dropdown-item" href="#">Crime and Detective</a>
                        <a class="dropdown-item" href="#">Drama</a>
                        <a class="dropdown-item" href="#">Fairy Tale</a>
                        <a class="dropdown-item" href="#">Fan-Fiction</a>
                        <a class="dropdown-item" href="#">Fantasy</a>

                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="mainbook.php">More</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">&emsp;New&emsp;</a>  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bestellers&emsp;</a>  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Coming soon&emsp;</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 13px; color:white; margin-left: 400px;">
                        Sign in
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: 400px;">
                        <a class="dropdown-item" href="forms/signIn.php">Sign in</a>
                        <a class="dropdown-item" href="forms/signUp.php">Sign up</a>
                        <a class="dropdown-item" href="forms/signOut.php">Sign out</a>
                    </div>
                </li>

            </ul>

            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-primary mr-sm-4" type="button">Cart</button>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        <?php
        include "config/db.php";
        require_once "config/Database.php";
        $bookinfo = Database::getData("SELECT * FROM book_info");
        foreach ($bookinfo as $info):?>


            <div class="sol-sm-3">

                <img src="<?php echo $info['img']; ?>" style="width: 300px" >

            </div>


        <?php endforeach; ?>
    </div>
</div>



</body>
</html>