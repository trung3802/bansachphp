<?php
session_start(); 
require_once('db_connect.php');

// Kết nối đến cơ sở dữ liệu
$conn = connectToDatabase();

// Kiểm tra xem biểu mẫu đã được gửi đi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu đầu vào
    $diachi = mysqli_real_escape_string($conn, $_POST['diachi']);
    $soluong = mysqli_real_escape_string($conn, $_POST['soluong']);

    // Kiểm tra đăng nhập
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $user_query = "SELECT * FROM users WHERE username = '$username'";
        $user_result = mysqli_query($conn, $user_query);

        if ($user_result) {
            $user_row = mysqli_fetch_assoc($user_result);
            $userId = $user_row['id'];

            // Thêm đơn hàng vào bảng donhang
            $donhang_query = "INSERT INTO don_hang (id_nguoi_dung, ngay_dat, dia_chi_giao_hang, tinh_trang) 
                              VALUES ('$userId', NOW(), '$diachi', 'ChuaXacNhan')";
            mysqli_query($conn, $donhang_query);

            // Lấy ID của đơn hàng vừa thêm vào
            $id_don_hang = mysqli_insert_id($conn);

            // Lấy giá sản phẩm từ bảng san_pham
            $id_san_pham = 1; // ID sản phẩm mặc định, bạn cần thay đổi dựa trên sản phẩm thực tế
            $gia_query = "SELECT gia FROM san_pham WHERE id = '$id_san_pham'";
            $gia_result = mysqli_query($conn, $gia_query);

            if ($gia_result) {
                $gia_row = mysqli_fetch_assoc($gia_result);
                $gia = $gia_row['gia'];

                // Tính giá tiền và thêm chi tiết đơn hàng vào bảng chi_tiet_don_hang
                $gia_tien = $soluong * $gia;

                $chitiet_query = "INSERT INTO chi_tiet_don_hang (id_don_hang, id_san_pham, so_luong, gia_tien) 
                                  VALUES ('$id_don_hang', '$id_san_pham', '$soluong', '$gia_tien')";
                mysqli_query($conn, $chitiet_query);

                // Hiển thị thông báo hoặc chuyển hướng đến trang cảm ơn, v.v.
                echo "Đơn hàng đã được thanh toán thành công!";
            } else {
                // Xử lý lỗi khi lấy giá sản phẩm
                echo "Lỗi khi lấy giá sản phẩm: " . mysqli_error($conn);
            }
        } else {
            // Xử lý lỗi khi lấy thông tin người dùng
            echo "Lỗi khi lấy thông tin người dùng: " . mysqli_error($conn);
        }
    } else {
        // Người dùng chưa đăng nhập, xử lý phù hợp (chuyển hướng đăng nhập, v.v.)
        echo "Bạn cần đăng nhập trước khi thanh toán.";
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>
