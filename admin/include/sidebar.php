<?php include 'conn.php' ?> 
<?php 
   session_start();

   if (!isset($_SESSION['adminemail']) || $_SESSION['adminemail'] == "") {
       header('Location: login.php');
       exit(); 
   }
   
   $email = $_SESSION['adminemail'];
   
   // Use prepared statement to prevent SQL injection
   $sql1 = "SELECT name FROM user WHERE email = ?";
   $stmt = $conn->prepare($sql1);
   $stmt->bind_param("s",
    $email);
   $stmt->execute();
   $result = $stmt->get_result();
   ?>

<!-- Sidebar -->
<nav class="sidebar " style="background-color: white;" id="sidebar">

  <div class="p-4">
    <h2 class="text-center" style="font-weight: bold; color: #fdae44">
    <?php
      if ($row = $result->fetch_assoc()) {
        echo ($row["name"]); 
    } 
    ?>  
    </h2>
  </div>

  <div class="p-4">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="Signup.php">SignUp Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="ConsultUs.php">ConsultUs Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutTitle-form.php">AboutUsTitle</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutTitle-table.php">AboutUsTitle-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutCard-form.php">AboutUsCard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutCard-table.php">AboutUsCard-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutGrid-form.php">AboutUsGrid</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutGrid-table.php">AboutUsGrid-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutMC-form.php">AboutUsMC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutMC-table.php">AboutUsMC-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutBOT-form.php">AboutUsBOT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AboutBOT-table.php">AboutUsBOT-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Blog-form.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Service-table.php">Services-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Blog-form.php">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Blog-table.php">Blogs-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="ContactUs.php">ContactUs Table</a>
      </li>
    </ul>


    <div class="container">
      <div class="logout-container">
        <form action="logout.php" method="POST">
          <button type="submit" class="mybtnn" name="Logout" value="Logout"><span>LOGOUT</span></button>
        </form>
      </div>
    </div>

  </div>

</nav>