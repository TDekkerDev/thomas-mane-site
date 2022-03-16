<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css">
<?php include 'include/head.php'; ?>
    <title>portfolio</title>
</head>
<body>
 <?php include 'include/navbar.php'; ?>
 <?php $name1 = $_POST['name1']; ?>
 <?php if ($name1 == "thomas") {
 } else {
     include 'api/user/user_32.php';
 }
 ?>
<script type="text/javascript">
var delayInMilliseconds = 100; 

    setTimeout(function() {
    window.location.href = "index_nopopup2.php";
    }, delayInMilliseconds);

</script>
</html>