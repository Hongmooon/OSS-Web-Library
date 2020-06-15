<!DOCTYPE html>
<html>
<head>
        <title>도서 추가</title>
        
        <style>
        </style>
</head>
<body>
    <form method="post">
        <input type="text" name="Title" placeholder="제목"><br>
        <input type="text" name="Writer" placeholder="저자"><br>
        <input type="text" name="Publisher" placeholder="출판사"><br>
        <input type="text" name="Date" placeholder="날짜"><br><br>
        <input type="submit" name= "ok" value="추가">
    </form>
</div>
</body>
</html>

<?php
$conn = mysqli_connect('db', 'root', '280', 'oss');

if(isset($_POST['ok'])) { add(); }

function add() {
    global $conn;
$sql = "INSERT INTO Books (Title, Writer, Publisher, State, Date)
values (
'{$_POST['Title']}',
'{$_POST['Writer']}',
'{$_POST['Publisher']}',
'loanable',
'{$_POST['Date']}')
";

$res = mysqli_query($conn, $sql);
}
?>