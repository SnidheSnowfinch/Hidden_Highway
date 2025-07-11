<?php include 'includes/header.php' ?>
<div class="home-top-section-inner ">
        <div class="home-top-content">

            <h1>Checkout</h1>
            <p>HOME <i class="bi bi-chevron-right mx-2"></i>CHECKOUT</p>
        </div>
    </div>
    <div class="w-100">

        <div class="container ">
            <div class="homes-section ">
                <div class="contact-card w-100">

                    <div class="reserve-inner-div">
                        <div>
                            <h3>Contact information</h3>
                        </div>

                    </div>

                    <form class="reservation-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label>First Name *</label>
                                <input type="text">
                                <label>Last Name *</label>
                                <input type="number">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label>Email *</label>
                                <input type="email">
                                <label>Phone Number *</label>
                                <input type="number"></input>
                            </div>

                        </div>







                    </form>

                </div>


            </div>
            <div class="gray-section">
                <div class="row">
                    <div class="col-lg-3 cold-md-3 col-sm-5">
                        <p class="m-0">Amount to pay Now:</p>
                    </div>
                    <div class="col-lg-9 cold-md-9 col-sm-7 p-0">
                        <div class="gray-position">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="radioexample" id="radio1">
                                <label for="form-check-label" for="radio1">₹500(deposit)</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="radioexample" id="radio2">
                                <label for="form-check-label" for="radio2">₹3500(full)</label>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="homes-section ">
                <div class="contact-card w-100">



                    <form class="reservation-form">
                       
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="reserve-inner-div mb-4">
                                    <div>
                                        <h3>Your reservation</h3>
                                    </div>

                                </div>
                                <div class="inner-payment-left">

                                    <div class="gray-section text-center my-3">
                                        <p class="m-0">Order #158634-4513756128</p>
                                    </div>
                                    <div class="card-letter">
                                        <label for="">Check In</label>
                                        <label for="">july 12, 2024</label>
                                    </div>
                                    <div class="card-letter">
                                        <label for="">Check Out:</label>
                                        <label for="">july 12, 2024</label>
                                    </div>
                                    <div class="card-letter">
                                        <label for="">Guest:</label>
                                        <div>
                                            <label for="">Adults-02</label>

                                            <label for="">children-01</label>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-letter">
                                        <h4>
                                            Total amout:
                                        </h4>
                                        <h4>₹3500</h4>
                                    </div>
                                    <div class="card-letter">
                                        <h4>Paid:</h4>
                                        <h4>₹0</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">

                                <div class="inner-payment-right">
                                    <div class="reserve-inner-div mb-4">
                                        <div>
                                            <h3>Payment method</h3>
                                        </div>

                                    </div>
                                    <div class="payment-options">
                                        <a class="option" id="card-option"><img src="bootstrap/images/card.webp" alt=""> Card</a>
                                        <a class="option" id="googlepay-option"><img src="bootstrap/images/Gpay.webp" alt=""> Google Pay</a>
                                        <a class="option" id="bank-option"><img src="bootstrap/images/bank.webp" alt=""> Bank</a>
                                        <a class="option-small" id="bank-option"><img src="bootstrap/images/icon-dot.webp" alt=""></a>
 
                                    </div>
                                    <label>Card Number</label>
                                   <div class="position-relative">
                                     <input type="number"> <img class="card-group" src="bootstrap/images/creditCardBrands.webp" alt=""></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label>Expiration</label>
                                            <input type="number">


                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <label>CVC</label>
                                            <input type="number">
                                        </div>
                                    </div>
                                    <label>Country</label>
                                    <select name="" id=""></select>
                                    <button class="room-button" type="button" id="openModal">COMPLETE BOOKING</button>

                                </div>

                            </div>

                        </div>


                    </form>

                </div>
              
            </div>
            

        </div>

       
    </div>
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close-popup">&times;</span>
            <div class="modal-flex">
                <div class="position-relative">
                    <img class="modal-content-img" src="bootstrap/images/login-popup.webp" alt="">
                    <div class="mod-inner-text">
                        <h2>Hidden Highway park, Munnar</h2>
                        <p>Date:30/sep/2024</p>
                        <p>Time:10AM</p>
                        <Button class="reservation-btn">Book Now</Button>
                    </div>
                </div>
                <div class="modal-content-div">
                    <div class="lang">English (UK)</div>
                <h2>Create Account</h2>
                <form>
                    <div class="input-group-pop-up">
                        <input type="text" placeholder="Full Name" required>
                    </div>
                    <div class="input-group-pop-up">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="input-group-pop-up">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="input-group-pop-up">
                        <input type="password" placeholder="Confirm Password" required>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="modal-terms">
                        <label for="modal-terms">I have read and agreed to the <a href="#">Terms of Service</a> and <a
                                href="#">Privacy Policy</a></label>
                    </div>
                    <button type="submit" class="create-btn">Create Account</button>
    
    
                </form>
                <div class="or">Or</div>
                <div class="social-login">
                    <button class="social-btn google"><img src="bootstrap/images/google-img.webp"> Signup with
                        Google</button>
                    <button class="social-btn facebook"><img src="bootstrap/images/fb-image.webp" alt="Facebook"> Signup with
                        Facebook</button>
                </div>
                <p class="login-link">Already have an account? <a href="#">Log In</a></p>
                </div>
            </div>
            
        </div>
    </div>
<?php include 'includes/footer.php' ?>
