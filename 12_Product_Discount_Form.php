<?php
$price = "";
$quantity = "";
$error = "";
$submitted = false;

if (PHP_SAPI == "cli") {
    $price = 200;
    $quantity = 6;
    $submitted = true;
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST["price"] ?? "";
    $quantity = $_POST["quantity"] ?? "";
    $submitted = true;
} elseif (isset($_GET["price"]) || isset($_GET["quantity"])) {
    $price = $_GET["price"] ?? "";
    $quantity = $_GET["quantity"] ?? "";
    $submitted = true;
}

if ($submitted) {
    if (!is_numeric($price) || !is_numeric($quantity)) {
        $error = "Please enter numbers only.";
    } elseif ($price < 0 || $quantity < 0) {
        $error = "Negative numbers are not allowed.";
    } elseif (!ctype_digit((string) $quantity) || $quantity == 0) {
        $error = "Quantity must be a positive whole number.";
    } else {
        $total = $price * $quantity;
        $discountRate = ($total > 1000) ? 0.15 : 0.10;
        $discount = $total * $discountRate;
        $finalPrice = $total - $discount;
    }
}

if (PHP_SAPI == "cli") {
    if ($error != "") {
        echo $error . PHP_EOL;
    } else {
        echo "Total: " . number_format($total, 2) . " EGP" . PHP_EOL;
        echo "Discount: " . number_format($discount, 2) . " EGP" . PHP_EOL;
        echo "After discount: " . number_format($finalPrice, 2) . " EGP" . PHP_EOL;
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Discount</title>
</head>
<body>
    <h2>Product Discount</h2>

    <form method="get">
        <input type="text" name="price" placeholder="Product price" required>
        <input type="text" name="quantity" placeholder="Quantity" required>
        <button type="submit">Calculate with GET</button>
    </form>

    <form method="post">
        <input type="text" name="price" placeholder="Product price" required>
        <input type="text" name="quantity" placeholder="Quantity" required>
        <button type="submit">Calculate with POST</button>
    </form>

    <?php
    if ($submitted) {
        if ($error != "") {
            echo "<p>" . $error . "</p>";
        } else {
            echo "<p>Total: " . number_format($total, 2) . " EGP</p>";
            echo "<p>Discount: " . number_format($discount, 2) . " EGP</p>";
            echo "<p>After discount: " . number_format($finalPrice, 2) . " EGP</p>";
        }
    }
    ?>
</body>
</html>
