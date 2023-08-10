<?php
    include "model.php";
    session_start();
    if (isset($_SESSION['user'])) {
        $model = new model();
        $user = $model->get_user_by_ID($_GET['user']);
        if(!$user && $_GET['user'] != 0)
        {
            echo "user khong ton tai";
            exit;
        }
        if( $_GET['user'] == 0)
        {
            $user['firstname'] = 'IODR_is_FLAG';
        }
        ?>
        <!DOCTYPE html>
<html>
    <p>hello user <?php  echo $user['firstname'].' '. $user['lastname'].' '. $user['email'] ?></p>
</html>
<?php
    } else {
        ?> <p>người dùng không xác thực</p><?php
    }
?>