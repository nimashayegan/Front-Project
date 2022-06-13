<?php
include "dbConnect.php";
include "../library/db.php";

if (isset($_POST['send-email'])) {
//validation form
    if (isset($_POST['name'],
        $_POST['email'],
        $_POST['subject'],
        $_POST['textarea'])) {

        //set form value's
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subjetc = $_POST['subject'];
        $textarea = $_POST['textarea'];

        //value's to array
        $attr = [
            "name" => $name,
            "email" => $email,
            "subject" => $subjetc,
            "text" => $textarea

        ];

        $fieldName="";
        $vals="";

        foreach ($attr as $key => $value) {
            $fieldName .= $key . ', ';
            $vals .= "'$value', ";
        }

        $fieldName = substr($fieldName, 0, strlen($fieldName) - 2);
        $vals = substr($vals, 0, strlen($vals) - 2);


        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

        //query
        $qu = "INSERT INTO contact($fieldName) VALUES (?,?,?,?)";

        //execute query
        $result = $connectDB ->query($qu, $name, $email, $subject, $textarea);

        
        if ($connectDB -> affectedRows() > 0) {
            //successes message
            echo "تماس شما با موفقیت ثبت شد. تماس شما برای ما مهم است و به زوی یه آن پاسخ خواهیم داد.";
            $connectDB ->close();
        }
        else{
            echo $connectDB->connect_error;
        }
    }
}else{
    include "../view/contact.php";
}
