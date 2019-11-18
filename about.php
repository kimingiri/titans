<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport"content="width=device-width">
    <title>Acme web design | About</title>
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
		 <li ><a href="index.php">Home</a></li>
		 <li class="current"><a href="about.php">About</a></li>
		 <li><a href="services.php">Services</a></li>
		 <li><a href="signup.html">Sign up</a></li>
		 
		</ul>
	  </nav>
	</div>
  
  </header>
  
  <section id="newsletter">
    <div class="container">
	  <h1>Subscribe To our Newsletter</h1>
	  <form action="about.php" method="post">
	    <input type="email"name="email"placeholder="Enter Email...">
		 <button type="Submit"submit="submit"name="submit"class="button_1">Subscribe</button>
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
		 
		 echo"successfully Subscribed";
	 }
	 
	
	 
	 
	 
   }
   
   
   
?>
	  </form>
  
    </div>
  
  </section>
  <section id="main">
    <div class="container">
	   <article id="main-col">
	   
	        <h1 class="page-title">About Us</h1>
	           <p>
			   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum arcu, gravida vitae mauris a, porta dictum magna. Curabitur euismod erat pulvinar nulla consectetur condimentum. Mauris vitae maximus orci. Duis pulvinar auctor porttitor. Praesent mattis auctor mauris ac vehicula. Donec ligula risus, vestibulum ut aliquet eget, lacinia quis ipsum. Donec in tempor ligula. Nulla semper, diam at finibus suscipit, urna orci egestas enim, gravida mattis lacus nulla eu arcu. Phasellus at erat et quam consequat consectetur non eget orci. Fusce arcu dolor, auctor sit amet aliquam a, scelerisque nec ante. Vivamus orci turpis, ultricies sed leo molestie, bibendum consectetur orci. Duis pretium felis vel magna aliquet vulputate vitae ac ante. Morbi ligula augue, mollis sed dolor id, elementum luctus diam. Sed porta at nisl vitae fringilla. Nam ac ligula vitae nunc tincidunt commodo. 
			   </p>
	   </article>
	      <aside id="sidebar">
		  <div class="dark">
	        <h1>What we do</h1>
	        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum arcu, gravida vitae mauris a, porta dictum magna. Curabitur euismod erat pulvinar nulla consectetur condimentum. Mauris vitae maximus orci. Duis pulvinar auctor porttitor. Praesent mattis auctor mauris ac vehicula. Donec ligula risus, vestibulum ut aliquet eget, lacinia quis ipsum. Donec in tempor ligula. Nulla semper, diam at finibus suscipit, urna orci egestas enim, gravida mattis

           consequat consectetur non eget orci.</p>
		   </div>
	      </aside>
	</div>
  </section>
  <footer>
  <p>Titans technologies,Copyright &copy; 2019</p>
  </footer>


</body>
</html>