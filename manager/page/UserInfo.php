<?php
require_once('../view/managerHeader.php');
$conn = mysqli_connect("localhost:3306","user","0000","chat_db");
$sql = "SELECT id,user_name,user_id FROM user_db";
$result = mysqli_query($conn,$sql);
?>
<form action="DeleteUser.php" method="post" id="frm">
<?php
if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_array($result)){
        echo $row['id'].":".$row['user_name'].":".$row['user_id']."<input type=\"checkbox\" name=\"check[]\" value=\"".$row['id']."\"";
        
        echo "<br><br>";
    }
}
?>
<button type="submit">삭제</button> 
</form>

<?php
require_once('/view/bottom.php');
?>