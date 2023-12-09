<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Contact Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->

    </head>
    
    <body class="topics-listing-page" id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <i class="bi-back"></i>
                        <span>Topic</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_1">Trang chủ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_2">Khóa học</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_3">Lộ trình</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_4">Câu hỏi thường gặp</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_5">Liên hệ</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trang</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="topics-listing.php">Ưu điểm tại IEnglish</a></li>

                                    
                                </ul>
                            </li>
                        </ul>

                        <?php
                        session_start();

                        if (isset($_SESSION['username'])) {
                            // Nếu đã đăng nhập
                            echo '<div class="d-none d-lg-block">';
                            echo '<a href="#top" class="navbar-icon bi-person smoothscroll"></a>';
                            echo '<p>Xin chào, ' . $_SESSION['username'] . '!</p>';
                            echo '<a href="logout.php">Đăng Xuất</a>';
                            echo '</div>';
                        } else {
                            // Nếu chưa đăng nhập
                            echo '<div class="d-none d-lg-block">';
                            echo '<a href="#top" class="navbar-icon bi-person smoothscroll"></a> &ensp;';
                            echo '<a href="login.php">Đăng Nhập</a>&ensp;';
                            echo '|| &ensp;';
                            echo '<a href="contact.php">Đăng Ký</a>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </nav>


            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Đăng kí</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Đăng kí ngay</h2>
                        </div>

                    </div>
                </div>
            </header>


           <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4 pb-2">Duy nhất 100 mã ưu đãi <br> giảm tới 45% học phí</h3>
                        </div>

                        <div class="col-lg-6 col-12">
                        <form action="service/register_process.php" method="post" class="custom-form contact-form" role="form">

                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="username" id="username" class="form-control" placeholder="username" required="">
                                            
                                            <label for="floatingInput">Tên đăng nhập</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                    <div class="form-floating">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="password" required="">
                                            
                                            <label for="floatingInput">Mật Khẩu</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                            
                                            <label for="floatingInput">Họ và Tên</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                           <input type="tel" name="phone" id="phone" pattern="\d{10}"class="form-control" placeholder="Phone" required="">
                                            
                                            <label for="floatingInput">Số điện thoại</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                         <!--  <input type="text" name="subject" id="name" class="form-control" placeholder="Name" required="">
                                            
                                            <label for="floatingInput">Mục tiêu</label> --> 
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Email</label>
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                            
                                            <label for="floatingTextarea">Địa chỉ</label>
                                        </div>
                                        
                                    </div>

                                    <div class="col-lg-4 col-12 ms-auto">
                                        <button type="submit" class="form-control" onclick="confirmsuccess()">Đăng Kí</button>
                                    </div>
                                    <script>
    function confirmsuccess(cartId) {
        var isConfirmed = confirm("Đăng ký thành công");

        // if (isConfirmed) {
        //     window.location.href = "index.php";
        // }
    }
</script>
                                    <div class="col-lg-6 col-12 ms-auto">
                                        
                                        <p>Bạn đã có tài khoản ? <a style="color: red" href="login.php">Đăng nhập tại đây !</a></p>

                                    </div>
                                </div>
                            </form>
                           
                        </div>
                        

                        <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.733297551654!2d108.24978007582243!3d15.975298241944298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1686596003296!5m2!1svi!2sn!2sth" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            <h5 class="mt-4 mb-2">Trụ sở chính</h5>

                            <p>470 Trần Đại Nghĩa, Ngũ Hành Sơn, TP Đà Nẵng</p>
                        </div>

                    </div>
                </div>
            </section> 
        </main>

        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.php">
                            <i class="bi-back"></i>
                            <span>IEnglish</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Về IEnglish</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Trang Chủ</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Khóa Học</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Lộ Trình</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Câu Hỏi Thường Gặp</a>
                            </li>
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Thông tin</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                0123-456-789
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                IEnglish@vku.udn.vn
                            </a>
                        </p>
                    </div>

      <!--             <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Thai</button></li>

                                <li><button class="dropdown-item" type="button">Myanmar</button></li>

                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p> --> 
                        
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>