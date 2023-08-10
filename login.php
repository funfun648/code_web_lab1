<?php
class controller
{
    public function showLoginForm() {
        include './view/login.php';
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
            include '../view/login.php';
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php');
    }

    private function authenticateUser($username, $password) {
        $model = new model("localhost","root","Tru*ng0512");
        $userid = $model->authentication($username,$password);

        return $userid;
    }
}
?>