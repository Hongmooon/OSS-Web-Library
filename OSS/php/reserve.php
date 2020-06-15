<!DOCTYPE html>
<html>
	<head>
	</head>
	<body><center>

        <?php

		$conn = mysqli_connect('db', 'user', '', 'oss');

        $sql = "select State from Books where Id = {$_POST['num']}";

        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($res)){
            if($row['State']==='loaned' || $row['State']==='reserved') { echo "이미 대출/예약 중인 도서입니다.";}
            else {
                $reserve = "update Books set State = 'reserved', User = '{$_POST['user']}' where Id = {$_POST['num']}";
                $rsv = mysqli_query($conn, $reserve);
                if($rsv) echo "예약되었습니다.";
                else echo "예약에 실패했습니다.";
            }
        }

        ?>
</div>

<br><br>
    <button onclick="location.href='user.php';">확인</button>
	</center></body>
</html>