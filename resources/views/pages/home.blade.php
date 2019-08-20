
@extends('master-layout')


@section('content')
   
   <!--  <div class="site-blocks-cover overlay" style="background-image: url(images/panner-1.png); " data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1 style="color: #ed1c24 ">HRC Talent Wins</h1>
                <p class="mb-5" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>   -->


    <div class="slide-one-item home-slider owl-carousel" data-aos="fade-up" data-aos-delay="200">
         <div class="site-blocks-cover overlay" style="background-image: url(images/panner-1.png); " data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1 style="color: #ed1c24 ">HRC Talent Wins</h1>
                <p class="mb-5" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> 
    <div class="site-blocks-cover overlay" style="background-image: url(images/panner-2.png); " data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1 style="color: #ed1c24 ">HRC Talent Wins</h1>
                <p class="mb-5" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> 
    <div class="site-blocks-cover overlay" style="background-image: url(images/panner-3.png); " data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1 style="color: #ed1c24 ">HRC Talent Wins</h1>
                <p class="mb-5" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> 
             

             
    </div>


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-6 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="100">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/YjyNxGa0ThI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <div class="experience">
              <span class="year">50 years</span>
              <span class="caption">of experience</span>
            </div> -->
          </div>
          <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="300">
            
            <h2 class="section-title mb-3">Welcome To HRC Company</h2>
            <p class="mb-4">HRC là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến.
HRC là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).</p>
            <p><a href="#" class="btn btn-primary "  style="font-size: 18px">Đọc tiếp</a></p>
          </div>
        </div>
      </div>
    </div>



