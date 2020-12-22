<?php

$con = mysqli_connect("localhost","root","","bloodbank");

$update = false;
$name = ""; 
$bloodGroup= "Choose...."; 
$phone = ""; 
$age = ""; 
$date = ""; 



if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$bloodGroup = $_POST['bloodGroup'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$date = $_POST['date'];

	mysqli_query($con,"insert into donorinfo(Name,BloodGroup,Phone,Age,lastDate) values('$name','$bloodGroup','$phone','$age','$date')");
	header("location:dataForm.php");

}

if(isset($_GET['delete']))
{
	$id = $_GET['delete'];
	mysqli_query($con, "delete from donorinfo where serial=$id");
	header("location:dataForm.php");
	
}

if(isset($_GET['edit']))
{
	$id = $_GET['edit'];
	$result = mysqli_query($con, "select * from donorinfo where serial=$id");
	if(mysqli_num_rows($result) == 1)
	{
        $update = true;
        $row = mysqli_fetch_assoc($result);
		$name = $row['Name']; 
        $bloodGroup= $row['BloodGroup']; 
        $phone = $row['Phone']; 
        $age = $row['Age']; 
        $date = $row['Lastdate']; 

	}
	
}

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$bloodGroup = $_POST['bloodGroup'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$date = $_POST['date'];

	mysqli_query($con,"update  donorinfo set Name='$name',BloodGroup='$bloodGroup',Phone='$phone',Age='$age',lastDate='$date' where serial=$id");

	header("location:dataForm.php");

}


?>