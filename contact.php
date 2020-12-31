<?php
/* Template Name: Contact form */
get_header();
if(isset($sub))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sub = $_POST['subjject'];
	$msg = $_POST['msg'];

	$qry = "INSERT INTO";
}
?>
<!-- <section class=""> -->
		<!-- <div class="container"> -->
			<div style="background-image:url(<?php echo get_template_directory_uri();?>/inc/assets/images/img1.jpg)" 
			class="fsh-common-breadcrumb-banner container-fluid">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="fsh-breadcrumb-wrapper">
							<h4 class="text-uppercase fsh-breadcrumb-title-white">Contact Us</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- </div> -->
			<div class="row justify-content-center">
				<!-- <div class="col-md-6 text-center mb-5">

					<h2 class="heading-section">Contact Form </h2>
				</div> -->
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(<?php echo get_template_directory_uri();?>/inc/assets/images/img.jpg);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch with us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary" name="sub">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- </section> -->
<?php
get_footer();

?>