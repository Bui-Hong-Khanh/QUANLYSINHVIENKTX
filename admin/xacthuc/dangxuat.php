<?php
    session_start();
    if (isset($_SESSION['nv'])) {
        // Xóa session người dùng
        // unset($_SESSION['nv']);
        
        // Xóa cookie
        setcookie('manv', '', time() - 3600, "/");
        setcookie('pass', '', time() - 3600, "/");

        // Xóa toàn bộ session
        session_unset();
        session_destroy();

        // Chuyển hướng về trang đăng nhập
        header('Location: ../xacthuc/dangnhap.php');
        exit();
    }
?>
