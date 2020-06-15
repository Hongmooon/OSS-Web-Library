<!DOCTYPE html>
<html>
<head>
    <title>도서 관리 시스템</title>
    <style>
    div {
        width: 70%;
        height: 300px; 
        border: 1px solid black;
        }
    div.left {
        width: 50%;
        float: left;
        box-sizing: border-box;
        background: blanchedalmond;
    }
    div.right {
        width: 50%;
        float: right;
        box-sizing: border-box;
        background: darkkhaki;
    }

    h3 {
        line-height: 200px;
    }
    </style>
</head>
<body>
<h1><center>도서 관리 시스템</center></h1><br>
<center><div>
<div class = left onclick="location.href='admit.php';"><center><h3>관리자 페이지</h3></center></div>

<div class = right onclick="location.href='user.php';"><center><h3>이용자 페이지</h3></center></div>
</div></center>
</body>
</html>