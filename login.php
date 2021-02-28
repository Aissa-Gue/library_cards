<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap_v5.0.0-beta1/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap_v5.0.0-beta1/bootstrap-icons-1.2.1/font/bootstrap-icons.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <!-- end fonts -->
    <link rel="stylesheet" href="css/style.css">
    <script src="bootstrap_v5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <title>Login</title>
</head>

<body>
    <div class="container-fluid background_img_login">
        <header class="text-center mb-3">
            <img class="img-fluid my_header_img" src="img/biblio_header.gif" alt="header">
        </header>
        <div class="row justify-content-md-center">
            <div class="col-md-3 p-3 my_radious my_form_bg">
                <form action="check.php" method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <h4 class="text-center mb-4">
                            <strong>تسجيل الدخول</strong>
                        </h4>
                        <label for="username" class="form-label">اسم المستخدم</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="أدخل اسم المستخدم">
                    </div>

                    <div class="mb-2">
                        <label for="password" class="form-label">كلمة المرور</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="أدخل كلمة المرور">
                    </div>

                    <div class="mb-3">
                        <label for="sex" class="form-label">المكتبة</label>
                        <select name="sex" id="sex" class="form-control" required>
                            <option value="">-- اختر مكتبة --</option>
                            <option value="1">المكتبة المركزية</option>
                            <option value="0">مكتبة الإناث</option>
                        </select>
                    </div>
                    <div class="mb-1 text-center">
                        <input type="submit" name="login" value="تسجيل الدخول" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>