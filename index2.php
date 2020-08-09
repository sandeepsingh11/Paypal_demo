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
                    

                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                        <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>