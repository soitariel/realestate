<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
ul{
  text-align: left;
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
      <h2>ASTORIA</h2>
      <img src="riverside.jpg" alt="John" style="width:50%">
      


<button type="button" class="collapsible">About Astoria</button>
<div class="content">
  <p>Coveted location in a quiet neighborhood</p>
  <p>Astoria encompasses masterful luxury in these delightful 1 and 2 bedroom apartments on a one acre estate on Mbaazi Avenue in Lavington, a stones throw from The Junction Shopping Mall and the bustling and newly expanded Ngong Road.</p>
  <p>Each apartment is designed to benefit from breathtaking views of the valley offering vistas that encompass the green city scape and accentuate living that is extraordinary.</p>
  <p>Astoria is set to be a path carver, with a multitude of recreational luxuries that will delight its occupiers and help create a fun loving and energetic community.</p>
</div>
<button type="button" class="collapsible">Residences</button>
<div class="content">
 <p><b> ONE BEDROOM APARTMENTS</b></p>

<ul>
  <li>Bespoke entrance foyer with inbuilt utility area</li>
<li>Fitted kitchen maximizes function and design aesthetic</li>
<li>Spacious dining and lounge area opens onto panorama terrace</li>
<li>Master suite enjoys large windows maximizing flow of light and air</li>
</ul>
<p><b>TWO BEDROOM APARTMENTS</b></p>

<ul>
  <li>Bespoke entrance foyer</li>
<li>Open plan fitted kitchen features a built in breakfast bar</li>
<li>Spacious dining and lounge area opens onto panorama terrace</li>
<li>Multi-purpose utility area accessed from the kitchen</li>
<li>Master suite with ample closet space and private bathroom</li>
<li>Secondary bedroom features large wardrobe and access to shared bathroom.</li>
</ul>
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
<li>Intercom Satellite Tv and Fiber Optic infrastructure</li>
<li>CCTV Surveillance</li>
<li>Borehole Water Supply</li>
<li>Water Storage Facilities</li>
<li>Solar Water Heating</li>
<li>Car Wash Facility</li>
<li>Power Back-Up for Common Areas</li>
<li>Pressurized Fire Escape</li>
<li>Facilities for Management Staff</li>
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
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
    <li><a href="index.php">Home</a></li>
  <li><a href="property.php">Property</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="agent.php">Real Estate Agents</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0702073700" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:ruthkimani387@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/propertygrams/" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>

    </div>
    <div class="w3-display-middle w3-padding">
     <p>REAL ESTATE KENYA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      

    </div>
    
  </div>
</div>
</footer>

</body>
</html>
