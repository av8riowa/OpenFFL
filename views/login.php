<?php
session_start();
if (isset($_POST['login'])) {
    include_once '../controllers/UserController.php';
    $userController = new UserController();
    $userController->login($_POST['username'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo APP_NAME; ?> - Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Login to <?php echo APP_NAME; ?></h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>

