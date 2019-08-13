
<?php
	include 'connection.php';


		$db=mysqli_connect($servername,$username,$password,$dbname);

			if($db->connect_error)
					{
						echo"connection fail";

					}
					/*else
					{
						echo"connection ok";

					}*/

	function codegeneration()
		{
   			 $result = '0123456789abcdefghijklmnopqrstuvwxyz';
				// Output: 54esmdr0qf
    			$b= substr(str_shuffle($result), 0, 5);
    			return $b;
		}

							if(isset($_POST['send']))
							{
							  $name=$_POST['name'];
							  $email=$_POST['email'];
							  $subject=$_POST['subject'];
							  $message=$_POST['message'];
							  $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
							   $code=codegeneration();
							  
							   
							    $query ="INSERT INTO sender(name,email,subject,message,image,code) VALUES('$name','$email','$subject','$message','$image','$code')";

							        mysqli_query($db,$query);
							  
							        header('Location:show.php?code='.$code);//rediect to index page after insertion




							}

?>

