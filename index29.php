<?php
session_start();
$id = $_GET['id'];
$more = $id+1;
if(!empty($_SESSION)){
    header("Refresh: 2; url=index$more.php?id=$more");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="genius"></div>
    
    <?php 
    echo "<form method='POST' action='check.php?id=$id'>";
    ?>
        <h1>Функциональный подход</h1>
            <table>
                <tr>
                    <td>предусматривает четкое закрепление за каждой структурной единицей набора функций</td>
                    <td><input type="radio" name="v1" value='verno'></td>
                    
                </tr>
                <tr>
                    <td>состояние, позволяющее избежать повреждение в момент совершения ошибки</td>
                    <td><input type="radio" name="v1"></td>
                </tr>
                <tr>
                    <td>независимая оценка программных продуктов и процессов, проводимая уполномоченным лицом, с целью оценить их соответствие требованиям.</td>
                    <td> <input type="radio" name="v1"></td>
                </tr>
            </table>
            <?php
                $anw = $_SESSION['error'];
                $color = $_SESSION['color'];   
                
                session_destroy();
                $colorlink = $_COOKIE['colorlink'];
                echo "<div style='background: $color; padding: .5em; color: white; margin-bottom: 1em;'>$anw</div>";
                
            ?>
        <button type="submit" class="sub">Ответить</button>
        <div class='links'>
            <a href='index1.php?id=1' style='background:<?=$colorlink[1]?>'>1</a>
            <a href='index2.php?id=2' style='background:<?=$colorlink[2]?>'>2</a>
            <a href='index3.php?id=3' style='background:<?=$colorlink[3]?>'>3</a>
            <a href='index4.php?id=4' style='background:<?=$colorlink[4]?>'>4</a>
            <a href='index5.php?id=5' style='background:<?=$colorlink[5]?>'>5</a>
            <a href='index6.php?id=6' style='background:<?=$colorlink[6]?>'>6</a>
            <a href='index7.php?id=7' style='background:<?=$colorlink[7]?>'>7</a>
            <a href='index8.php?id=8' style='background:<?=$colorlink[8]?>'>8</a>
            <a href='index9.php?id=9' style='background:<?=$colorlink[9]?>'>9</a>
            <a href='index10.php?id=10' style='background:<?=$colorlink[10]?>'>10</a>
            <a href='index11.php?id=11' style='background:<?=$colorlink[11]?>'>11</a>
            <a href='index12.php?id=12' style='background:<?=$colorlink[12]?>'>12</a>
            <a href='index13.php?id=13' style='background:<?=$colorlink[13]?>'>13</a>
            <a href='index14.php?id=14' style='background:<?=$colorlink[14]?>'>14</a>
            <a href='index15.php?id=15' style='background:<?=$colorlink[15]?>'>15</a>
            <a href='index16.php?id=16' style='background:<?=$colorlink[16]?>'>16</a>
            <a href='index17.php?id=17' style='background:<?=$colorlink[17]?>'>17</a>
            <a href='index18.php?id=18' style='background:<?=$colorlink[18]?>'>18</a>
            <a href='index19.php?id=19' style='background:<?=$colorlink[19]?>'>19</a>
            <a href='index20.php?id=20' style='background:<?=$colorlink[20]?>'>20</a>
            <a href='index21.php?id=21' style='background:<?=$colorlink[21]?>'>21</a>
            <a href='index22.php?id=22' style='background:<?=$colorlink[22]?>'>22</a>
            <a href='index23.php?id=23' style='background:<?=$colorlink[23]?>'>23</a>
            <a href='index24.php?id=24' style='background:<?=$colorlink[24]?>'>24</a>
            <a href='index25.php?id=25' style='background:<?=$colorlink[25]?>'>25</a>
            <a href='index26.php?id=26' style='background:<?=$colorlink[26]?>'>26</a>
            <a href='index27.php?id=27' style='background:<?=$colorlink[27]?>'>27</a>
            <a href='index28.php?id=28' style='background:<?=$colorlink[28]?>'>28</a>
            <a href='index29.php?id=29' style='background:<?=$colorlink[29]?>'>29</a>
            <a href='index30.php?id=30' style='background:<?=$colorlink[30]?>'>30</a>
            <a href="ref.php" style='background: red;'>Заного</a>
        </div>
    </form>

    <div class="genius2"></div>


    
</body>
</html>