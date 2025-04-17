<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>

<?php session_start(); ?>
<?php

      if (isset($_POST['login'])) {

          $email = $_POST['email'];
          $pswd = $_POST['password'];

          $sql = "SELECT name, email, password FROM user WHERE email = '$email' && password = '$pswd' ";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc(); 
              // Store session variables
              $_SESSION['adminname'] = $row['name'];
              $_SESSION['adminemail'] = $row['email'];
              
              // Redirect to the dashboard
              header('Location: index.php');
              
          } else {
              echo "<script>alert('No user found with this email!')</script>";
          }
      }

?>


<div class="container">
    <div class="login-container">
        <h3 class="text-center mb-4" style="color: #fdae44; font-weight: bold;">Login Form</h3>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" name="email" id="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            <button type="submit"  name="login" value="login" class="mybtnn" style="display: block; margin: 0 auto;"><span>LOGIN</span></button>
        </form>
    </div>
</div>

<?php include 'include/footer.php' ?>