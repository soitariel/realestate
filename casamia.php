<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}




/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}



/* Add a card effect for articles */
.card {
   background-color: black;
   color: white;
   padding: 20px;
   margin-top: 20px;
   margin-bottom: 0px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}
.collapsible {
  background-color: #F2AEA0;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  margin: 4px;
}

.active, .collapsible:hover {
  background-color: #441006;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: black;
  color: white;
}
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="property.php">Property</a>
  <a href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
  <a class="log" href="login.php">Login</a>
  <a class="log" href="signup.php">Signup</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>CASA MIA</h2>
      <img src="riverside.jpg" alt="John" style="width:50%">
      


<button type="button" class="collapsible">About Casa Mia</button>
<div class="content">
  <p>In the refreshing environment of Ruai, this is an incredible opportunity to own distinctively- designed 3-bedroom home in a gated community setting built to enhance lifestyles by creating a first-of-its-kind development in the area. Casa Mia's gated setting is a melting point for residents, offering cosy residences with an individual feel yet accessing great facilities, all at a great price!</p>
</div>
<button type="button" class="collapsible">Residences</button>
<div class="content">
  <p>The homes at Casa Mia have been distinctively laid-out in small communities that have individual privacy yet benefit from the greater ambiance.This leads to a masterpiece development of 449 homes on a 41 acres site that has been excellently designed to benefit from the natural environment.</p>
<p>An efficient home design complemented with the selective use of vibrant hues has created a perfect starter home, each of 3-bedrooms measuring 1,022 sq.ft. Entranced through a covered patio,the homes at Casa Mia offer a sizeable lounge,dining room,fitted kitchen with utility area and three cosy bedrooms (master ensuite). High ceilings and large windows will ensure excellent flow of air and light.</p>
 
</div>
<button type="button" class="collapsible">Amenities and Provisions</button>
<div class="content">
  <ul>
    <li>Residents Lounge with Wraparound Heated Pool</li>
<li>Fully Equipped Gym</li>
<li>Landscaped Zen Gardens</li>
<li>Outdoor Gazebos with Fire Pit</li>
<li>Panoramic Roof Terrace</li>
<li>Entertainment Deck</li>
<li>Secure Parking for Residents and Visitors</li>
<li>Manned Security Access</li>
<li>Access Control Facility</li>
<li>Intercom Satellite Tv and Fiber Optic infrastructure</li></ul>

</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

    </div>
    </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Gallery</h2>
      <div ><img src="riverside.jpg" alt="John" style="width:50%"></div><br>
      <div ><img src="riverside.jpg" alt="John" style="width:50%"></div><br>
      <div><img src="riverside.jpg" alt="John" style="width:50%"></div><br>
      <div><img src="riverside.jpg" alt="John" style="width:50%"></div><br>
      <div><img src="riverside.jpg" alt="John" style="width:50%"></div><br>
      

    </div>
    
  </div>
</div>

<footer >
  <p>REAL ESTATE KENYA</p>
</footer>

</body>
</html>
