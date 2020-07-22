<!DOCTYPE html>
<head>

<title>Contact Me</title>
<link href="index.css" rel="stylesheet" type="text/css" />
<script>
function validate() {
    var x = document.forms["myForm"]["email"].value;
	var y = document.forms["myForm"]["txt"].value;
    if (x == null || x == "" && y == null || y == "" ) {
        alert("Please fill both fieldst");
        return false;
    }
	else{
	alert("you are good to go");
	}
}
</script>
<style>
#TXT{
height:100px;
border: 2px black solid;
}
#TXT:hover{
background:gray;
}
</style>
</head>
<body>
<div id="wrapper">
<div id="header">
<header><h2>Contact Me</h2></header>
</div>
<hr>

<div id="nav">
<a href="index.html">Home</a> |
<a href="aboutme.html">About Me</a> |
<a href="gallery.html">Gallery</a> |
<a href="#">Contact Me</a>
</div>
<hr>
<div id="main-cntnt">
<h3>Contact Addresses</h3>
<table>
  <tr>
    <td>Phone</td>
    <td>:</td>
    <td>+254727409589<br>+254707718567</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td>harrietsoita9@gmail.com</td>
  </tr>
  <tr>
    <td>Website </td>
    <td>:</td>
    <td><a href="index.html">www.soitasphotography.co.ke</a></td>
  </tr>
</table>

<h3>Where im located</h3>
<p>Kogo Street opposite to Racecourse Plaza 
</p>
</div>
<div id="bottom">
<hr>
<h3>Give me your feedback</h3>
 <form name="myForm" action=""onsubmit="return validate()" method="post">
<br>EMAIL: <input type="text" name="email"><br>
<br>FEEDBACK: <input type="text" name="txt" id="TXT"><br>
<input type="submit" value="Submit">
</form>
 
  </p>
</div>


<div id="footer">
 <footer><p>&copy; 2019 | Harrie fashions is your daily dose of high quality outfits | 
<a href="https://www.google.com/" target="_blank">Google</a>
<a href="https://www.yahoo.com.com/" target="_blank">Yahoo</a>
<a href="https://www.mail.google.com" target="_blank">Gmail</a></p></footer>
</div>
</div>
</body>
</html>