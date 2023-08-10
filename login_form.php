<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>

<h2>Đăng nhập</h2>

<?php if(isset($error_message)): ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
<?php endif; ?>

<form action="login.php" method="post">
    <input type="hidden" name="action" value="login">
    <label for="username">Tên đăng nhập:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Mật khẩu:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Đăng nhập">
</form>

</body>
</html>