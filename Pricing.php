<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'include/head.php'; ?>
    <title>pricing</title>
</head>
<body>
<?php include 'include/navbar.php'; ?>
<div id="donate-button-container">
<div id="donate-button"></div>
<script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
<script>
PayPal.Donation.Button({
env:'production',
hosted_button_id:'7KNE7QJ6CVXPY',
image: {
src:'https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif',
alt:'Donate with PayPal button',
title:'PayPal - The safer, easier way to pay online!',
}
}).render('#donate-button');
</script>
</div>

</body>
</html>