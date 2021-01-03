<?php 
// i am doing the client side validation here
include 'config.php';
if(isset($_POST['submit']))
{
	$some=array();//creating an empty array to store the error and cheking the error
	$EmailValue=$_POST['email'];
	$nameis=$_POST['name'];


		$thqeq="SELECT email FROM email WHERE email='$EmailValue'";
		$sql=mysqli_query($con,$thqeq);
		if(mysqli_num_rows($sql)>0)
		{
			array_push($some,"Email exist");
		}
		else
		{
			$insertQu="INSERT INTO email VALUES(NULL,'$nameis','$EmailValue')";
			$fire=mysqli_query($con,$insertQu);
			if($fire)
			{
				// echo "se";
				header("Location:x.php");
			}
			else
			{
				echo "insert ERRO";
			}


		}
}

 ?>