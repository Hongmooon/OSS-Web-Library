<!DOCTYPE html>
<html>
	<head>
	</head>
	<body><center>
	<div id = "Booklist">
        <?php

		$conn = mysqli_connect('db', 'root', '280', 'oss');

        if(isset($_POST['loan'])) { loan(); }
        else if (isset($_POST['return_'])) { return_(); }

        function loan() {
            global $conn;
            $loan = "update Books set State = 'loaned', User = '{$_POST['user']}' where Id = {$_POST['num']}";
            $res = mysqli_query($conn, $loan);
            echo "{$_POST['user']}님에게 대출 되었습니다.";
        }

        function return_() {
            global $conn;
            $return_ = "update Books set State = 'loanable', User = '' where Id = {$_POST['num']}";
            $res = mysqli_query($conn, $return_);
            echo "반납 되었습니다.";
        }
        ?>
</div>

<br>
    <button onclick="location.href='admit.php';">확인</button>
	</center></body>
</html>
