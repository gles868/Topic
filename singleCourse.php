<?php 
try {
	require_once("connectced101g3_test.php");
	$sql = "select * from course where courseNo = ? ";
	$allcourse = $pdo->prepare($sql);
	$allcourse->bindValue(1, $_GET["courseNo"]);
    $allcourse->execute();
    $courseRow = $allcourse->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統錯誤, 請通知系統維護人員<br>";
}    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <link href="./css/singleCourse.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./js/course/fullCalnedar/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <title>單一課程</title>
</head>

<body>
    <header>
        <nav>
            <div class="menu_toggle">
                <input type="checkbox">
                <div class="logo">
                    <a href="index.html"><img src="./img/logo.png"></a>
                </div>
                <ul class="nav">
                    <li><a href="course.html">課程總覽</a></li>
                    <li><a href="teacher.html">教師總覽</a></li>
                    <li>
                        <a href="index.html"><img src="./img/logo.png"></a>
                    </li>
                    <li><a href="mall.html">商城</a></li>
                    <li><a href="game.html">小遊戲</a></li>
                </ul>
                <div class="ham">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-right">
                    <li><a href="member.html"><i class="fas fa-user-circle fa-lg"></i></a></li>
                    <li><a href="cart.html"><i class="fas fa-shopping-cart fa-lg"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>

   

    <main class="main">

	 <section class="course_info">
            <div class="course_card_block">
                <img class="course_card" src="<?=$courseRow["courseImg"]?>" alt="" class="card">
                <img class="light" src="./img/course_cards/singel_class/light.png" alt="">
            </div>
            <div class="info_block">
                <p class="course_name"> <?=$courseRow["courseName"]?> </p>
                <p class="course_content"> <?=$courseRow["courseDescription"]?> </p>
                <img class="white_bg" src="./img/course_cards/white-bg01.png" alt="">

            </div>
        </section>



        <section class="calendar">
            <div id='calendar'></div>

        </section>

        <section class="teacher_info">
            <div class="teacher_img_block">
                <img class="teacher_bg" src="./img/course_cards/teacher/teacher-bg.png" alt="">
                <img class="teacher_img" src="./img/course_cards/teacher/teacher01.png" alt="">
                <a href="./registration.html">
                    <p class="register">立即報名</P>
                </a>
            </div>
            <div class="teacher_info_block">
                <img class="white_bg" src="./img/course_cards/white-bg01.png" alt="">
            </div>
        </section>

        <section class="accessory_container">
            <p class="title">課程所需道具</p>
            <div class="titleimg_block">
                <img class="white_title" src="./img/course_cards/title-white-line.png" alt="">
            </div>

            <div class="accessories_needed">

                <div class="single_accessory">
                    <img src="./img/course_cards/accessory/p1.png" alt="">
                    <p class="name">貝爾法師帽</p>
                </div>
                <div class="single_accessory">
                    <img src="./img/course_cards/accessory/p2.png" alt="">
                    <p class="name">愛的寶石</p>

                </div>
                <div class="single_accessory">
                    <img src="./img/course_cards/accessory/p3.png" alt="">
                    <p class="name">魔力技能書</p>

                </div>

            </div>

        </section>

        <section class="course_container">
            <p>其他課程</p>
            <div class="titleimg_block">
                <img class="white_title" src="./img/course_cards/title-white-line.png" alt="">
            </div>

            <div class="course_cards">

                <div class="card">
                    <p class="course_title">光劍術</p>
                    <div class="center-content">
                        <div class="heart">
                            <div class="heart-inner"></div>
                        </div>
                    </div>
                    <div class="front">
                        <img class="front_card" src="./img/course_cards/course_01.png" alt="">
                    </div>
                    <div class="back">
                        <img class="back_card" src="./img/course_cards/card_back.png" alt="">
                        <p class="course_price">$4800</p>
                        <p class="course_class">屬性：攻擊型</p>
                    </div>
                </div>

                <div class="card">
                    <p class="course_title">光劍術</p>
                    <div class="center-content">
                        <div class="heart">
                            <div class="heart-inner"></div>
                        </div>
                    </div>
                    <div class="front">
                        <img class="front_card" src="./img/course_cards/course_01.png" alt="">
                    </div>
                    <div class="back">
                        <img class="back_card" src="./img/course_cards/card_back.png" alt="">
                        <p class="course_price">$4800</p>
                        <p class="course_class">屬性：攻擊型</p>
                    </div>
                </div>

                <div class="card">
                    <p class="course_title">光劍術</p>
                    <div class="center-content">
                        <div class="heart">
                            <div class="heart-inner"></div>
                        </div>
                    </div>
                    <div class="front">
                        <img class="front_card" src="./img/course_cards/course_01.png" alt="">
                    </div>
                    <div class="back">
                        <img class="back_card" src="./img/course_cards/card_back.png" alt="">
                        <p class="course_price">$4800</p>
                        <p class="course_class">屬性：攻擊型</p>
                    </div>
                </div>

            </div>


        </section>

    </main>



    <footer>
        <p>copyright©2020 CED101_G3 麻瓜特訓班.All Rights Reserved</p>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="./js/course/fullCalnedar/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="./js/course/singleCourse.js"></script>

    <script>
        // $(window).scroll(function () {
        //     if ($(this).scrollTop() > 60) {
        //         $("header").addClass("-active");
        //     } else {
        //         $("header").removeClass("-active");
        //     }
        // });

        

    </script>
</body>

</html>