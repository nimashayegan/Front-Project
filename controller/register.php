<?php
include "dbConnect.php";
include "../library/db.php";

if (isset($_POST['register'])) {

        //set form value's
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = "User";
        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);

        //value's to array
        $attr = [
            "name" => $name,
            "pass" => $password,
            "email" => $email,
            "role_member" => $role
        ];

        // $fieldNames = array_keys($data);
        $fieldName = "";

        foreach ($attr as $key => $value) {
            $fieldName .= $key . ', ';
        }

        $fieldName = substr($fieldName, 0, strlen($fieldName) - 2);

        //Query
        $qu = "INSERT INTO users($fieldName) VALUES (?,?,?,?)";
        $qu2 = "select * from users where email = ?";

        //execute query
        $resul = $connectDB -> query($qu2, $email);
       

        //data validation
        if ($resul ->numRows() == 1){
            echo "ایمیل از قبل ثبت نام شده است. <a href='login.php'>وارد شوید</a>";
            $connectDB ->close();
        }
        else{
            $result = $connectDB->query($qu, $name, $password,$email,$role);
            $connectDB ->close();
            if ($result){
                echo "کاربر با موفقیت ایجاد شد";
                }
        }

}else{
        include "../view/register.php";
}
?>