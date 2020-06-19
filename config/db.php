<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "bookshop";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connected failed ". $conn->connect_error);
}


class BookInfo{
    public function getBookInfo($conn){

        $sql = "SELECT id, title, type, genre, author, img , price, some_info, publishing, publishing_year FROM book_shop";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                echo "id: ". $row["id"]. "title: " . $row["title"]. "type of book: " . $row["type"]. "genre: " . $row["genre"].
                    "author: " . $row["author"]. "img : " . $row["img"]. "price : " . $row["price"]. "some info : " . $row["some_info"]
                    . "publishing : " . $row["publishing"]. "publishing_year : " . $row["publishing_year"];
            }
        }else{
            echo "0 results";
        }
        $conn->close();
    }

}
