<?php
for($i=1;$i<=30;$i++){
    setcookie("colorlink[$i]", '', time()-3600);
}


header("Location: index1.php");
?>