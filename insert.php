<?php
include 'header.php';
$sex = $_SESSION['sex'];

// form input values 
if (isset($_POST['insert'])) {
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
    $engagement_date = $date;
    $phone = $_POST['phone'];
    $wali_phone = $_POST['wali_phone'];
    $notes = $_POST['notes'];

    //insert into students table
    $insertqry = "INSERT INTO `students` VALUES ('$stud_id', '$soft_id', '$lname', '$fname', '$father', '$grandpa', '$birthdate', '$birthplace', '$wali_lname', '$wali_fname', '$kinship', '$job', '$cultural_level', '$establishment', '$address', '$engagement_date', '$engagement_date', '$phone', '$wali_phone', '$notes', '$sex')";

    if (mysqli_query($conn, $insertqry)) {
        if ($sex == 0) {
            echo "<script> alert('تم إضافة الطالبة: $lname $fname بنجاح') </script>";
        } else {
            echo "<script> alert('تم إضافة الطالب: $lname $fname بنجاح') </script>";
        }
        echo "<script> window.location.href= 'home.php'</script>";
    } else {
        echo 'Error creating database: ' . mysqli_error($conn) . "\n";
        if ($sex == 0) {
            echo "<script> alert('حدثت مشكلة! لم يتم إضافة الطالبة: $lname $fname') </script>";
        } else {
            echo "<script> alert('حدثت مشكلة! لم يتم إضافة الطالب: $lname $fname') </script>";
        }
    }
}
?>


<body>
    <div class="my_background_prev_ins_edi my_vh pt-3">
        <div class="container">
            <?php if ($sex == 0) { ?>
                <div class="alert alert-warning text-center h4" role="alert">
                    إضافة طالبة جديدة
                </div>
            <?php } else { ?>
                <div class="alert alert-warning text-center h4" role="alert">
                    إضافة طالب جديد
                </div>
            <?php } ?>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <!-- 1st row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="stud_id" class="form-label">رقم التسجيل</label>
                        <input type="number" class="form-control text-center" placeholder="أدخل رقم التسجيل" id="stud_id" name="stud_id" required>
                    </div>
                    <div class="col-md-3">
                        <label for="soft_id" class="form-label">الرقم في البرنامج</label>
                        <input type="number" class="form-control text-center" placeholder="أدخل الرقم في البرنامج" id="soft_id" name="soft_id" required>
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="lname" class="form-label">اللقب</label>
                        <input type="text" class="form-control" placeholder="أدخل اللقب" id="lname" name="lname" required>
                    </div>
                    <div class="col-md-3">
                        <label for="fname" class="form-label">الإسم</label>
                        <input type="text" class="form-control" placeholder="أدخل الاسم" id="fname" name="fname" required>
                    </div>
                    <div class="col-md-3">
                        <label for="father" class="form-label">اسم الأب</label>
                        <input type="text" class="form-control" placeholder="أدخل اسم الأب" id="father" name="father" required>
                    </div>
                    <div class="col-md-3">
                        <label for="grandpa" class="form-label">اسم الجد</label>
                        <input type="text" class="form-control" placeholder="أدخل اسم الجد" id="grandpa" name="grandpa" required>
                    </div>
                </div>
                <!-- 3rd row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="birthdate" class="form-label">تاريخ الميلاد</label>
                        <input type="date" class="form-control text-center" placeholder="أدخل تاريخ الميلاد" id="birthdate" name="birthdate" required>
                    </div>
                    <div class="col-md-3">
                        <label for="birthplace" class="form-label">مكان الميلاد</label>
                        <input type="text" class="form-control" placeholder="أدخل مكان الميلاد" id="birthplace" name="birthplace">
                    </div>
                    <div class="col-md-2">
                        <label for="wali_lname" class="form-label">لقب الولي</label>
                        <input type="text" class="form-control" placeholder="أدخل لقب الولي" id="wali_lname" name="wali_lname">
                    </div>
                    <div class="col-md-2">
                        <label for="wali_fname" class="form-label">اسم الولي</label>
                        <input type="text" class="form-control" placeholder="أدخل اسم الولي" id="wali_fname" name="wali_fname">
                    </div>
                    <div class="col-md-2">
                        <label for="kinship" class="form-label">نوع القرابة</label>
                        <input type="text" class="form-control" placeholder="أدخل نوع القرابة" id="kinship" name="kinship">
                    </div>
                </div>
                <!-- 4th row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="job" class="form-label">المهنة</label>
                        <input type="text" class="form-control" placeholder="أدخل المهنة" id="job" name="job">
                    </div>
                    <div class="col-md-4">
                        <label for="cultural_level" class="form-label"> المستوى الثقافي</label>
                        <input type="text" class="form-control" placeholder="أدخل المستوى الثقافي" id="cultural_level" name="cultural_level">
                    </div>
                    <div class="col-md-5">
                        <label for="establishment" class="form-label">مؤسسة الانتماء</label>
                        <input type="text" class="form-control" placeholder="أدخل مؤسسة الانتماء" id="establishment" name="establishment">
                    </div>
                </div>
                <!-- 5th row -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <input type="text" class="form-control" placeholder="أدخل رقم الهاتف" id="phone" name="phone">
                    </div>
                    <div class="col-md-4">
                        <label for="wali_phone" class="form-label">رقم هاتف الولي</label>
                        <input type="text" class="form-control" placeholder="أدخل رقم هاتف الولي" id="wali_phone" name="wali_phone">
                    </div>
                    <div class="col-md-5">
                        <label for="address" class="form-label">العنوان</label>
                        <input type="text" class="form-control" placeholder="أدخل العنوان" id="address" name="address">
                    </div>

                </div>
                <!-- 6th row -->
                <div class="row">
                    <div class="col-md-7">
                        <label for="notes" class="form-label">ملاحظات</label>
                        <textarea type="text" class="form-control" placeholder="أدخل ملاحظات" id="notes" name="notes" style="height: 90px"></textarea>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-danger btn-lg  mt-5 p-3" style="width: 120px" name="insert" value="إضافة">
                    </div>
                </div>
            </form>
        </div>
</body>