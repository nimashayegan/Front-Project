<?php
include "dbConnect.php";
include"../library/db.php";
include "../utils/security.php";
if (Authorization::checkRole()) {
    if (isset($_POST['submit'])) {

        //set form value's
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $website = $_POST['website'];
        $password = $_POST['password'];
        $role = $_POST['role'];


        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);

        //value's to array
        $attr = [
            "UserName" => $userName,
            "Email" => $email,
            "Name" => $Fname,
            "Family" => $Lname,
            "Website" => $website,
            "Password" => $password,
            "role" => $role
        ];

        // $fieldNames = array_keys($data);
        $fieldName = "";
        foreach ($attr as $key => $value) {
            $fieldName .= $key . ', ';
        }
        $fieldName = substr($fieldName, 0, strlen($fieldName) - 2);

        //Query
        $qu = "INSERT INTO users($fieldName) VALUES (?,?,?,?,?,?,?)";
        $qu2 = "select * from users where UserName = ?";

        //execute query
        $resul = $connectDB->query($qu2, $userName);
        $connectDB->close();

        //data validation
        if ($resul->numRows() > 0) {
            echo "شماره تلفن از قبل ثبت نام شده است. <a href='login.php'>وارد شوید</a>";
        } else {
            $result = $connectDB->query($qu, array_values($attr));
            $connectDB->close();
            if ($result) {
                echo "کاربر با موفقیت ایجاد شد";
            }
        }

    } else {
        include "../view/Add user.php";
    }
}else{
    header("location:#");
}
?>