
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
<?php require_once "process.php" ?>
<?php

if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>
<div class="container">

<?php
$mysql = new mysqli('localhost', 'root', '123', 'bookshop') or die($mysql->error);
$result = $mysql->query("SELECT * FROM cruddata")or die($mysql->error);
//pre_r($result);
?>
<div class="row">
        <?php
        while ($row = $result->fetch_assoc()):?>
    <div class="card-deck col-lg-2 mb-2 ">
        <a href="pagebooks.php" class="linkbooks" id="linkbook">
            <div class="card border-dark " style="width: 170px; height: 28rem" >
                <img class="card-img-top" src="<?php echo $row['img'];?>" style="width: 150px;">
                <div class="card-body">
                    <b ><?php echo $row['title'];?></b>
                    <p class="card-text"> <?php echo $row['author'];?></p>
                    <p class="card-text">$<?php echo $row['price'];?></small></p>
                    <a href="crud.php?edit=<?php echo $row['id']; ?>"
                       class="btn btn-info">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id']; ?>"
                       class="btn btn-danger">Delete</a>
                </div>
            </div>
    </div> &emsp;&emsp;<?php endwhile; ?>
    </a>
</div>


<?php
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}
?>
<div class="row justify-content-center">
    <form action="process.php" method="POST">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control"
                   value="<?php echo $title?>" placeholder="Enter Title of book">
        </div>
        <div class="form-group">
            <label>Author name:</label>
            <input type="text" name="author" class="form-control"
                   value="<?php echo $author?>"placeholder="Enter name Author of book">
        </div>
        <div class="form-group">
            <label>Img:</label>
            <input type="text" name="img" class="form-control"
                   value="<?php echo $img ?>" placeholder="Link fro img">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="text" name="price" class="form-control"
                   value="<?php echo $price?>" placeholder="Enter price of book">
        </div>
        <div class="form-group">
           <button type="submit" name="save" class="btn btn-primary">Save</button>
        </div>

    </form>

</div>
</div>



</body>
</html>