<?php
$con = mysqli_connect('127.0.0.1:3307','root');

if($con){
    echo "connection successful";
}
else{
    echo "unsuccessful";
}

mysqli_select_db($con,'first_backend_website');

$user = $_POST['user'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query = "insert into userinfo(user,mail,phone,comment) values ('$user','$mail','$phone','$comment')";

mysqli_query($con,$query);

header('location: index.php');

?>