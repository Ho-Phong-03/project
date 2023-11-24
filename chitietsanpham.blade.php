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
    <div class="main">
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
        <!-- Start Bread -->
        <section class="bread-crumb">
            <div class="container">
                <ul class="bread-home">
                    <li class="li-bread">
                        <i class="icon-home fa-solid fa-house"></i>
                        <a href="#" class="title-home">
                            Trang chủ
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Bread -->
        <!-- Start Product -->
        <section class="product-details">
            <div class="container">
                <div class="row-product-details">
                    <div class="row-product-details-left">
                        <div class="product-details-img">
                            <div class="love-this-btn">
                                <a href="" class="link-love">
                                    <i class="icon-love fa-regular fa-heart"></i>
                                </a>
                            </div>
                            <div class="view-slide-img-product">
                                <div class="view-slide-product-list">
                                    <img src="{{ asset('images/product-detail.png') }}" alt="" class="card-img-product">
                                </div>
                                <div class="view-slide-product-list">
                                    <img src="{{ asset('images/product-detail.png') }}" alt="" class="card-img-product">
                                </div>
                                <div class="view-slide-product-list">
                                    <img src="{{ asset('images/product-detail.png') }}" alt="" class="card-img-product">
                                </div>
                                <div class="view-slide-product-list">
                                    <img src="{{ asset('images/product-detail.png') }}" alt="" class="card-img-product">
                                </div>
                            </div>
                        </div>
                        <div class="product-center">
                            <h1 class="title-head-product-detail">
                                Laptop Dell XPS 13 9310 i5 1135G7/8GB/256GB/13.4 inch FHDTouch/Win 10
                            </h1>
                            <div class="sku-product">
                                <span class="trademark-product">Thương hiệu: Appe</span>
                            </div>
                            <div class="satus-product">
                                <span class="satus">Tình trạng: Còn Hàng</span>
                            </div>
                            <p class="price-product-detail">
                                <strong class="current-price">22,990,000 ₫</strong>
                                <i class="vat-price">| Giá đã bao gồm 10% VAT</i>
                            </p>
                            <div class="custom-btn">
                                <button class="btn-minus">
                                    -
                                </button>
                                <input type="text" name='quantity' size="4" class="qty-input">
                                <button class="btn-plus">
                                    +
                                </button>
                            </div>
                        </div>
                        <div class="product-detail-action">
                            <a href="#" class="btn-by-now">
                                <strong class="by-now">Mua ngay</strong>
                            </a>
                            <a href="#" class="product-cart">
                                <i class="icon-cart fa-solid fa-cart-plus"></i>
                                <span class="title-cart">Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="row-product-details-right">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product -->
        <!-- Footer -->
        {{-- <section class="footer">
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
        </section> --}}

    </div>
    

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>