<?php 
include 'include/header.php'; 
include 'include/conn.php'; 


    // Initialize variables
    $id = $title = $description = "";
    $edit = false;

    // Handle Edit Request
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $edit = true;
    }
    
        
    // Handle Update Request
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];


        $sql = "UPDATE services SET title='$title', description='$description'  WHERE id=$id";
        $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
            header("Location: Service-table.php"); // Redirect to avoid form resubmission
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Handle Delete Request
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM services WHERE id=$id";
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
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h1 class="title mb-4"><u><?php echo $edit ? "Edit Services" : "Services"; ?></u></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a class="mybtn rounded-search" href="Service-form.php" style="float: right; text-decoration: none;">Add</a>
                    </div>
                </div>

                <?php if ($edit): ?>
                    <!-- Edit Form (Replaces Table) -->
                    <div class="card">
                        <div class="card-header bg-primary text-white">Edit Services</div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Descriptin</label>
                                    <input type="text" name="description" class="form-control" value="<?php echo $_POST['description']; ?>" required>
                                </div>

                                <button type="submit" name="update" class="btn btn-success">Update</button>
                                <a href="Service-table.php" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Table (Hidden when Editing) -->
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <?php
                                $sql = "SELECT id, title, description FROM services";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                            <td>{$row['id']}</td>
                                            <td>{$row['title']}</td>
                                            <td>{$row['description']}</td>
                                            <td>
                                                <form method='post'>
                                                    <input type='hidden' name='id' value='{$row['id']}'>
                                                    <input type='hidden' name='title' value='{$row['title']}'>
                                                    <input type='hidden' name='description' value='{$row['description']}'>
                                                    
                                                    <button type='submit' name='edit' class='btn btn-warning btn-sm'>
                                                        <i class='bi bi-pencil-square'></i> Edit
                                                    </button>
                                                    <button type='submit' name='delete' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>
                                                        <i class='bi bi-trash'></i> Delete
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