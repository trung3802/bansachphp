<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Page</title>

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
                        <span>IEnglish</span>
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
                                    <li><a class="dropdown-item active" href="topics-listing.php">Ưu điểm tại IEnglish</a></li>

                                    
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

                                    <li class="breadcrumb-item active" aria-current="page">Ưu điểm tại IEnglish</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Ưu điểm tại IEnglish</h2>
                        </div>

                    </div>
                </div>
            </header>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h3 class="mb-4">Những gì chỉ có tại <span style="color: #1a56db;">IEnglish</span></h3>
                        </div>

                        <div class="col-lg-8 col-12 mt-3 mx-auto">
                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">Video bài giảng chất lượng cao</h5>

                                            <p class="mb-0">Bởi đội ngũ giáo viên xuất sắc và tận tâm IELTS 8.0 - 8.5,cựu du học sinh, tốt nghiệp tại các trường Đại học danh tiếng</p>

                                          <!-- <a href="topics-detail.php" class="btn custom-btn mt-3 mt-lg-4">Learn More</a> --> 
                                        </div>

                                     <!-- <span class="badge bg-design rounded-pill ms-auto">14</span> -->  
                                    </div> 
                                </div>
                            </div>

                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="images/topics/undraw_online_ad_re_ol62.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">Đầy đủ bài mẫu, bài tập, mini test, progress test như thi thật</h5>

                                            <p class="mb-0">Bộ tài liệu đã giúp 600 học viên đã đạt IELTS 7.0-8.5 tính tới tháng 5/2021</p>

                                         <!--   <a href="topics-detail.php" class="btn custom-btn mt-3 mt-lg-4">Learn More</a> -->
                                        </div>

                                   <!--     <span class="badge bg-advertising rounded-pill ms-auto">30</span> -->
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">Bài Speaking-Writing được chấm chất lượng hơn cả offline</h5>

                                            <p class="mb-0">Giáo viên chấm bài chính xác từng chữ với Writing, từng giây với Speaking, kết hợp bài kiểm tra phát âm bằng AI</p>

                                        <!--   <a href="topics-detail.php" class="btn custom-btn mt-3 mt-lg-4">Learn More</a> --> 
                                        </div>

                                    <!--   <span class="badge bg-music rounded-pill ms-auto">20</span> --> 
                                    </div>
                                </div>
                            </div>
                        </div>

                     <!--   <div class="col-lg-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Prev</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->

                    </div>
                </div>
            </section>


        <!--   <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                       <div class="col-lg-12 col-12">
                            <h3 class="mb-4">Trending Topics</h3>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.php">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Investment</h5>

                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                    </div>

                                    <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-lg-3">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Finance</h5>

                                            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                            <a href="topics-detail.php" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                    </div>

                                    <div class="social-share d-flex">
                                        <p class="text-white me-4">Share:</p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                            </li>
                                        </ul>

                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->
            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Liên hệ</h2>
                        </div>

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.733297551654!2d108.24978007582243!3d15.975298241944298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1686596003296!5m2!1svi!2s" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">Trụ sở chính</h4>

                            <p>470 Trần Đại Nghĩa, Ngũ Hành Sơn, TP Đà Nẵng</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 305-240-9671" class="site-footer-link">
                                    0123-456-789
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    IEnglish@vku.udn.vn
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mx-auto">
                            <h4 class="mb-3" style="width: 300px;">Địa chỉ văn phòng</h4>

                            <p>470 Trần Đại Nghĩa, Ngũ Hành Sơn, TP Đà Nẵng</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 110-220-3400" class="site-footer-link">
                                    0123-456-789
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    IEnglish@vku.udn.vn
                                </a>
                            </p>
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