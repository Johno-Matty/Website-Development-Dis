<?php 
 session_start();
?>


<!DOCTYPE html>
<html>
<head> 
<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>
		The Footy Training Planner - Fun and Affective Football Drills</title>
		<link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
</head>
<body>
	<section class="header">
        <nav>
            <a href="index.php"><img src="images/logo.png"></a> 
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href='index.php'>HOME</a></li>
                    <li><a href='drills.php'>VIEW DRILLS</a></li>
                    <?php 
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='createDrill.php'>CREATE A DRILL</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
                    }
                    else {
                        echo "<li><a href='login.php'>LOG IN</a></li>";
                        echo "<li><a href='signup.php'>SIGN UP</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
  </section>   
     
<script>
    
    var navLinks = document.getElementById("navLinks");
    
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
    
</script>
     
        
        