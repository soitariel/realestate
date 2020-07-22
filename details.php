<?php 
  

  $db=mysqli_connect("localhost","root", "");
if(!$db)
{
  echo ("Connection to the database Engine Failed");

}

else{

  echo("Established connection successfully");
}
//select database for use
mysqli_select_db($db,"isproject") or die("could not select the database");


    // receive all input values from the form
    $username =  $_POST['username'];
    $startdate =  $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $materialsused = $_POST['materialused'];
    $materialsrem=  $_POST['materialrem'];
    $materialsneeded =  $_POST['materialneeded'];
    $deposit=  $_POST['deposit'];
    $balance = $_POST['balance'];
    
    

      
    mysqli_query($db,"ALTER TABLE constructiondetails
ADD FOREIGN KEY (username) REFERENCES buyers(username)");


    mysqli_query($db,"INSERT INTO `constructiondetails`(`username`,`startdate`, `enddate`, `materialsused`, `materialsrem`, `materialsneeded`, `deposit`, `balance`) VALUES ('$username','$startdate','$enddate','$materialsused','$materialsrem','$materialsneeded','$deposit','$balance')");
         
 //close connection
mysqli_close($db);

?>