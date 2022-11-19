<?php
   
   $name=$_REQUEST['name'];
   $h_id=$_REQUEST['h_id'];
   $subject=$_REQUEST['subject'];
   $msg=$_REQUEST['message'];
   $date = date("Y-m-d",strtotime("now"));
   
 		
 			$insert="INSERT INTO `feedback` (`h_id`,`f_name`,`f_subject`,`f_message`,`f_date`)VALUES('$h_id','$name','$subject','$msg','$date')";
				 $qry=mysqli_query($con,$insert);
					if($qry)
					{
						//echo "data is Inserted";
						echo "<script> var ans=alert('Feedback Sent!!')
		                if(!ans)
		                	window.location='index.php'</script>";
					
					}
					else
					{
						echo "<script> var ans=alert('Message Not Sent!!')
		                if(!ans)
		                	window.location='index.php?page=feedback.php'</script>";
						//header("location:index.php?page=contact");
						//echo "Data Is Not Inserted";
					}
?>