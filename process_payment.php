<?php
session_start();

// Example payment processing logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Here you would normally process the payment
    // For example, integrating with a payment gateway

    // Clear the cart after successful payment
    unset($_SESSION['cart']);

    // Redirect to a success page or display a success message
    header('Location: payment_success.php');
    exit();
} else {
    // If the request method is not POST, redirect back to the cart
    header('Location: cart.php');
    exit();
}