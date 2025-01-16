<?php
    require_once 'connection/connection.php';
?>
<?php
    session_start();

    $id = $_SESSION['user_id'];

    if(isset($_POST['pst'])){
        $title = mysqli_real_escape_string($connection,$_POST['title']);
        $category = mysqli_real_escape_string($connection,$_POST['category']);
        $descrp = mysqli_real_escape_string($connection,$_POST['textarea']);
        $contact = mysqli_real_escape_string($connection,$_POST['contact']);
        $price = 100.00;

        $uploadDir = 'images/uploads/';

        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $uploadPath = $uploadDir . $imageName;

        move_uploaded_file($imageTmpName, $uploadPath);
        

        $sql = "INSERT INTO items (itemname,itemprice,itemcategory,itemdetail,userid) VALUES('{$title}','{$price}','{$category}','{$descrp}',$id)";
        $stmt = mysqli_query($connection,$sql);

        /*
        if(isset($_FILES['image']) && $_FILES['image']['error'] === 0){
            echo "sfdf";
            $imageName = $_FILES['image']['name'];
            $imageTmpName = $_FILES['image']['tmp_name'];

            $uploadDir = 'images/uploads/';
            $newImageName = uniqid() . '_' . basename($imageName);
            $uploadPath = $uploadDir . $newImageName;

            if (move_uploaded_file($imageTmpName, $uploadPath)) {
                // Save image name to the database
                
                
            } else {
                echo "Failed to upload image!";
            }
        */
        

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad Posting Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .header {
            background: url('https://via.placeholder.com/1920x400') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 80px 0;
        }
        .header h1 {
            font-size: 3rem;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #ff6f61;
            border: none;
        }
        .btn-primary:hover {
            background-color: #e65a50;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<div class="header">
    <h1>Post Your Ad</h1>
    <p>Reach thousands of potential customers with ease</p>
</div>

<!-- Main Content -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h2 class="text-center mb-4">Ad Details</h2>
                <form action="adpost.php" method="post" enctype="multipart/form-data">
                    <!-- Ad Title -->
                    <div class="mb-3">
                        <label for="adTitle" class="form-label">Ad Title</label>
                        <input type="text" name="title" class="form-control" id="adTitle" placeholder="Enter your ad title" required>
                    </div>
                    <!-- Ad Category -->
                    <div class="mb-3">
                        <label for="adCategory" class="form-label">Category</label>
                        <select name="category" class="form-select" id="adCategory" required>
                            <option selected disabled>Choose a category</option>
                            <option value="retail">Retail</option>
                            <option value="wholesale">Whole Sale</option>
                        </select>
                    </div>
                    <!-- Ad Description -->
                    <div class="mb-3">
                        <label for="adDescription" class="form-label">Description</label>
                        <textarea name="textarea" class="form-control" id="adDescription" rows="5" placeholder="Describe your ad" required></textarea>
                    </div>
                    <!-- Upload Image -->
                    <div class="mb-3">
                        <label for="adImage" class="form-label">Upload Image</label>
                        <input name="image" class="form-control" type="file" id="adImage" required>
                    </div>
                    <!-- Price -->
                    <div class="mb-3">
                        <label for="adPrice" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="adPrice" placeholder="Enter the price" required>
                    </div>
                    <!-- Contact Info -->
                    <div class="mb-3">
                        <label for="adContact" class="form-label">Contact Info</label>
                        <input name="contact" type="text" class="form-control" id="adContact" placeholder="Enter your contact details" required>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="pst" class="btn btn-primary btn-lg">Post Ad</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2025 Cocomart. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>