<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../include/head_skills.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/log_in.css">
    <title>log in</title>
</head>
<body>
<?php include '../include/navbar_skills.php'; ?> 
<form action="../database/login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
</body>
</html>