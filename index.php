<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Bootstrap 5 Template</title>

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
                        <span>IEnglish</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll">
                            
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Trang chủ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Khóa học</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Lộ Trình</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Câu hỏi thường gặp</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Liên hệ</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trang</a>

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

            
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Nền Tảng. Học.  <br> Luyện Thi</h1>

                            <h6 class="text-center">thành thạo chỉ trong một khóa học</h6>

                      <!--    <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>

                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form> -->  
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.php">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Bạn có đang gặp khó khăn?</h5>

                                            <p class="mb-0"></p>
                                        </div>

                                     <!--  <span class="badge bg-design rounded-pill ms-auto">14</span> --> 
                                    </div>

                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Học hiệu quả</h5>

                                            <p class="text-white">Chủ động được thời gian học tập mà không cần tốn thời gian di chuyển. Được lựa chọn lớp giáo viên là người Việt Nam hay nước ngoài. Ngoài ra thì học phí vừa phải, nhiều chương trình ưu đãi. Hỗ trợ giải đáp thắc mắc ngoài giờ học.</p>

                                           <!-- <a href="topics-detail.php" class="btn custom-btn mt-2 mt-lg-3">Learn More</a> -->
                                        </div>

                                      <!-- <span class="badge bg-finance rounded-pill ms-auto">25</span> --> 
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
            </section>


            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Khóa học</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Luyện Thi TOEIC</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Luyện Thi IELTS</button>
                            </li>

                      <!--    <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false"></button>
                            </li> -->  

                         <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Luyện Thi THPTQG</button>
                            </li>  

                       <!--   <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
                            </li> -->  
                           
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="sell-topic.php">
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

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="sell-topic.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Cơ bản</h5>

                                                                <p class="mb-0">TOEIC: 450 - 650</p>
                                                        </div>

                                                      <!-- <span class="badge bg-design rounded-pill ms-auto">75</span> --> 
                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="sell-topic.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Nâng cao</h5>

                                                                <p class="mb-0">TOEIC:650 - 800+</p>
                                                        </div>

                                                     <!--   <span class="badge bg-design rounded-pill ms-auto">100</span> -->
                                                    </div>

                                                    <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.php">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Mất gốc</h5>

                                                                <p class="mb-0">IELTS: 1.0 - 4.0</p>
                                                            </div>

                                                          <!-- <span class="badge bg-advertising rounded-pill ms-auto">30</span> --> 
                                                        </div>

                                                        <img src="images/topics/undraw_online_ad_re_ol62.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.php">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Có nền tảng</h5>

                                                                <p class="mb-0">IELTS:4.5-6.0</p>
                                                            </div>

                                                           <!-- <span class="badge bg-advertising rounded-pill ms-auto">65</span> -->
                                                        </div>

                                                        <img src="images/topics/undraw_Group_video_re_btu7.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.php">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Nền tảng tốt</h5>

                                                                <p class="mb-0">IELTS: 6.5 - 7.5+</p>
                                                            </div>

                                                           <!-- <span class="badge bg-advertising rounded-pill ms-auto">50</span> -->
                                                        </div>

                                                        <img src="images/topics/undraw_viral_tweet_gndb.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                 <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
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

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block custom-block-overlay">
                                                <div class="d-flex flex-column h-100">
                                                    <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

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

                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Căn bản</h5>

                                                            <p class="mb-0">THPTQG: 1.0 - 4.5</p>
                                                        </div>

                                                       <!-- <span class="badge bg-music rounded-pill ms-auto">45</span>-->
                                                    </div>

                                                    <img src="images/topics/undraw_Compose_music_re_wpiw.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Trung bình</h5>

                                                            <p class="mb-0">THPTQG: 5.0 - 6.0</p>
                                                        </div>

                                                      <!-- <span class="badge bg-music rounded-pill ms-auto">45</span> -->  
                                                    </div>

                                                    <img src="images/topics/undraw_happy_music_g6wc.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Khá</h5>

                                                            <p class="mb-0">THPTQG: 6.5 - 8.0+</p>
                                                        </div>

                                                     <!--  <span class="badge bg-music rounded-pill ms-auto">20</span> --> 
                                                    </div>

                                                    <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graduation</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Educator</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Lộ trình dành riêng cho bạn</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">GIAI ĐOẠN I: Ôn tập toàn diện</h4>

                                        <p class="text-white">- Chương trình học tập cá nhân hóa, phù hợp với năng lực, thời gian.
                                            <br>- Trang bị ngữ pháp, kĩ năng làm bài.
                                            <br>- Cung cấp ~300 từ vựng thông dụng nhất theo chủ đề.
                                            <br>- Hệ thông bài luyện tập kĩ năng nghe, đọc với đa dạng các dạng bài khác nhau. </p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">GIAI ĐOẠN II: Luyện đề chuyên sâu</h4>

                                        <p class="text-white">- Tăng tốc luyện tập làm đề của bài thi thông qua hệ thống.
                                            <br>- Giải thích đáp án chi tiết cho từng câu hỏi.
                                            <br>- Cung cấp ~300 từ vựng hay gặp nhất theo từng phần phù hợp với trình độ. 
                                            <br>- Đánh giá năng lực và mức điểm dự kiến thông qua các bài kiểm tra.
                                        </p>

                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">GIAI ĐOẠN III: Bộ đề thi thử</h4>

                                        <p class="text-white">- Luyện đề thi thử độc quyền từ IEnglish.
                                            <br>- Giao diện giống 100% các bài thi thật.
                                            <br>- Làm quen với giọng đọc, tốc độ đọc sát nhất bài thi thật.
                                            <br>- Rèn luyện áp lực phòng thi, vững tâm lí trước khi thi thật.
                                            <br>- Kiểm tra được gần chính xác mức điểm của thí sinh.
                                        </p>

                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                   <!--    <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Want to learn more?
                                <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                            </p>
                        </div>
                    </div> -->
                </div>
            </section>


            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Vì sao nên học tiếng anh sớm</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Điều kiện để tốt nghiệp Đại học
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Hiện nay các trường Đại học hàng đầu đều lấy đầu ra IELTS 4.5 làm tiêu chuẩn để sinh viên tố nghiệp đúng thời gian hoặc sớm hơn thì cần phải có band điểm IELTS từ 4.5 trở lên
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Du học và định cư nước ngoài
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                           Tại nhiều trường đại học trên thế giới yêu cầu chứng chỉ IELTS. Đa phần yêu cầu điểm IELTS đi du học của các trường đại học chỉ tiêu 6.0+. Nếu bạn đang có dự định du học thì hãy chuẩn bị học sớm đi nhé.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Tăng thu nhập lên nhiều lần
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                           Nếu sữ hữu ngôn ngữ thứ 2 thì cơ hội làm việc ở các công ty lớn rộng mở hơn. Lương cũng cao x1.5 lần so với khi không có Tiếng Anh. Ngoài ra còn nhiều cơ hội làm việc tại các tập đoàn lớn trong nước nếu sở hữu kỹ năng Tiếng Anh tốt
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


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

      <!--            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
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
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        
        

    </body>
</html>
