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
        }

        .modal-title {
            justify-content: center;
            display: flex;
            margin-left: 150px;
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

        .form-input {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
        if (isset($_POST["submit"])) {
            require_once "koneksi.php"; 

            $email = $_POST["email"];
            $psd = $_POST["psd"];
            $repsd = $_POST["repsd"];

            $psdhash = password_hash($psd, PASSWORD_DEFAULT);

            $errors = array();
            if (empty($email) || empty($psd) || empty($repsd)) {
                array_push($errors, "All fields are required!");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid!");
            }
            if (strlen($psd) < 8) {
                array_push($errors, "Password must be at least 8 characters long!");
            }
            if ($psd !== $repsd) {
                array_push($errors, "Passwords do not match!");
            }

            $sql1 = "SELECT * FROM akun WHERE email = ?";
            $stmt1 = mysqli_stmt_init($konek);
            if (mysqli_stmt_prepare($stmt1, $sql1)) {
                mysqli_stmt_bind_param($stmt1, "s", $email);
                mysqli_stmt_execute($stmt1);
                mysqli_stmt_store_result($stmt1);
                $rowcount = mysqli_stmt_num_rows($stmt1);
                if ($rowcount > 0) {
                    array_push($errors, "Email already exists!");
                }
            } else {
                array_push($errors, "Database query failed.");
            }

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'> $error </div>";
                }
            } else {
                $sql = "INSERT INTO akun (email, password) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($konek);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "ss", $email, $psdhash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>Registration successful!</div>";
                } else {
                    die("Something went wrong!");
                }
            }
        }
    ?>
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
                        <h1 class="fs-2">Buat Akun</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mx-auto">
                    <form method="POST" action="" class="container">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text bg-body-secondary" id="addon-wrapping"><i
                                    class="bi bi-person"></i></span>
                            <input type="email" class="form-input border-0 bg-body-secondary" name="email"
                                id="emailaddress" placeholder="E-mail Address">
                        </div>
                        <div class="input-group flex-nowrap mt-3">
                            <span class="input-group-text bg-body-secondary" id="addon-wrapping"><i
                                    class="bi bi-key"></i></span>
                            <input type="password" class="form-input border-0 bg-body-secondary" name="psd" id="psd"
                                placeholder="Password">
                        </div>
                        <div class="input-group flex-nowrap mt-3">
                            <span class="input-group-text bg-body-secondary" id="addon-wrapping"><i
                                    class="bi bi-key"></i></span>
                            <input type="password" class="form-input border-0 bg-body-secondary" name="repsd" id="repsd"
                                placeholder="Masukkan Ulang">
                        </div>
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer mx-auto">
                    <h6>Sudah Memiliki Akun? <a href="login.php" class="text-decoration-none text-muted">Login</a></h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
