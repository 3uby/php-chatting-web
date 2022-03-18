<?php $name=$_POST['name'];
$id=$_POST['id'];
$pw=$_POST['pw'];
$conn = mysqli_connect("localhost:3306","user","0000","chat_db") or die ("Can't access DB");
// 중복검사
$sql = "SELECT * FROM user_db WHERE user_id ='{$id}'";
$result = mysqli_query($conn, $sql);
$row_cnt = $result->num_rows;
print_r($row_cnt);
if($row_cnt >= 1){
    ?>
     <script>
        alert("중복아이디가 있습니다");
        location.href = "./view/signUp.html";
    </script>
     <?php
}
else{

// 가입
$query = "insert into user_db (user_name,user_id,user_pw) values('".$name."','".$id."','".$pw."')";
$result=mysqli_query($conn,$query);
// 값가져온거 
$row = mysqli_fetch_array($result);

if(!$result) 
{?>
    <script> alert('회원가입이 완료되었습니다.'); location.href=".."; </script> 
<?php
} else {?>
    <script> alert('회원가입에 실패했습니다.\n다시 시도해 주세요.'); location.href=".."; </script>
<?php }
}
?>