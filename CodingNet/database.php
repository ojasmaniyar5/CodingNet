<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>TechNo BeeZ | Web Deisgn | Services</title>
    <style type="text/css">
    	body {
  background-image: url('blur.jpg');
    background-size: cover;
}
    </style>
</head>
<body>

<?php
$sever ="localhost";
$username ="root";
$password ="";
$dbname ="techno_beez";

//connection create.
$con = mysqli_connect("localhost", "root","","techno_beez");

//connection check.
if(!$con)
{
	die("not connected: ".mysqli_connect_error());
}
error_reporting(E_ERROR | E_PARSE);
//insert data.
$name = $_POST['name'];
$email =$_POST['email'];
$massage =$_POST["massage"];



//insert into table.
$sql = "INSERT INTO suggestions(name, email, massage) VALUES ('$name','$email','$massage')";

//Final Result.
$result = mysqli_query($con, $sql);
if ($result)
{
	echo "<center><h2>Thanks For Giving Your Suggestions.</h2></center>";

}
else
{
	echo "<h3>Account failed To Create</h3><br>".mysqli_error($con);
}

?>
</body>
<center><h3><button class="btn"><a href='index.html'>Back To Home</a></button></h3><center>
	<br>
	<br>
	<br>
	<br>