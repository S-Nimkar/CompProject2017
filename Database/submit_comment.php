<?php 
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$passsword="root"; // Mysql password
$db_name="StudentReviews"; // Database name
// Connect to server and select databsae.
$dbc = mysqli_connect("$host", "$username", "$passsword")or die("cannot connect");
mysqli_select_db($dbc, $db_name) or die("cannot select DB");

$comment = $_POST['user_comment'];
$reviewid = $_SESSION['form_info'][0];
$userid = $_SESSION['account'][2];
$_SESSION['comment'] = 'true';
$currentdate = date("Y/m/d");
$currenttime = date("h:i:s");
$InsertComment_SQL = "INSERT INTO Comment(Comment,UserID,ReviewID,Date,Time) Values('$comment','$userid','$reviewid','$currentdate','$currenttime')";
mysqli_query($dbc, $InsertComment_SQL);
header('Location: ../Views/view_review.php');

?>