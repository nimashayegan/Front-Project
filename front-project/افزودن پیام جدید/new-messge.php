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