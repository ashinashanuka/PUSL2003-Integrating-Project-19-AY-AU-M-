<?php 

session_start();
header('location:registar.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ip');

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['user'];
$password = $_POST['password'];

$s = " select * from users where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "user name already taken";
}

else
{
    $reg = "insert into users (name , email , username , password ) values ('$name' , '$email' , '$username' , '$password')";
    mysqli_query($con, $reg);
    echo "suc";

}

?>
