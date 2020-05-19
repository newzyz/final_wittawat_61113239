
<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?php echo base_url('public/images/contact.jpg')?>)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li>Contact</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Get in Touch</div>
						<div class="section_subtitle">Say hello</div>
						<div class="contact_form_container">

						<form method="post" action="<?php echo base_url('contact/save');?>">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">First Name*</label>
										<input type="text" name="firstName" class="contact_input" required>
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Last Name*</label>
										<input type="text" name="lastName" class="contact_input" required>
									</div>
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Subject</label>
									<input type="text" name="subject" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Message*</label>
									<textarea name="message" class="contact_input contact_textarea" required></textarea>
								</div>
								<button  type="submit" class="button contact_button"><span><strong>Send Message</strong></span></button>
								<!-- <p class="text-center"><button type="submit" class="btn btn-success"><i class="far fa-save"></i>  บันทึก</button></p> -->

							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Marketing</div>
							<ul>
								<li>Phone : <span>02-666-0097</span></li>
								<li>Email : <span>eazyit_market@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Shippiing & Returns</div>
							<ul>
								<li>Phone : <span>02-666-0098</span></li>
								<li>Email : <span>eazyit_shipping@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Information</div>
							<ul>
								<li>Phone : <span>02-666-0099</span></li>
								<li>Email : <span>eazyit_info@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Google Map -->
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
    </div>
    
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/contact.css') ?>">