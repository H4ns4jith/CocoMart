<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CocoMart</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <style>
      .name{
        color: orange;
        font-size: 26px;
        font-weight: bolder;
      }
      .login{
        outline-color: orange;
        outline-style: solid;
        color: orange;
      }
      .login:hover{
        color: white;
        background-color: orange;
      }

      .card{
        margin: 15px;
      }
      .addCart{
        outline-color: orange;
        outline-style: solid;
        color: orange;
      }
      .addCart:hover{
        color: white;
        background-color: orange;
      }
      .card-img-top{
        margin-top: 5px;
      }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand name" href="#">CocoMart</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Coconut related Items</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Coconut Wholesale</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <button class="btn login" type="submit">Login</button>
                </form>
              </div>
            </div>
          </nav>
          <div id="carouselExample" class="carousel slide" style="margin-top: 20px;margin-bottom: 15px;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="photos/4.jpg" class="d-block w-100" alt="..." height="400px">
              </div>
              <div class="carousel-item">
                <img src="photos/5.webp" class="d-block w-100" alt="..." height="400px">
              </div>
              <div class="carousel-item">
                <img src="photos/1.jpg" class="d-block w-100" alt="..." height="400px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="items">
            <div class="row">
              <div class="card" style="width: 18rem;">
                <img src="photos/13.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Retail Coconut</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn addCart">Add to Cart</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="photos/6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Koppara</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn addCart">Add to Cart</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="photos/7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Coconut Husks</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn addCart">Add to Cart</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="photos/8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Coconut Spoon</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn addCart">Add to Cart</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="photos/9.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Coconut Husks (Raw)</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn addCart">Add to Cart</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="photos/10.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Coconut Brush</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn addCart">Add to Cart</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="photos/11.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Idala</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn addCart">Add to Cart</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="photos/12.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kossa</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn addCart">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>

          <footer class="bg-light text-dark text-center py-4" style="margin-top: 20px;">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <h5>About Us</h5>
                  <p>At Coconut Products, we specialize in delivering premium coconut-based products tailored to meet the needs of both retail and wholesale customers. Our commitment to quality ensures every product is crafted with care, bringing the goodness of coconuts straight to your doorstep. Whether you’re buying in bulk or for personal use, we’ve got you covered!</p>
                </div>
                <div class="col-md-4">
                  <h5>Contact</h5>
                  <ul class="list-unstyled">
                    <li>Email: cocmart@gmail.Combo</li>
                    <li>Phone: +94 716024097</li>
                    <li>Address: Weppankulam, vavuniya</li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <h5>Follow Us</h5>
                  <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <hr class="my-3">
              <p class="mb-0">&copy; 2024 cocomart Company. All rights reserved.</p>
            </div>
          </footer>
          
          <script src="https://kit.fontawesome.com/a076d05399.js"></script>
          
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
