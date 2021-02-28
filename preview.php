<?php
include 'header.php';

// GET values from home.php
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
    <div class="my_background_prev_ins_edi my_vh pt-3">
        <div class="container">
            <?php if ($sex == 0) { ?>
                <div class="alert alert-warning text-center h4" role="alert">
                    معلومات الطالبة
                </div>
            <?php } else { ?>
                <div class="alert alert-warning text-center h4" role="alert">
                    معلومات الطالب
                </div>
            <?php } ?>

            <form action="#" method="post" enctype="multipart/form-data">
                <!-- 1st row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="stud_id" class="form-label">رقم التسجيل</label>
                        <input type="text" class="form-control text-center" value="<?php echo $stud_id ?>" id="stud_id" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="soft_id" class="form-label">الرقم في البرنامج</label>
                        <input type="text" class="form-control text-center" value="<?php echo $soft_id ?>" id="soft_id" readonly>
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="lname" class="form-label">اللقب</label>
                        <input type="text" class="form-control" value="<?php echo $lname ?>" id="lname" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="fname" class="form-label">الإسم</label>
                        <input type="text" class="form-control" value="<?php echo $fname ?>" id="fname" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="father" class="form-label">اسم الأب</label>
                        <input type="text" class="form-control" value="<?php echo $father ?>" id="father" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="grandpa" class="form-label">اسم الجد</label>
                        <input type="text" class="form-control" value="<?php echo $grandpa ?>" id="grandpa" readonly>
                    </div>
                </div>
                <!-- 3rd row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="birthdate" class="form-label">تاريخ الميلاد</label>
                        <input type="text" class="form-control text-center" value="<?php echo $birthdate ?>" id="birthdate" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="birthplace" class="form-label">مكان الميلاد</label>
                        <input type="text" class="form-control" value="<?php echo $birthplace ?>" id="birthplace" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="wali_lname" class="form-label">لقب الولي</label>
                        <input type="text" class="form-control" value="<?php echo $wali_lname ?>" id="wali_lname" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="wali_fname" class="form-label">اسم الولي</label>
                        <input type="text" class="form-control" value="<?php echo $wali_fname ?>" id="wali_fname" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="kinship" class="form-label">نوع القرابة</label>
                        <input type="text" class="form-control" value="<?php echo $kinship ?>" id="kinship" readonly>
                    </div>
                </div>
                <!-- 4th row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="job" class="form-label">المهنة</label>
                        <input type="text" class="form-control" value="<?php echo $job ?>" id="job" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="cultural_level" class="form-label"> المستوى الثقافي</label>
                        <input type="text" class="form-control" value="<?php echo $cultural_level ?>" id="cultural_level" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="establishment" class="form-label">مؤسسة الانتماء</label>
                        <input type="text" class="form-control" value="<?php echo $establishment ?>" id="establishment" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="address" class="form-label">تاريخ الانخراط</label>
                        <input type="text" class="form-control" value="<?php echo $engagement_date ?>" id="address" readonly>
                    </div>
                </div>
                <!-- 5th row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <input type="text" class="form-control" value="<?php echo $phone ?>" id="phone" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="wali_phone" class="form-label">رقم هاتف الولي</label>
                        <input type="text" class="form-control" value="<?php echo $wali_phone ?>" id="wali_phone" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="address" class="form-label">العنوان</label>
                        <input type="text" class="form-control" value="<?php echo $address ?>" id="address" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="address" class="form-label">تاريخ آخر تعديل</label>
                        <input type="text" class="form-control" value="<?php echo $last_edit ?>" id="address" readonly>
                    </div>
                </div>
                <!-- 6th row -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="notes" class="form-label">ملاحظات</label>
                        <textarea type="text" class="form-control" id="notes" style="height: 90px" readonly><?php echo $notes ?></textarea>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-danger btn-lg  mt-5 p-3" style="width: 200px" href="print.php?stud_id=<?php echo $stud_id ?>&soft_id=<?php echo $soft_id ?>&lname=<?php echo $lname ?>&fname=<?php echo $fname ?>&father=<?php echo $father ?>&grandpa=<?php echo $grandpa ?>&birthdate=<?php echo $birthdate ?>&birthplace=<?php echo $birthplace ?>&wali_lname=<?php echo $wali_lname ?>&wali_fname=<?php echo $wali_fname ?>&kinship=<?php echo $kinship ?>&job=<?php echo $job ?>&cultural_level=<?php echo $cultural_level ?>&establishment=<?php echo $establishment ?>&address=<?php echo $address ?>&engagement_date=<?php echo $engagement_date ?>&last_edit=<?php echo $last_edit ?>&phone=<?php echo $phone ?>&wali_phone=<?php echo $wali_phone ?>&notes=<?php echo $notes ?>">
                            عرض البطاقة
                        </a>
                    </div>
                </div>

            </form>
        </div>
</body>