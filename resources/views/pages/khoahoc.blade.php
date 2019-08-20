<style>
        .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
        }
        
        /* Style the buttons inside the tab */
        .tab button {
          background-color: inherit;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          transition: 0.3s;
          font-size: 17px;
          width: 25%;
        }
        
        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }
        
        /* Create an active/current tablink class */
        .tab button.active {
          background-color: #0d487f;
          color: #fff;
        }
        
        /* Style the tab content */
        .tabcontent {
          display: none;
          padding: 6px 12px;
          border: 1px solid #ccc;
          border-top: none;
        }
        </style>


@extends('master-layout')


@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top:100px;">
                <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Course/27b7d76e83e44d85a9022d059ce68f5a.jpg" alt="" width="100%" height="auto">
                <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" style="font-size: 20px;font-weight: 700;">Giới thiệu</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')" style="font-size: 20px;font-weight: 700;">Nội dung</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')" style="font-size: 20px;font-weight: 700;">Lịch học</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')" style="font-size: 20px;font-weight: 700;">Giảng viên</button>
                      </div>
                      
                      <div id="London" class="tabcontent" style="display:block">
                        <h3>London</h3>
                        <p>London is the capital city of England.</p>
                      </div>
                      
                      <div id="Paris" class="tabcontent">
                        <h3>Paris</h3>
                        <p>Paris is the capital of France.</p> 
                      </div>
                      
                      <div id="Tokyo" class="tabcontent">
                        <h3>Tokyo</h3>
                        <p>Tokyo is the capital of Japan.</p>
                    </div>
                    <form action="" style="border:#f4f4f4 solid 1px;margin-top:30px" class="container">
                        <p style="color:#333333;font-size: 18px;font-weight: 700;margin: 30px;">Đánh giá khóa học</p>
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="email" name="" placeholder="Họ và tên"style="height:45px;">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="phone" placeholder="Số điện thoại"style="height:45px;">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="phone" placeholder="Email"style="height:45px;margin-top:20px;">
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-info" style="width:100%;height:45px;margin-top:20px;">Gửi đánh giá</a>
                            </div>
                        </div>
                        <textarea name="" style="width:100%;height:auto;margin: 30px 0px;" placeholder="Nhập đánh giá về khóa học"></textarea>
                    </form>
            </div>
            <div class="col-md-4" style="padding:30px;background-color:#f4f4f4;margin-top:100px;">
                <div class="row" style="border-bottom:#0d487f solid 1px; padding-bottom:10px;">
                    <h3 style="font-size:25px;">Thông tin khóa học</h3>
                </div>
                <div class="row">        
                    <h3 style="font-size: 20px;font-weight: 700;padding-top: 10px;color: black;">Học phí :</h3>
                    <span style="color: #b71d21;font-weight: bold;font-size: 24px;padding-left: 20px;">18.800.000 VNĐ</span>
                    <p>((Bao gồm cả Tea Break, chi phí tài liệu, in ấn, giảng viên, chứng nhận)) </p>        
                    <h3 style="font-size: 20px;font-weight: 700;padding-top: 10px;color: black;">Phí ưu đãi</h3>
                    <span style="color: #002cff;font-weight: bold;font-size: 24px;padding-left: 20px;">18.000.000 VND</span>
                    <ul style="padding-top: 25px;color: #333333;">
                        <li>Học viên đăng ký trước khai giảng 15 ngày</li>
                        <li>Đăng ký từ 3 học viên</li>
                        <li>Là khách hàng thân thiết của PTI</li>
                    </ul>
                    <strong style="color:#333333;padding-top:30px;">Địa điểm :</strong>
                    <p style="padding-top:10px;">Khóa học được tổ chức tại phòng học V.I.P Tầng 14 - Sảnh B - Tòa nhà Sông Đà - Đường Phạm Hùng - Nam Từ Liêm - Hà Nội</p>
                    <strong style="color: red;font-weight: 900;font-size: 18px;">Email: info@pti.edu.vn</strong>
                    <strong style="color: red;font-weight: 900;font-size: 18px;">Hotline: 0906 249 286</strong><br>
                    <center>
                    <a href="" class="btn" style="background-color:#0d487f;color: #fff;margin: 60px;">ĐĂNG KÍ KHÓA HỌC</a>
                    </center>
                </div>
                <div class="row" style="border-bottom:#0d487f solid 1px; padding-bottom:10px;">
                    <h3 style="font-size:20px;color:black">Chương trình đào tạo đặc biệt</h3>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="https://pti.edu.vn/uploads/chuongtrinhdaotao/Giam-doc/ceo-toan-dien.jpg" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">CEO toàn diện</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">26.800.000 VNĐ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    
@endsection


<script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
 </script>