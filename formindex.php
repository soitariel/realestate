<?php
//connect to the database

$con=mysqli_connect("localhost","root", "");

//select database for use
mysqli_select_db($con,"isproject") or die("could not select the database");
$location=$_POST['location'];
$category=$_POST['category'];
$pricerange=$_POST['pricerange'];
if(isset($_POST['submit'])) {
	$query = $con->query( "SELECT * FROM images WHERE location='$location' AND category='$category' AND pricerange ='$pricerange'");
//$query = "SELECT * FROM images WHERE location='" .$_POST['location']."' AND category='" .$_POST['category']."' AND pricerange ='" .$_POST['pricerange']."'  ";
//AND category='" .$row['category']."' AND pricerange='" .$row['pricerange']."'
//location = 'y' AND category = 'z' AND price_range = 'a'"
//$count=mysqli_query($con,$query);
//$count=mysqli_num_rows($result);

//if(isset($_POST['submit'])) {
    //header("location:formindexretrieve.php");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        //$imageURL = 'upload/'.$row["name"];
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
}



//close connection
mysqli_close($con);

?>