<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <?php 
        
        $listp =[
    ["name" => "máy tính 1", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 2", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 3", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 4", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 565", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 56", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 24", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 78", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 09", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 23", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 456", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 67", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 12", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 868", "price" =>20, "type" => "mt"],
    ["name" => "máy tính 97", "price" =>20, "type" => "mt"]

];
        ?>
    <div class="main">
        <
        <!-- Start header  -->
        <section class="header">
            <div class="container-fluid">
                <div class="header-top">
                    <!-- logo -->
                    <div class="header-logo">
                        <img class="img-logo" src="{{ asset('images/logo3.png') }}" alt="" >
                    </div>
                    <!-- Header-Search -->
                    <div class="header-search">
                        <input type="text" name="text-search" class="header-input" placeholder="Hôm nay bạn cần tìm gì?">
                        <button class="btn-search">
                            <i class="icon-search fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <!-- Card Infor -->
                    <div class="card-infor">
                        <!-- Card Cart -->
                        <div class="card-cart">
                            <a href="#">
                                <i class="icon-heart fa-solid fa-heart"></i>
                            </a>
                            <a href="#">
                                <i class="icon-shuffle fa-solid fa-shuffle"></i>
                            </a>
                            
                            <a href="#" class="card-icon-shopping">
                                <i class="icon-shopping fa-solid fa-bag-shopping"></i>
                            </a>
                            
                        </div>
                        <div class="card-user-legth">
                            <!-- <select name="" class="language">
                                <option value="Vn">Việt Nam</option>
                                <option value="EN">English</option>
                            </select> -->
                            <div class="card-icon-user">
                                <i class="icon-user fa-solid fa-user"></i>
                                <div class="connect-user">
                                    <a href="#" class="text-user">Tài Khoản</a>
                                    <a href="#" class="link-user">Đăng nhập</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End header -->
        <!-- Start menu -->
        <section class="main-menu" id="main-menu">
            <div class="container-fluid">
                <div class="nav-menu">
                    <ul class="border-menus">
                        <li class="menu-root root-1">
                            <a href="" class="name-menu-root ">
                                <!-- <i class="icon-products fa-solid fa-mobile"></i> -->
                                <span class="products-title">Điện thoại</span>  
                            </a>
                            <div class="sub-container">
                                <div class="sub">
                                    <div class="menu-cl1">
                                        <h4 class="product">Nhà sản xuất</h4>
                                        <ul class="formats-container">
                                            <li class="sub-formats"><a href="#" class="subproduct">Apple</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Samsung</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Xiaomi</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">OPPO</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">TECNO</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Nokia</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Realme</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Vivo</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">HONOR</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">HTC</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Infinix</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">ROG</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Nubia</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">XOR</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Masstel</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">TCL</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Itel</a></li>
                                            <li class="sub-formats"><a href="#" class="subproduct">Mới - tin đồn</a></li>
                                        </ul>
                                        <h4 class="product">
                                            <a href="#" class="high-end-phone">Điện thoại cao cấp</a>
                                            
                                        </h4>
                                        <span class="flex-format"></span>
                                        <h4 class="product">
                                            <a href="#" class="high-end-phone">Điện thoại gập</a>
                                        </h4>
                                        
                                    </div>
                                    <div class="menu-cl2">
                                        <h4 class="sub-pice">Mức giá</h4>
                                        <ul class="formats-money">
                                            <li class="sub-formats"><a href="#" class="pice">Trên 100 triệu</a></li>
                                            <li class="sub-formats"><a href="#" class="pice">Dưới 1 triệu</a></li>
                                            <li class="sub-formats"><a href="#" class="pice">Từ 2 đến 3 triệu</a></li>
                                            <li class="sub-formats"><a href="#" class="pice">Từ 3 đến 4 triệu</a></li>
                                            <li class="sub-formats"><a href="#" class="pice">Từ 6 đến 8 triệu</a></li>
                                            <li class="sub-formats"><a href="#" class="pice">Từ 15 đến 20 triệu</a></li>
                                            <li class="sub-formats"><a href="#" class="pice">Từ 20 đến 100 triệu</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-cl3">
                                        <h4 class="most-interested">Quan tâm nhất</h4>
                                        <ul class="formats-interested">
                                            <li class="sub-formats"><a href="#" class="interested">Hôm nay</a></li>
                                            <li class="sub-formats"><a href="#" class="interested">Tuần này</a></li>
                                            <li class="sub-formats"><a href="#" class="interested">Tháng này</a></li>
                                            <li class="sub-formats"><a href="#" class="interested">Năm nay</a></li>
                                        </ul>
                                    </div>
                                    <!-- <div class="menu-ads">
                                        <a href="#">
                                            <img class="img-abs" src="./img/img-abs.jpg" alt="">
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <i class="bi bi-phone"></i>
                                <span class="products-title">Apple</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Máy tính bảng</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Máy tính</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Màn hình</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Smart TV</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Đồng hồ</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Âm thanh</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Phụ kiện</span>
                            </a>
                        </li>
                        <!-- <li class="menu-root">
                            <a href="" class="namne-menu-root">
                                <span class="products-title">Máy trôi</span>
                            </a>
                        </li> -->
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Dịch vụ</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Tin hót</span>
                            </a>
                        </li>
                        <li class="menu-root">
                            <a href="" class="name-menu-root">
                                <span class="products-title">Ưu đãi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End menu -->
        <!-- Start Slider -->
        <section class="main-slider">
            <div class="container-fluid">
                <div class="slider">
                    <div id="list">
                        <div class="item-slider">
                            <img src="{{ asset('images/anhthiennhien.jpg') }}" alt="" class="card_img">
                        </div>
                        <div class="item-slider">
                            <img src="{{ asset('images/slide.jpg') }}" alt="" class="card_img">
                        </div>
                        <div class="item-slider">
                            <img src="{{ asset('images/slide.jpg') }}" alt="" class="card_img">
                        </div>
                        <div class="item-slider">
                            <img src="{{ asset('images/slide.jpg') }}" alt="" class="card_img">
                        </div>
                        <div class="item-slider">
                            <img src="{{ asset('images/slide.jpg') }}" alt="" class="card_img">
                        </div>
                        <div class="item-slider">
                            <img src="{{ asset('images/slide.jpg') }}" alt="" class="card_img">
                        </div>
                    </div>
                    
                    <div class="button">
                        <button class="btn-left" id="left" onclick="btnLeft()">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button class="btn-right" id="right" onclick="btnRight()">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider -->
        <!-- Start Content -->
        <section class="nav-content">
            <div class="container-fluid">
                <div class="container-border">
                    <div class="content-title">
                        <h2 class="name-title-content">
                            Apple
                        </h2>
                    </div>
                    <div class="list-product-content">
                        <?php 

                        foreach ($listp as $key) {
                            # code...
                            # code...
                        ?>
                        <div class="item-product">
                            <div class="border-img">
                                <a href="#" class="link-img">
                                    {{-- <img src="{{ asset('images/svg-product.png') }}" alt="" class="svg-img"> 
                                    --}}
                                    <?php echo("<img src="."'images/svg-product.png' ". " alt='' class='svg-img'>");
                                    ?>
                                    
                                </a>
                            </div>
                            <div class="sticker">
                                <span>
                                    <img src="{{ asset('images/logoapple.png') }}" alt="" title="Hàng chính hãng">
                                </span>
                            </div>
                            <ul class="group-action">
                                <li class="li-action-icon">
                                    <a href="#" class="action-favourite" title="Yêu thích">
                                        <i class="sticker-favourite fa-regular fa-heart"></i>
                                    </a>
                                </li>
                                <li class="li-action-icon">
                                    <a class="action-shuffle" title="So sánh">
                                        <i class="sticker-shuffle fa-solid fa-shuffle"></i>
                                    </a>
                                </li>
                                
                            </ul>

                            <div class="infor-content">
                                <a href="" class="link-infor-content" title='MacBook Air M1 13" (8GB/256GB) - Chính hãng Apple Việt Nam'>
                                    <?php
                                        echo( "name:". $key["name"]);
                                    ?>
                                </a>
                                <span class="price-product-content">
                                    <strong class="price-sale">18,790,000 ₫</strong>
                                    <strike class="listed-price">27,990,000 ₫</strike>
                                </span>
                            </div>
                            <div class="action-cart">
                                <a href="#" class="btn-cart" title="Mua ngay">
                                    <i class="icon-cart fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>  
                        <?php } ?> 
                    </div>
                  
                </div>
            </div>
        </section>
        <!-- End Content -->
        <!-- Footer -->
        <section class="footer">
            <div class="footer-location">
                <div class="container-fluid">
                    <div class="row-footer">
                        <div class="footer-content-details">
                            <h4 class="title-footer">
                                Thông tin
                            </h4>
                            <ul class="list-menu-footer">
                                <li class="li-menu">
                                    <a href="" class="footer-content">Về chúng tôi</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Điều khoản & Điều kiện</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Chính sách bảo mật</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Chính sách thanh toán</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Chính sách giao hàng</a>
                                </li>
                                <ul class="list-social-footer">
                                    <li class="li-social ">
                                        <a href="" class="social-btn  faceboock">
                                            <i class="icon-social fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="li-social">
                                        <a href="" class="social-btn twitter">
                                            <i class="icon-social fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="li-social">
                                        <a href="" class="social-btn youtube">
                                            <i class="icon-social fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="li-social">
                                        <a href="" class="social-btn instagram">
                                            <i class="icon-social fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </div>

                        <div class="footer-content-details">
                            <h4 class="title-footer">
                                Hỗ trợ - Dịch vụ
                            </h4>
                            <ul class="list-menu-footer">
                                <li class="li-menu">
                                    <a href="" class="footer-content">Mua hàng trả góp</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Hướng dẫn đặt hàng và thanh toán</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Tra cứu đơn hàng</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Chính sách bảo mật</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Chính sách khiếu nại</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-content-details">
                            <h4 class="title-footer">
                                tổng đài liên hệ
                            </h4>
                            <ul class="list-menu-footer">
                                <li class="li-menu">
                                    <a href="" class="footer-content">Gọi mua: 0123456789 (7:30 - 22:00)</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Kỹ thuật: 0123456789 (7:30 - 22:00)</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Khiếu nại: 0123456789 (8:00 - 21:30)</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Bảo hành: 0123456789 (8:00 - 21:00)</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-content-details">
                            <h4 class="title-footer">
                                Cửa hàng
                            </h4>
                            <ul class="list-menu-footer">
                                <li class="li-menu">
                                    <a href="" class="footer-content">Điện thoại: +84123456789</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Địa chỉ: 285 Đội Cấn, Ba Đình, Hà Nội</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Email: abc@gmail.com</a>
                                </li>
                                <li class="li-menu">
                                    <a href="" class="footer-content">Giờ mở cửa: Các ngày trong tuần: 9h00 - 22h00</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-content-details">
                            <h4 class="title-footer">
                                Thanh toán miễn phí
                            </h4>
                            <ul class="list-menu-footer footer-list-atm">
                                <li class="li-menu">
                                    <img src="{{ asset('images/footer-jcb.png') }}" alt="">
                                </li>
                                <li class="li-menu">
                                    <img src="{{ asset('images/footer-master.png') }}" alt="">
                                </li>
                                <li class="li-menu">
                                    <img src="{{ asset('images/footer-vnpay.png') }}" alt="">
                                </li>
                                <li class="li-menu">
                                    <img src="{{ asset('images/footer-visa.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-maps">
                <div class="container-fluid">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9231239863093!2d105.81641017411813!3d21.03576178754027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d127a01e7%3A0xab069cd4eaa76ff2!2zMjg1IFAuIMSQ4buZaSBD4bqlbiwgTGnhu4V1IEdpYWksIEJhIMSQw6xuaCwgSMOgIE7hu5lpIDEwMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1700640374012!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

    </div>
    

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>