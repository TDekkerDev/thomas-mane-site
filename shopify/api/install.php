<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "5af9d94ff0787248461f9f825e1a91c0";
$scopes = "read_orders,write_products";
$redirect_uri = "http://dekkerthomas.online/shopify/api/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();