<div class="container learning">
  <div class="row">
    <div class="col-md-4" style="position:relative;">
      <img src="{{ asset('images/headconten.jpg')}}" alt="" style="position:absolute;z-index:-1;top:0;left:0;width:100%;height:auto;">
      <h3 style="color: #fff;font-size: 30px;font-weight: 900;margin-top:8px;"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp; Các khóa học</h3>
      </div>
  </div>
  <div class="row woocommerce">
    <div class="col-md-4 woocommerce__list wow bounceInLeft woocommerce__list-img">
      <a href="{{ route('khoahoc')}}"><img src="https://codelearnstorage.s3.amazonaws.com/CodeCamp/CodeCamp/Upload/Course/27b7d76e83e44d85a9022d059ce68f5a.jpg" alt=""></a>
      <div class="container" style="margin-left:10px;">
        <div class="row" style="padding-top:20px;">
            <a><h5>C++ fundamentals</h5></a>          
        </div>
        <div class="row">
          <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Avatar/8c8a595891d647edacd68413999a2a94.jpg" class="rounded-circle" alt="" width="30px" height="30px">
          <a href="" style="margin-left:10px;">Giáo viên ABC</a>
        </div>
        <div class="row" style="border-bottom:#EBEBEB solid 1px;padding-bottom:20px;">
          <p style="font-size:14px;">C++ Fundamentals is designed to give you everything you need to become a productive C++ </p>
        </div>
        <div class="row" style="padding:20px 0px;">
          <div class="col-sm-5">
            <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
            <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
            <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
            <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
            <i class="fa fa-star" aria-hidden="true" style="color: #f1f1f1;margin-right: 5px;font-size:13px;"></i>
          </div>
          <div class="col-3">
            <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/Lesson-Course.svg?v=3" alt="" width="30px;">57</span>
          </div>
          <div class="col-4">
            <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/students.svg?v=3" alt="" width="30px">809</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 woocommerce__list wow bounceInDown woocommerce__list-img">
      <a href="{{ route('khoahoc')}}"><img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Course/e09a8a3f4ac94f71bc4b9a65af4c4ff1.jpg" alt=""></a>
      <div class="container" style="margin-left:10px;">
          <div class="row" style="padding-top:20px;">
              <a><h5>C++ fundamentals</h5></a>          
          </div>
          <div class="row">
            <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Avatar/8c8a595891d647edacd68413999a2a94.jpg" class="rounded-circle" alt="" width="30px" height="30px">
            <a href="" style="margin-left:10px;">Giáo viên ABC</a>
          </div>
          <div class="row" style="border-bottom:#EBEBEB solid 1px;padding-bottom:20px;">
            <p style="font-size:14px;">C++ Fundamentals is designed to give you everything you need to become a productive C++ </p>
          </div>
          <div class="row" style="padding:20px 0px;">
            <div class="col-sm-5">
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #f1f1f1;margin-right: 5px;font-size:13px;"></i>
            </div>
            <div class="col-3">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/Lesson-Course.svg?v=3" alt="" width="30px;">57</span>
            </div>
            <div class="col-4">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/students.svg?v=3" alt="" width="30px">809</span>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4 woocommerce__list wow bounceInRight woocommerce__list-img">
      <a href="{{ route('khoahoc')}}"><img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Course/cd3f6af62e124f79877c7360e7514896.png" alt=""></a>
      <div class="container" style="margin-left:10px;">
          <div class="row" style="padding-top:20px;">
              <a><h5>C++ fundamentals</h5></a>          
          </div>
          <div class="row">
            <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Avatar/8c8a595891d647edacd68413999a2a94.jpg" class="rounded-circle" alt="" width="30px" height="30px">
            <a href="" style="margin-left:10px;">Giáo viên ABC</a>
          </div>
          <div class="row" style="border-bottom:#EBEBEB solid 1px;padding-bottom:20px;">
            <p style="font-size:14px;">C++ Fundamentals is designed to give you everything you need to become a productive C++ </p>
          </div>
          <div class="row" style="padding:20px 0px;">
            <div class="col-sm-5">
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #f1f1f1;margin-right: 5px;font-size:13px;"></i>
            </div>
            <div class="col-3">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/Lesson-Course.svg?v=3" alt="" width="30px;">57</span>
            </div>
            <div class="col-4">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/students.svg?v=3" alt="" width="30px">809</span>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4 woocommerce__list wow bounceInLeft woocommerce__list-img">
      <a href="{{ route('khoahoc')}}"><img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Course/0f9af905e4e041c8bb73bfa3c074fb70.png" alt=""></a>
      <div class="container" style="margin-left:10px;">
          <div class="row" style="padding-top:20px;">
              <a><h5>C++ fundamentals</h5></a>          
          </div>
          <div class="row">
            <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Avatar/8c8a595891d647edacd68413999a2a94.jpg" class="rounded-circle" alt="" width="30px" height="30px">
            <a href="" style="margin-left:10px;">Giáo viên ABC</a>
          </div>
          <div class="row" style="border-bottom:#EBEBEB solid 1px;padding-bottom:20px;">
            <p style="font-size:14px;">C++ Fundamentals is designed to give you everything you need to become a productive C++ </p>
          </div>
          <div class="row" style="padding:20px 0px;">
            <div class="col-sm-5">
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #f1f1f1;margin-right: 5px;font-size:13px;"></i>
            </div>
            <div class="col-3">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/Lesson-Course.svg?v=3" alt="" width="30px;">57</span>
            </div>
            <div class="col-4">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/students.svg?v=3" alt="" width="30px">809</span>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4 woocommerce__list wow bounceInUp woocommerce__list-img">
      <a href="{{ route('khoahoc')}}"><img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Course/b90dc5c8638b4110a6e76001bb7c5144.png" alt=""></a>
      <div class="container" style="margin-left:10px;">
          <div class="row" style="padding-top:20px;">
              <a><h5>C++ fundamentals</h5></a>          
          </div>
          <div class="row">
            <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Avatar/8c8a595891d647edacd68413999a2a94.jpg" class="rounded-circle" alt="" width="30px" height="30px">
            <a href="" style="margin-left:10px;">Giáo viên ABC</a>
          </div>
          <div class="row" style="border-bottom:#EBEBEB solid 1px;padding-bottom:20px;">
            <p style="font-size:14px;">C++ Fundamentals is designed to give you everything you need to become a productive C++ </p>
          </div>
          <div class="row" style="padding:20px 0px;">
            <div class="col-sm-5">
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #f1f1f1;margin-right: 5px;font-size:13px;"></i>
            </div>
            <div class="col-3">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/Lesson-Course.svg?v=3" alt="" width="30px;">57</span>
            </div>
            <div class="col-4">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/students.svg?v=3" alt="" width="30px">809</span>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4 woocommerce__list wow bounceInRight woocommerce__list-img">
      <a href="{{ route('khoahoc')}}"><img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Course/9a1ce381ec16490aa436a8d8aeb9a3dc.png" alt=""></a>
      <div class="container" style="margin-left:10px;">
          <div class="row" style="padding-top:20px;">
              <a><h5>C++ fundamentals</h5></a>          
          </div>
          <div class="row">
            <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Avatar/8c8a595891d647edacd68413999a2a94.jpg" class="rounded-circle" alt="" width="30px" height="30px">
            <a href="" style="margin-left:10px;">Giáo viên ABC</a>
          </div>
          <div class="row" style="border-bottom:#EBEBEB solid 1px;padding-bottom:20px;">
            <p style="font-size:14px;">C++ Fundamentals is designed to give you everything you need to become a productive C++ </p>
          </div>
          <div class="row" style="padding:20px 0px;">
            <div class="col-sm-5">
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
              <i class="fa fa-star" aria-hidden="true" style="color: #f1f1f1;margin-right: 5px;font-size:13px;"></i>
            </div>
            <div class="col-3">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/Lesson-Course.svg?v=3" alt="" width="30px;">57</span>
            </div>
            <div class="col-4">
              <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/students.svg?v=3" alt="" width="30px">809</span>
            </div>
          </div>
        </div>
    </div>
  </div>
  <center>
    <button class="btn btn-outline-info">View More</button>
  </center>
