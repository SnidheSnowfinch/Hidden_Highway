<footer class="position-relative">
        <div class="footer-img-div"><img src="bootstrap/images/footer-img.webp" alt=""></div>
        <div class="footer-container">
            <div class="phone-footer-text">
                <h3>Hidden Hideaway</h3>
                <p>Where Comfort Is Everything. Beautiful Room Presentations, Straightforward Booking & Reservation
                    Options, & A Whole Lot More Awaits Here.</p>
            </div>
            <div class="footer-column">
                <h3>Explore</h3>
                <ul>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Rooms</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Links</h3>
                <ul>
                    <li><a href="contact-us.php"></a></li>
                    
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Booking</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contact Us</h3>
                <p>Address: Kochi</p>
                <p>94540xxx4540</p>
                <p>hiddenhideaway@gmail.com</p>
            </div>
            <div class="footer-column">
                <h3>Get Social:</h3>

                <div class="social-icons">

                    <label class="icon-nav"><i class="bi bi-instagram"></i></label>
                    <label class="icon-nav"><i class="bi bi-twitter"></i></label>
                    <label class="icon-nav"><i class="bi bi-facebook"></i></label>
                    <label class="icon-nav"><i class="bi bi-youtube"></i></label>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        <p>Greenpark Copyright © 2024 <span class="highlight">Snowfinch</span></p>
        <a href="#">Privacy & Cookie Policy</a>
        <button class="back-to-top" onclick="scrollToTop()"><i class="bi bi-chevron-up"></i></button>
    </div>

    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
        
       
        function openTab(event, cityName) {
            let tabContents = document.querySelectorAll(".tab-content");
            tabContents.forEach(content => content.classList.remove("active"));

            let tabButtons = document.querySelectorAll(".tab-btn");
            tabButtons.forEach(button => button.classList.remove("active"));

            document.getElementById(cityName).classList.add("active");
            event.currentTarget.classList.add("active");
        }

       
        const testimonials = [
            {
                name: "Rohit Kumar, Mumbai",
                img: "bootstrap/images/profile (1).webp",
                text: "Hidden Hideaway offers a luxurious and private retreat. Elegantly designed rooms, top-notch amenities, and attentive service make it a perfect choice for an upscale getaway."
            },
            {
                name: "Priya Sharma, Delhi",
                img: "bootstrap/images/profile (1).webp",
                text: "The best resort experience I've had! The atmosphere is calm, and the staff is super friendly. Highly recommended."
            },
            {
                name: "Amit Verma, Bangalore",
                img: "bootstrap/images/profile (1).webp",
                text: "Perfect destination for a weekend getaway. Beautiful surroundings and amazing food."
            }
        ];

        let currentIndex = 0;

        const profileImg = document.querySelector(".profile-img");
        const userName = document.querySelector("h4");
        const testimonialText = document.querySelector(".testimonial-text");
        const dots = document.querySelectorAll(".dot");
        const nextbtn =document.querySelector(".next-btn");
        const prvbtn =document.querySelector(".prev-btn");

        if(nextbtn){
            nextbtn.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateTestimonial();
        });
        }
        if(prvbtn){

            prvbtn.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateTestimonial();
        });
         }

        function updateTestimonial() {
            if(profileImg){
            profileImg.src = testimonials[currentIndex].img;
        }
if(userName){
    userName.textContent = testimonials[currentIndex].name;

}
if(testimonialText){
    testimonialText.textContent = testimonials[currentIndex].text;

}
if(dots && dots.length > currentIndex && dots[currentIndex]){
         dots.forEach(dot => dot.classList.remove("active"));
            dots[currentIndex].classList.add("active");
        }
}
       
    
        updateTestimonial();
       
        var signupModal = document.getElementById("signupModal");
        if(signupModal){

 var openModalBtn = document.getElementById("openModal");


var closeBtn = document.getElementsByClassName("close-popup")[0];

 openModalBtn.onclick = function () {
    signupModal.style.display = "flex";
        }

        closeBtn.onclick = function () {
            signupModal.style.display = "none";
        }
        }

       

       

        window.onclick = function (event) {
            if (event.target === signupModal) {
                signupModal.style.display = "none";
            }
        }









let index = 0;
        const cuisineTextElement = document.getElementById("cuisine-text");
        const cuisineHeadElement = document.getElementById("cuisine-head");



             const cuisineTexts = [
            "With a variety of on-site restaurants and diverse room service options. Our guests are sure to find the food they crave without even having to leave the hotel.",
            "Enjoy a fine dining experience with exquisite international cuisines and gourmet delights prepared by top chefs.",
            "Savor the flavors of authentic local dishes made with fresh ingredients and traditional recipes.",
            "Indulge in a delightful buffet with a range of options from breakfast to dinner, satisfying every palate.",
            "Experience the joy of street food-inspired delicacies served in a luxurious setting.",
            "Healthy and organic food options available to suit your dietary preferences."
        ];
        const cuisineHeads = ["Facilities","Better Dining","Good Experience"]

        document.getElementById("next-crus-btn").addEventListener("click", () => {
            index = (index + 1) % cuisineTexts.length;
            cuisineTextElement.textContent = cuisineTexts[index];
            index = (index + 1) % cuisineHeads.length;
            cuisineHeadElement.textContent = cuisineHeads[index];
        });

        document.getElementById("prev-crus-btn").addEventListener("click", () => {
            index = (index - 1 + cuisineTexts.length) % cuisineTexts.length;
            cuisineTextElement.textContent = cuisineTexts[index];
            index = (index - 1 + cuisineHeads.length) % cuisineHeads.length;
            cuisineHeadElement.textContent = cuisineHeads[index];
        });
// let indexcruis = 0;
//         const cuisineTextElement = document.getElementById("cuisine-text");
//         const cuisineHeadElement = document.getElementById("cuisine-head");
//         const nextCrusbtn =document.querySelector("next-crus-btn");
//         const prvCrusbtn =document.querySelector("prev-crus-btn");
//              const cuisineTexts = [
//             "With a variety of on-site restaurants and diverse room service options. Our guests are sure to find the food they crave without even having to leave the hotel.",
//             "Enjoy a fine dining experience with exquisite international cuisines and gourmet delights prepared by top chefs.",
//             "Savor the flavors of authentic local dishes made with fresh ingredients and traditional recipes.",
//             "Indulge in a delightful buffet with a range of options from breakfast to dinner, satisfying every palate.",
//             "Experience the joy of street food-inspired delicacies served in a luxurious setting.",
//             "Healthy and organic food options available to suit your dietary preferences."
//         ];
//         const cuisineHeads = ["Facilities","Better Dining","Good Experience"]
//         if(nextCrusbtn){
//             nextCrusbtn.addEventListener("click", () => {
//             indexcruis = (indexcruis + 1) % cuisineTexts.length;
//             cuisineTextElement.textContent = cuisineTexts[indexcruis];
//             indexcruis = (indexcruis + 1) % cuisineHeads.length;
//             cuisineHeadElement.textContent = cuisineHeads[indexcruis];
//         });
//         }

       
// if(prvCrusbtn){
//     prvCrusbtn.addEventListener("click", () => {
//             indexcruis = (indexcruis - 1 + cuisineTexts.length) % cuisineTexts.length;
//             cuisineTextElement.textContent = cuisineTexts[indexcruis];
//             indexcruis = (indexcruis - 1 + cuisineHeads.length) % cuisineHeads.length;
//             cuisineHeadElement.textContent = cuisineHeads[indexcruis];
//         });

// }
        
    </script>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>