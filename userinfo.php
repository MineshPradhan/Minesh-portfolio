<?php

// $con = mysqli_connect('localhost','root');
$con = mysqli_connect('localhost','root','','portfolio');

if ($con) {
    header('location:index.php');
}else {
    echo "No connection";
}

mysqli_select_db($con,'portfolio');

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$query = " insert into userdata (name, email, comments) values ('$name','$email','$comments')";

mysqli_query($con,$query);

?>

<!-- <?php

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// Database Connection 
$conn = new mysqli('localhost','root','','portfolio');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into userdata(name, email, comments)
    values(?,?,?)");
    $stmt->bind_param("sss",$name, $email, $comments);
    $stmt->execute();
    echo "Message Sent!";
    $stmt->close();
    $conn->close();
}

?> -->