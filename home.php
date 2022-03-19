<?php
require_once('view/header.php');
?>
<div class="input">
    <form action="write.php" method="POST">
        <textarea name="description" cols="30" rows="2"></textarea>
        <button type="submit">ENTER</button>
    </form> 
</div>
   
<?php
require_once('/view/bottom.php');
?>