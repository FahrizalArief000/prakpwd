<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baswara - Abha Series</title>
    <link rel="stylesheet" href="styleguide.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            font-family: var(--login-1-font-family);
            height: 100%;
        }

        .btn {
            justify-content: center;
            border-width: 1px;
            color: var(--main-accent);
            border-color: var(--main-accent);
            font-family: var(--login-1-font-family);
            background-color: #fff ;
        }
        .btn:hover {
            
            justify-content: center;
            border-width: 1px;
            color: #fff;
            border-color: var(--main-accent);
            font-family: var(--login-1-font-family);
            background-color: var(--main-accent);
        }
        .product-row {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }

        .product-row .card {
            width: 18rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-row img {
            height: 200px;
            object-fit: cover;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        @media (max-width: 768px) {
            .product-row {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="product-row">
            <div class="card">
                <img src="path_to_image1.jpg" class="card-img-top" alt="ABHA Facial Cleaning Foam">
                <div class="card-body">
                    <h5 class="card-title">ABHA Facial Cleaning Foam</h5>
                    <p class="card-text">Refresh your beautiful skin with ABHA Facial Cleaning Face Wash</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
            <div class="card">
                <img src="path_to_image2.jpg" class="card-img-top" alt="ABHA Vitamin C Serum">
                <div class="card-body">
                    <h5 class="card-title">ABHA Vitamin C Serum</h5>
                    <p class="card-text">Be-Glow with ABHA Vitamin C serum</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
            <div class="card">
                <img src="path_to_image3.jpg" class="card-img-top" alt="ABHA Moisturizing Cream">
                <div class="card-body">
                    <h5 class="card-title">ABHA Moisturizing Cream</h5>
                    <p class="card-text">Plumpy and glowing skin with ABHA Moisturizing Cream</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
            <div class="card">
                <img src="path_to_image4.jpg" class="card-img-top" alt="DYVA Cleansing Foam">
                <div class="card-body">
                    <h5 class="card-title">DYVA Cleansing Foam</h5>
                    <p class="card-text">Go away acne with DYVA Cleansing Foam</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
        </div>
        <div class="product-row">
            <div class="card">
                <img src="path_to_image5.jpg" class="card-img-top" alt="DYVA Moisturizing Cream">
                <div class="card-body">
                    <h5 class="card-title">DYVA Moisturizing Cream</h5>
                    <p class="card-text">Plumpy and Glowy Skin, with DYVA Moisturizing Cream</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
            <div class="card">
                <img src="path_to_image6.jpg" class="card-img-top" alt="DYVA Anti Acne Serum">
                <div class="card-body">
                    <h5 class="card-title">DYVA Anti Acne Serum</h5>
                    <p class="card-text">Go Away Redness! With DYVA Anti Acne Serum</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
            <div class="card">
                <img src="path_to_image7.jpg" class="card-img-top" alt="Product 7">
                <div class="card-body">
                    <h5 class="card-title">KAYA Clean Body Wash</h5>
                    <p class="card-text">Clean Soul, Clean Body, KAYA Clean Body Wash</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
            <div class="card">
                <img src="path_to_image8.jpg" class="card-img-top" alt="Product 8">
                <div class="card-body">
                    <h5 class="card-title">LOKA SPF 50 PA++</h5>
                    <p class="card-text"> Keep your shine inside and outside, LOKA Sun Screen</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
