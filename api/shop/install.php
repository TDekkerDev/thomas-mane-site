<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "41a8219e4f75e4d95f45a39c4293a753";
$scopes = "read_orders,write_products";
$redirect_uri = "https://dekkerthomas.online/api/shop/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();