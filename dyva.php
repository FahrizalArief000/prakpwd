<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleguide.css">
    <title>Baswara - Abha Series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            font-family: var(--login-1-font-family);
        }

        .btn {
            justify-content: center;
            border-width: 1px;
            color: var(--main-accent);
            border-color: var(--main-accent);
            font-family: var(--login-1-font-family);
            background-color: #ffff;
        }
        .btn:hover {
            
            justify-content: center;
            border-width: 1px;
            color: #fff;
            border-color: var(--main-accent);
            font-family: var(--login-1-font-family);
            background-color: var(--main-accent);
        }
        .product {
            display: flex;
            flex-direction: row;
            margin: 10px;
            justify-content: space-between;
            width: 70%;
        }
        .carousel{
            width: 70%;
            justify-content center;
        }
    </style>
</head>

<body>
<div id="carouselExampleAutoplaying" class="carousel slide mx-auto" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/ABHA FW.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="product mx-auto">
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">DYVA Cleansing Foam</h5>
    <p class="card-text">Go away acne with DYVA Cleansing Foam</p>
    <a href="#" class="btn btn-primary">View Product</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">DYVA Moisturizing Cream</h5>
    <p class="card-text">Plumpy and Glowy Skin, with DYVA Moisturizing Cream<p>
    <a href="#" class="btn btn-primary">View Product</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">DYVA Anti Acne Serum</h5>
    <p class="card-text">Go Away Redness! With DYVA Anti Acne Serum</p>
    <a href="#" class="btn btn-primary">View Product</a>
  </div>
</div>
    </div>
</body>

</html>