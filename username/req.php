<?php 
include 'config.php';
if (isset($_POST['emailis']))
{
		// $name=$_POST['user'];
		$email=$_POST['emailis'];

		$thqeq="SELECT email FROM email WHERE email='$email'";
		$sql=mysqli_query($con,$thqeq);
		if(mysqli_num_rows($sql)>0)
		{
			echo "A";
		}
		else
		{
			echo "B";
		}


}


 ?>