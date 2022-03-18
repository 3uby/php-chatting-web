<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="home.html"><h1>채팅 어플</h1></a>
    <a href="./view/login.html">login</a>
    <a href="view/signUp.html">signUp</a>
    <br/>
    <input action="write.php" method="POST">
        <p>homehome 입력하는 칸입니다.</p>
        <button type="submit">확인</button>
    </form> 
    <br/>
    <?php
$dir    = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
 
// print_r($files1);
print_r($files2);
?>
</body>
</html>