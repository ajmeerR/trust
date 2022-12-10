<?php include "includes/header.php" ;


ob_start();
require('includes/phpMailer/PHPMailerAutoload.php');
require('includes/phpMailer/class.phpmailer.php');

if(isset($_POST['vol'])){

	$vname = $_POST['vname'];
	$vemail = $_POST['vemail'];
	$vmessage = $_POST['vmessage'];
	$vnumber = $_POST['vnumber'];
	$mail = new PHPMailer();

            //$mail->SMTPDebug = 2;                              

	$mail->isMail();                                      
	$mail->Host = 'smtp.gmail.com';  
	$mail->SMTPAuth = true;                               
	$mail->Username = $vemail;                 
            //$mail->Password = '';                     
	$mail->SMTPSecure = 'ssl'; 
	$mail->Port = 465;                            
            //$mail->Port = 587;                                   
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);
	$mail->setFrom($vemail, 'LOTUS RURAL TRUST');
	$mail->addAddress('lotusruraltrust@gmail.com');     
               // Optional name
	$mail->isHTML(true);


	$mail->Subject = 'Volunteer Enquiry';

	$mail->Body    = "
	<html>
	<body>

	<h3>Volunteer Name :$vname</h3>
	<h3>Volunteer Email : $vemail</h3>
	<h3>Volunteer Number : $vnumber</h3>
	<h3>Volunteer Meaasge : $vmessage</h3>

	</body>
	</html>

	";

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}else{
		echo "<script>alert('Message Send successfully')</script>";
	}
}
//////////////////////////////////////////Contact Form//////////////////////////////////////////////
if(isset($_POST['contact'])){

	$cname = $_POST['cname'];
	$cemail = $_POST['cemail'];
	$cmessage = $_POST['cmessage'];
	$cnumber = $_POST['cnumber'];
	$mail = new PHPMailer();

            //$mail->SMTPDebug = 2;                               
	$mail->isMail();                                     
	$mail->Host = 'smtp.gmail.com';  
	$mail->SMTPAuth = true;                               
	$mail->Username = $cemail;                
            //$mail->Password = '';                     
	$mail->SMTPSecure = 'ssl'; 
	$mail->Port = 465;                            
            //$mail->Port = 587;                                    
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);
	$mail->setFrom($vemail, 'LOTUS RURAL TRUST');
	$mail->addAddress('lotusruraltrust@gmail.com');     
               // Optional name
	$mail->isHTML(true);


	$mail->Subject = 'Contact Enquiry';

	$mail->Body    = "
	<html>
	<body>

	<h3> Name :$cname</h3>
	<h3> Email : $cemail</h3>
	<h3> Number : $cnumber</h3>
	<h3> Meaasge : $cmessage</h3>

	</body>
	</html>

	";

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}else{
		echo "<script>alert('Message Send successfully')</script>";
	}
}
?>
<header class="site-header">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-12 d-flex flex-wrap">
				<p class="d-flex me-4 mb-0">
					<i class="bi-geo-alt me-2"></i>
					No,2/84, Road street, Thalangai village & post Sholingur T.K.,
					Ranipat Dist - 632 501 . TamilNadu
				</p>

				<p class="d-flex mb-0">
					<i class="bi-envelope me-2"></i>

					<a href="mailto:lotusruraltrust@gmail.com">
						lotusruraltrust@gmail.com
					</a>
				</p>
			</div>

			<div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
				<ul class="social-icon">
					<!-- <li class="social-icon-item">
						<a href="#" class="social-icon-link bi-twitter"></a>
					</li>

					<li class="social-icon-item">
						<a href="#" class="social-icon-link bi-facebook"></a>
					</li>

					<li class="social-icon-item">
						<a href="#" class="social-icon-link bi-instagram"></a>
					</li> -->

					<li class="social-icon-item">
						<a href="https://www.youtube.com/channel/UCDMsSRLergJC40hiTmqFvwQ" class="social-icon-link bi-youtube"></a>
					</li>

					<!-- <li class="social-icon-item">
						<a href="#" class="social-icon-link bi-whatsapp"></a>
					</li> -->
				</ul>
			</div>

		</div>
	</div>
</header>

<?php include "includes/nav.php" ?>

