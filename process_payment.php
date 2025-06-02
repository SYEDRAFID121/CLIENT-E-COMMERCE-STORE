<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Ayesha Latif'];
    $phone = $_POST['03027432812'];
    $amount = $_POST['300'];
    $paymentMethod = $_POST['paymentMethod'];

    // Process the payment here using EasyPaisa or JazzCash APIs
    // For example, you might call an API endpoint to initiate the payment
    if ($paymentMethod == "easypaisa") {
        // Call EasyPaisa API
        // Example API endpoint: https://easypaisa.com.pk/easypaisa-web/PaymentAPI/initiatePayment
        // Add your API credentials and payment details
    } elseif ($paymentMethod == "jazzcash") {
        // Call JazzCash API
        // Example API endpoint: https://jazzcash.com.pk/JazzCashWeb/PaymentAPI/initiatePayment
        // Add your API credentials and payment details
    }

    echo "Payment processed successfully via $paymentMethod";
}
?>