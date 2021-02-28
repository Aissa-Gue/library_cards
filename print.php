<?php
include 'header.php';
// GET values from preview.php / search.php
$stud_id = $_GET['stud_id'];
$soft_id = $_GET['soft_id'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$fname = $_GET['fname'];
$father = $_GET['father'];
$grandpa = $_GET['grandpa'];
$birthdate = $_GET['birthdate'];
$birthplace = $_GET['birthplace'];
$wali_fname = $_GET['wali_fname'];
$wali_lname = $_GET['wali_lname'];
$kinship = $_GET['kinship'];
$job = $_GET['job'];
$cultural_level = $_GET['cultural_level'];
$establishment = $_GET['establishment'];
$address = $_GET['address'];
$engagement_date = $_GET['engagement_date'];
$last_edit = $_GET['last_edit'];
$phone = $_GET['phone'];
$wali_phone = $_GET['wali_phone'];
$notes = $_GET['notes'];
?>


<body>
    <div class="container-fluid my_background_print pt-3">
        <?php if ($sex == 0) { ?>
            <div class="my_print_container_in logo_bg_in mb-2">
                <div class="row">
                    <div class="col-sm-12 ">
                        <!-- internal card -->
                        <div class="row px-2 mb-5">
                            <!-- establishment header -->
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="my_fs fw-bold text-center my_mt_mb">
                                        <span class="float-start">
                                            <span class="my_font_Jomhuria">مؤسسة الشيخ عمي سعيد</span>
                                            <br>
                                            <span class="my_font_Scheherazade">ثقافة - تربية - تراث</span>
                                        </span>
                                        <br><br><br>
                                        <span class="my_lib">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            المكتبة المركزية</span>
                                    </p><br><br>
                                </div>
                                <div class="col-sm-4">
                                    <img src="img/library_logo.png" alt="avatar" style="height: 3.2cm; width: 3.2cm;">
                                </div>
                            </div>
                            <!-- END establishment header -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h6">
                                        <span class="fw-bold my_title">البطاقة الداخلية للانخراط رقم:</span>
                                        <span class="my_font_Scheherazade"><?php echo $stud_id ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">اللقب:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $lname ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">الاسم: </span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade">
                                            <?php echo $fname . ' بنت ' . $father . ' بن ' . $grandpa ?>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">تاريخ الميلاد:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $birthdate ?></span>
                                        <span class="fw-bold my_title">بـ: </span>
                                        <span class="my_font_Scheherazade"><?php echo $birthplace ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">المهنة:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $job ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h6">
                                        <span class="fw-bold my_title">المستوى الثقافي:</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="my_font_Scheherazade"><?php echo $cultural_level ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-auto">
                                    <p class="h6">
                                        <span class="fw-bold my_title">مؤسسة الانتماء:</span>
                                    </p>
                                </div>
                                <div class="col-sm-auto">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $establishment ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">العنوان:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $address ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">تاريخ الانخراط:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $engagement_date ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">رقم الهاتف:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $phone ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h6">
                                        <span class="fw-bold my_title">رقم هاتف الولي:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="my_font_Scheherazade"><?php echo $wali_phone ?></span>
                                    </p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">رقم التسجيل:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $soft_id ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">ملاحظات:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $notes ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="my_mr_in my_font_Scheherazade">قيم المكتبة</p>
                                </div>
                            </div>
                        </div> <!-- end border -->
                    </div>
                </div>
            </div>
            <!-- END internal card -->


            <!-- External card talibat -->
            <div class="my_print_container_ex logo_bg_ex mt-3">
                <div class="row px-2">
                    <!-- establishment header -->
                    <div class="row">
                        <div class="col-sm-9">
                            <p class="my_fs fw-bold text-center my_mt_mb">
                                <span class="float-start">
                                    <span class="my_font_Jomhuria">مؤسسة الشيخ عمي سعيد</span>
                                    <br>
                                    <span class="my_font_Scheherazade">ثقافة - تربية - تراث</span>
                                </span>
                                <br><br><br>
                                <span class="my_lib">&nbsp;&nbsp;
                                    المكتبة المركزية</span>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <img src="img/library_logo.png" alt="avatar" style="height: 2.7cm; width: 2.7cm;">
                        </div>
                    </div>
                    <!-- END establishment header -->

                    <div class="row my_mt_mb">
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">بطاقة المنخرطة رقم:</span>
                                <span class="my_font_Scheherazade"><?php echo $stud_id ?></span>
                            </p>
                        </div>
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">الصادرة بـ: </span>
                                <span class="my_font_Scheherazade"><?php echo $date ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="row my_mt_mb">
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">اللقب:</span>
                                <span class="my_font_Scheherazade"><?php echo $lname ?></span>
                            </p>
                        </div>
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">الاسم: </span>
                                <span class="my_font_Scheherazade">
                                    <?php echo $fname . ' بنت ' . $father ?>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="row my_mt_mb">
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">المهنة:</span>
                                <span class="my_font_Scheherazade"><?php echo $job ?></span>
                            </p>
                        </div>
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">بـ: </span>
                                <span class="my_font_Scheherazade"><?php echo $establishment ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="row my_mt_mb">
                        <div class="col-sm-12">
                            <p class="my_fs">
                                <span class="fw-bold my_title">المستوى الثقافي:</span>
                                <span class="my_font_Scheherazade"><?php echo $cultural_level ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="row my_mt_mb">
                        <div class="col-sm-12">
                            <p class="my_fs">
                                <span class="fw-bold my_title">رقم التسجيل:</span>
                                <span class="my_font_Scheherazade"><?php echo $soft_id ?></span>
                                <span class="my_font_Scheherazade my_mr_ex">قيم المكتبة</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div><br>
            <!-- END External card talibat -->

        <?php } else { ?>
            <!-- ************ internal card markazia ************** -->
            <div class="my_print_container_in logo_bg_in mb-2">
                <div class="row">
                    <div class="col-sm-12 ">
                        <!-- internal card -->
                        <div class="row px-2 mb-5">
                            <!-- establishment header -->
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="my_fs fw-bold text-center my_mt_mb">
                                        <span class="float-start">
                                            <span class="my_font_Jomhuria">مؤسسة الشيخ عمي سعيد</span>
                                            <br>
                                            <span class="my_font_Scheherazade">ثقافة - تربية - تراث</span>
                                        </span>
                                        <br><br><br>
                                        <span class="my_lib">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            المكتبة المركزية</span>
                                    </p><br><br>
                                </div>
                                <div class="col-sm-4">
                                    <img src="img/avatar.png" alt="avatar" style="height: 3.2cm; width: 3.2cm; opacity: 0.4">
                                </div>
                            </div>
                            <!-- END establishment header -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h6">
                                        <span class="fw-bold my_title">البطاقة الداخلية للانخراط رقم:</span>
                                        <span class="my_font_Scheherazade"><?php echo $stud_id ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">اللقب:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $lname ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">الاسم: </span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade">
                                            <?php echo $fname . ' بن ' . $father . ' بن ' . $grandpa ?>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">تاريخ الميلاد:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $birthdate ?></span>
                                        <span class="fw-bold my_title">بـ: </span>
                                        <span class="my_font_Scheherazade"><?php echo $birthplace ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">المهنة:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $job ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h6">
                                        <span class="fw-bold my_title">المستوى الثقافي:</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="my_font_Scheherazade"><?php echo $cultural_level ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-auto">
                                    <p class="h6">
                                        <span class="fw-bold my_title">مؤسسة الانتماء:</span>
                                    </p>
                                </div>
                                <div class="col-sm-auto">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $establishment ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">العنوان:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $address ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">تاريخ الانخراط:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $engagement_date ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">رقم الهاتف:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $phone ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h6">
                                        <span class="fw-bold my_title">رقم هاتف الولي:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="my_font_Scheherazade"><?php echo $wali_phone ?></span>
                                    </p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">رقم التسجيل:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $soft_id ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="h6">
                                        <span class="fw-bold my_title">ملاحظات:</span>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="h6">
                                        <span class="my_font_Scheherazade"><?php echo $notes ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="my_mr_in my_font_Scheherazade">قيم المكتبة</p>
                                </div>
                            </div>
                        </div> <!-- end border -->
                    </div>
                </div>
            </div>
            <!-- END internal card markazia-->

            <!-- External card markazia -->
            <div class="my_print_container_ex logo_bg_ex mt-3">
                <div class="row px-2">
                    <!-- establishment header -->
                    <div class="row">
                        <div class="col-sm-9">
                            <p class="my_fs fw-bold text-center my_mt_mb">
                                <span class="float-start">
                                    <span class="my_font_Jomhuria">مؤسسة الشيخ عمي سعيد</span>
                                    <br>
                                    <span class="my_font_Scheherazade">ثقافة - تربية - تراث</span>
                                </span>
                                <br><br><br>
                                <span class="my_lib">&nbsp;&nbsp;
                                    المكتبة المركزية</span>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <img src="img/avatar.png" alt="avatar" style="height: 3.5cm; width: 2.7cm; opacity: 0.4">
                        </div>
                    </div>
                    <!-- END establishment header -->

                    <div class="row my_mt_mb">
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">بطاقة المنخرط رقم:</span>
                                <span class="my_font_Scheherazade"><?php echo $stud_id ?></span>
                            </p>
                        </div>
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">الصادرة بـ: </span>
                                <span class="my_font_Scheherazade"><?php echo $date ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="row my_mt_mb">
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">اللقب:</span>
                                <span class="my_font_Scheherazade"><?php echo $lname ?></span>
                            </p>
                        </div>
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">الاسم: </span>
                                <span class="my_font_Scheherazade">
                                    <?php echo $fname . ' بن ' . $father ?>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="row my_mt_mb">
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">المهنة:</span>
                                <span class="my_font_Scheherazade"><?php echo $job ?></span>
                            </p>
                        </div>
                        <div class="col-sm-auto">
                            <p class="my_fs">
                                <span class="fw-bold my_title">العنوان: </span>
                                <span class="my_font_Scheherazade"><?php echo $address ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="row my_mt_mb">
                        <div class="col-sm-12">
                            <p class="my_fs">
                                <span class="fw-bold my_title">رقم التسجيل:</span>
                                <span class="my_font_Scheherazade"><?php echo $soft_id ?></span>
                                <span class="my_font_Scheherazade my_mr_ex">قيم المكتبة</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div><br>
            <!-- END External card markazia -->
        <?php } ?>

        <!-- Print btn -->
        <div class="dropdown my_position_fixed my_hidden">
            <button class="btn btn-danger btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenu" aria-expanded="false">
                طباعة البطاقة
            </button>

            <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenu">
                <li>
                    <a class="dropdown-item" onclick="doPrint();return false;">الداخلية والخارجية</a>
                </li>

                <li>
                    <a class="dropdown-item" onclick="hide_card();doPrint();show_card();return false;">
                        الخارجية فقط</a>
                </li>
            </ul>
        </div>
        <!-- END Print btn -->

    </div>

    <script>
        function doPrint() {
            window.print();
            //window.history.back();
        }

        function hide_card() {
            $(".my_print_container_in").hide();
        }

        function show_card() {
            $(".my_print_container_in").show();
        }
    </script>
</body>