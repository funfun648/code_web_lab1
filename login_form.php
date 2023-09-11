<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Tùy chỉnh màu nền */
        body {
            background-color: #f0f0f0; /* Màu xám nhạt */
        }

        /* Tùy chỉnh khung viền và khoảng cách */
        .container {
            width: 400px;
            height: 450px;
            margin: 0 auto; /* Canh giữa biểu mẫu */
            padding: 20px; /* Khoảng cách nội dung từ viền */
            border: 1px solid #ccc; /* Khung viền xám */
            border-radius: 10px; /* Bo góc khung viền */
            background-color: white; /* Màu nền trắng cho biểu mẫu */
        }
        .login-title {
            text-align: center; /* Căn giữa văn bản */
            margin-bottom: 20px; /* Khoảng cách dưới */
        }
        .btn-group{
            text-align: center;
            position: absolute;
            left: 45%;
            top: 65%;
            transform: translate(-50%, -50%);

        }
        .btn-group button {
            width: 35px; 
            height: 35px; 
            font-size: 20px; 
            margin: 5px; 
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2 class="text-uppercase text-center my-5">Đăng nhập</h2>

<div class="container">
    <?php if(isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <input type="hidden" name="action" value="login">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" class="form-control" id="username" name="username"  required><br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" class="form-control" id="password" name="password" required><br><br>

        <input type="submit" class="btn btn-block btn-info" value="Đăng nhập">
    </form>
</div>
<div role="group" class="btn-group">
    <strong>Hints<br></strong>
    <button type="button" title="Hint 1" onclick='alert("username : john_doe and passwd :  password@123 ")'>1</button>
    <button type="button" title="Hint 2" onclick='showHint2()'>2</button>
</div>

<script>
    function showHint2() {
        // Thay đổi nội dung trang web khi ấn nút 2
        document.getElementById('hint-text').innerHTML = "Cố gắng truy cập vào các tài khoản khác trong hệ thống";
    }
</script>

<!-- Thêm một phần tử để hiển thị nội dung thay đổi -->
<div id="hint-text" style="text-align: center; color: red;"></div>

</body>
</html>
