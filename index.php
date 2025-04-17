<?php include 'include/header.php' ?>


    <div class="head-main">
        <div class="container">
            <div class="row d-flex align-items-center">

                <!-- Right Text Content -->
                <div class="col-md-6">
                    <h1 class="fw-bold head-title">
                        <span class="slide-line line-1">What</span>
                        <span class="slide-line line-2">We Does?</span>
                    </h1>
                    <p class="head-decrip">
                        Our organization is dedicated to ensuring that every child receives the education they deserve. 
                        Education is crucial for a progressive society, and we strive to provide high-quality education, 
                        especially for marginalized communities.
                    </p>

                    <div class="consult-box">
                        <p class="consult-text">Click here for Consultation</p>
                        <button class="mybtn" data-bs-toggle="modal" data-bs-target="#consultModal">
                            <span>Consult Us <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
                                </svg> </span>
                        </button>
                    </div><br>

                    <p class="slide-in">❊ Connect, engage, & inspire — success starts here.</p>
                </div>

                

                <!-- Left Image -->
                <div class="col-md-6 p-10">
                    <img src="Images/main-img.png" alt="Main Image" class="head-image">
                </div>

            </div>
        </div>
    </div>

    <!-- Consult Us Modal -->
    <div class="modal fade" id="consultModal" tabindex="-1" aria-labelledby="consultModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="TY modal-header" >
                    <h4 class="modal-title" id="consultLabel">Book Your Consultation with SUNSHINE</h4>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form id="consult-form">
                        <div class="mb-3">
                            <label class="form-label"><h5>Full Name:</h5></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your Full Name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label"><h5>Email Address:</h5></label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your Mail ID" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label"><h5>Phone Number:</h5></label>
                            <input type="tel" class="form-control" name="phone_no" placeholder="Enter your Phone No.">
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><h5>Type of Consultation:</h5></label>
                            <select name="typeofconsultation" class="form-select" required>
                                <option value="" disabled selected>Select type</option>
                                <option value="Education">Education</option>
                                <option value="Health">Health</option>
                                <option value="Child Labour">Child Labour</option>
                                <option value="Women Empowerment">Women Empowerment</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="mybtn " data-bs-dismiss="modal"><span>Close</span></button>
                            <button type="submit" name="Submit" value="Submit" class="mybtn "><span>Submit</span></button>
                        </div>
                    </form>
                </div>
                <div class="TY modal-header">
                    <p class="modal-title" id="LoginLabel">We respect your privacy. You details are safe with us. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="stats-container">
        <div class="stats-box" data-aos="fade-up">
            <div class="box1 stat">
                <span class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                        <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21 21 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21 21 0 0 0 14 7.655V1.222z"/>
                    </svg></span> 
                <div class="stat-number">17</div>
                <div class="stat-label">States</div>
            </div>
            <div class="box2 stat">
                <span class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg></span> 
                <div class="stat-number">3800+</div>
                <div class="stat-label">Digitech Centres</div>
            </div>
            <div class="box1 stat">
                <span class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                        <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
                    </svg></span> 
                <div class="stat-number">4250+</div>
                <div class="stat-label">Schools</div>
            </div>
            <div class="box2 stat">
                <span class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg></span> 
                <div class="stat-number">2.1 Million</div>
                <div class="stat-label">School Children</div>
            </div>
            <div class="box1 stat">
                <span class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                        <path d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207"/>
                        <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                    </svg></span> 
                <div class="stat-number">350000+</div>
                <div class="stat-label">Youth</div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="post-container1" style="background-image: url(Images/a1.jpg);" >
        <div class="container mt-5" data-aos="fade-up">
            <div class="custom-card1">
            <!-- Image Section with Play Button -->
            <div class="impact-section1">
                <img src="Images/impact.jpg">
            </div>
            
            <!-- Content Section -->
            <div class="content-section1">
                <h1 style="font-weight: bold;">Our Impact</h1>
                
                <p>We’ve worked on improving the lives of over 25,000 young people through direct practice.</p>
                <p>Young people from different backgrounds have a huge impact on us and all our activities. They highlight those parts of the society that are broken, so we can help them in all possible ways to regain hope and flourish in life.</p>
                <button class="mybtn"><a href="impact.php" style="text-decoration: none; color: white;"><span>READ MORE</span></a></button>
            </div>
            </div>
        </div>
    </div>

    <div class="container text-center" style="margin-top: 250px;">
        <div class="row align-items-start">
            <div class="col-md-4" data-aos="zoom-in">
              <div class="card">
                <img src="Images/prgm2.jpg" class="card-img-top w-100" alt="bootstrap">
                <div class="card-body">
                  <h5 class="card-text"><b>Vocational Training</b></h5>
                  <a href="VocationalTraining.php" class="image-link" aria-label="Image Link"></a>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in">
              <div class="card">
                <img src="Images/prgm3.jpg" class="card-img-top w-100" alt="bootstrap">
                <div class="card-body">
                  <h5 class="card-text"><b>Annual Status of Education Report</b></h5>
                  <a href="AnnualStatus.php"class="image-link"  aria-label="Image Link"></a>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in">
              <div class="card">
                <img src="Images/prgm4.png" class="card-img-top w-100" alt="bootstrap">
                <div class="card-body">
                  <h5 class="card-text"><b>Council for Vulnerable Children</b></h5>
                  <a href="ChildrenCouncil.php" class="image-link" aria-label="Image Link"></a>
                </div>
              </div>
            </div>
          </div>
        </div><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <!-- Image with AOS animation -->
                <img src="Images/Prgm5.png" alt="Animated Image" class="children-img" data-aos="fade-up" data-aos-duration="1500">
            </div>
        </div>
    </div>

  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 text-center py-5 size1" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300">
            <h3><b>We Find & Fund</b></h3><hr>
            <p>We are in search of opportunities to help as many youth as possible. We approach and fund all those who are in need.</p>
      </div>
        <div class="col-lg-3 text-center py-5 size1" data-aos="fade-up" data-aos-duration="1200" data-aos-offset="300">
            <h3><b>We Provide Care</b></h3><hr>
            <p>Today's youth need a helpful hand and right guidance at every stage. Here's where we take care of them like our own.</p>
        </div>
        <div class="col-lg-3 text-center py-5 size1" data-aos="fade-up" data-aos-duration="1400" data-aos-offset="300">
            <h3><b>We Educate</b></h3><hr>
            <p>We run small-scale schools for the underprivileged children and youth of daily wage workers for a better future.</p>
        </div>
        <div class="col-lg-3 text-center py-5 size1" data-aos="fade-up" data-aos-duration="1600" data-aos-offset="300">
            <h3><b>We Employ</b></h3><hr>
            <p>We run organizations where we employ youngsters so they can live their dreams for themselves and their families.</p>
        </div>
    </div>
    <br><br>