<main>

	<section class="hero-section hero-section-full-height">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-12 col-12 p-0">
					<div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/3.jpeg" class="carousel-image img-fluid" alt="...">

                                        <!-- <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>be a Kind Heart</h1>
                                            
                                            <p>Professional charity theme based on Bootstrap 5.2.2</p>
                                        </div> -->
                                    </div>

                                    <div class="carousel-item">
                                    	<img src="images/4.jpeg" class="carousel-image img-fluid" alt="...">

                                        <!-- <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Non-profit</h1>
                                            
                                            <p>You can support us to grow more</p>
                                        </div> -->
                                    </div>

                                    <div class="carousel-item">
                                    	<img src="images/2.jpeg" class="carousel-image img-fluid" alt="...">

                                        <!-- <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Humanity</h1>
                                            
                                            <p>Please tell your friends about our website</p>
                                        </div> -->
                                    </div>

                                    <div class="carousel-item">
                                    	<img src="images/5.jpeg" class="carousel-image img-fluid" alt="...">

                                       <!--  <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Humanity</h1>
                                            
                                            <p>Please tell your friends about our website</p>
                                        </div> -->
                                    </div>


                                    <div class="carousel-item">
                                    	<img src="images/6.jpeg" class="carousel-image img-fluid" alt="...">

                                        <!-- <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Humanity</h1>
                                            
                                            <p>Please tell your friends about our website</p>
                                        </div> -->
                                    </div>

                                    <div class="carousel-item">
                                    	<img src="images/7.jpeg" class="carousel-image img-fluid" alt="...">

                                        <!-- <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Humanity</h1>
                                            
                                            <p>Please tell your friends about our website</p>
                                        </div> -->
                                    </div>

                                    <div class="carousel-item">
                                    	<img src="images/8.jpeg" class="carousel-image img-fluid" alt="...">

                                        <!-- <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Humanity</h1>
                                            
                                            <p>Please tell your friends about our website</p>
                                        </div> -->
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                	<span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                                	<span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding">
            	<div class="container">
            		<div class="row">

            			<div class="col-lg-10 col-12 text-center mx-auto">
            				<h2 class="mb-5">Welcome to LOTUS RURAL TRUST</h2>
            			</div>

            			<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
            				<div class="featured-block d-flex justify-content-center align-items-center">
            					<a href="#section_4" class="d-block">
            						<img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

            						<p class="featured-block-text">Become a <strong>volunteer</strong></p>
            					</a>
            				</div>
            			</div>

            			<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
            				<div class="featured-block d-flex justify-content-center align-items-center">
            					<a href="#" class="d-block">
            						<img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

            						<p class="featured-block-text"><strong>Caring</strong> Earth</p>
            					</a>
            				</div>
            			</div>

            			<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
            				<div class="featured-block d-flex justify-content-center align-items-center">
            					<a href="./donate.php" class="d-block" >
            						<img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

            						<p class="featured-block-text">Make a <strong>Donation</strong></p>
            					</a>
            				</div>
            			</div>

 <!--                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="donate.html" class="d-block">
                                    <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                                </a>
                            </div>
                        </div> -->

                    </div>
                </div>
            </section>

            <section class="section-padding section-bg" id="section_2">
            	<div class="container">
            		<div class="row">

            			<div class="col-lg-6 col-12 mb-5 mb-lg-0">
            				<img src="images/10.jpeg" class="custom-text-box-image img-fluid" alt="">
            			</div>

            			<div class="col-lg-6 col-12">
            				<div class="custom-text-box">
            					<!--  <h2 class="mb-0"></h2> -->

            					<h5 class="mb-3">FOLLOWING ARE THE ACTIVITES OF THE TRUST</h5>

            					<p class="mb-0" style="text-align: justify;">
            						1) Conducting eye Campus and other medical Campus with the support of urban based Multispeciality Hospitals like CMC, JIPMER, ARVIND EYE Hospital and other Charity institutions.<br>

            						2) The Trust once in a month organizing Siddha and Ayurvedic Consultations where the people from surrounding villages and promoting their treatment and ailment.<br>

            						3) The organization is functioning from 2012, has built good support with NGO'S and around Walaja and join with them during the public Acitivities.<br>

            						4) The organization has a team of committed volunteers, who offer their energy and ability during thte function and Programmes carried out. Trust also nourishing their needs whenever they need them and wherever the Trust is capable of<br>

            						5) The Trust is organizes sessions on organic Agriculture and animal catering.<br>

            						6) The organization provides consultation to poor and downtrodden youth about the opportunities available in Tamil Nadu and National Government and motivate them to avail them for the development and growth.<br>

            						7)The Trust provides the Treatment at cheaper cost and channelize them to proper hospitals for further Treatment at comparatively cheaper hospitals (for example Govt hospitals and private charity hospitals like Thirumalal Mission Hospital)
            					</p>
            				</div>

            				<div class="row">
            					<div class="col-lg-12 col-md-6 col-12">
            						<div class="custom-text-box mb-lg-0">
            							<h5 class="mb-3">Our Vision</h5>

            							<p style="text-align: justify;">The LOTUS RURAL TRUST visualizes a society where equality, fraternity and freedom exist and also people particularly poor, Dalith, and women have equal rights and Opportunities in education, profession and lively-hood, Resources.</p>

                                        <!-- <ul class="custom-list mt-2">
                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Charity Theme
                                            </li>

                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Semantic HTML
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
<!-- 
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <p>LOTUS RURAL TRUST would work towards achieving the vision by organizing the people into groups and channelise them towards development goals. The trust strives to encourage the people and capacitable them to mobilize Resources and properly utilize them towards development the Trust would enable women and Dalith to secure access the Government schemes and promote self-help activities towards fulfilling their lively-hood needs and comfort. The Trust would capacitate people to learn constitution and legal rights and avail free legal Aid, family court to get justice.</p>
                                            </div>

                                            <span class="counter-text">Founded</span>
                                        </div> 

                                        <div class="counter-thumb mt-4"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="120" data-speed="1000"></span>
                                                <span class="counter-number-text">B</span>
                                            </div>

                                            <span class="counter-text">Donations</span>
                                        </div> 
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-12 col-12" style="margin-top: 10px;">
                        	<div class="custom-text-box">
                        		<h5 class="mb-3">Our Mission</h5>
                        		<p class="mb-0" style="text-align: justify;">
                        			LOTUS RURAL TRUST would work towards achieving the vision by organizing the people into groups and channelise them towards development goals. The trust strives to encourage the people and capacitable them to mobilize Resources and properly utilize them towards development the Trust would enable women and Dalith to secure access the Government schemes and promote self-help activities towards fulfilling their lively-hood needs and comfort. The Trust would capacitate people to learn constitution and legal rights and avail free legal Aid, family court to get justice.
                        		</p>
                        	</div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="about-section section-padding">
            	<div class="container">
            		<div class="row">

            			<div class="col-lg-6 col-md-5 col-12">
            				<img src="images/9.jpeg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
            			</div>

            			<div class="col-lg-5 col-md-7 col-12">
            				<div class="custom-text-block">
            					<h2 class="mb-0">Dr.S.Mohan</h2>
            					<small>B.E.M.S., M.Sc.,(Varma),PGDYN</small>

            					<p class="text-muted mb-lg-4 mb-md-4"><b>Founder & Chairman</b></p>

