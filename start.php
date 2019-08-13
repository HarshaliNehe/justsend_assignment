<?php
include'signup_details.php';

?>


<!DOCTYPE html>
          <html>
                <head>
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                            <!-- Add icon library -->
                          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                          <link rel="stylesheet" type="text/css" href="">


        
                </head>

                        <body>

                          <form action="signup_details.php" style="max-width:500px;margin:auto" method="POST">


                   <div class="main">

                           <h1>jUstSend</h1>
                          <div class="container">
                                <input  type="text" placeholder="Your name" name="name" class="input-field">
                          </div>

                          <div class="container">
                              <input  type="text" placeholder="your email or phone number" name="" class="input-field" required>
                          </div>


                         <div class="container">
                              <input  type="text" placeholder="Subject" name="subject" class="input-field" required>
                          </div>

                        <div class="container">
                            
                              <input  type="text" placeholder="Message" name="message" class="input-field" required>
                        </div>
  

                      <div class="container">
                            
                              <input  type="text" placeholder="Message" name="message" class="input-field" required>
                        </div>
  
                        
                            
                       <div class="container">
                        <input   type="submit" name="submit" value="Submit" class="int" onclick="validate()">
                      </div>


                       

</div><!--main-->
</form>

  
    </body>
</html>





