<?php
include"dbConnect.php";
include "../library/db.php";
include "../utils/security.php";
if (Authorization::checkRole()) {

    if (isset($_POST['submit'])) {

        $name = $_POST['productName'];
        $type = $_POST['productType'];
        $color = $_POST['productColor'];
        $waranty = $_POST['warantyProduct'];
        $count = $_POST['count'];
        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);
        $qu = "insert into products (name, type, color , waranty, count) values(?,?,?,?,?)";

        $result = $connectDB->query($qu, $name, $type, $color, $waranty, $count);
        if ($result->affectedRows() > 0) {
            echo "محصول با موفقیت اضافه شد.";
        }

    } else {
        include "../view/add-product.php";
    }
}else{
    header("location:login.php");
}