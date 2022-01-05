<?php

// $con = mysqli_connect('localhost','root');
$con = mysqli_connect('sql301.epizy.com','epiz_30562620','5rRCs8vqNG3r3Sn','epiz_30562620_portfolio');

if ($con) {
    header('location:index.php');
}else {
    echo "No connection";
}

mysqli_select_db($con,'portfolio');

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$message = "Kuch Bhi!";

$query = " insert into userdata (name, email, comments) values ('$name','$email','$comments')";
// values ('$name','$email','$comments')";

// echo "$query";

mysqli_query($con,$query);
// mysqli_query($con,$query);

// header('location:index.php');
//  header('location:index.php');


?>