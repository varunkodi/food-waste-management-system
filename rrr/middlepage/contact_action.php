<?php

	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$subject=$_REQUEST['subject'];
	$message=$_REQUEST['message'];
	@$status=$_REQUEST['status'];
	$date = date("Y-m-d",strtotime("now"));

				 $insert="INSERT INTO `contact` (`name`,`email`,`phone`,`subject`,`message`,`status`,`created_date`)VALUES('$name','$email','$phone','$subject','$message','$status','$date')";
				 $qry=mysqli_query($con,$insert);
					if($qry)
					{
						//echo "data is Inserted";
						echo "<script> var ans=alert('Message Sent!!')
		                if(!ans)
		                	window.location='index.php'</script>";
					
					}
					else
					{
						echo "<script> var ans=alert('Message Not Sent!!')
		                if(!ans)
		                	window.location='index.php?page=contact'</script>";
						//header("location:index.php?page=contact");
						//echo "Data Is Not Inserted";
					}
	    
 ?>