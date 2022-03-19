<!DOCTYPE html>
<html>
    <body>
    <form action = "../LoginProcess.php" method = "post">
        <p style = "font-size: 10px;">ID</p> 
        <input Type = "text" Name = "id" size = "20" placeholder = "username">
        <br>
        <p style = "font-size: 10px;">PASSWORD</p>
        <!-- 3uby: ModifyType: text -> password  -->
        <input type = "password" name = "pw" size = "20" placeholder = "password">
        <button type = "submit"> login </button>
    </form>
    </body>
</html>