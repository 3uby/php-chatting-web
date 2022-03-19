<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chattingApp</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="nav">
    <ul class="">
        <li>
            <a href="/home.php"><div>채팅 어플</div></a>
        </li>
        <li>
            <a href="/page/BulletinBoard.php"><div>게시판</div></a>
        </li>
    </ul>
<?php
if(!isset($_SESSION['userId'])){
?>
    <a href="/page/Login.php">login</a>
    <a href="/page/signUp.html">signUp</a>
<?php
} else{
?>
    <div class="userInfo">
        <a href="/manager/ManagerHome.php"><?php echo $_SESSION['userId']?></a>
        <a href="#" onclick="logout()">로그아웃</a>
    </div>
<?php
}
?>
</div>
<script>
    function logout() {
        console.log("hello");
        const data = confirm("로그아웃 하시겠습니까?");
        if (data) {
            location.href = "logoutProcess.php";
        }
    }
</script>