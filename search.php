<?php
include 'header.php';

// input values
if (!isset($_POST['search'])) {
    $soft_id = '';
    $lname = '';
    $fname = '';
    $order = '';
} else {
    $soft_id = $_POST['soft_id'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $order =  $_POST['order_by'];
}
// Search query
$searchQuery = "SELECT * FROM students WHERE stud_id LIKE '%$soft_id' AND lname LIKE '%$lname%' AND fname LIKE '%$fname%' AND sex = '$sex' $order";


$searchResult = mysqli_query($conn, $searchQuery);
// search num rows
$search_num_rows = mysqli_num_rows($searchResult);


?>

<body>
    <div class="container-fluid my_background_search my_vh">
        <div class="row container-fluid justify-content-sm-center">
            <div class="col-sm-9">
                <form action="search.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3 mt-4">
                        <span class="input-group-text">ترتيب حسب</span>
                        <select class="" name="order_by">
                            <option value="">رقم التسجيل</option>
                            <option value="ORDER BY `soft_id` ASC">
                                الرقم في البرنامج</option>
                            <option value="ORDER BY `lname`, 'fname' ASC" selected> الإسم</option>
                        </select>
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="رقم التسجيل" name="soft_id">

                        <span class="input-group-text">#</span>
                        <input type="text" class="form-control" placeholder="أدخل اللقب" name="lname">

                        <span class="input-group-text">#</span>
                        <input type="text" class="form-control" placeholder="أدخل الإسم" name="fname">

                        <input class="btn btn-primary" type="submit" name="search" value="بحث">
                    </div>
                </form>
            </div>
        </div>
        <!-- END serch new -->

        <!-- body table -->
        <div class="container-fluid">
            <!-- Alert -->
            <div class="alert alert-warning text-center" role="alert">
                <strong> عدد النتائج = </strong>
                <?php echo $search_num_rows ?>
            </div>
            <!-- END Alert -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">رقم التسجيل</th>
                        <th scope="col" class="text-center">الرقم في البرنامج</th>
                        <th scope="col" class="text-center">الاسم الكامل</th>
                        <th scope="col" class="text-center">تاريخ الميلاد</th>
                        <th scope="col" class="text-center"> مكان الميلاد</th>
                        <th scope="col" class="text-center">العنوان</th>
                        <th scope="col" class="text-center">تاريخ الإنخراط</th>
                        <th scope="col" class="text-center">معاينة</th>
                        <th scope="col" class="text-center">تعديل</th>
                        <th scope="col" class="text-center">حذف</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($searchResult)) {
                    ?>
                        <tr>
                            <th scope="row" class="text-center"><?php echo $row['stud_id'] ?></th>
                            <td class="text-center"><?php echo $row['soft_id'] ?></td>
                            <?php if ($sex == 0) { ?>
                                <td class="text-center"><?php echo
                                                        $row['lname'] . '&nbsp;' . $row['fname'] . ' بنت ' . $row['father'] . ' بن ' . $row['grandpa'] ?>
                                </td>
                            <?php } else { ?>
                                <td class="text-center"><?php echo
                                                        $row['lname'] . '&nbsp;' . $row['fname'] . ' بن ' . $row['father'] . ' بن ' . $row['grandpa'] ?>
                                </td>
                            <?php } ?>

                            <td class="text-center"><?php echo $row['birthdate'] ?></td>
                            <td class="text-center"><?php echo $row['birthplace'] ?></td>
                            <td class="text-center"><?php echo $row['address'] ?></td>
                            <td class="text-center"><?php echo $row['engagement_date'] ?></td>


                            <td class="text-center">
                                <a class="btn btn-outline-success" href="preview.php?stud_id=<?php echo $row['stud_id'] ?>&soft_id=<?php echo $row['soft_id'] ?>&lname=<?php echo $row['lname'] ?>&fname=<?php echo $row['fname'] ?>&father=<?php echo $row['father'] ?>&grandpa=<?php echo $row['grandpa'] ?>&birthdate=<?php echo $row['birthdate'] ?>&birthplace=<?php echo $row['birthplace'] ?>&wali_lname=<?php echo $row['wali_lname'] ?>&wali_fname=<?php echo $row['wali_fname'] ?>&kinship=<?php echo $row['kinship'] ?>&job=<?php echo $row['job'] ?>&cultural_level=<?php echo $row['cultural_level'] ?>&establishment=<?php echo $row['establishment'] ?>&address=<?php echo $row['address'] ?>&engagement_date=<?php echo $row['engagement_date'] ?>&last_edit=<?php echo $row['last_edit'] ?>&phone=<?php echo $row['phone'] ?>&wali_phone=<?php echo $row['wali_phone'] ?>&notes=<?php echo $row['notes'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                    </svg> </a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-outline-primary" href="edit.php?stud_id=<?php echo $row['stud_id'] ?>&soft_id=<?php echo $row['soft_id'] ?>&lname=<?php echo $row['lname'] ?>&fname=<?php echo $row['fname'] ?>&father=<?php echo $row['father'] ?>&grandpa=<?php echo $row['grandpa'] ?>&birthdate=<?php echo $row['birthdate'] ?>&birthplace=<?php echo $row['birthplace'] ?>&wali_lname=<?php echo $row['wali_lname'] ?>&wali_fname=<?php echo $row['wali_fname'] ?>&kinship=<?php echo $row['kinship'] ?>&job=<?php echo $row['job'] ?>&cultural_level=<?php echo $row['cultural_level'] ?>&establishment=<?php echo $row['establishment'] ?>&address=<?php echo $row['address'] ?>&phone=<?php echo $row['phone'] ?>&wali_phone=<?php echo $row['wali_phone'] ?>&notes=<?php echo $row['notes'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-outline-danger" href="delete.php?stud_id=<?php echo $row['stud_id'] ?>
                            &fname=<?php echo $row['fname'] ?>'" onclick="return confirm('هل أنت متأكد؟')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END body table -->
</body>