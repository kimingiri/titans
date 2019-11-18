

<html>
<body>

<center><table border="2"width="70%"height="70%">


<tr>
<td bgcolor = "khaki", width = 100%, height = 100%>

<?php
   
   include'config.php';
   
  
    if (isset($_POST['submit']))
   {
   
   $t_id= ($_POST['t_id']);
   $t_name= ($_POST['t_name']);
   $t_age= ($_POST['t_age']);
   $t_sex= ($_POST['t_sex']);
   $email= ($_POST['email']);
   $phone= ($_POST['phone']);
   $password= ($_POST['password']);
   
   
  
   
   
   // to prevent mysql injection
   $t_id= stripcslashes($t_id);
   $t_name= stripcslashes($t_name);
      $t_age= stripcslashes($t_age);
	  $t_sex= stripcslashes($t_sex);
		 $email= stripcslashes($email);
		 $phone= stripcslashes($phone);
		 $password= stripcslashes($password);
		 
		 
		 
		 
    
   
     $sql = "INSERT INTO teacher(t_id,t_name,t_age,t_sex,email,phone,password)
	 VALUES('$t_id','$t_name','$t_age','$t_sex','$email','$phone','$password')";
	 

	 
	
	 
     $query= mysql_query($sql);

	 
	
	 
	 if (!$query){
		 echo "no data inserted".mysql_error();
		 
	 }else{
		 
		 echo"<center>teacher successfully added</center>";
	 }
	 
	
	 
	 
	 
   }
   
   
   
?>



<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  
  <style>
  
  .form1{
	width:30%;
	padding:12px;
	border: solid #cbcbcb;
	margin:2px auto;
	position:relative;right:1%;}
	
	.form2{
	width:30%;
	padding:12px;
	border: solid #cbcbcb;
	margin:2px auto;
	position:relative;right:-20%;top:-250px;}
	

</style>

</head>
<div id="body"><body>
<center><h1>Add teacher</h1>
<div class="header">
</div>
<div class="form1"><form method="post" action="#">
<table>
<tr>
<td>id:</td>
<td><input type="text" name="t_id" class="text"required></td>
</tr>
<tr>
<td>name:</td>
<td><input type="text" name="t_name" class="text"required></td>
</tr>
<tr>
<td>sex:</td>
<td><input type="text" name="t_sex" class="text"required></td>
</tr>
<tr>
<td>phone:</td>
<td><input type="text" name="phone" class="text"required></td>
</tr>
<tr>
<td>email:</td>
<td><input type="text" name="email" class="text"required></td>
</tr>
<tr>
<td>password:</td>
<td><input type="text" name="password" class="text"required></td>
</tr>
<tr>
<td>age:</td>
<td><input type="text" name="t_age" class="text"required></td>
<td><input type="submit" name="submit" class="Register"value="ADD"</td>
</tr>





</table></center>


</form>
</td></tr>

</table>

</body>



</html>