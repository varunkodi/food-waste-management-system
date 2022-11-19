<?php
	 $name=$_REQUEST['name'];
	 $address=$_REQUEST['address'];
	 $phone=$_REQUEST['phone'];
	 $city=$_REQUEST['city_id'];
	 $cooked_time=$_REQUEST['cookedtime'];
	 $pickup_time=$_REQUEST['pickuptime'];
	 $expiry_time=$_REQUEST['expirytime'];
	//  echo $cooked_time;
	//  echo $pickup_time;
	//  echo $expiry_time;
	 $email=$_REQUEST['email'];
     $foodqty=$_REQUEST['foodqty'];
     $foodname=$_REQUEST['foodname'];
	 $date = date("Y-m-d",strtotime("now"));


     $insert="INSERT INTO visitor (`v_name`,`v_phoneNo`,`v_address`,`cooked_time`,`pickup_time`,`expiry_time`,`v_city`,`v_email`,`v_foodqty`,`v_foodname`,`v_date`)VALUES('$name','$phone','$address','$cooked_time','$pickup_time','$expiry_time','$city','$email','$foodqty','$foodname','$date')";
	 //echo $insert;
	 $qry=mysqli_query($con,$insert);
	 //echo $qry;
	 if($qry==1){
		echo "inside";
	 	$v_id=mysqli_insert_id($con);
	 	echo $v_id;
	   	$insert_req="INSERT INTO `request`(`v_id`,`food_name`,`food_qty`,`status`,`v_phoneNo`,`v_city`,`v_address`,`cooked_time`,`pickup_time`,`expiry_time`,`r_date`)VALUES('$v_id','$foodname','$foodqty','pending','$phone','$city','$address','$cooked_time','$pickup_time','$expiry_time','$date')";
	   	$qry_req=mysqli_query($con,$insert_req);
	    echo "<script> var ans=alert('Donation Request Sent!!');
	    if(!ans){
	       	window.location='index.php'
		}</script>";
	}
	else{
	  	echo "Data Is Not Inserted";
	  	echo "<script> var ans=alert('Donation Request Not Sent!!');
	  	        if(!ans)
	  	            window.location='index.php?page=visitor'</script>";
	}
?>