<!--                                 <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based</p>

                                <p>You are not allowed to redistribute this template ZIP file on any other template collection website. Please contact TemplateMo for more information.</p>

                                <ul class="social-icon mt-4">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-instagram"></a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="cta-section section-padding section-bg">
            	<div class="container">
            		<div class="row justify-content-center align-items-center">

            			<div class="col-lg-5 col-12 ms-auto">
            				<h2 class="mb-0">Make an impact. <br> Save lives.</h2>
            			</div>

            			<div class="col-lg-5 col-12">
            				<a href="#" class="me-4">Make a donation</a>

            				<a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
            			</div>

            		</div>
            	</div>
            </section>


           <!--  <section class="section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2>Our Causes</h2>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="images/causes/group-african-kids-paying-attention-class.jpg" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Children Education</h5>

                                        <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="mb-0">
                                                <strong>Raised:</strong>
                                                $18,500
                                            </p>

                                            <p class="ms-auto mb-0">
                                                <strong>Goal:</strong>
                                                $32,000
                                            </p>
                                        </div>
                                    </div>

                                    <a href="donate.html" class="custom-btn btn">Donate now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="images/causes/poor-child-landfill-looks-forward-with-hope.jpg" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Poverty Development</h5>

                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus tempor</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="mb-0">
                                                <strong>Raised:</strong>
                                                $27,600
                                            </p>

                                            <p class="ms-auto mb-0">
                                                <strong>Goal:</strong>
                                                $60,000
                                            </p>
                                        </div>
                                    </div>

                                    <a href="donate.html" class="custom-btn btn">Donate now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-block-wrap">
                                <img src="images/causes/african-woman-pouring-water-recipient-outdoors.jpg" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Supply drinking water</h5>

                                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="mb-0">
                                                <strong>Raised:</strong>
                                                $84,600
                                            </p>

                                            <p class="ms-auto mb-0">
                                                <strong>Goal:</strong>
                                                $100,000
                                            </p>
                                        </div>
                                    </div>

                                    <a href="donate.html" class="custom-btn btn">Donate now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->

            <section class="volunteer-section section-padding" id="section_4">
            	<div class="container">
            		<div class="row">

            			<div class="col-lg-6 col-12">
            				<h2 class="text-white mb-4">Volunteer</h2>

            				<form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
            					<h3 class="mb-4">Become a volunteer today</h3>

            					<div class="row">
            						<div class="col-lg-6 col-12">
            							<input type="text" name="vname" id="volunteer-name" class="form-control" placeholder="Name" required>
            						</div>

            						<div class="col-lg-6 col-12">    
            							<input type="email" name="vemail" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="someone@gmail.com" required>
            						</div>
            						<div class="col-lg-12 col-12">
            							<input type="text" name="vnumber" id="volunteer-number" class="form-control" placeholder="Number" required>
            						</div>


            						<!-- <div class="col-lg-12 col-12">
            							<input type="text" name="vsubject" id="volunteer-subject" class="form-control" placeholder="Subject" required>
            						</div> -->

                                    <!-- <div class="col-lg-6 col-12">
                                        <div class="input-group input-group-file">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            
                                            <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div>
                                    </div> -->
                                </div>

                                <textarea name="vmessage" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                                <!--  <button type="submit" class="form-control">Submit</button> -->
                                <input type="submit" name="vol" class="custom-btn btn" value="Submit">
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                        	<img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg" class="volunteer-image img-fluid" alt="">

                        	<div class="custom-block-body text-center">
                        		<h4 class="text-white mt-lg-8 mb-lg-3">About Volunteering</h4>

                        		<p class="text-white" style="text-align: justify;">Lotus RuralFoundation believes that unless members of the civil society are involved proactively in the process of development, sustainable change will not happen. We encourage and invite individuals for volunteer opportunities and volunteer registration, to be an active part of our organization and share the same vision and purpose as us – to work for the welfare of children and their families. Volunteers are the backbone of every organization – they not only carry the organization’s ideals within them, but also spread the message far and beyond, sensitizing the society towards the cause. Volunteer for NGO, volunteer to serve, spread some smiles!</p>
                        	</div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Latest news -->
            <!-- <section class="news-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-5">
                            <h2>Latest News</h2>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div class="news-block">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="images/news/medium-shot-volunteers-with-clothing-donations.jpg" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Lifestyle,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Clothing Donation
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <i class="bi-calendar4 custom-icon me-1"></i>
                                                October 12, 2036
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <i class="bi-person custom-icon me-1"></i>
                                                By Admin
                                            </p>
                                        </div>

                                        <div class="news-block-comment">
                                            <p>
                                                <i class="bi-chat-left custom-icon me-1"></i>
                                                32 Comments
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to urban area</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based on Bootstrap</p>
                                    </div>
                                </div>
                            </div>

                            <div class="news-block mt-3">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="images/news/medium-shot-people-collecting-foodstuff.jpg" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Food,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Donation,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Caring
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <i class="bi-calendar4 custom-icon me-1"></i>
                                                October 20, 2036
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <i class="bi-person custom-icon me-1"></i>
                                                By Admin
                                            </p>
                                        </div>

                                        <div class="news-block-comment">
                                            <p>
                                                <i class="bi-chat-left custom-icon me-1"></i>
                                                35 Comments
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto">
                            <form class="custom-form search-form" action="#" method="get" role="form">
                                <input name="search" type="search" class="form-control" id="search" placeholder="Search" aria-label="Search">

                                <button type="submit" class="form-control">
                                    <i class="bi-search"></i>
                                </button>
                            </form>

                            <h5 class="mt-5 mb-3">Recent news</h5>

                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="images/news/africa-humanitarian-aid-doctor.jpg" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 16, 2036
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="images/news/close-up-happy-people-working-together.jpg" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a></h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 24, 2036
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="category-block d-flex flex-column">
                                <h5 class="mb-3">Categories</h5>

                                <a href="#" class="category-block-link">
                                    Drinking water
                                    <span class="badge">20</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Food Donation
                                    <span class="badge">30</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Children Education
                                    <span class="badge">10</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Poverty Development
                                    <span class="badge">15</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Clothing Donation
                                    <span class="badge">20</span>
                                </a>
                            </div>

                            <div class="tags-block">
                                <h5 class="mb-3">Tags</h5>

                                <a href="#" class="tags-block-link">
                                    Donation
                                </a>

                                <a href="#" class="tags-block-link">
                                    Clothing
                                </a>

                                <a href="#" class="tags-block-link">
                                    Food
                                </a>

                                <a href="#" class="tags-block-link">
                                    Children
                                </a>

                                <a href="#" class="tags-block-link">
                                    Education
                                </a>

                                <a href="#" class="tags-block-link">
                                    Poverty
                                </a>

                                <a href="#" class="tags-block-link">
                                    Clean Water
                                </a>
                            </div>

                            <form class="custom-form subscribe-form" action="#" method="get" role="form">
                                <h5 class="mb-4">Newsletter Form</h5>

                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required>

                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control">Subscribe</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section> -->


            <!-- <section class="testimonial-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="mb-lg-3">Happy Customers</h2>
                            
                                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                           <div class="carousel-caption">
                                                <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Maria</span>, Boss</small>
                                           </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Thomas</span>, Partner</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Jane</span>, Advisor</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Bob</span>, Entreprenuer</small>
                                           </div>
                                        </div>

                                          <ol class="carousel-indicators">
                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                                    <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                                    <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                                    <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                                    <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>
                                          </ol>

                                 </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->


            <section class="contact-section section-padding" id="section_6">
            	<div class="container">
            		<div class="row">

            			<div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
            				<div class="contact-info-wrap">
            					<h2>For awareness and training program</h2>

            					<div class="contact-image-wrap d-flex flex-wrap">
            						<!-- <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid avatar-image" alt=""> -->

            						<div class="d-flex flex-column justify-content-center ms-3">
            							<!-- <p class="mb-0">Clara Barton</p> -->
            							<p class="mb-0"><strong>Contact : 9444240690</strong></p>
            						</div>
            					</div>

            					<div class="contact-info">
            						<h5 class="mb-3">Contact Infomation</h5>

            						<p class="d-flex mb-2">
            							<i class="bi-geo-alt me-2"></i>
            							No,2/84, Road street, Thalangai village & post Sholingur T.K.,
            							Ranipat Dist - 632 501 . TamilNadu South India 
            						</p>

            						<p class="d-flex mb-2">
            							<i class="bi-telephone me-2"></i>

            							<a href="tel: 120-240-9600">
            								94442 40690, 90038 62756
            							</a>
            						</p>

            						<p class="d-flex">
            							<i class="bi-envelope me-2"></i>

            							<a href="mailto:info@yourgmail.com">
            								lotusruraltrust@gmail.com
            							</a>
            						</p>

            						<a href="https://goo.gl/maps/DiyUtmFA2RyWnFYe7" target="_blank" class="custom-btn btn mt-3">Get Direction</a>
            					</div>
            				</div>
            			</div>

            			<div class="col-lg-5 col-12 mx-auto" >
            				<form class="custom-form contact-form" action="#" method="post" role="form">
            					<h2>Contact form</h2>

            					<p class="mb-4">Or, you can just send an email:
            						<a href="#">lotusruraltrust@gmail.com</a>
            					</p>
            					<div class="row">
            						<div class="col-lg-12 col-md-6 col-12">
            							<input type="text" name="cname" id="f" class="form-control" placeholder="Name" required>
            						</div>

            						<div class="col-lg-12 col-md-6 col-12">
            							<input type="name" name="cnumber" id="" class="form-control" placeholder="Mobile Number" required>
            						</div>
            					</div>

            					<input type="email" name="cemail" id="cemail" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="someone@gmail.com" required>

            					<textarea name="cmessage" rows="5" class="form-control" id="message" placeholder="What can we help you? (Optional)"></textarea>

            					<input type="submit" name="contact" class="custom-btn btn" value="Send Meaasge">
            				</form>
            			</div>

            		</div>
            	</div>
            </section>
        </main>
        <?php include "includes/footer.php" ?>