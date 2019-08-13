<?php

include'startsms_details.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>send message</title>
	<link rel="stylesheet" type="text/css" href="startsms.css">
	<!--to vaidate name and email by using js-->
	<script type="text/javascript">

		 function validate()
        {
        	 	 var name=document.getElementById('name').value;
            	 var email=document.getElementById('email').value;
            	 
                  if (name==null || name=="")
                  {  
          				alert("Name field is blank,Please fill it");  
         					 return false;  
      			  }
      				else if (email==null || email=="")
      				{  
          				alert("Email is blank");  
          				return false;
     				 }

     				
     				 
    }
        
                   


	</script>

</head>
<body>
		<form method="POST" action="startsms_details.php" enctype="multipart/form-data">
			<div class="main">

				<h1>jUstSend</h1>


			 			<div class="container">
 							
 							<input type="text" name="name" placeholder="Your name" id="name"><br>

				 		</div><!--container-->
		
						<div class="container">
								
							<input type="text" name="email" placeholder="Your email or phone-number" id="email">
		 				</div><!--container-->

						 <div class="container">
 								
 								<input type="text" name="subject" placeholder="Subject">

		 				</div><!--container-->

		 				<div class="container">
 								
<textarea name="msg"  placeholder="Your message"></textarea>

					 </div><!--container-->

		 				
		 				<div class="container">
 						
 							
 							<input type="file" name="image" id="fileSelect">
							
 			

					 </div><!--container-->


		 				

					 

		 			


<input type="submit"  value="submit" name="send" onclick="validate()">

	</div><!--main-->

</form>


</body>



</html>