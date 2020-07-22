<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

ul{
  text-align: left;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.center {
  text-align: center;
}
img {
  image-rendering: auto;
}


#more {display: none;}

</style>
</head>
<body>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="products.php">Products</a>
  <a href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
  <a href="designers.php">Designers</a>
  <a class="log" href="login.php">Login</a>
  <a class="log" href="signup.php">Signup</a>
</div>

<h2>Fashions in Kenya</h2>
<br>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="9oak.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Astoria</h2>
        <p class="title">Residential</p>
        <p>Lavington</p>
        <p>1 & 2 Bed Apartments</p>
        <p>Price: From Kshs 6.95M</p>
        
        <p><a href ="astoria.php"><button class ="button" >Read more</button></a></p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="enaki1.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Imora</h2>
        <p class="title">Residential Resort</p>
        <p>Lavington</p>
        <p>4 Bedroom Townhouses</p>
        <p>Price: Kshs 58M</p>
        
    
        <p><a href ="imora.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="riverside.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Riverside square</h2>
        <p class="title">Residence</p>
        <p>Riverside</p>
        <p>Mixed Use Development</p>
        <p>Price: Kshs 9.5M</p>
        
        <p><a href ="riverside.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="edenville.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Casa Mia</h2>
        <p class="title">Apartments</p>
        <p>Kangundo Road</p>
        <p>3 Bed Bungalows</p>
        <p>Price: From Kshs 5.95M</p>
        
        
        <p><a href ="casamia.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="edenville.jpg" alt="Mike" style="width:100% ">
      <div class="container">
        <h2>Volaire</h2>
        <p class="title">Residential</p>
        <p>Westlands</p>
        <p>An Urban Masterpiece</p>
        <p>Price: From Kshs 16.95M</p>
        
       
        <p><a href ="volaire.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="imora.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Escada</h2>
        <p class="title">Townhouse</p>
        <p>Westlands</p>
        <p>1 & 2 Bedroom Apartments</p>
        <p>Price: From Kshs 4.26M</p>
        
    
        <p><a href ="escada.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>
</div>

<div class="center">
  <div class="pagination">
  <a href="products.php" class="active">1</a>
  <a href="products.php" >2</a>
  <a href="products.php">3</a>
  
  </div>
</div>


<footer >
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
    <li><a href="index.php">Home</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="designers.php">Designers</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0792052668" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:harrietsoita9@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/propertygrams/" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>

    </div>
    <div class="w3-display-middle w3-padding">
     <p>FASHION IN KENYA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      

    </div>
    
  </div>
</div>
</footer>
</body>
</html>
