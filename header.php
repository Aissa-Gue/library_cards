<?php
include 'check.php';

//disable validation of form by the browser (header)
header('Cache-Control: no cache');
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP 5 / icons -->
    <link rel="stylesheet" href="bootstrap_v5.0.0-beta1/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="bootstrap_v5.0.0-beta1/bootstrap-icons-1.2.1/font/bootstrap-icons.css">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Scheherazade:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Scheherazade&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <title>Library Cards</title>
</head>

<body class="">
    <!-- Navbar -->
    <?php if ($sex == 0) { ?>
        <nav class="navbar navbar-expand-lg navbar-dark my_nav_bg_f sticky-top my_hidden" role="navigation">
        <?php } else { ?>
            <nav class="navbar navbar-expand-lg navbar-dark my_nav_bg_m sticky-top my_hidden" role="navigation">
            <?php } ?>

            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">برنامج البطاقات</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarList" aria-controls="navbarList" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarList">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="insert.php">إضافة</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="search.php">بحث</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="upload_form.php">قاعدة البيانات</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">تسجيل الخروج</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex">
                            <?php if ($sex == 0) { ?>
                                <a class="navbar-brand" href="#">
                                    مكتبة الإناث
                                </a>
                            <?php } else { ?>
                                <a class="navbar-brand" href="#">
                                    المكتبة المركزية
                                </a>
                            <?php } ?>

                            <img src="img/logo.jpg" alt="" width="45" height="45">

                        </li>
                    </ul>
                </div>
            </div>
            </div>
            </nav>
            <!-- END Navbar -->

            <script src="bootstrap_v5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
            <script src="bootstrap_v5.0.0-beta1/jquery-3.3.1.js"></script>
            <script type="text/javascript">
                // *** Change navbar active class ***/
                $(function() {
                    var href = window.location.href;
                    $('nav a').each(function(e, i) {
                        if (href.indexOf($(this).attr('href')) >= 0) {
                            $(this).addClass('active');
                        }
                    });
                });

                // *** BLOCK ENTER BUTTON ***/
                $(document).ready(function() {
                    $(window).keydown(function(event) {
                        if (event.keyCode == 13) {
                            event.preventDefault();
                            return false;
                        }
                    });
                });
            </script>

</body>

</html>