<?php
include 'check.php';
//initialize subscription
if (isset($_GET['stud_id'])) {
    $stud_id = $_GET['stud_id'];
    $lname = $_GET['lname'];
    $fname = $_GET['fname'];

    $deleteQuery = "DELETE FROM students WHERE stud_id = '$stud_id'";

    if (mysqli_query($conn, $deleteQuery)) {
        if ($sex == 0) {
            echo "<script> alert('تم حذف الطالبة $lname $fname بنجاح') </script>";
        } else {
            echo "<script> alert('تم حذف الطالب $lname $fname بنجاح') </script>";
        }
        echo "<script> window.location.href= 'home.php'</script>";
    } else {
        if ($sex == 0) {
            echo "<script> alert('حدثت مشكلة: لم يتم حذف الطالبة!!') </script>";
        } else {
            echo "<script> alert('حدثت مشكلة: لم يتم حذف الطالب!!') </script>";
        }
        echo "<script> window.location.href= 'home.php'</script>";
    }
}
