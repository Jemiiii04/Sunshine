<?php 
include 'include/header.php'; 
include 'include/conn.php'; 

    // Initialize variables
    $id = $password = $confirm_password = "";
    $edit = false; 
 
    // Handle Edit Request
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $edit = true;
    }
        
        // Handle Update Request
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
           

            $sql = "UPDATE password SET password='$password', confirm_password='$confirm_password' WHERE id=$id";
            $conn->query($sql);

            if ($conn->query($sql) === TRUE) {
                header("Location: passwordtable.php"); // Redirect to avoid form resubmission
                exit;
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }

    // Handle Delete Request
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM password WHERE id=$id";
        $conn->query($sql);
    }
?>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
        
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="menu">
    
                    <?php include 'include/sidebar.php' ?> 

                </div>
            </div>

            <div class="col-xl-9 col-lg-8 col-md-8">
            
                <div class="row mt-2">
                    <div class="col-md-12">
                        <h1 class="title mb-4"><u><?php echo $edit ? "Edit password Us" : "password Us"; ?></u></h1>
                    </div>
                </div>

                <?php if ($edit): ?>
                    <!-- Edit Form (Replaces Table) -->
                    <div class="card">
                        <div class="card-header bg-primary text-white">Edit passwod Us</div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $_POST['password']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label>confirm_password</label>
                                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $_POST['confirm_password']; ?>" required>
                                </div>
                                
                                

                                <button type="submit" name="update" class="mybtnn"><span>Update</span></button>
                                <button class="cancelbtn"><a href="passwordtable.php" style="text-decoration: none;"><span>Cancel</span></a></button>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Table (Hidden when Editing) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <?php
                                $sql = "SELECT id, password, confirm_password FROM password";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Password</th>
                                                <th>confirm_password</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                            <td>{$row['id']}</td>
                                            <td>{$row['password']}</td>
                                            <td>{$row['confirm_password']}</td>
                                           
                                            <td>
                                                <form method='post'>
                                                    <input type='hidden' name='id' value='{$row['id']}'>
                                                    <input type='hidden' name='password' value='{$row['password']}'>
                                                    <input type='hidden' name='confirm_password' value='{$row['confirm_password']}'>
                                                    
                                                    
                                                    <button type='submit' name='edit' class='btn btn-primary btn-sm'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                                                        </svg>
                                                    </button>
                                                    <button type='submit' name='delete' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>
                                                         <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                                        <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>";
                                    }
                                    echo '</tbody></table>';
                                } else {
                                    echo '<div class="alert alert-warning">No records found!</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>