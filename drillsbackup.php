<?php 
include_once 'header.php'
?>

<?php

include 'includes/dbh.inc.php';
$build = [];

$sql = "SELECT * FROM drills ORDER BY drillID;";

$result = mysqli_query($connection, $sql);

$resultCheck = mysqli_num_rows($result);
echo '<table>';
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    
        $authorID = $row['authorID'];

        echo '<a class="clickable-link" href="guideDetails.php?guideID='.$row['drillID'].'"> <div class="text-box">';
  //  if ($row['Role'] == 'Supp') {
//								echo '<img class="roleIcon" src="Assets/Images/Roles/Support_icon.png" title="Support" alt="Support">';
//							}
							echo'<h2 class="patch">'.$row['minPlayers'].'</h2>';
							echo'<h2 class="guideTitle">'.$row['drillName'].'</h2>';
							    
//							$build = json_decode($row['CoreBuild']);
//							$build = $build;
//							foreach ($build as $item)
//							{
//							$item = (array)$item;
//								foreach($item as $pic)
//								{
//									echo '<img class="item" src="'.$pic.'">';
//								}
							}
							$sqlAuthor = "SELECT * FROM users WHERE ID='$authorID';";
							$resultAuthor = mysqli_query($connection, $sqlAuthor);
							$resultCheckAuthor = mysqli_num_rows($resultAuthor);
								if ($resultCheckAuthor > 0) {
									while ($rowAuthor = mysqli_fetch_assoc($resultAuthor)) {
										$region = $rowAuthor['Region'];
										$rank = $rowAuthor['Division'];
										$level = $rowAuthor['Lvl'];
										if($region == 'EUW') {
											echo '<div class="column"><img src="Assets/Images/Regions/EUW.png" alt="EUW"></div>';
										}
										
										if($level == '100-199')
										{
											echo '<div class"column"><img class="lvlimg" src="Assets/Images/Levels/100-199.png" alt="level 100-199"></div>';
										}
										echo'<div class="columnb"><p>'.$rowAuthor['Region'].'</p></div>
										<div class="columnb" <p>'.$rowAuthor['Division'].'</p></div>
										<div class="columnb" <p>'.$rowAuthor['Lvl'].'</p></div>';
									}
								}
							echo'<p>'.$row['Description'].'</p>';
							echo'</div>
							</a>';
							    
						}
echo'</table>';						
				?>


    
<!------JavaScript for Togle Menu (in mobile mode)-->
<script>
    
    var navLinks = document.getElementById("navLinks");
    
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
    
</script>

</body>
</html>