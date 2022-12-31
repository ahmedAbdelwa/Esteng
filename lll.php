
<?php
include("config.php");

if (isset($_POST['send'])) {

$name = $_POST['name'];

$id = $_POST['id'];

$ft = mysqli_query($conn,"SELECT * FROM `univer`");

$row = mysqli_fetch_row($ft);

$idrow = $row['0'];

$namerow = $row['2'];

if ($name===$namerow & $id===$idrow) {
header("Location: fetch.php");
}else {
    echo "
    البيانات غير  صحيحة
    ";
}
}
?>
<!DOCTYPE html>

<html dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel='stylesheet' type='text/css' media='screen' href='lll.css'>

    <title>نظام تسجيل</title>

</head>

<body>

    <header>

        <nav>

        <img src="A.jpg" alt="logo" width="30px" >

    <a href="#" class="logo">جامعة بحري</a>

        </nav>

        <nav class="navigation">

           <a href="#services">تسجيل</a>

           <a href="#projects">تسجيل</a>

           <a href="contact">تسجيل</a>

        </nav>

   </header>

   <form action="" method="POST">

    <aside>

        <div><br><br><br><br>

            <label for="name">الرقم الوطني</label>

            <input type="text" name="name" id="national number" placeholder="ادخل الرقم الوطني">

            <span></span>

            <label for="name">الرقم الجامعي</label>

            <input type="text" name="id" id="university number" placeholder="ادخل الرقم الجامعي">

            <span></span>

        </div>
        <button><a href="bbb.html" class="but-m">انشاء حساب</a></button>
        <button type="submit" name="send">تسجيل دخول</button>

   </aside>

   </form> 

</body>

</html>
