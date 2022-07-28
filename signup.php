<?php 
include_once 'header.php'
?>
	
    <div class="text-box">
        <h2>Signup Here</h2>
        <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="post">
        	<input type="text" name="name" placeholder="Full Name..."><br>
        	<input type="text" name="email" placeholder="Email..."><br>
        	<input type="text" name="uid" placeholder="Username..."><br>
        	<input type="password" name="pwd" placeholder="Password..."><br>
        	<input type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
        	<button class="hero-btn" name="submit" placeholder="Confirm">Confirm</button>
         </form>
        </div>
        <?php 
      if (isset($_GET["error"])) {
       if ($_GET["error"] == "emptyinput") {
           echo "<p>Please fill in all the fields!</p>";
       }    
       else if ($_GET["error"] == "InvalidUserID") {
           echo "<p>Invalid Username, place choose a differnt one!</p>";
       }
       else if ($_GET["error"] == "InvalidEmail") {
           echo "<p>Invalid Email, place choose a differnt one!</p>";
       } 
       else if ($_GET["error"] == "PasswordError") {
          echo "<p>Invalid Passowrd, passwords don't match!</p>";
       } 
       else if ($_GET["error"] == "UsernameTaken") {
          echo "<p>Username already taken, please try another one!</p>";
      } 
      else if ($_GET["error"] == "stmtfailed") {
          echo "<p>Something went wrong, please try again!</p>";
      }
      else if ($_GET["error"] == "none") {
          echo "<p>Account Created!</p>";
      }
      }
    ?>
    </div>

</body>
</html>