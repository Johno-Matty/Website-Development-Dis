<?php 
include_once 'header.php'
?>

<?php

include 'includes/dbh.inc.php';
$build = [];

$sql = "SELECT * FROM drills ORDER BY drillID;";

$result = mysqli_query($connection, $sql);

$resultCheck = mysqli_num_rows($result);
?>


    <div class="text-box">
    <h1>Drills</h1>
    <table style="width:100%">
    <tr>
    <td>Drill Name</td>
    <td>Training Focus</td>
    <td>Intensity</td>
    <td>Players</td>
    <td>Age</td>
	<td>See more</td>
    </tr>
    <?php
    
    if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    
        $authorID = $row['authorID'];

        echo '<tr>';
					
                               echo'<td>'.$row['drillName'].'</td>';
                               echo'<td>'.$row['trainingFocus'].'</td>';
                               echo'<td>'.$row['intensity'].'</td>';
                               echo'<td>'.$row['minPlayers'].'</td>';
                               echo'<td>'.$row['ageRange'].'</td>';
                               echo'<td><a href="drillDetails.php?guideID='.$row['drillID'].'"class="hero-btn">INFO</a></td>';
							}
						
							echo'</tr>';
                               
						}
						
				?>
	
</table>

    


</body>
</html>