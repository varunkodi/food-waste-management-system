	<!-- BANNER -->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Hotel Registration</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Registration</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
	<!-- BANNER END -->

	<!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="clearfix"></div>
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Create an <span>Account</span>
						</h2>
						<div class="section-subheading" style="color:black;">By registering to our website you can access all functionalities and no need to provide your hotel detials everytime directly ask for leftover food pickup</div>

                    <!-- Email unique -->
                    <centre> 
                      <h3 class="text-danger">
                      	<?php if(isset($_SESSION['alrdmsg'])){ echo $_SESSION['alrdmsg']; unset($_SESSION['alrdmsg']);} ?>
                      </h3> 
                    </centre>

						<div class="margin-bottom-50"></div>
						<div class="margin-bottom-10"></div>
						<div class="content">
							<form action="index.php?page=hotel_action" onclick="return validatehotel();" method="post" enctype="multipart/form-data" class="form-contact" data-toggle="validator" novalidate="true">
								<div class="row">
									<div class="col-sm-6 col-md-5">
										<div class="form-group">
											<input type="text" class="form-control" id="txtname" name="name" placeholder="Enter Hotel Name" required="">
											<div  id="req_name" class="text-danger" style="display: none;">*Enter Name</div>
											<div id="valid_name" class="text-danger" style="display:none;">*Enter valid Name</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" id="txtemail" name="email" placeholder="Enter Email" required="">
											<div  id="req_email" class="text-danger" style="display: none;">*Enter Email</div>
											<div id="valid_email" class="text-danger" style="display:none;">*Enter valid Email</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" id="txtcontact" name="phone" placeholder="Enter Phone Number">
											<div  id="req_contact" class="text-danger" style="display: none;">*Enter Phone Number</div>
											<div id="valid_contact" class="text-danger" style="display:none;">*Enter valid Phone Number</div>
											<div id="ten_contact" class="text-danger" style="display:none;">*Enter valid length Phone Number </div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<select name="city" class="form-control">
	                                 			<option>Select City</option>	
													<?php
														
												        $city=mysqli_query($con,"SELECT * FROM `city`");
												        while($row=mysqli_fetch_array($city)){
												    ?>													
														<option value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
													<?php } ?>
											</select>
													<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
										 <textarea id="txtaddress" class="form-control" rows="6" name="address" placeholder="Enter Your Address"></textarea>
										<div  id="req_add" class="text-danger" style="display: none;">*Enter Address</div>
										</div>
								    </div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<input type="password" id="txtpassword" class="form-control" name="password" placeholder="Enter Password">
												<div  id="req_password" class="text-danger" style=" display:none;">*Enter Password</div>
												<div id="min_password" class="text-danger" style="display:none;">*Enter Password greater than 7</div>
												<div  id="max_password" class="text-danger" style=" display:none;">*Enter Password less than 20</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<input type="password" class="form-control" id="txtconfirmpwd"  placeholder="Confirm Password">
											<div  id="req_confirmpwd" class="text-danger" style=" display:none;">*Please confirm your password</div>
											<div  id="valid_confirmpwd" class="text-danger" style=" display:none;">*Password doesnot match</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3 col-md-3">
										<div class="form-group">
											<input type="text" disabled="true" name="profile" class="form-control" placeholder="Select Profile">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-3 col-md-3">
										<div class="form-group">
											<input type="file" class="form-control" name="profile" id="p_subject" placeholder="Profile">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<input type="submit" value="Register" class="btn btn-primary">
								</div>
							</form>
							<a href="index.php?page=login" style="color:blue;  text-decoration: underline;">Already have an account!</a>	
							<div class="margin-bottom-50"></div>
							<p><em>Note: You need Email and Password to Login make sure to provide valid Email</em></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- validation -->
<script type="text/javascript">
    function validatehotel()
    {
      	var name=document.getElementById('txtname');
      	var email=document.getElementById('txtemail');
      	var contact=document.getElementById('txtcontact');
      	var address=document.getElementById('txtaddress');
      	var date=document.getElementById('txtdate');
      	var qty=document.getElementById('txtqty');
      	var password=document.getElementById('txtpassword');
      	var confirmpwd=document.getElementById('txtconfirmpwd');
     
/*name */
		if(name.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_name').style.display='';
			document.getElementById('valid_name').style.display='none';
			return false;	
		}
		else if(name.value.search(/^[A-Za-z ]+$/))
		{
			document.getElementById('req_name').style.display='none';
			document.getElementById('valid_name').style.display='';
			return false;
		}
		else
		{
			document.getElementById('req_name').style.display='none';
			document.getElementById('valid_name').style.display='none';
		}
        
/*email*/
		if(email.value=='')
        {
            document.getElementById('req_email').style.display='';
            document.getElementById('valid_email').style.display='none';
          	return false;
        }
        else if(email.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
		{
			document.getElementById('req_email').style.display='none';
			document.getElementById('valid_email').style.display='';
			return false;
		}
		else
		{
			document.getElementById('req_email').style.display='none';
			document.getElementById('valid_email').style.display='none';
		}
/*phone*/
		if(contact.value=='')
		{
			document.getElementById('req_contact').style.display='';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='none';
			return false;
		}
		else if(contact.value.search(/^[0-9]+$/))
		{
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='';
			document.getElementById('ten_contact').style.display='none';
			return false;
		}
		else if(contact.value.length != 10)
		{ //alert('hi');
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='';
			return false;
		}
		else
		{
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='none';
		}
/*address*/	
		if(address.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_add').style.display='';
			return false;	
		}
		else
		{
			document.getElementById('req_add').style.display='none';
		}
/*password*/
		if(password.value=='')
		{
			document.getElementById('req_password').style.display='';
			document.getElementById('min_password').style.display='none';
			document.getElementById('max_password').style.display='none';
			return false;
		}
		else if (password.value.length< 6) 
		{
        	document.getElementById('req_password').style.display='none';
			document.getElementById('min_password').style.display='';
			document.getElementById('max_password').style.display='none';
 			return false;
 		}
 		else if(password.value.length>20)
 		{
 			document.getElementById('req_password').style.display='none';
			document.getElementById('min_password').style.display='none';
			document.getElementById('max_password').style.display='';
 			return false;
 		}
		else
		{
			document.getElementById('req_password').style.display='none';
			document.getElementById('min_password').style.display='none';
			document.getElementById('max_password').style.display='none';
		}
/*confirm password*/
        if(confirmpwd.value=='')
        {
 			document.getElementById('req_confirmpwd').style.display='';
			document.getElementById('valid_confirmpwd').style.display='none';

			return false;
 		}
 		else if(password.value!=confirmpwd.value)
 		{
 			document.getElementById('req_confirmpwd').style.display='none';
			document.getElementById('valid_confirmpwd').style.display='';
			
 			return false;
 		}
 		else
 		{
 			document.getElementById('req_confirmpwd').style.display='none';
			document.getElementById('valid_confirmpwd').style.display='none';
 		}

/*		if(date.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_date').style.display='';
			date.focus();
			return false;	
		}
		else
		{
			document.getElementById('req_date').style.display='none';
		}*/
   		return true;
    }
</script>
<!-- validation -->