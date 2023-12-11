<?php
require_once('db_connect.php');

// Kết nối đến cơ sở dữ liệu
$conn = connectToDatabase();

// Kiểm tra xem biểu mẫu đã được gửi đi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu đầu vào
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Băm mật khẩu
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $full_name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['message']);

    $check_username_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $check_username_query);

    if (mysqli_num_rows($result) > 0) {
        $error_message = "Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác.";
    } else {
        // Tiếp tục chèn dữ liệu vào bảng users
        $sql = "INSERT INTO users (username, password, full_name, phone_number, email, address) VALUES ('$username', '$password', '$full_name', '$phone_number', '$email', '$address')";
        
        if (mysqli_query($conn, $sql)) {
            $message = "Đăng ký thành công!";
        } else {
            $error_message = "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
            echo '<script>alert("' . $error_message . '");</script>';
        }
    }

    echo '<script>alert("Đăng ký thành công");</script>';
    header("Location: ../login.php");
    exit();
}

// Đóng kết nối
mysqli_close($conn);
?>
