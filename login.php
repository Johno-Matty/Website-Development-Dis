<?php 
include_once 'header.php'
?>
	
	
	<div class="text-box">
        <h2 class="login">Login Here</h2>
        <form action="includes/login.inc.php" method="post">
        	<input class="field" type="text" name="uid" placeholder="Username..."><br>	
        	<input class="field" type="password" name="pwd" placeholder="Password..."><br>
        	<button class="hero-btn" type="Login" name="submit" placeholder="Confirm">Confirm</button>
       
        
        </form>
         
               
            
            
         <?php 
         if (isset($_GET["error"])) {
       if ($_GET["error"] == "wronglogin") {
           echo "<p>Invalid Login, Please try again!</p>";
       }
       else if ($_GET["error"] == "emptyinput") {
               echo "<p>Please fill in all fields!</p>";
           }  
        else if ($_GET["error"] == "emptyinput") {
               echo "<p>Please fill in all fields!</p>";
           } 
       }

         
         
      ?>
    </div>

    
</body>
</html>