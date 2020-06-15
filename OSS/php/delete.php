<?php

$conn = mysqli_connect('db', 'root', '280', 'oss');

$del = $_POST['num'];

$sql = "delete from Books where Id = $del";

$res = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h3><?php echo "".$del."번 도서가 삭제 되었습니다.";?></h3>
        <div><button onclick="location.href='admit.php';">확인</button></div>
    </body>
</html>


