<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Detail Page</title>

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
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <i class="bi-back"></i>
                        <span>Topic</span>
                    </a>
                    <!-- //


                    
                    // -->

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_2">Browse Topics</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_3">How it works</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_4">FAQs</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_5">Contact</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="topics-listing.php">Topics Listing</a></li>

                                    <li><a class="dropdown-item" href="contact.php">Contact Form</a></li>
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
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Mua Topic</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Mua Ngay<br> Tại đây !</h2>

                            <div class="d-flex align-items-center mt-5">
                                <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read More</a>

                                <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                                <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="topics-detail-block-image img-fluid">
                            </div>
                            
                        </div>

                    </div>
                </div>
            </header>


            


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center">

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <a href="#">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Mất gốc</h5>

                                                                <p class="mb-0">TOEIC: 1 - 450</p>
                                                            </div>

                                                        <!--   <span class="badge bg-design rounded-pill ms-auto">14</span> -->
                                                        </div>

                                                        <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                            </div>

                            <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                            <form class="custom-form subscribe-form" action="service/thanh_toan_process.php" method="post" role="form">
                                <h4 class="mb-4 pb-2">Điền đầy đủ thông tin mua hàng</h4>
                                <input type="text" name="diachi" id="diachi" class="form-control" placeholder="Địa Chỉ" required="">
                                <input type="text" name="soluong" id="soluong" class="form-control" placeholder="Số Lượng" required="">
                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control">Thanh Toán</button>
                                </div>
                            </form>
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
                            <span>Topic</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">How it works</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
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
                        <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                        
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