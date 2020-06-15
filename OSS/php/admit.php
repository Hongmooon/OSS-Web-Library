<?php
$conn = mysqli_connect('db', 'root', '280', 'oss');
?>

<!DOCTYPE html>
<html>
<head>
        <title>관리자 페이지</title>
        
        <style>
        .list { border-collapse: collapse;}
        .list th, .list td {border: 1px solid black;}
        </style>
</head>
<body>
<center><h1>도서 관리 시스템 (관리자 페이지)</h1>
<div>
<li><a class="menuLink" href="add.php" target="_blank">도서 추가</a></li>
</div>
<br>

<div>
        <form action="search_admit.php" method="POST">
        <select name = "category">
		<option value="Title">제목</option>
		<option value="Writer">저자</option>
		<option value="Publisher">출판사</option>
        </select>
        <input type="text" name="search" placeholder="검색어를 입력해주세요.">
        <input type="submit" value="검색">
        </form>
</div>

<br>
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
                        <th width = "100">User</th>        
                </tr>
        </thead>
<tbody>
        <?php
        $sql = "select * from Books";
        $res = mysqli_query($conn, $sql);

        $i = 0;
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
</div></center>

</body>
</html>