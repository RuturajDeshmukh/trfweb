
<?php
include("dbcon.php");
session_start();
if (isset($_POST['login']))
{
	$username=$_POST['user'];
	$password=$_POST['Password'];
	$email=$_POST['Email'];
	
	
	$query="SELECT *  FROM `users` WHERE `Name`='$username' AND `Password`='$password' AND `Email`='$email'";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
	?>
	<script>
		alert('username or pssword does not match');
		window.open('index.php','_self');
	</script>
	<?php
	
	}
	else{
		
		echo "You are logged in";
		echo '<a href="blog1.php">Click here to add blog</a>';
		echo '<a href="viewblog.php">Clickhere to view blogs</a>';
		$_SESSION['user1']=$_POST['user'];
	}
}

?>


