<?php
	
$conn = mysqli_connect('localhost','root','','forums') or die (mysqli_error());


if(isset($_POST['save'])) {

$FP_TITLE = isset($_POST['FP_TITLE']) ? $_POST['FP_TITLE'] : "test";
$FP_DESC = isset($_POST['FP_DESC']) ? $_POST['FP_DESC'] : "test2";

$cquery = "INSERT INTO forum_post (`FP_TITLE`,`FP_DESC`) VALUES ('$FP_TITLE','$FP_DESC')";
mysqli_query($conn,$cquery);

}
?>