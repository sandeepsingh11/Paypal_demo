<?php

if (isset($_GET['token'])) {
    $order_token = $_GET['token'];
}





require __DIR__ . '/vendor/autoload.php';

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;





require_once("notSuspicious.php");
$environment = new SandboxEnvironment($clientId, $clientSecret);
$client = new PayPalHttpClient($environment);





use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
// Here, OrdersCaptureRequest() creates a POST request to /v2/checkout/orders
// $response->result->id gives the orderId of the order created above
$request = new OrdersCaptureRequest($order_token);
// $request = new OrdersCaptureRequest($response->result->id);
$request->prefer('return=representation');
try {
    // Call API with your client and get a response for your call
    $response = $client->execute($request);
    
    // If call returns body in response, you can get the deserialized version from the result attribute of the response
    // print_r($response);
}
catch (HttpException $ex) {
    echo $ex->statusCode;
    print_r($ex->getMessage());
}





$payer_fname = $response->result->payer->name->given_name;
$amount = $response->result->purchase_units[0]->amount->value;
$item = $response->result->purchase_units[0]->items[0]->name;
$merchant_email = $response->result->purchase_units[0]->payee->email_address;
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Paypal Demo</title>

    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <h1>THANK YOU <?php echo htmlspecialchars($payer_fname) ?>!</h1>
    <h2>Purchase info: <?php echo htmlspecialchars($item) ?> - $<?php echo htmlspecialchars($amount) ?></h2>
    <h4>For purchase questions, contact: <?php echo htmlspecialchars($merchant_email) ?></h4>
</body>
</html>