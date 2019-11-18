


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport"content="width=device-width">
    <title>Acme web design | welcome</title>
    <link rel="stylesheet"href="./css/style.css">
</head>
<body>

  <header>
    <div class="container">
	  <div id="branding">
	   <h1><span>Titans</span> Systems</h1>
	   
	  </div>
	  <nav>
	    <ul>
		 <li class="current"><a href="index.html">Home</a></li>
		 <li><a href="about.php">About</a></li>
		 <li><a href="services.php">Services</a></li>
		 <li><a href="signup.html">Sign up</a></li>
		 
		</ul>
	  </nav>
	</div>
  
  </header>
  <section id="showcase">
     <div class="container">
	   <h1>Affordable Management Information Systems</h1>
	    <p>We offer solutions to businesses and students 
		</p>
	 </div>
  </section>
  <section id="newsletter">
    <div class="container">
	  <h1>Subscribe To our Newsletter</h1>
	  <form action="index.php" method="post">
	    <input type="email"name="email"placeholder="Enter Email...">
		 <button type="Submit"name="submit"class="button_1">Subscribe</button>
		 
		 <?php
   
   include'config.php';
   
  
    if (isset($_POST['submit']))
   {
   
   
   $email= ($_POST['email']);
   
   
  
   
   
   // to prevent mysql injection
   
		 $email= stripcslashes($email);
		 
		 
		 
		 
		 
    
   
     $sql = "INSERT INTO user(email)
	 VALUES('$email')";
	 

	 
	
	 
     $query= mysql_query($sql);

	 
	
	 
	 if (!$query){
		 echo "no data inserted".mysql_error();
		 
	 }else{
		 
		 echo"<br/>successfully Subscribed";
	 }
	 
	
	 
	 
	 
   }
   
   
   
?>
	  </form>
  
    </div>
  
  </section>
  <section id="boxes">
    <div class="container">
	   <div class="box">
	    <img src="./images/one.png">
		<h3>HTML Markup</h3>
		<p>we deliver a job full of surprise
		and a great output</p>
	   </div>
	   <div class="box">
	    <img src="./images/two.png">
		<h3>CSS3 Style</h3>
		<p>we deliver a job full of surprise
		and a great output</p>
	   </div>
	   <div class="box">
	    <img src="./images/three.jpeg">
		<h3>Graphic Design</h3>
		<p>we deliver a job full of surprise
		and a great output</p>
	   </div>
	</div>
  </section>
  <footer>
  <p>Titans technologies,Copyright &copy; 2019</p>
  </footer>


</body>
</html>