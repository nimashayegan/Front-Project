<?php

$servername="localhost";
$username="root";
$password="";
$db_name="new-messge";

$conn1=mysqli_connect($servername,$username,$password,$db_name);
if (!$conn1){
    die(mysqli_connect_error());
}
if (isset($_POST['new-messge'])) {

    $data=$_POST['data'];
    $mytypemessge=$data['typemessge'];
    $mymatnmessge=$data['matnmessge'];
    

    $sql="INSERT INTO `new-messge`(typemessge,matnmessge) VALUES ('$mytypemessge','$mymatnmessge')";
    mysqli_query($conn1,$sql);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../assets/css/layout/new-messge.css" type="text/css">
    <title>پیام جدید</title>
</head>

<body dir="rtl">
    <div class="div-home">

        <div class="div-body">

            <div class="div-head">

                <div class="title">
                    <p class="p-title">ایجاد پیامک جدید</p>
                </div>

                <div class="div-icon">
                    <p class="p-icon">-</p>
                </div>

            </div>

            <form action="" method="post">

            <div class="div-main-1">
                <label class="label-main-1">نوع پیامک</label>
                <input type="text" class="input-nopm" name="typemessge">
            </div>

            <div class="div-main-2">
                <label class="label-main-2">متن پیامک</label>
                <textarea class="textarea-1" name="matnmessge"></textarea>
            </div>

            <button type="reset" class="button-reset">حذف</button>
            
            <input type="submit" class="submit" value="ارسال">

        </form>
            
        </div>

        

    </div>
</body>

</html>