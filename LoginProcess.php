<?php
$conn = mysqli_connect("localhost:3306","user","0000","chat_db");
//아이디 비교와 비밀번호 비교가 필요한 시점이다.
// 1차로 DB에서 비밀번호를 가져온다 
// 평문의 비밀번호와 암호화된 비밀번호를 비교해서 검증한다.
$id = $_POST['id'];
$password = $_POST['pw'];

// DB 정보 가져오기 
//db 어떤 로우에 user_id young_ho 
$sql = "SELECT * FROM user_db WHERE user_id ='{$id}'";

//result 이름 id 비밀번호
$result = mysqli_query($conn, $sql);

// 행 계수

//    print_r($row_cnt);

// 배열방식
$row = mysqli_fetch_array($result);
// $hashedPassword = $row['pw'];
$row['id'];
$passwordResult = $row['user_pw'];
// echo '$row : ';

//    print_r($row);
//    print_r($result);

// echo '<br>';

// foreach($row as $key => $r){
//     echo "{$key} : {$r} <br>";
// }
// echo $passwordResult;
// echo $row['user_pw'];
// foreach($row as $key){
//     echo "hello";
// }
// echo $row['id'];
// DB 정보를 가져왔으니 
// 비밀번호 검증 로직을 실행하면 된다.
// $passwordResult = password_verify($password, $hashedPassword);
if ($password == $passwordResult) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['userId'] = $id;
    print_r($_SESSION);
    echo $_SESSION['userId'];
    
?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "home.php";
    </script>
<?php
} else {
    // 로그인 실패 
?>
    <script>
        alert("로그인에 실패하였습니다");
        location.href = "Login.php";
    </script>
<?php
}
?>