<!DOCTYPE html>
<html>
	<head>
                <title>도서 검색</title>

                <style>
        .list { border-collapse: collapse;}
        .list th, .list td {border: 1px solid black;}
        </style>
        
	</head>
	<body>
	<center>
                
        <h4>삭제 하고 싶은 도서의 번호를 입력하세요.</h4>
<div>
	<form action = "delete.php" method="POST">
        <input type = "text" name="num" placeholder="번호 입력">
        <input type="submit" value="확인">
        </form>
</div>
<h4>상태를 변경하고 싶은 도서의 번호를 입력하세요.</h4>
<div>
        <form action = "modify.php" method="POST">
                <input type="text" name="num" placeholder="번호 입력">
                <input type="text" name = "user" placeholder="user의 이름 입력">
                <input type="submit" name="loan" value="대출하기">
                <input type="submit" name="return_" value="반납하기">
        </form>
</div>
<br>
    <button onclick="location.href='admit.php';">확인</button> 

        <div id = "Booklist">
<table>
        <thead>
                <tr>
                        <th width = "70">Num</th>
                        <th width = "400">Title</th>
                        <th width = "200">Author</th>
                        <th width = "120">Publisher</th>
                        <th width = "100">State</th>
                        <th width = "100">Date</th>        
                        <th width = "100">User</th>
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
                echo "<td width = 100>".$row['User']."</td>";
                echo "</tr>";
        }

        ?>
</tbody>
</table>
</div>

	</center></body>
</html>

