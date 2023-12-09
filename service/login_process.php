
<?php
session_start(); 
require_once('db_connect.php');

// Kết nối đến cơ sở dữ liệu
$conn = connectToDatabase();

// Kiểm tra xem biểu mẫu đã được gửi đi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu đầu vào
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Kiểm tra đăng nhập
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Đăng nhập thành công, thực hiện các thao tác cần thiết
            $_SESSION['username'] = $username;

             // Kiểm tra role và chuyển hướng
    if ($row['role'] == 1) {
        // Nếu role là 1 (admin), chuyển hướng đến trang admin/index.php
        header("Location: ../admin/index.php?success=" . urlencode("Đăng nhập thành công!"));
    } else {
        // Nếu không phải admin, chuyển hướng đến trang user/index.php hoặc trang chính của ứng dụng
        header("Location: ../index.php?success=" . urlencode("Đăng nhập thành công!"));
    }

            exit();
        } else {
            $error_message = "Sai tên đăng nhập hoặc mật khẩu.";
            header("Location: ../login.php?error=" . urlencode($error_message)); // Chuyển hướng với thông báo lỗi
            exit();
        }
    } else {
        $error_message = "Lỗi truy vấn cơ sở dữ liệu: " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>
