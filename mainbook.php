<!DOCTYPE html>
<html>
    <head>
        <title>Bookshop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="projectm.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                        <a class="dropdown-item" href="#">More</a>
                      </div>
                    </li>
                    <li class="nav-item">
          <a class="nav-link" href="#">&emsp;New&emsp;</a>  </li>
                    <li class="nav-item">
                <a class="nav-link" href="#">Bestellers&emsp;</a>  </li>
                <li class="nav-item">
             <a class="nav-link" href="#">Coming soon&emsp;</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 13px; color:white; margin-left: 400px;">
                Sign in
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: 400px;">
              <a class="dropdown-item" href="signupAndSignin/login-form.php">Sign in</a>
              <a class="dropdown-item" href="Register.html">Sign up</a>
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

        <div class="tab">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

            <button style="background-color: sandybrown; color: white;" class="tablinks" onclick="openCity(event, 'Main')" id="defaultOpen">Main page</button>
            <button style="background-color: blue; color: white;" class="tablinks" onclick="openCity(event, 'Fiction')" id="defaultOpen">Fiction books</button>

            <button class="tablinks" onclick="openCity(event, 'Fantasy')" id="defaultOpen">Fantasy</button>
            <button class="tablinks" onclick="openCity(event, 'Science Fiction')" id="defaultOpen">Science Fiction</button>
            <button class="tablinks" onclick="openCity(event, 'Historical Fiction')" id="defaultOpen">Historical Fiction</button>
            <button class="tablinks" onclick="openCity(event, 'Realistic Fiction')" id="defaultOpen">Realistic Fiction</button>
            <button class="tablinks" onclick="openCity(event, 'Fan Fiction')" id="defaultOpen">Fan Fiction</button>
            <button class="tablinks" onclick="openCity(event, 'Crime')" id="defaultOpen">Crime</button>
            <button class="tablinks" onclick="openCity(event, 'Mystery')" id="defaultOpen">Mystery</button>

            <button class="tablinks" onclick="openCity(event, 'Suspence')" id="defaultOpen">Suspence</button>
            <button class="tablinks" onclick="openCity(event, 'Horror')"  id="defaultOpen">Horror</button>
            <button class="tablinks" onclick="openCity(event, 'Classic')" id="defaultOpen">Classic </button>
            <button class="tablinks" onclick="openCity(event, 'Drama')" id="defaultOpen">Drama</button>
            <button class="tablinks" onclick="openCity(event, 'Romance')" id="defaultOpen">Romance</button>
            <button class="tablinks" onclick="openCity(event, 'Legend')" id="defaultOpen">Legend</button>
            <button class="tablinks" onclick="openCity(event, 'Mythology')" id="defaultOpen">Mythology</button>

            <button  style="background-color: blue; color: white;" class="tablinks" onclick="openCity(event, 'Non Fiction')">Non Fiction books</button>
            <button class="tablinks" onclick="openCity(event, 'Narrative non Fiction')">Narrative non Fiction</button>
            <button class="tablinks" onclick="openCity(event, 'Biography')">Biography</button>
            <button class="tablinks" onclick="openCity(event, 'Self Help-Book')">Self Help-Book</button>
            <button class="tablinks" onclick="openCity(event, 'Memoir')">Memoir</button>
            <button class="tablinks" onclick="openCity(event 'Text-Book')">Text-Book</button>
          </div>

        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>

        <div id="Main" class="tabcontent">
            <h3>Books</h3>
<br
            <div class="container-fluid">
                <div class="row">
                    <?php
                    include "config/db.php";
                    require_once "config/Database.php";
                    $bookinfo = Database::getData("SELECT * FROM book_info");
                    foreach ($bookinfo as $info):?>
                        <div class="card-deck col-lg-2 mb-3 col-md-6 ">
                            <a href="pagebooks.php" class="linkbooks">
                                <div class="card border-dark " style="width: 152px; height: 28rem" >
                                    <img class="card-img-top" src="<?php echo $info['img'];?>" style="width: 150px;">
                                    <div class="card-body">
                                        <b ><?php echo $info['title'];?></b>
                                        <p class="card-text"> <?php echo $info['author'];?></p>
                                        <p class="card-text">$<?php echo $info['price'];?></small></p>
                                        <button type="button" class="btn btn-info">Info</button>
                                    </div>
                                </div>
                        </div> &emsp;&emsp;&emsp;<?php  endforeach;?>
                    </a>
                </div>
            </div>

              <div id="Fiction" class="tabcontent">
                  <div class="container-fluid">
                      <div class="row">
                          <?php
                          include "config/db.php";
                          require_once "config/Database.php";
                          $bookinfo = Database::getData("SELECT * FROM book_info WHERE genre = 'Classic'");
                          foreach ($bookinfo as $info):?>

                              <div class="col-lg-2 col-md-12 mb-2 col-sm-12">
                                  <div class="card h-90">
                                      <img  class="card-img-top" src="<?php echo $info['img']; ?>" style="width: 150px">
                                      <div class="card-body">
                                          <h5 class="card-title"><?php echo $info['title']; ?></h5>
                                          <p class="card-author"><?php echo $info['author']; ?></p>
                                          <h5 class="card-price">$<?php echo $info['price']; ?></h5>
                                          <button type="button" class="btn btn-success">Buy</button>
                                          <button type="button" class="btn btn-info">Info</button>
                                      </div>
                                  </div>
                              </div>

                          <?php endforeach;?>

                      </div>
                  </div>
              </div>


        </body>
        </html>