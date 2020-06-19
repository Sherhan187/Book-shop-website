<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: forms/signIn.php');
    return;
}
?>

<!DOCTYPE html>
<html xmlns:http="http://www.w3.org/1999/xhtml">
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
                <a class="navbar-brand" href="#" style="color: blue;">Bookshop</a>
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

      

<div class="slideshow-container-fluid">
  <div class="mySlides1">
    <div class="numbertext">1 / 4</div>
    <img  height="500px" src="https://journal.homemania.ru/media/editor/cached/81ceaa34b16593ca61479a3d4dcb2ec4a41a97c8ea947111f23257e3c6f88312_1200_1200.jpeg" style="width:100%">
    <div class="text1">Welcome to the Bookshop</div>
  </div>

  <div class="mySlides1">
    <div class="numbertext">2 / 4</div>
    <img  height="500px" src="https://www.bryantarchway.com/wp-content/uploads/2011/10/TRAVEL_UST-NEWYORK-BOOKS_1_LA1.jpg" style="width:100%">
 <div class="text1" >If you like the atmosphere of the library</div>
  </div>

  <div class="mySlides1">
    <div class="numbertext">3 / 4</div>
    <img  height="500px" src="http://inf-proj.epoka.edu.al/projects/cen222_13/Oriola_Gjetaj/real.jpg" style="width:100%">
 <div class="text1">Then you are in the right place</div>
  </div>
  <div class="mySlides1">
    <div class="numbertext">4 / 4</div>
    <img  height="500px" src="https://i.pinimg.com/736x/23/46/ca/2346ca2662fdb6071b4e3bcb26975b75.jpg" style="width:100%">
  <div class="text1">This is an incredible feeling</div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
        
        

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <hr>

<div class="vertical-menu">
  <a href="#" class="active">Types of book</a>
  <a href="#">Fiction</a>
  <a href="#">Nonfiction</a>
</div>

<div class="vertical-menu">
  <a href="#" class="active">Format</a>
  <a href="#">Paperback</a>
    <a href="#"> Hardback</a>
      <a href="#">Mixed media product</a>
        <a href="#">more Format</a>
</div>

<div class="vertical-menu">
<a href="#" class="active">Price</a>
<a href="#">Free</a>
<a href="#">0$ - 10 $</a>
<a href="#">10$ - 50$</a>
<a href="#">50$ - ...$</a>
</div>

                  <div class="vertical-menu">
                      <a href="#" class="active">Publishing year</a>
                      <a href="#">19 - 20 century</a>
                      <a href="#">1900 - 1950 years</a>
                      <a href="#">1950 - 2000 years</a>
                      <a href="#">21 century</a>
                  </div>

                </div>
<div class="col-sm-10" >
                <div class="container-fluid">  <br>
                    <div class="row">
                <?php
                include "config/db.php";
                require_once "config/Database.php";
                $bookinfo = Database::getData("SELECT * FROM book_info");
                foreach ($bookinfo as $info):?>
                    <div class="card-deck col-lg-2 mb-2 ">
                        <a href="pagebooks.php" class="linkbooks" id="linkbook">
                            <div class="card border-dark " style="width: 152px; height: 28rem" >
                                <img class="card-img-top" src="<?php echo $info['img'];?>" style="width: 150px;">
                                <div class="card-body">
                                    <b ><?php echo $info['title'];?></b>
                                    <p class="card-text"> <?php echo $info['author'];?></p>
                                    <p class="card-text">$<?php echo $info['price'];?></small></p>
                                    <button type="button" class="btn btn-info">Info</button>
                                </div>
                            </div>
                    </div> &emsp;&emsp;<?php  endforeach;?>
                    </a>
                </div>
                </div>
                </div>

            </div>
        </div>
        <script>
            document.getElementById("linkbook").onclick = function() {myFunction()};

        </script>
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      

        <footer class="container-fluid bg-grey py-5">
          <div class="container">
             <div class="row">
                <div class="col-md-6">
                   <div class="row">
                      <div class="col-md-6 ">
                         <div class="logo-part">
                            <h2 class="logo-footer">Bookshop</h2>
                            <p>6887 Laurel Dr. Kazakhstan, TSE19989</p>
                            <p>Over the decades that have followed, we have grown to become an icon of the British cultural landscape, employing over 3000 superb booksellers across over 280 bookshops.
                            </p>
                         </div>
                      </div>
                      <div class="col-md-6 px-4">
                         <h6> About Store</h6>
                         <p>As the last surviving national bookshop chain, under the helmsmanship of Managing Director James Daunt.</p>
                         <a href="#" class="btn-footer"> More Info </a><br>
                         <a href="#" class="btn-footer"> Contact Us</a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="row">
                      <div class="col-md-6 px-4">
                         <h6> Help us</h6>
                         <div class="row ">
                            <div class="col-md-6">
                               <ul>
                                  <li> <a href="#"> Home</a> </li>
                                  <li> <a href="#"> About</a> </li>
                                  <li> <a href="#"> Service</a> </li>
                                  <li> <a href="#"> Team</a> </li>
                                  <li> <a href="#"> Help</a> </li>
                                  <li> <a href="#"> Contact</a> </li>
                               </ul>
                            </div>
                            <div class="col-md-6 px-4">
                               <ul>
                                  <li> <a href="#"> Cab Faciliy</a> </li>
                                  <li> <a href="#"> Fax</a> </li>
                                  <li> <a href="#"> Terms</a> </li>
                                  <li> <a href="#"> Policy</a> </li>
                                  <li> <a href="#"> Refunds</a> </li>
                                  <li> <a href="#"> Paypal</a> </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-6 ">
                         <h6> Newsletter</h6>
                         <div class="social">
                         </div>
                         <form class="form-footer my-3">
                            <input type="text"  placeholder="search here...." name="search">
                            <input type="button" value="Go" >
                         </form>
                         <p>Good</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
        </footer>


      </body>
</html>