</div>


    <div class="map">
        <div class="reaches" data-aos="fade-up">
            <b>Reaches 2024-25</b>
        </div><br>
        <div class="container-fluid text-center">
            <div class="row align-items-start">
                <div class="col-lg-5" data-aos="fade-right">
                    <h1 style="font-weight: bold">Our numbers that speak</h1><br>
                    <p class="reachs">We have numbers that push us to give in our best and make sure that we break our own records. We are happy to be growing and helping more day by day.</p>
                </div>
                <div class="col-lg-7" id="counter-section">
                    <div class="container-fluid text-center">
                        <div class="reachs row">
                            <div class="col-lg-5" data-aos="zoom-in">
                                <b>Activities in</b>
                                <h1 class="reach counter" data-count="25">0</h1>
                                <b>states & union territories</b>
                            </div>
                            <div class="col-lg-5" data-aos="zoom-in">
                                <b>Children Reached</b>
                                <h1 class="reach counter" data-count="8000000">0</h1>
                                <b>through direct programs and government partnerships</b>
                            </div>
                        </div><hr>
                        <div class="reachs row">
                            <div class="col-lg-5" data-aos="zoom-in">
                                <b>Girls and women reached</b>
                                <h1 class="reach counter" data-count="300000">0</h1>
                                <b>through mothers' groups and other programs</b>
                            </div>
                            <div class="col-lg-5" data-aos="zoom-in">
                                <b>Youth reached</b>
                                <h1 class="reach counter" data-count="350000">0</h1>
                                <b>through vocational/non-vocational courses</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>


    <div class="container">
        <div class="map-container">
            <!-- PNG image with animation -->
            <img src="images/map.png" alt="Animated PNG" class="animated-map w-100" data-aos="zoom-in">
        </div>
    </div>
    <hr>

    <div class="reaches text-center fw-bold mb-3">Our Partners</div>
        <div class="logo-slider">
            <div class="logo-track">
                <img src="Images/footlogo/footlogo1.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo2.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo3.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo4.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo5.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo6.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo7.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo8.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo9.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo10.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo11.png" alt="Partner Logo">
                <img src="Images/footlogo/footlogo12.png" alt="Partner Logo">
            </div>
        </div>
    </div><br><hr>

    <!-- Include EmailJS script for consult us -->
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>

    <!-- AOS (Animate On Scroll) Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    // Initialize EmailJS
    (function() {
        emailjs.init("01uH8ylsY63qUfZT6"); 
    })();

    document.getElementById("consult-form").addEventListener("submit", function(event) {
        event.preventDefault();

        emailjs.sendForm("sunshinengo2021", "consult_us", this)
        .then(function() {
            alert("Message sent successfully!");
            document.getElementById("consult-form").reset();
        }, function(error) {
            alert("Failed to send message: " + JSON.stringify(error));
        });
    });
    </script>

    <!-- Javascript for Reaches 2024-2025 -->
    <script>
        AOS.init(); // Initialize AOS library

        function animateCount(element, target) {
            let start = 0;
            const duration = 2000; // Animation duration in milliseconds
            const increment = target / (duration / 10); // Calculate increment per step

            function updateCount() {
                start += increment;
                if (start < target) {
                    element.textContent = Math.round(start).toLocaleString();
                    requestAnimationFrame(updateCount);
                } else {
                    element.textContent = target.toLocaleString();
                }
            }

            updateCount();
        }

        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".counter");
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.dataset.count);
                        animateCount(counter, target);
                        observer.unobserve(counter); // Stop observing after animation
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>

<?php include 'include/footer.php' ?>