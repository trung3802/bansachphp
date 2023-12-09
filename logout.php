<?php
session_start();

// Hủy bỏ phiên đăng nhập nếu có
session_destroy();

// Chuyển hướng về trang đăng nhập hoặc trang chính (tùy thuộc vào yêu cầu của bạn)
header("Location: login.php");
exit();
?>
