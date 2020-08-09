<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Paypal Demo</title>

    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <main>
        <div id="purchase-container">
            <div id="purchase-wrapper">
                <div class="product">
                    <img src="img/Cap_Glasses.png" alt="a simple hat" class="product-img">

                    <p class="product-name">Hat</p>
                    <p class="product-price">$10</p>
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
    </main>





    
    <script src="https://www.paypal.com/sdk/js?client-id=AZ-Yy1l6ynB_55xDwLzK9Y-1UrWFGfix8ygcCVmvhnjr9a8cZjnJCMQz_xUCoZRIiLiT2cCrHf0EHeC_"></script>

    <!-- Add the checkout buttons, set up the order and approve the order -->
    <script>
        paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                    value: '10.00'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                console.log(details);
                // alert('Transaction completed by ' + details.payer.name.given_name);
                redirect = window.setTimeout(function(){ 
                    window.location = `/paypal_demo/success.php?name=${details.payer.name.given_name}&orderId=${details.id}`; 
                },3000);
            });
        }
        }).render('#paypal-button-container');
    </script>
</body>
</html>