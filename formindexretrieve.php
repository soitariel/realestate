<?php
//connect to the database
$con=mysqli_connect("localhost","root", "");

//select database for use
mysqli_select_db($con,"isproject") or die("could not select the database");


 // $username=$_POST['username'];

  // Upload file
     $query = $con->query("SELECT * FROM images " );

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'upload/'.$row["name"];
        //while (($row=mysqli_fetch_row($result))!=FALSE){

  
    
?>
    <img src="<?php echo $imageURL; ?>" alt="" height="350" width="500"/>


		  
<?php
echo "<br />";
echo "location : ";
echo "<b>{$row['location']}</b>";
echo "<br />";
echo "category : ";
echo "<b>{$row['category']}</b>";
echo "<br />";
echo "price range: ";
echo "<b>{$row['pricerange']}</b>";
echo "<br />";
echo "description : ";
echo "<b>{$row['description']}</b>";
echo "<br />";

 }
}

else{  echo "no images found";} 

  
 


//retrieve description


//close connection
mysqli_close($con);

?>