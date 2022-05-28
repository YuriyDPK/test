<?php
session_start();
$id = $_GET['id'];

if(!empty($_POST['v1'])){
    $anw = $_POST['v1'];

    if($anw=='verno'){
        setcookie("colorlink[$id]",'green');
        $_SESSION['color'] = 'green';
        $_SESSION['error'] = 'Ответ верный';
    }else{
        setcookie("colorlink[$id]",'red');
        $_SESSION['color'] = 'red';
        $_SESSION['error'] = 'Ответ не верный';
    }
}else{
    
    $_SESSION['color'] = 'red';
    $_SESSION['error'] = 'Выберите ответ!';
}


header("Location: index$id.php?id=$id");
?>