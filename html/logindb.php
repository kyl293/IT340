<?php
//echo "a";
$host="localhost";
$username="admi";
$password="Id24696mi.";
$db_name="Police";
$tbl_name="Login";
//echo "b0";
$conn= mysqli_connect("$host","$username","$password","$db_name") or die(mysqli_connect_error());
//echo "b1";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//mysqli_select_db("$tbl_name") or die("can nont connect to database");

//echo "b2";
//$myusername=$_POST["usr"];
//echo "b3";
//$mypassword=$_POST["pwd"];
//echo "c";
//$myusername= stripslashes($myusername);
//$mypassword= stripslashes($mypassword);
$myusername= mysqli_real_escape_string($conn,$_POST['usr']);
//echo "d";
$mypassword= mysqli_real_escape_string($conn,$_POST['pass']);
//echo "d1";
//echo($myusername);
//echo($mypassword);
//echo($_POST['pass'])
$sql="SELECT name,password FROM Login  WHERE  name='$myusername' and password='$mypassword'";
//echo "d2";
$result= mysqli_query($conn,$sql);
//echo "d3";
$count= mysqli_num_rows($result);
//echo "e";
//echo($count);
//echo "rules suck i dont like to work";
if ($count == 1)
{
print"login successful";
}
else
{
print "access denied please try again";
}
?>
