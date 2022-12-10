<?php 
include "includes/header.php" ;
?>
<?php 
include "includes/nav.php" ;
?>
 <main>

            <section class="donate-section">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mx-auto donate-form">
                        	<h3 class="mb-4">Make a donation</h3>
                        	<h2 style="text-align:center;">Lotus Rural Trust</h2>
                        	<p style="text-align: justify;">At Loral Rural Trust We Believe in building a better tomorrow for our-self and our society by helping out the person’s who are really in need of education, food, dress, medicines, awareness, etc.</p>
                            <!-- <form class="custom-form donate-form" action="#" method="get" role="form">
                                <h3 class="mb-4">Make a donation</h3>

                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <h5 class="mb-3">Donation Frequency</h5>
                                    </div>

                                    <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                        <div class="form-check form-check-radio">
                                            <input class="form-check-input" type="radio" name="DonationFrequency" id="DonationFrequencyOne" checked>
                                            
                                            <label class="form-check-label" for="DonationFrequencyOne">
                                                One Time
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                        <div class="form-check form-check-radio">
                                            <input class="form-check-input" type="radio" name="DonationFrequency" id="DonationFrequencyMonthly">
                                            
                                            <label class="form-check-label" for="DonationFrequencyMonthly">
                                                Monthly
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <h5 class="mt-2 mb-3">Select an amount</h5>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                        <div class="form-check form-check-radio">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                $10
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                        <div class="form-check form-check-radio">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                $15
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                        <div class="form-check form-check-radio">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                $20
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                        <div class="form-check form-check-radio">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                $30
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                        <div class="form-check form-check-radio">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                            <label class="form-check-label" for="flexRadioDefault5">
                                                $45
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                        <div class="form-check form-check-radio">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                            <label class="form-check-label" for="flexRadioDefault6">
                                                $50
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 form-check-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                            
                                            <input type="text" class="form-control" placeholder="Custom amount" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <h5 class="mt-1">Personal Info</h5>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <input type="text" name="donation-name" id="donation-name" class="form-control" placeholder="Jack Doe" required>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <input type="email" name="donation-email" id="donation-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <h5 class="mt-4 pt-1">Choose Payment</h5>
                                    </div>

                                    <div class="col-lg-12 col-12 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="DonationPayment" id="flexRadioDefault9">
                                            <label class="form-check-label" for="flexRadioDefault9">
                                                <i class="bi-credit-card custom-icon ms-1"></i>
                                                Debit or Credit card
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="DonationPayment" id="flexRadioDefault10">
                                            <label class="form-check-label" for="flexRadioDefault10">
                                                <i class="bi-paypal custom-icon ms-1"></i>
                                                Paypal
                                            </label>
                                        </div>

                                        <button type="submit" class="form-control mt-4">Submit Donation</button>
                                    </div>
                                </div>
                            </form> -->
                            <div class="row" style="margin-top: 20px">
                            	<div class="col-lg-4">
                            		<h4 style="text-align:center;">ICICI Bank Details</h4>
                            		<p style="text-align:center;">Account Number : <b>39691000397</b></p>
                            		<p style="text-align:center;">IFSC Code : <b>ICIC0003969</b></p>
                            		<p style="text-align:center;">MICR Code :  <b>632229103</b></p>
                            	</div>
                            	<div class="col-lg-4">
                            		<h4 style="text-align:center;">Indian Bank Details</h4>
                            		<p style="text-align:center;">Account Number : <b>6182055232</b></p>
                            		<p style="text-align:center;">IFSC Code : <b>IDIB000W010</b></p>
                            		<p style="text-align:center;">MICR Code :  <b>632019093</b></p>
                            	</div>
                            	<div class="col-lg-4">
                            		<h4 style="text-align:center;">State Bank of India Details</h4>
                            		<p style="text-align:center;">Account Number : <b>36573464475</b></p>
                            		<p style="text-align:center;">IFSC Code : <b>SBIN0002262</b></p>
                            		<p style="text-align:center;">MICR Code :  <b>632002025</b></p>
                            	</div>
                            </div>

                            <div class="row">
                            	<div class="col-lg-4"></div>
                            	<div class="col-lg-4">
                            		<h4 style="text-align:center; font-weight: bold;">UPI Scanner</h4>
                            		<img src="images/scanner.png" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">

                                     <h4 style="text-align:center; font-weight: bold; margin-top: 20px;">Or, </h4>
                                     <a class="nav-link custom-btn custom-border-btn btn" href="https://rzp.io/l/IXPZ5ceY" target="_blank" style="text-align:center;">Donate</a>

                            		<p style="text-align:center; margin-top: 10px;">Merchant Name : <b>LOTUS RURAL TRUST</b></p>
                            		<p style="text-align:center;">Mobile : <b>9003862756</b></p>
                            		<p style="text-align:center;"> <b>Please scan and donate your money</b></p>
                            		<p style="text-align:center;">Your contribution make many solutions.</p>
                            		<p style=" font-weight: bold; ">Not all of us can do great things but WE ALL can do small things with great love.</p>
                            	</div>
                            	<div class="col-lg-4"></div>
                            	
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
<?php 
include "includes/footer.php" ;
?>