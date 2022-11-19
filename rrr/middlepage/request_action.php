<?php

	$hotel_id=$_REQUEST['hotel_id'];
	$ngo_id=$_REQUEST['ngo_id'];
	$foodname=$_REQUEST['foodname'];
	$foodtype=$_REQUEST['foodtype'];
	$foodqty=$_REQUEST['foodqty'];
//	@$status=$_REQUEST['status'];
	$cookedtime=$_REQUEST['cookedtime'];
	$pickuptime=$_REQUEST['pickuptime'];
	$expirytime=$_REQUEST['expirytime'];
	$date = date("Y-m-d",strtotime("now"));
	// echo $date;

		$insert="INSERT INTO request (`h_id`,`ngo_id`,`food_name`,`food_type`,`food_qty`,`cooked_time`,`pickup_time`,`expiry_time`,`r_date`,`status`)VALUES('$hotel_id','$ngo_id','$foodname','$foodtype','$foodqty','$cookedtime','$pickuptime','$expirytime','$date','pending')";
		$qry=mysqli_query($con,$insert);
		if($qry)
		{
			// $insert="INSERT INTO request ('currentdate') VALUES ('dshgvjh')";
		    // $qry=mysqli_query($con,$insert);
			// echo $qry."hi";
			// if($qry){
			echo "<script> var ans=alert('Request Send Successfully!!')
                if(!ans)
                	window.location='index.php'</script>";
		// }
		// else
		// {
		// 	echo "Data Is Not Inserted";
	    // }
		}
		else
		{
			echo "Data Is Not Inserted";
	    }

?>