<?php include 'includes/header.php' ?>
<div class="home-top-section-inner ">
        <div class="home-top-content">

            <h1>Login</h1>
            <p>HOME <i class="bi bi-chevron-right mx-2"></i>LOGIN</p>
        </div>
    </div>
    <div class="container">
        <div class="container-pop-up">
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
                    <input type="checkbox" id="terms">
                    <label for="terms">I have read and agreed to the <a href="#">Terms of Service</a> and <a
                            href="#">Privacy Policy</a></label>
                </div>
                <button type="button" class="create-btn">Create Account</button>
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
<?php include 'includes/footer.php' ?>
