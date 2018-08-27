<?php
require_once('config.php');
?>
<html>
    <head>
    <title>GobbleUp</title>
    <meta name="viewport" content="width=device-width">
    <style>
    .razorpay-payment-button{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
        
    }
    </style>
    </head>
    <body>
    <form action="charge.php" method="POST">
        <!-- Note that the amount is in paise = 50 INR -->
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="Razor_Key_ID"
            data-amount="5000"
            data-buttontext="Pay with Razorpay"
            data-name="Butty"
            data-description="Zucchini and Cream Cheese Rolls"
            data-image=""
            data-prefill.name="Alan"
            data-prefill.email="support@razorpay.com"
            data-theme.color="#400080"
        ></script>
<input type="hidden" value="Hidden Element" name="hidden">
</form>
    </body>
</html>