# [Paypal_demo]([https://developer.paypal.com/docs/business/](https://developer.paypal.com/docs/business/))

Testing the use of the [Paypal (Orders) API v2](https://developer.paypal.com/docs/api/orders/v2/](https://developer.paypal.com/docs/api/orders/v2/) to make a simple transaction. I found multiple ways to use the API. 

**index.html** adds a JS script to render the Paypal pay buttons on the webpage and configure the price. This creates a new browser window of Paypal's login to pay (or checkout as a guest). 

**index2.php** embeds a form that provides the Paypal pay buttons that redirects to Paypal's checkout page within the same browser tab (instead of a new browser window). This option provides limited options (like redirect) unless the Paypal account is upgraded.

**index3.html** is the optimal solution as [full API control]([https://developer.paypal.com/docs/business/checkout/server-side-api-calls/](https://developer.paypal.com/docs/business/checkout/server-side-api-calls/)) is possible. By installing the Paypal Checkout SDK, I provide API credentials and build the [Orders object]([https://developer.paypal.com/docs/business/checkout/server-side-api-calls/create-order/](https://developer.paypal.com/docs/business/checkout/server-side-api-calls/create-order/)) that will be used during checkout. I can also customize the redirects for order cancellations and order approvals (successful purchase). 

