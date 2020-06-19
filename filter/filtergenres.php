<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
include "config/db.php";
require_once "config/Database.php";
$bookinfo = Database::getData("SELECT * FROM book_info");
foreach ($bookinfo as $info):?>
<?php
interface genres{

}
?>

<?php
class Classic implements genres{

}
?>

</body>
</html>