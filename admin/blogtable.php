<?php
include 'include/header.php';
include 'include/conn.php';

// Initialize variables
$id = $image1 = $title1 = $description1 = "";
$edit = false;

    // Handle Edit Request
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $image1 = $_POST['image1'];
        $title1 = $_POST['title1'];
        $description1 = $_POST['description1'];
        $date1 = $_POST['date1'];
        $edit = true;
    }

    // Handle Update Request
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title1 = $_POST['title1'];
        $description1 = $_POST['description1'];
        $date1 = $_POST['date1'];
    
        // Handle Image Upload
        if (!empty($_FILES['new_image']['name'])) {
            $new_image = $_FILES['new_image']['name'];
            $target = "pic/" . basename($new_image);
            move_uploaded_file($_FILES['new_image']['tmp_name'], $target);
        
        $sql = "UPDATE blog SET image1='$new_image', title1='$title1', description1='$description1', date1='$date1' WHERE id=$id";
        } else {
            $sql = "UPDATE blog SET title1='$title1', description1='$description1', date1='$date1' WHERE id=$id";
        }

        if ($conn->query($sql) === TRUE) {
            header("Location: blogtable.php"); // Redirect to avoid form resubmission
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Handle Delete Request
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM blog WHERE id=$id";
        $conn->query($sql);
    }
?>


<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="menu">
                    <?php include 'include/sidebar.php'; ?>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-8">
                <div class="row mt-2">
                    <div class="col-md-12">
                        <h1 class="title mb-4"><u><?php echo $edit ? "Edit Blog" : "Blog"; ?></u></h1>
                    </div>
                </div>

                <div class="row p-4">
                    <div class="col-md-12">
                        <button class="mybtn"><a href="blogform.php" style="text-decoration: none; float: right;"><span>Add New</span></a></button>
                    </div>
                </div>

                <?php if ($edit): ?>
                    <!-- Edit Form (Replaces Table) -->
                    <div class="card">
                        <div class="card-header bg-primary text-white">Edit Blog</div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                <div class="form-group">
                                    <label>Current Image:</label><br>
                                    <img src="pic/<?php echo $image1; ?>" alt="Current Image" width="100px" class="rounded border">
                                </div>

                                <div class="form-group">
                                    <label>Upload New Image:</label>
                                    <input type="file" name="new_image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" name="title1" value="<?php echo $title1; ?>" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description1" class="form-control" required><?php echo $description1; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>date</label>
                                    <textarea name="date" class="form-control" required><?php echo $date1; ?></textarea>
                                </div>

                                <button type="submit" name="update" class="mybtnn"><span>Update</span></button>
                                <button class="cancelbtn"><a href="blogtable.php" style="text-decoration: none;"><span>Cancel</span></a></button>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Table (Hidden when Editing) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <?php
                                $sql = "SELECT id, image1, title1, description1, date1 FROM blog";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                            <td>{$row['id']}</td>
                                            <td><img src='pic/{$row['image1']}' alt='' width='100px' class='rounded'></td>
                                            <td>{$row['title1']}</td>
                                            <td>{$row['description1']}</td>
                                            <td>{$row['date1']}</td>
                                            <td>
                                                <form method='post'>
                                                    <input type='hidden' name='id' value='{$row['id']}'>
                                                    <input type='hidden' name='image1' value='{$row['image1']}'>
                                                    <input type='hidden' name='title1' value='{$row['title1']}'>
                                                    <input type='hidden' name='description1' value='{$row['description1']}'>
                                                    <input type='hidden' name='date1' value='{$row['date1']}'>
                                                    
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