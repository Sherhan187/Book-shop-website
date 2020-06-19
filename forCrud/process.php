<?php

session_start();

$mysql = new mysqli('localhost', 'root', '123', 'bookshop');

$title = '';
$author = '';
$img = '';
$price = '';

if(isset($_POST['save'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $img = $_POST['img'];
    $price = $_POST['price'];

    $mysql->query("INSERT INTO cruddata (title,author,img,price) values ('$title','$author','$img','$price')")or
        die($mysql->error);

    $_SESSION['message'] = "Record had been saved";
    $_SESSION['msg_type'] = "success";
    header("location: forCrud/crud.php");
}

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysql->query("DELETE FROM cruddata WHERE id = $id")or die($mysql->error);

        $_SESSION['message'] = "Record had been deleted";
        $_SESSION['msg_type'] = "danger";
        header("location: forCrud/crud.php");
}
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];

        $result = $mysql->query("SELECT * FROM cruddata WHERE id = $id")or die($mysql->error);
        if (count($result)==1){
            $row = $result->fetch_array();
            $title = $row['title'];
            $author = $row['author'];
            $img = $row['img'];
            $price = $row['price'];
        }
    }
