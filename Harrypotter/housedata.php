<?php

$server = "ID362514_sortinghat.db.webhosting.be";
$username = "ID362514_sortinghat";
$password = "shafiq123";
$dbname = "ID362514_sortinghat";

// Database connection
$conn = mysqli_connect($server , $username , $password , $dbname) ;
$sql = "SELECT * FROM `people`";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Housedata</title>
  <link rel="stylesheet" href="assets/database.css">
  </head>
  <body>
    
    
  <table class="styled-table">
      

        <tr class="active-row">
            <td>
                Fullname
            </td>

            <td>
                House Name
            </td>

            <td>
                Percentage 
            </td>
            
           
            
        </tr>
        <?php
        while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td>
                    <?php echo $row['fullname']; ?> 
                </td>

                <td>
                    <?php echo $row['housename']; ?> 
                </td>

                <td>
                    <?php echo $row['percentage']; ?> 
                </td>

            </tr>
        <?php }
        ?>
    </table>
    <form action="index.html" > 

 
<button>
  /Home-Page/
</button>

</form>

   
  
  </body>
</html>