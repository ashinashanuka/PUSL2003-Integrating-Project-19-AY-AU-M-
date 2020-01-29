<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ip');


$username = $_POST['user'];
$password = $_POST['password'];

$s = " select * from users where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    header('location:homepage.php');
}

else
{
    header('location:registar.php');

}

?>
