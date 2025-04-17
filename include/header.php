<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunshine</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <!-- AOS (Animate On Scroll) Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
      <link rel="stylesheet" href="style.css">
</head>
<body class="background">

    <div id="SunshineContent">
    <?php session_start(); ?>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="Images/Logo.png" alt="Bootstrap" width="100" height="100" class="mt-0"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><b class="home">Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="AboutUs.php"><b class="home">About Us</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <b class="home">Services</b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Education.php">Education</a></li>
                            <li><a class="dropdown-item" href="health.php">Health</a></li>
                            <li><a class="dropdown-item" href="ChildLabour.php">Child Labour</a></li>
                            <li><a class="dropdown-item" href="WomenEmpowerment.php">Women Empowerment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php"><b class="home">Blog</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php"><b class="home">Contact us</b></a>
                    </li>

                    <!-- Check if user is logged in -->
                    <li class="nav-item">
                        <div class="nav-link">
                            <div class="d-flex align-items-center"> <!-- Flex container for side-by-side alignment -->
                                <?php if (isset($_SESSION['name'])) { ?>
                                    <span class="mybtn me-2"><b><span><?php echo $_SESSION['name']; ?></span></b></span>
                                    <a href="logout.php" class="mybtn"><span>Logout</span></a>
                                <?php } else { ?>
                                    <button type="button" class="mybtn" data-bs-toggle="modal" data-bs-target="#LoginModal">
                                        <span>Login 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                            </svg>
                                        </span>
                                    </button>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="TY modal-header">
                    <p class="modal-title fs-5" id="LoginModalLabel">Thank You for visiting. Stay connected to know more about out mission. </p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex justify-content-center align-items-center">
                    <form action="login.php" method="post">
                        <label for="email"><h5>Email ID:</h5></label>
                        <input type="email" id="email" name="email" placeholder="Enter your Mail ID" required><br><br>

                        <label for="password"><h5>Password:</h5></label>
                        <input type="password" id="password" name="password" placeholder="Enter your Password" required><br><br>
                        
        
                        <div class="modal-footer" >
                            <button type="Submit" name="Submit" value="Submit" class="mybtn " style="display: block; margin: 0 auto;"><span>Submit</span></button>
                        
                        </div>
                        <div>
                            <h5 class="text-center">Not a member?<a href="" style="color: #1979a9; font-size: 20px; text-decoration: none;"data-bs-toggle="modal" data-bs-target="#RegistrationModal">Signup now</a></h5>
                          
                        </div>
                    </form>
                </div>
                <div class="TY modal-footer">
                    <p class="modal-title fs-5" id="LoginLabel">We respect your privacy. You details are safe with us. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="RegistrationModal" tabindex="-1" aria-labelledby="RegistrationModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="TY modal-header">
                    <p class="modal-title fs-5" id="RegistrationModalLabel">Thank You for visiting. Stay connected to know more about out mission. </p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <form action="signup.php" method="POST">
                        <label for="name"><h5>Full Name:</h5></label>
                        <input type="text" id="name" name="name" placeholder="Enter your Full Name" required><br><br>
                
                        <label for="email"><h5>Email ID:</h5></label>
                        <input type="email" id="email" name="email" placeholder="Enter your Mail ID" required><br><br>

                        <label for="password"><h5>Password:</h5></label>
                        <input type="password" id="password" name="password" placeholder="Enter unique Password" required><br><br>
                
                        <label for="phone"><h5>Phone Number:</h5></label>
                        <input type="tel" id="phone_no" name="phone_no" placeholder="Enter your Phone No." required><br><br>
                            
                        <div class="modal-footer">
                            <button type="Submit" name="Submit" value="Submit" class="mybtn" style="display: block; margin: 0 auto;"><span>Submit</span></button>
                        </div>
                    </form>
                </div>
            
                <div class="TY modal-footer">
                    <p class="modal-title fs-5" id="LoginModalLabel">We respect your privacy. You details are safe with us. </p>
                </div>
            </div>
        </div>
    </div>

    