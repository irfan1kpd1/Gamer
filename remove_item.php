<?php
session_start();

if (isset($_POST['id'])) {
    $item_id = $_POST['id'];

    // Check if the cart exists and the item is in the cart
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $item_id) {
                unset($_SESSION['cart'][$key]); // Remove the item
                break; // Exit the loop once the item is found and removed
            }
        }
    }
}

// Redirect back to the cart page
header("Location: cart.php");
exit();
?>