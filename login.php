<?php
    include "model.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $loginController = new login(); $loginController->processLogin(); }
class login 
{
    public function showLoginForm() {
        include './view/login_form.php';
    }

    public function processLogin() {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $userid = $this->authenticateUser($username, $password);
 
        if ($userid) {    
            session_start();
            $_SESSION['username'] = $username;
            header('Location: info.php?user='.$userid);
        } else {
            $error_message = "Tên đăng nhập hoặc mật khẩu không đúng.";
            include '../view/login_form.php';
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php');
    }

    private function authenticateUser($username, $password) {
        $model = new model($username,$password);
        $userid = $model->authentication($username,$password);

        return $userid;
    }
}
?>