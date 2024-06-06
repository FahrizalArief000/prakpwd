<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleguide.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        .modal-content {
            border-width: 3px;
            border-color: var(--main-accent);
        }

        .modal-header {
            font-family: var(--brand-1-font-family);
            color:var(--main-accent) ;
        }

        .modal-title {
            justify-content: center;
            display: flex;
            margin-left: 190px;
        }

        .container {
            justify-content: center;
            border-width: 2px;
            border-color: var(--main-accent);
        }

        .input-group {
            border-width: 2px;
            border-color: var(--main-accent);
        }
        .form-input{
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .btn{
            justify-content: center;    
            border-width: 1px;
            color:var(--main-accent) ;
            border-color: var(--main-accent);
            font-family: var(--login-1-font-family);
            background-color: #ffff;
        }
    </style>
</head>

<body>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel">
                        <h1 class="fs-2">Login</h1>
                    </div>
                </div>
                <div class="modal-body mx-auto">
                    <form method="POST" class="container mx-auto" action="login_proses.php">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text bg-body-secondary" id="addon-wrapping"><i
                                    class="bi bi-person"></i></span>
                            <input type="text" class="form-input border-0 bg-body-secondary" name="email" id="email"
                                id="emailaddress" placeholder="E-mail Address">
                        </div>
                        <div class="input-group flex-nowrap mt-3">
                            <span class="input-group-text bg-body-secondary" id="addon-wrapping"><i
                                    class="bi bi-key"></i></span>
                            <input type="password" class="form-input border-0 bg-body-secondary" name="password" id="password"
                                placeholder="Password">
                        </div>
                        <br>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary mx-auto">Login</button>
                    </form>
                </div>
                <div class="modal-footer mx-auto">
                    <h6>Belum Memiliki Akun? <a href="register.php" class="text-decoration-none text-muted">Buat Akun</a></h6>
                </div>
            </div>
            <br>
        </div>
        <div class="float"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    </div>
</body>

</html>
