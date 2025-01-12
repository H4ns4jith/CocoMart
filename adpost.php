<?php
    require_once 'connection/connection.php';
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
                <form>
                    <!-- Ad Title -->
                    <div class="mb-3">
                        <label for="adTitle" class="form-label">Ad Title</label>
                        <input type="text" class="form-control" id="adTitle" placeholder="Enter your ad title" required>
                    </div>
                    <!-- Ad Category -->
                    <div class="mb-3">
                        <label for="adCategory" class="form-label">Category</label>
                        <select class="form-select" id="adCategory" required>
                            <option selected disabled>Choose a category</option>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="home">Home & Furniture</option>
                            <option value="vehicles">Vehicles</option>
                        </select>
                    </div>
                    <!-- Ad Description -->
                    <div class="mb-3">
                        <label for="adDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="adDescription" rows="5" placeholder="Describe your ad" required></textarea>
                    </div>
                    <!-- Upload Image -->
                    <div class="mb-3">
                        <label for="adImage" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="adImage" required>
                    </div>
                    <!-- Price -->
                    <div class="mb-3">
                        <label for="adPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="adPrice" placeholder="Enter the price" required>
                    </div>
                    <!-- Contact Info -->
                    <div class="mb-3">
                        <label for="adContact" class="form-label">Contact Info</label>
                        <input type="text" class="form-control" id="adContact" placeholder="Enter your contact details" required>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Post Ad</button>
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