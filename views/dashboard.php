<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo APP_NAME; ?> - Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Welcome to <?php echo APP_NAME; ?>, <?php echo $_SESSION['user_id']; ?>!</h1>
    <ul>
        <li><a href="add_ad_record.php">Add A&D Record</a></li>
        <li><a href="view_ad_records.php">View A&D Records</a></li>
        <li><a href="inventory_management.php">Manage Inventory</a></li>
        <li><a href="transfer_management.php">Manage Transfers</a></li>
        <li><a href="responsible_person_management.php">Manage Responsible Persons</a></li>
        <li><a href="../controllers/UserController.php?logout=true">Logout</a></li>
    </ul>
</body>
</html>

