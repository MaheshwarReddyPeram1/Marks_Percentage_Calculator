<?php
$id=$_POST["id"];
$course1=$_POST["course1"];
$course2=$_POST["course2"];
$sum=$course1+$course2;
$avg=$sum/200;
$percentage=$avg*100;

$conn = mysqli_connect('localhost','admin','admin','employee');

if(!$conn)
{
die("connection failed:" .mysqli_connect_error());
}
$sql="INSERT INTO student VALUES ('$id','$course_1','$course_2','$course_3','$course_4','$percentage')");

if(mysqli_query($conn,$sql)){
echo "success";
}
else{
echo:error;
}

?>
