<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "47fc5710adc35161b20366b0718549e4";
$scopes = "read_orders,write_products";
$redirect_uri = "https://dekkerthomas.online/shopify/api/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();