</div>


    <!-- giải pháp HRC -->

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title"></h3>
            <h2 class="section-title mb-3" style="font-size: 30px">TƯ VẤN VÀ TUYỂN DỤNG HRC</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic1.png" alt=""></div>
              <div>
                <h3>1. Xác định nhu cầu đào tạo</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Khảo sát nhu cầu đào tạo</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Thi, kiểm tra đánh giá xác định năng lực, sự thiếu hụt kiến thức kỹ năng</span>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic2.png" alt=""></div>
              <div>
                <h3>2. Lập và quản lý kế hoạch đào tạo</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Lập kế hoạch đào tạo</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý kế hoạch đào tạo</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý các chương trình đào tạo</span>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic3.png" alt=""></div>
              <div>
                <h3>3. Học tập</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Đào tạo theo chức danh, kế hoạch, mục tiêu cá nhân</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Đánh giá trong đào tạo: đánh giá học viên; đánh giá giảng viên; đánh giá tổ chức khóa học...</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý chi phí đào tạo</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý khóa học</span>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4">
                <img src="http://trinam.com.vn/images/trinam/giaiphap/ic4.png" alt="">
              </div>
              <div>
                <h3>4. Thi - Kiểm tra</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Tổ chức thi: Thi chính thức; thi thử; thi ôn luyện</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Thi và giám sát thi</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Chấm thi và lên điểm</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Khiếu nại và giải quyết khiếu nại</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý chi phí thi</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý ngân hàng câu hỏi</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý ngân hàng đề thi</span>
                
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic9.png" alt=""></div>
              <div>
                <h3>5. Học, thi trên Mobile</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Học theo chức danh, kế hoạch, mục tiêu cá nhân</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Thi chính thức; thi thử; thi ôn luyện</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Xem và tham khỏa thư viện</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Học khóa học realtime</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic5.png" alt=""></div>
              <div>
                <h3>6. Thư viện</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Thư viện bài giảng</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Thư viện tài liệu</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Thư viện chương trình đào tạo</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý chức danh</span>
               <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý khung kiến thức</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý khung năng lực</span>
               
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="600">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic7.png" alt=""></div>
              <div>
                <h3>7. Giảng dạy trực tuyến Realtime</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý lịch dạy trực tuyến</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Thiết lập các đối tượng tham dự; thông báo tới các đối tượng quá SMS, Email...</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Chuẩn bị tài nguyên cho buổi dạy trực tuyến</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Dạy học trực tuyến bằng webcam, micro, bảng trắng, chia sẻ màn hình...</span>
               <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Ghi và xem lại lịch dạy trực tuyến</span>
               
               
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="700">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic8.png" alt=""></div>
              <div>
                <h3>8. Quản trị, báo cáo</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý người dùng</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Quản lý cơ cấu, tổ chức, nhóm người dùng</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Phân quyền hệ thống</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Giám sát hệ thống</span>
               <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Báo cáo thống kê</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Theo dõi đánh giá M & E và phân tích dự báo ra quyết định</span>
               
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="800">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic6.png" alt=""></div>
              <div>
                <h3>9. Đánh giá sau đào tạo</h3>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Học viên tự đánh giá nhận xét</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Người quản lý trực tiếp nhận xét đánh giá</span>
                <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Chuẩn bị tài nguyên cho buổi dạy trực tuyến</span>
               <br>
               <span><i class="fas fa-check" style="color:#ed1c24"></i>  Giảng viên đánh giá</span>
               <br>
                <span><i class="fas fa-check" style="color:#ed1c24"></i>  Lãnh đạo đánh giá</span>
               
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- comment -->
    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-12 text-center">
            <h3 class="section-sub-title"></h3>
            <h2 class="section-title mb-3" style="font-size: 30px">PHẢN HỒI CỦA KHÁCH HÀNG</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section>

   
  
    
    <!-- tin tức -->

    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-12 text-center">
            <h3 class="section-sub-title"></h3>
            <h2 class="section-title mb-3" style="font-size: 30px">TIN TỨC</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
         
            <div class="container">
              <div class="row">
                  <div class="col-md-4">
                     <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                      
                    </div>
                  </div>


                  <div class="col-md-4">
                      <div class="h-entry">
                          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                          <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                          <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                       
                    </div>
                  </div>


                  <div class="col-md-4">
                      <div class="h-entry">
                          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                          <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                          <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                       
                    </div>
                  </div>
              </div>
             
            
          </div>


          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                     <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    
                    </div>
                  </div>


                  <div class="col-md-4">
                      <div class="h-entry">
                          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                          <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                          <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    
                    </div>
                  </div>


                  <div class="col-md-4">
                      <div class="h-entry">
                          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                          <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                          <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                       
                    </div>
                  </div>
              </div>
             
            
          </div>


          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                     <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                   
                    </div>
                  </div>


                  <div class="col-md-4">
                      <div class="h-entry">
                          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                          <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                          <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                       
                    </div>
                  </div>


                  <div class="col-md-4">
                      <div class="h-entry">
                          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                          <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                          <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                      
                    </div>
                  </div>
              </div>
             
            
          </div>

          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                     <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        
                    </div>
                  </div>


                  <div class="col-md-4">
                      <div class="h-entry">
                          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                          <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                          <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                      
                    </div>
                  </div>


                  <div class="col-md-4">
                      <div class="h-entry">
                          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                          <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                          <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                         
                    </div>
                  </div>
              </div>
             
            
          </div>

        </div>
    </section>

        

          
        <!-- <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div> -->
      

   


    <section class="site-section ok" id="contact-section">
      <div class="container">
        <div class="row mb-2"  data-aos="fade-up" data-aos-delay="300">
          <div class="col-12 text-center">
            <h3 class="section-sub-title"></h3>
            <h2 class="section-title mt-0" style="font-size: 30px">LIÊN HỆ</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-7 mb-5 "style="background-color: #F0FFF0; border-radius: 50px">

            

            <form action="#" style="padding:20px">
            <h6 class=" text-center mt-4" >Anh Chị vui lòng để lại thông tin liên hệ để được eWins tư vấn, hỗ trợ!</h6>
              <div class="form-group mb-0 mt-4">
                <label for="email" class="font-weight-bold text-ct">Tên Công ty</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập tên Công ty..." name="email">
              </div>
              <div class="form-group mb-0">
                <label for="email" class="font-weight-bold text-ct">Họ tên</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập họ và tên..." name="email">
              </div>
              <div class="form-group mb-0">
                <label for="email" class="font-weight-bold text-ct">Địa chỉ Công ty</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ Công ty..." name="email">
              </div>
              <div class="form-group mb-0">
                <label for="email" class="font-weight-bold text-ct">Số điện thoại</label>
                <input type="email" class="form-control d-right" id="email" placeholder="Nhập số điện thoại" name="email">
              </div>
              <div class="form-group mb-0">
                <label for="email" class="font-weight-bold text-ct">Email</label>
                <input type="email" class="form-control d-right" id="email" placeholder="Nhập địa chỉ email..." name="email">
              </div>
              <div class="form-group">
                <label for="comment" class="font-weight-bold text-ct">Nội dung</label>
                <textarea class="form-control" rows="4" id="comment" placeholder="Nhập nội dung" name="text"></textarea>
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
                </label>
              </div>
              <button type="submit" class="btn btn-primary mb-3">Gửi</button>
          

  
            </form>
          </div>
          <div class="col-md-5" style="">
            
            <div class="p-4 mb-3 " style="padding:30px">
            <p class="mb-4 font-weight-bold mt-4">Công ty Công nghệ và Dịch vụ Talent Wins</p>
              <p class="mb-0 font-weight-bold"> <i class="fas fa-map-marker-alt fa-fw" ></i> Địa chỉ</p>
              <p class="mb-4" style="color:#04B404">Tòa CT2, khu đô thị Thái Hà Constrexim, 43 Phạm Văn Đồng, Hà Nội</p>

              <p class="mb-0 font-weight-bold"><i  class="fa fa-phone"></i> Số Điện Thoại</p>
              <p class="mb-0"><a href="#" style="color:#04B404"> 0927 15 15 35 (Mr. Hải)</a></p>
              <p class="mb-0"><a href="#"style="color:#04B404">0919 75 6006 (Ms An)</a></p>
              <p class="mb-4"><a href="#" style="color:#04B404">0927 15 15 35 (Mr. Hải)</a></p>

              <p class="mb-0 font-weight-bold icon-envelope"> Email</p>
              <p class="mb-0"><a href="#" style="color:#04B404">contact@talentwins.co</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    
    @endsection