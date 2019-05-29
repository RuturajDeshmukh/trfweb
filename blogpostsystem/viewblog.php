<?php
include("dbcon.php");
$qry="SELECT * FROM blogs";

$run=mysqli_query($con,$qry);
if ($run==TRUE)
{
?>	<table>
<?php
while($data=mysqli_fetch_array($run))
{
	?>
	<tr>
		<td><?php echo $data['title'];?></td><td><?php echo $data['body'];?></td>
	</tr>
	<?php
	
}
?></table><?php
}

else
	echo "can't display";
?>