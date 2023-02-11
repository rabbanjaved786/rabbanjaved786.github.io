<?php
include("db.php");

$getid = $_GET['edit'];

$seledittwo = "SELECT * FROM `insertdeleteedittable` WHERE `id` = '$getid'";


$qry = mysqli_query($connect, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$firstname = $selassoc['firstname'];
$lastname = $selassoc['lastname'];
$email = $selassoc['email'];
$s_date = $selassoc['s_date'];
$e_date = $selassoc['e_date'];

if(isset($_POST['updateedit'])) {
	$upid =  $_POST['upid'];
	$upfirstname =  $_POST['upfirstname'];
	$uplastname =  $_POST['uplastname'];
	$upemail =  $_POST['upemail'];
    $ups_date =  $_POST['ups_date'];
    $upe_date =  $_POST['upe_date'];


	$seleditt = "UPDATE `insertdeleteedittable` SET `firstname`='$upfirstname',`lastname`='$uplastname',`email`='$upemail',`s_date`='$ups_date',`e_date`='$upe_date' WHERE `id` = '$upid'";
	$qry = mysqli_query($connect,$seleditt);

	if($qry) {
		header("location: display.php");
	}
}

//$seledit = "UPDATE `insertdeleteedittable` SET `id`=[value-1],`firstname`=[value-2],`lastname`=[value-3],`email`=[value-4] WHERE `id` = '$getid'";



?>


<!DOCTYPE html>
<html>
<head>
	<title>edit-record</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <div>

<form method="POST" action="">
   <input type="text" name="upid" value="<?php echo $id; ?>"><br><br>
	<input type="text" name="upfirstname" value="<?php echo $firstname; ?>"><br><br>
	<input type="text" name="uplastname" value="<?php echo $lastname ; ?>"><br><br>
	<input type="text" name="upemail" value="<?php echo $email; ?>"><br><br>
    <input type="text" name="ups_date" value="<?php echo $s_date; ?>"><br><br>
    <input type="text" name="upe_date" value="<?php echo $e_date; ?>"><br><br>
	<input type="submit" name="updateedit" value="Update">
	</div>
</div>
</form>
</body>
</html>