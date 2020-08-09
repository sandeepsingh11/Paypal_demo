<?php

    if (isset($_GET["name"])) {
        $payer_name = $_GET["name"];
    }

    if (isset($_GET["orderId"])) {
        $order_id = $_GET["orderId"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Paypal Demo | Success!</title>

    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <main style="text-align: center;">
        <h1>SUCCESS</h1>
        <h2>Thank you <?php echo htmlspecialchars($payer_name) ?> for your purchase!</h2>
        <h4>Order ID: <?php echo htmlspecialchars($order_id) ?></h4>
    </main>
</body>
</html>