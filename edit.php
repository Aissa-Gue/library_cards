<?php
include 'header.php';

// GET values from home.php
if (isset($_GET['stud_id'])) {
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
    $phone = $_GET['phone'];
    $wali_phone = $_GET['wali_phone'];
    $notes = $_GET['notes'];
}
// form input values
if (isset($_POST['update'])) {
    $prev_id = $_POST['prev_id'];
    $stud_id = $_POST['stud_id'];
    $soft_id = $_POST['soft_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $father = $_POST['father'];
    $grandpa = $_POST['grandpa'];
    $birthdate = $_POST['birthdate'];
    $birthplace = $_POST['birthplace'];
    $wali_fname = $_POST['wali_fname'];
    $wali_lname = $_POST['wali_lname'];
    $kinship = $_POST['kinship'];
    $job = $_POST['job'];
    $cultural_level = $_POST['cultural_level'];
    $establishment = $_POST['establishment'];
    $address = $_POST['address'];
    $last_edit = $date;
    $phone = $_POST['phone'];
    $wali_phone = $_POST['wali_phone'];
    $notes = $_POST['notes'];

    //Update student information
    $updateqry = "UPDATE `students` SET stud_id = '$stud_id', soft_id = '$soft_id', lname= '$lname', fname= '$fname',father= '$father', grandpa= '$grandpa',birthdate= '$birthdate', birthplace= '$birthplace', wali_lname= '$wali_lname', wali_fname= '$wali_fname', kinship= '$kinship', job= '$job', cultural_level= '$cultural_level', establishment= '$establishment', address= '$address', last_edit = '$last_edit', phone= '$phone', wali_phone= '$wali_phone', notes= '$notes' WHERE stud_id= '$prev_id'";

    if (mysqli_query($conn, $updateqry) and mysqli_affected_rows($conn) > 0) {
        if ($sex == 0) {
            echo "<script> 
        alert('تم تحديث معلومات الطالبة: $lname $fname بنجاح');
        </script>";
        } else {
            echo "<script> 
        alert('تم تحديث معلومات الطالب: $lname $fname بنجاح');
        </script>";
        }
    } else {
        if ($sex == 0) {
            echo "<script> alert('حدثت مشكلة! لم يتم تحديث معلومات الطالبة: $lname $fname') </script>";
        } else {
            echo "<script> alert('حدثت مشكلة! لم يتم تحديث معلومات الطالب: $lname $fname') </script>";
        }
    }
}
?>

<body>
    <div class="my_background_prev_ins_edi my_vh pt-3">
        <div class="container">
            <?php if ($sex == 0) { ?>
                <div class="alert alert-warning text-center h4" role="alert">
                    تحديث معلومات الطالبة
                </div>
            <?php } else { ?>
                <div class="alert alert-warning text-center h4 mt-3" role="alert">
                    تحديث معلومات الطالب
                </div>
            <?php } ?>

            <form action="edit.php" method="post" enctype="multipart/form-data">
                <!-- 1st row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="stud_id" class="form-label">رقم التسجيل</label>
                        <input type="number" class="form-control text-center" id="stud_id" name="stud_id" value="<?php echo $stud_id ?>" required>
                        <input type="number" class="form-control text-center" name="prev_id" value="<?php echo $stud_id ?>" hidden>

                    </div>
                    <div class="col-md-3">
                        <label for="soft_id" class="form-label">الرقم في البرنامج</label>
                        <input type="number" class="form-control text-center" id="soft_id" name="soft_id" value="<?php echo $soft_id ?>" required>
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="lname" class="form-label">اللقب</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="fname" class="form-label">الإسم</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="father" class="form-label">اسم الأب</label>
                        <input type="text" class="form-control" id="father" name="father" value="<?php echo $father ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="grandpa" class="form-label">اسم الجد</label>
                        <input type="text" class="form-control" id="grandpa" name="grandpa" value="<?php echo $grandpa ?>" required>
                    </div>
                </div>
                <!-- 3rd row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="birthdate" class="form-label">تاريخ الميلاد</label>
                        <input type="text" class="form-control text-center" id="birthdate" name="birthdate" value="<?php echo $birthdate ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="birthplace" class="form-label">مكان الميلاد</label>
                        <input type="text" class="form-control" id="birthplace" name="birthplace" value="<?php echo $birthplace ?>">
                    </div>
                    <div class="col-md-2">
                        <label for="wali_lname" class="form-label">لقب الولي</label>
                        <input type="text" class="form-control" id="wali_lname" name="wali_lname" value="<?php echo $wali_lname ?>">
                    </div>
                    <div class="col-md-2">
                        <label for="wali_fname" class="form-label">اسم الولي</label>
                        <input type="text" class="form-control" id="wali_fname" name="wali_fname" value="<?php echo $wali_fname ?>">
                    </div>
                    <div class="col-md-2">
                        <label for="kinship" class="form-label">نوع القرابة</label>
                        <input type="text" class="form-control" id="kinship" name="kinship" value="<?php echo $kinship ?>">
                    </div>
                </div>
                <!-- 4th row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="job" class="form-label">المهنة</label>
                        <input type="text" class="form-control" id="job" name="job" value="<?php echo $job ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="cultural_level" class="form-label"> المستوى الثقافي</label>
                        <input type="text" class="form-control" id="cultural_level" name="cultural_level" value="<?php echo $cultural_level ?>">
                    </div>
                    <div class="col-md-5">
                        <label for="establishment" class="form-label">مؤسسة الانتماء</label>
                        <input type="text" class="form-control" id="establishment" value="<?php echo $establishment ?>" name="establishment">
                    </div>
                </div>
                <!-- 5th row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="wali_phone" class="form-label">رقم هاتف الولي</label>
                        <input type="text" class="form-control" id="wali_phone" name="wali_phone" value="<?php echo $wali_phone ?>">
                    </div>
                    <div class="col-md-5">
                        <label for="address" class="form-label">العنوان</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>">
                    </div>

                </div>
                <!-- 6th row -->
                <div class="row">
                    <div class="col-md-7">
                        <label for="notes" class="form-label">ملاحظات</label>
                        <textarea type="text" class="form-control" id="notes" name="notes" style="height: 90px"><?php echo $notes ?></textarea>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-danger btn-lg  mt-5 p-3" style="width: 120px" name="update" value="تحديث">
                    </div>
                </div>
            </form>
        </div>
</body>