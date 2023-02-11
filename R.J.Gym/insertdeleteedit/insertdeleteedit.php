<?php
include("db.php");
// include("display.php");


if(isset($_POST['submitinserdetails'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $s_date = $_POST['s_date'];
  $e_date = $_POST['e_date'];

if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($s_date) && !empty($e_date) ) {



	$sql = "INSERT INTO `insertdeleteedittable`( `firstname`, `lastname`, `email`, `s_date`, `e_date`) 
	                                    VALUES ('$firstname','$lastname','$email','$s_date','$e_date')";
$qry = mysqli_query($connect, $sql);
if($qry) {
	  echo "<br />inserted successfully";
 
     
}

} else {
	echo "<br />all fields must be filled";
}



}

?>


<!DOCTYPE html>
<html>
<head>
	<title>records</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <div>
<form action="" method="POST">
	
<input type="text" name="firstname" placeholder="First-name"><br ><br >
<input type="text" name="lastname" placeholder="last-name"><br ><br >
<input type="text" name="email" placeholder="email"><br ><br >
<input type="text" name="s_date" placeholder="start-date"><br ><br >
<input type="text" name="e_date" placeholder="end-date"><br ><br >
<input type="submit" name="submitinserdetails" value="insert">
<input type="button" name="show" value="showrecords" onclick="window.location.href = 'display.php';">

</form>
</div>
</div>
</body>
</html>