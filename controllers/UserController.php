<?php
include_once '../models/User.php';

class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function login($username, $password) {
        $result = $this->user->checkCredentials($username, $password);
        if ($result) {
            $_SESSION['user_id'] = $result['id'];
            header("Location: ../views/dashboard.php");
        } else {
            echo "Invalid username or password.";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: ../views/login.php");
    }

    public function addUser($data) {
        if ($this->user->create($data)) {
            echo "User added successfully.";
        } else {
            echo "Error adding user.";
        }
    }
}
?>

