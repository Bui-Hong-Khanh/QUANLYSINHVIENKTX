<div id="app">
    <div id="sidebar">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header position-relative">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <!-- <a href="index.html"><img src="./assets/compiled/svg/logo.svg" alt="Logo" srcset=""></a> -->
                        <a href="index.php" class="font-bold" style="font-size: 25px">KTX-UTT</a>
                    </div>
                    <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                            role="img" class="iconify iconify--system-uicons" width="20" height="20"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                            <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                    opacity=".3"></path>
                                <g transform="translate(-210 -1)">
                                    <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                    <circle cx="220.5" cy="11.5" r="4"></circle>
                                    <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                </g>
                            </g>
                        </svg>
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                            <label class="form-check-label"></label>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                            role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                            </path>
                        </svg>
                    </div>
                    <div class="sidebar-toggler  x">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>

            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li
                        class="sidebar-item">
                        <a href="index.php" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Trang chủ</span>
                        </a>


                    </li>

                    <li class="sidebar-item has-sub">
                        <a href="thongtin.php" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Tài khoản</span>
                        </a>

                        <ul class="submenu ">
                            <li class="submenu-item  ">
                                <a href="thongtincanhan.php" class="submenu-link">Thông tin cá nhân</a>
                            </li>

                            <li class="submenu-item  ">
                                <a href="component-accordion.html" class="submenu-link">Đổi mật khẩu</a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="./xacthuc/dangxuat.php" class='sidebar-link'>
                            <i class="bi bi-box-arrow-left"></i>
                            <span>Đăng xuất</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Quản lý</li>

                    <li
                        class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Quản lý Đăng Ký Phòng</span>
                        </a>

                        <ul class="submenu ">

                            <li class="submenu-item  ">
                                <a href="index.php?action=dangkyphong&view=quanlydangkyphong" class="submenu-link">Xử lý đăng ký</a>

                            </li>

                            <li class="submenu-item  ">
                                <a href="index.php?action=danhsachdaduyetqldkp" class="submenu-link">Danh sách đã xử lý</a>

                            </li>


                        </ul>


                    </li>

                    <li
                        class="sidebar-item active">
                        <a href="index.php?action=traphong&view=quanlytraphong" class='sidebar-link'>
                            <i class="bi bi-journal-check"></i>
                            <span>Quản lý Trả Phòng</span>
                        </a>


                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="index.php?action=hoadon&view=quanlyhoadon" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Quản lý Hóa Đơn</span>
                        </a>


                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="index.php?action=khu&view=all" class='sidebar-link'>
                            <i class="bi bi-houses"></i>
                            <span>Quản lý Khu</span>
                        </a>


                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="index.php?action=phong&view=quanlyphong" class='sidebar-link'>
                            <i class="bi bi-house"></i>
                            <span>Quản lý Phòng</span>
                        </a>


                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="index.php?action=taikhoan&view=taikhoan" class='sidebar-link'>
                            <i class="bi bi-person-circle"></i>
                            <span>Quản lý Tài Khoản</span>
                        </a>


                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="index.php?action=sinhvien&view=all " class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Quản lý Sinh Viên</span>
                        </a>


                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Chi tiết trả phòng</h3>
                        <p class="text-subtitle text-muted">Danh sách đăng ký trả phòng => Chi tiết đăng ký</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="index.php?action=traphong&view=quanlytraphong">Quản lý Trả Phòng</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chi tiết danh sách</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?php
                include_once('./config/database.php');

                $maSinhVien = isset($_GET['MaSV']) ? $_GET['MaSV'] : '';
                $sqlSinhVien = "SELECT * FROM sinhvien WHERE MaSV = '$maSinhVien'";
                $resultSinhVien = $conn->query($sqlSinhVien);

                if ($resultSinhVien == false) {
                    die("Lỗi truy vấn cơ sở dữ liệu: " . $conn->error);
                }

                $rowSinhVien = $resultSinhVien->fetch_assoc();

                if (!$rowSinhVien) {
                    echo "Không tìm thấy thông tin sinh viên.";
                } else {
            ?>


            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thông tin sinh viên đăng ký</h4>
                            </div>
                                <?php
                                    echo "<div class='card-content'>
                                        <div class='card-body'>
                                            <form class='form form-horizontal'>
                                                <div class='form-body'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>
                                                            <label for='first-name-horizontal'>Mã Sinh Viên</label>
                                                        </div>
                                                        <div class='col-md-8 form-group'>
                                                            <input type='text' id='first-name-horizontal' class='form-control' name='fname'
                                                                value='" . $rowSinhVien['MaSV'] . "' disabled>
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for='email-horizontal'>Họ và Tên</label>
                                                        </div>
                                                        <div class='col-md-8 form-group'>
                                                            <input type='text' id='email-horizontal' class='form-control' name='email-id'
                                                                value='" . $rowSinhVien['HoTen'] . "' disabled>
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for='contact-info-horizontal'>Giới Tính</label>
                                                        </div>
                                                        <div class='col-md-8 form-group'>
                                                            <input type='text' id='contact-info-horizontal' class='form-control' name='contact'
                                                                value='" . (($rowSinhVien['GioiTinh'] == 'nữ') ? 'Nữ' : 'Nam') . "' disabled>
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for='password-horizontal'>Ngày Sinh</label>
                                                        </div>
                                                        <div class='col-md-8 form-group'>
                                                            <input type='text' id='password-horizontal' class='form-control' name='password'
                                                                value='" . $rowSinhVien['NgaySinh'] . "' disabled>
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for='password-horizontal'>Địa Chỉ</label>
                                                        </div>
                                                        <div class='col-md-8 form-group'>
                                                            <input type='text' id='password-horizontal' class='form-control' name='password'
                                                                value='" . $rowSinhVien['DiaChi'] . "' disabled>
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for='password-horizontal'>SĐT</label>
                                                        </div>
                                                        <div class='col-md-8 form-group'>
                                                            <input type='text' id='password-horizontal' class='form-control' name='password'
                                                                value='" . $rowSinhVien['SDT'] . "' disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>";

                                    // Lấy thông tin đăng ký phòng dựa trên mã sinh viên
                                    $sqlPhong = "SELECT phong.MaPhong, phong.MaKhu, phong.Gia FROM phong INNER JOIN dangkyphong ON phong.MaPhong = dangkyphong.MaPhong WHERE dangkyphong.MaSV = '$maSinhVien'";
                                    $resultPhong = $conn->query($sqlPhong);

                                    // Kiểm tra kết quả truy vấn
                                    if ($resultPhong == false) {
                                        die("Lỗi truy vấn cơ sở dữ liệu: " . $conn->error);
                                    }

                                    $rowPhong = $resultPhong->fetch_assoc();

                                    if (!$rowPhong) {
                                        echo "Không tìm thấy thông tin phòng.";
                                    } else {                                    
                                ?>                            
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thông tin phòng</h4>
                            </div>
                                <?php
                                        // Bảng thông tin phòng
                                        echo "<div class='card-content'>
                                            <div class='card-body'>
                                                <form class='form form-horizontal'>
                                                    <div class='form-body'>
                                                        <div class='row'>
                                                            <div class='col-md-4'>
                                                                <label for='first-name-horizontal-icon'>Mã Phòng</label>
                                                            </div>
                                                            <div class='col-md-8'>
                                                                <div class='form-group has-icon-left'>
                                                                    <div class='position-relative'>
                                                                        <input type='text' class='form-control' value='" . $rowPhong['MaPhong'] . "'
                                                                            id='first-name-horizontal-icon' disabled>
                                                                        <div class='form-control-icon'>
                                                                            <i class='bi bi-house'></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='col-md-4'>
                                                                <label for='email-horizontal-icon'>Mã Khu</label>
                                                            </div>
                                                            <div class='col-md-8'>
                                                                <div class='form-group has-icon-left'>
                                                                    <div class='position-relative'>
                                                                        <input type='text' class='form-control' value='" . $rowPhong['MaKhu'] . "'
                                                                            id='email-horizontal-icon' disabled>
                                                                        <div class='form-control-icon'>
                                                                            <i class='bi bi-houses'></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='col-md-4'>
                                                                <label for='password-horizontal-icon'>Giá</label>
                                                            </div>
                                                            <div class='col-md-8'>
                                                                <div class='form-group has-icon-left'>
                                                                    <div class='position-relative'>
                                                                        <input type='text' class='form-control' value='" . number_format($rowPhong['Gia']) . " đ'
                                                                            id='password-horizontal-icon' disabled>
                                                                        <div class='form-control-icon'>
                                                                            <i class='bi bi-cash-coin'></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>";
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Horizontal form layout section end -->

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2025 &copy; Nhóm 6 | UTT</p>
                    </div>
                    <div class="float-end">
                        <p>Design by <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                            <a href="https://www.facebook.com/ngockhanh2k3" target="_blank">Krug</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>