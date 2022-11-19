<!--BANNER START-->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Contact</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active"><a href="#">Contact</a></li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
<!-- BANNER END -->


<!-- CONTENT START-->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-8 col-md-8">
					<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&height=400&hl=en&q=kanuru&t=&z=14&ie=UTF8&iwloc=B&output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
						<div class="spacer-90"></div>
					</div>

					<div class="col-sm-4 col-md-4">
						<h2 class="section-heading">
							Contact Details
						</h2>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="info-text">Kanuru</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-text">fwm@gmail.com</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="info-text">+91 8341099859</div>
						</div>

						
					</div>

					<div class="clearfix"></div>
					
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Send a <span>Message</span>
						</h2>
						
						<div class="margin-bottom-50"></div>

						<div class="content">
							<form action="index.php?page=contact_action" method="post" class="form-contact"  onclick="return validatecontact();">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter Name" name="name"  id="txtname">
											<div  id="req_name" class="text-danger" style="display: none;">*Enter Name</div>
											<div id="valid_name" class="text-danger" style="display:none;">*Enter valid Name</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="email" name="email" id="txtemail" class="form-control" placeholder="Enter Email" >
											<div  id="req_email" class="text-danger" style="display: none;">*Enter Email</div>
											<div id="valid_email" class="text-danger" style="display:none;">*Enter valid Email</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="subject" class="form-control"  placeholder="Subject">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="tel" name="phone" class="form-control" id="txtcontact"  placeholder="Enter Phone Number">
											<div  id="req_contact" class="text-danger" style="display: none;">*Enter Phone Number</div>
											<div id="valid_contact" class="text-danger" style="display:none;">*Enter valid Phone Number</div>
											<div id="ten_contact" class="text-danger" style="display:none;">*Enter valid length Phone Number </div>
										</div>
									</div>
								</div>
								<div class="form-group">
									 <textarea name="message" class="form-control" rows="6" id="txtmsg" placeholder="Enter Your Message"></textarea>
									<div  id="req_msg" class="text-danger" style="display: none;">*Enter Message</div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<input type="submit" value="SEND MESSAGE" class="btn btn-primary">
								</div>
							</form>
						 </div>
					</div>

				</div>
				
			</div>
		</div>
	</div>	
<!-- CONTENT END-->

<!-- CTA -->
	<div class="section cta">
		<div class="content-wrap-20">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
			              	<div class="body-text">
			                	<h3>Join your hand with us for a better life and beautiful future.</h3>
			              	</div>
			              	<div class="body-action">
			                	<a href="index.php?page=visitor" class="btn btn-secondary">DONATE NOW</a>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- cta end -->
<!-- validation -->
<script type="text/javascript">
    function validatecontact()
    {
      	var name=document.getElementById('txtname');
      	var email=document.getElementById('txtemail');
      	var contact=document.getElementById('txtcontact');
      	var msg=document.getElementById('txtmsg');
     
		if(name.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_name').style.display='';
			document.getElementById('valid_name').style.display='none';
			name.focus();
			return false;	
		}
		else if(name.value.search(/^[A-Za-z ]+$/))
		{
			document.getElementById('req_name').style.display='none';
			document.getElementById('valid_name').style.display='';
			name.focus();
			return false;
		}
		else
		{
			document.getElementById('req_name').style.display='none';
			document.getElementById('valid_name').style.display='none';
		}
		if(email.value=='')
           {
            document.getElementById('req_email').style.display='';
            document.getElementById('valid_email').style.display='none';
            email.focus();
          	return false;
           }
        else if(email.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
		{
			document.getElementById('req_email').style.display='none';
			document.getElementById('valid_email').style.display='';
			email.focus();
			return false;
		}
		else
		{
			document.getElementById('req_email').style.display='none';
			document.getElementById('valid_email').style.display='none';
		}
		if(contact.value=='')
		{
			document.getElementById('req_contact').style.display='';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='none';
		 	contact.focus();
			return false;
		}
		else if(contact.value.length < 10)
		{ //alert('hi');
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='';
		 	contact.focus();
			return false;
		}
		else if(contact.value.search(/^[0-9]+$/))
		{
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='';
			document.getElementById('ten_contact').style.display='none';
			contact.focus();
			return false;
		}
		
		else
		{
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='none';
		}
	    if(msg.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_msg').style.display='';
			msg.focus();
			return false;	
		}
	
   		return true;
    }
</script>
<!-- validation -->
