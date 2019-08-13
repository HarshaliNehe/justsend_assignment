<?php


$db=mysqli_connect($servername,$username,$password,$dbname);

			if($db->connect_error)
					{
						echo"connection fail";

					}
					else
					{
						echo"connection ok";

					}

					if(isset($_POST['submit']))
					{

                      $code=$_POST['code'];

					}

					header('Location:readsms1.php?code='.$code);






?>