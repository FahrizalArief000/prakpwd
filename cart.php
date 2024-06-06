<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleguide.css">
    <title>Cart</title>
    <link rel="stylesheet" href="styleguide.css">
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

        .form-input {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .button {
            margin-left: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Your Cart</h1>
    </div>
    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <table border="1">
            <tr>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <tr>
                    <td><?php echo $item['product_id']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <a href="checkout.php">Checkout</a>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</body>

</html>