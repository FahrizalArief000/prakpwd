<?php
$id = "";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/globals.css" />
    <link rel="stylesheet" href="styles/styleguide.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .nav {
            border-color: var(--main-accent);
        }

        .container {
            border: solid;
            border-width: 4px;
            border-radius: 10px;
            margin-top: 12px;
            border-color: var(--main-accent);
            background-color: #f3f5f8;
            display: flex;
            flex-direction: row;
            width: 90%;
        }

        .nav-brand {
            width: 20%;
            font-family: var(--brand-1-font-family);
            font-weight: var(--brand-1-font-weight);
            font-size: var(--brand-1-font-size);
        }

        .series {
            justify-content: center;
        }

        .nav .container .series .text-wrapper {
            font-family: var(--secondary-style-font-family);
            font-size: var(--secondary-style-font-size);
        }

        .mx-auto {
            width: 38%;
        }

        a {
            color: var(--main-accent);
            text-decoration: none;
        }

        .text-wrapper {
            margin-top: 18px;
        }

        .abha-series,
        .dyva-series,
        .loka-series,
        .kaya-series {
            margin-right: 10px;
        }

        .icon {
            display: flex;
            flex-direction: row;
        }

        .chat {
            width: 18px;
            margin-top: 10px;
        }

        .chart {
            width: 20px;
            margin-top: 9px;
        }

        .account {
            margin-top: 14px;
            margin-left: 8px;
            width: 28px;
        }

        .chart {
            margin-right: 15px;
        }

        .content {
            margin-top: 90px;
        }

        .product {
            width: 80%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 12px;
            margin-bottom: 40px;
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product img:hover {
            width: 100%;
            height: auto;
            opacity: 50%;
            border-radius: 10px;
        }

        .left {
            width: 214%;
        }

        .bottom {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .bottom-left,
        .bottom-right {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            width: 100%;

        }

        .bottom-left {
            margin-right: 16px;
        }

        .right {
            margin-left: 12px;
        }

        footer {
            width: 100%;
            bottom: 0;
            font-size: small;
            background-color: var(--main-accent);
            color: var(--third-accent);
            margin-top: 35px;
            padding: 4px;
        }
    </style>
    <title>Baswara | as Clear as Your Soul</title>
</head>

<body>
    <div class="nav">
        <div class="container fixed-top">
            <div class="nav-brand">
                <a href="index.php" class="brand">Baswara
            </div>
            <div class="series mx-auto">
                <div class="text-wrapper">
                    <a class="abha-series" <?= $id = "1" ?> href="series.php?op=series&id=<?php echo $id ?>">Abha Series</a>
                    <a class="dyva-series" <?= $id = "2" ?> href="series.php?op=series&id=<?php echo $id ?>">Dyva Series</a>
                    <a class="Other" href="other.php">Other</a>
                </div>
            </div>
            <div class="icon">
                <a class="chart" href="chart.php"><img class="chart" src="assets/icon/chart.svg" alt="chart"></a>
                <div class="akun"><img class="account" src="assets/icon/akun.svg" alt="akun"></div>
            </div>
        </div>
    </div>
    <div class="iklan mx-auto"></div>
    <div class="content">
        <div class="product mx-auto">
            <div class="left">
                <img src="assets/img/DYVA FW.png" alt="">
                <div class="bottom">
                    <div class="bottom-left">
                        <img src="assets/img/DYVA_MOIST.png" alt="">
                    </div>
                    <div class="bottom-right">
                        <img src="assets/img/LOKA_50_2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="right">
                <img src="assets/img/ABHA FW.png" alt="">
                <!-- <img src="assets/img/KAYA BODYWASH_2.png" alt=""> -->
            </div>
        </div>
    </div>
</body>
<footer>
    <center>Baswara&copy; 2024</center>
</footer>

</html>