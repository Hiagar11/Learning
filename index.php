<?php
$arr = ['localhost','root','root','maket'];
$link = mysqli_connect($arr[0],$arr[1],$arr[2],$arr[3])
or die(mysqli_error($link));

$page = 3;
$from = $page * $_REQUEST['slide'];
$to = $from + $page;
$query = "SELECT * FROM slider LIMIT $from,$to";
$result=mysqli_query($link, $query) or die (mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
function dateFormat($date) {
    $str = explode('-',$date);
    $str = array_reverse($str);
    $str = implode('.',$str);
    return $str;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="container-fluid">
    <div class="row justify-content-start">
        <div class="col-1 offset-1">
            <img src="img/logo.png" alt="">
        </div>
    <div class="menu show col-2">
        <a class="menu-triger" href="#"></a>
        <div class="menu-popup">
            <a class="menu-close" href="#"></a>
            <ul>
                <li><a href="/">Услуги</a></li>
                <li><a href="/">Портфолио</a></li>
                <li><a href="/">Отзывы</a></li>
                <li><a href="/">Вакансии</a></li>
                <li><a href="/">Контакты</a></li>
            </ul>
            <div class="footer_menu">
                <div class="info_num">
                    <span>Ростов-на-Дону,Ленина, 21</span>
                    <p>8(863)243-15-10</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu alt_show col-auto">
            <ul>
                <li><a href="/">Услуги</a></li>
                <li><a href="/">Портфолио</a></li>
                <li><a href="/">Отзывы</a></li>
                <li><a href="/">Вакансии</a></li>
                <li><a href="/">Контакты</a></li>
            </ul>
    </div>
        <div class="info_num col">
            <p>8(863)243-15-10</p>
            <span>Ростов-на-Дону</span>
        </div>
    </div>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 fon">
                <div class="row">
                    <div class="col-6 info">
                        <h3 class="zagl">Рекламно-информационное агентство</h3>
                        <p>Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</p>
                        <input type="tel" maxlength="11" placeholder="Номер телефона">
                        <input type="button" value="Обратный звонок">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-12 news">
                <h3>Новости</h3>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-3 box-news">
                        <span class="date">
                            <?php
                            echo dateFormat($data[0]['date']);
                            ?>
                        </span>
                        <p>
                        <?php
                        echo $data[0]["content"];
                        ?>
                        </p>
                        <div class="row align-items-end">
                            <div class="col-xm-12 col-sm-10 col-md-8 col-lg-6">
                                <input type="button" value="Подробнее">
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-3 box-news">
                        <span class="date">
                            <?php
                            echo dateFormat($data[1]['date']);
                            ?>
                        </span>
                        <p>
                            <?php
                            echo $data[1]["content"];
                            ?>
                        </p>
                        <div class="row align-items-end">
                            <div class="col-xm-12 col-sm-10 col-md-8 col-lg-6">
                                <input type="button" value="Подробнее">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 box-news">
                        <span class="date">
                            <?php
                            echo dateFormat($data[2]['date']);
                            ?>
                        </span>
                        <p>
                            <?php
                            echo $data[2]["content"];
                            ?>
                        </p>
                        <div class="row align-items-end">
                            <div class="col-xm-12 col-sm-10 col-md-8 col-lg-6">
                                <input type="button" value="Подробнее">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 buttons">
                        <?php
                        function links($num) {
                            if ($_REQUEST['slide'] == $num) {
                                $class = 'active';
                            } else {
                                $class = '';
                            }
                            return "<a href=\"/?slide=$num\" id=\"$class\"></a>";
                        }
                        for ($i=0;$i<3;$i++) {
                            echo links($i);
                        }
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<footer>
<div class="container-fluid">
    <div class="row align-items-center footer">
        <div class="col-2 logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="col-8">
            <div class="row links justify-content-center">
                <div class="col-auto">
                    <a href="#">Услуги</a>
                </div>
                <div class="col-auto">
                    <a href="#">Порфтолио</a>
                </div>
                <div class="col-auto">
                    <a href="#">Отзывы</a>
                </div>
                <div class="col-auto">
                    <a href="#">Вакансии</a>
                </div>
                <div class="col-auto">
                    <a href="#">Контакты</a>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<?php
if (isset($_REQUEST['slide'])) {
    ?>
    <script>
        window.scrollTo(0,600);
    </script>
    <?php
}
?>
<script src="js/script_menu.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
