<footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Hidden Hideaway</h3>
                <p>Where Comfort Is Everything. Beautiful Room Presentations, Straightforward Booking & Reservation Options, & A Whole Lot More Awaits Here.</p>
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
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Booking</a></li>
                </ul>
            </div>
    
            <div class="footer-column">
                <h3>Contact Us</h3>
                <p>Address: Kochi ABC Street</p>
                <p>94540xxx4540</p>
                <p>hiddenhideaway@gmail.com</p>
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

document.querySelector(".next-btn").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % testimonials.length;
    updateTestimonial();
});

document.querySelector(".prev-btn").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
    updateTestimonial();
});

function updateTestimonial() {
    profileImg.src = testimonials[currentIndex].img;
    userName.textContent = testimonials[currentIndex].name;
    testimonialText.textContent = testimonials[currentIndex].text;

    dots.forEach(dot => dot.classList.remove("active"));
    dots[currentIndex].classList.add("active");
}

updateTestimonial();

    </script>
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>