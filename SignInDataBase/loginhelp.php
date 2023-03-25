<?php
include('connection.php');
// $connection=mysqli_connect('localhost','root');

// if($connection){
//     echo"Connection is Established!";
// }
// else{
//     echo"ERROR Connection Failed!";
// }

// mysqli_select_db($connection,'authentication');

$email=$_POST['email'];
$pass=$_POST['password'];

$email = stripcslashes($email);
$pass = stripcslashes($pass);
$email = mysqli_real_escape_string($connection,$email);
$pass = mysqli_real_escape_string($connection,$pass);

$sql="SELECT * FROM credentials WHERE EMAIL='$email' AND PASSWD='$pass' ";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
    header('location:loginsuccessful.php');
}
else{
    echo"Error while logging In";
}
#$data="Stormdarkwindynight12@gmail.com";
#$data2="tushar04";
// if($email ==$data && $pass == $data2){
//     header('location:loginsuccessful.php');
// }
// else{
//     echo"Error while logging In";
// }

// mysqli_query($connection,$data);
// mysqli_query($connection,$data2);
?>