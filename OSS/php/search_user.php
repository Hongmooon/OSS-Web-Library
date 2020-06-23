<!DOCTYPE html>
<html>
	<head>
                <title>예약 페이지</title>

                <style>
        .list { border-collapse: collapse;}
        .list th, .list td {border: 1px solid black;}
        </style>
        
	</head>
	<body><center>
        <h4>대출을 예약 하고 싶은 도서의 번호를 입력하세요.</h4>
<div>
	<form action = "reserve.php" method="POST">
        <input type = "text" name="num" placeholder="번호 입력">
        <input type = "text" name="user" placeholder="user 입력">
        <input type="submit" value="확인">
        </form>
</div>
	<div id = "Booklist">
<table class = "list">
        <thead>
                <tr>
                        <th width = "70">Num</th>
                        <th width = "400">Title</th>
                        <th width = "200">Author</th>
                        <th width = "120">Publisher</th>
                        <th width = "100">State</th>
                        <th width = "100">Date</th>        
                </tr>
        </thead>
<tbody>
        <?php

		$conn = mysqli_connect('db', 'root', '280', 'oss');

		$category = $_POST['category'];
		$search = $_POST['search'];

		$sql = "select * from Books WHERE $category LIKE '%$search%'";

		$res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($res)) {
                echo "<tr align = center>";
                echo "<td width = 70>".$row['Id']."</td>";
                echo "<td width = 500>".$row['Title']."</td>";
                echo "<td width = 200>".$row['Writer']."</td>";
                echo "<td width = 120>".$row['Publisher']."</td>";
                echo "<td width = 100>".$row['State']."</td>";
                echo "<td width = 100>".$row['Date']."</td>";
                echo "</tr>";
        }
        ?>
</tbody>
</table>
</div>
</center>
	</body>
</html>