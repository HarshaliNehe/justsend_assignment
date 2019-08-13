<?php
include'readsms_details.php';

$code =$_GET['code'];

?>

<!DOCTYPE html>




</!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
$query= "SELECT * FROM sender WHERE code='$code'" ;
$data=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($data);

?>
<div class="content">
	<?php echo $row["name"];?>

	</div>
	
	<div class="content">
	<?php echo $row["subject"];?>

	</div>

	<div class="content">
	<?php echo $row["message"];?>

	</div>
</body>
</html>