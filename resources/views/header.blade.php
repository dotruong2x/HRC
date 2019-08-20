
<!-- 
<div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body">
        
      </div>
      
    </div> -->
   
    <div class="top-bar py-1 bg-light" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6 tel-dt  d-none d-xl-block">
            <p class="mb-0 float-right">
              <span class="mr-3 "><a href="tel://#" class="p-2"> <span class="icon-phone mr-2"></span><span class="d-none d-lg-inline-block">+0927 15 15 35</span></a></span>
              <span class=""><a href="#" class="p-2"><span class="icon-envelope mr-2"></span><span class="d-none d-lg-inline-block">contact@talentwins.co</span></a></span>
            </p>
            
          </div>
<!-- mobile -->
          <div class="col-6 tel-mobile  d-block d-xl-none">
            <p class="mb-0 float-right">
              <span class="mr-3 " style="color:#ed1c24; font-size:14px"><a>+0927 15 15 35</a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

<header class="site-navbar py-2 bg-white js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6  col-xl-2 d-none d-xl-block">
            <h1 class="mb-0 site-logo"><a href="#" class="text-black h2 mb-0"><img src="{{ asset('images/logo.png')}}" style="width: 75%;" alt=""></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right main-navbar dt" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="" class="nav-link" style="font-size: 18px">  Trang chủ </a> 
                
                </li>
                <li><a href="{{ route('gioithieu') }}" class="nav-link"style="font-size: 18px"> Giới thiệu <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 15px!important;"></i></a>
                <ul class="sub-menu ">
                    <li><a href=""style="font-size: 16px">Công ty Talent Wins</a></li>
                  
                    <li><a href="#"style="font-size: 16px">Công ty HRC</a></li>
                  
                    <li><a href="#"style="font-size: 16px">Ban cố vấn</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{ route('gioithieu') }}" class="nav-link"style="font-size: 18px"> Khóa học <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 15px!important;"></i></a>
                  <ul class="sub-menu ">
                      <li><a href=""style="font-size: 16px">Khóa học A</a></li>
                    
                      <li><a href="#"style="font-size: 16px">Khóa học B</a></li>
                    
                      <li><a href="#"style="font-size: 16px">Khóa học C</a></li>
                      
                    </ul>
                  </li>
                <li><a href="{{ route('dichvu') }}" class="nav-link" style="font-size: 18px">Dịch vụ  <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 15px!important;"></i></a>
                <ul class="sub-menu">
                    <li><a href="" style="font-size: 16px">Dịch vụ A</a></li>
                   
                    <li><a href="#"style="font-size: 16px">Dịch vụ B</a></li>

                    <li><a href="#"style="font-size: 16px">Dịch vụ C</a></li>
                    
                  </ul>
              </li>
              <li><a href="{{ route('gioithieu') }}" class="nav-link"style="font-size: 18px">Tuyển dụng <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 15px!important;"></i></a>
                <ul class="sub-menu ">
                  
                  <li><a href="#"style="font-size: 16px">Vị trí A</a></li>

                    <li><a href="#"style="font-size: 16px">Vị trí B</a></li>
                  
                    <li><a href="#"style="font-size: 16px">Vị trí C</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{ route('tinTuc') }}" class="nav-link" style="font-size: 18px">Tin tức  <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 15px!important;"></i></a>
                  <ul class="sub-menu">
                    <li><a href=""style="font-size: 16px">Tin tức Công nghệ</a></li>
                   
                    <li><a href="#"style="font-size: 16px">Tin tức Doanh nghiệp</a></li>                       
                  </ul>
               </li>
                <li><a href="{{ route('lienhe') }}" class="nav-link" style="font-size: 18px">Liên Hệ</a></li>       
              </ul>
            </nav>
          </div>
<!-- mobile -->
          <div class=" d-block d-xl-none">
          
          <nav class="navbar navbar-expand-md  navbar-light mobile">
              <a href="" style="width: 80%"><img src="{{ asset('images/logo.png')}}" style="width: 30%; height: 30%" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#demo" style="border:none" >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse  navbar-collapse" id="demo" style="width:100px;float:right">
                  <ul class="navbar-nav">
                    <li class="nav-item active dropdown">
                    <a href="#" class="nav-link" style="font-size: 16px">Trang chủ</a>
                    </li>
                    <li class="nav-item active dropdown">
                      <a class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Giới thiệu   <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 13px!important;"></i></a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Công ty Talent Wins</a></li>
                              <br>
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Công ty HRC</a></li>
                              <br>
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Ban cố vấn</a></li>
                        
                        </ul>
                    </li>
                    <li class="nav-item active dropdown">
                      <a class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Khóa học<i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 13px!important;"></i></a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Khóa học A</a></li>
                              <br>
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Khóa học B</a></li>
                              <br>
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Khóa học C</a></li>
                        
                        </ul>
                    </li>
                    <li class="nav-item active dropdown">
                      <a class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Tin tức  <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 13px!important;"></i></a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('tinTuc') }}"style="font-size: 16px;color:black">Tin tức Công nghệ</a></li>
                              <br>
                              <li><a href="{{ route('tinTuc') }}"style="font-size: 16px;color:black">Doanh nghiệp</a></li>
                              
                        
                        </ul>
                    </li>

                    <li class="nav-item active dropdown">
                      <a class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Dịch vụ  <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 13px!important;"></i></a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('dichvu') }}"style="font-size: 16px;color:black">Đào tạo trực tuyến</a></li>
                              <br>
                              <li><a href="{{ route('dichvu') }}"style="font-size: 16px;color:black">Kiểm tra trực tuyến</a></li>
                              
                        
                        </ul>
                    </li>
                    
                    <li class="nav-item active dropdown">
                    <a class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Tư vấn/Tuyển dụng  <i class="fa fa-plus plus" aria-hidden="true" style="  font-size: 13px!important;"></i></a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Theo bộ phận</a></li>
                              <br>
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Theo ngành</a></li>
                              <br>
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Theo phòng</a></li>
                        
                        </ul>
                    </li>
                    <li class="nav-item active dropdown">
                    <a href="{{ route('lienhe') }}" class="nav-link" style="font-size: 16px">CSKH</a>
                    </li>
                      
                  </ul>
                </div> 
                
                
              </nav>
          </div>

<!-- mobile -->

<!-- <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div> -->







        </div>
      </div>
      
    </header>
