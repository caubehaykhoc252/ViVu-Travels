<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.min.css" />
    <link rel="stylesheet" href="../css/activity.css">
</head>
<body>
    
<?php require_once 'header.php';?>
        <div class="header">
            <div class="row1">
                <h2>Ghềnh Đá Đĩa</h2>
                <div class="confirm">
                    <span><i class="fas fa-check-circle"></i></span>
                    Đã xác nhận
                </div>
                <div class="option">
                    <div class="save">
                        <i class="far fa-heart"></i>
                        <span>Lưu</span>
                    </div>
                    <div class="share">
                        <i class="far fa-share-square"></i>
                        <span>Chia sẻ</span>
                    </div>
                </div>
            </div>

            <div class="row2">
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <b>   100 đánh giá</b>
                </div>
                <div class="type">
                    <span>Địa danh du lịch nổi tiếng, vẻ đẹp của thiên nhiên</span>
                </div>
            </div>
            
            <div class="row3">
                <div >
                    <span> <i class="fas fa-map-marker-alt"></i></span>
                    Địa chỉ
                </div>
                <div>
                    <span><i class="fas fa-phone"></i> </span>
                    0123456789
                </div>
                <div class="time">
                    <span><i class="fas fa-clock"></i> </span>
                    7h30-18h
                </div>
            </div>


        </div>

        <!------------------------------------>
        
        <div class="main">
            <div class="rating">
                <h3>Đánh giá và xếp hạng</h3>
                <div class="danhgia">
                    <div class="icon">
                        <b class="rate-total">4.0</b>
                    
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <b>   100 đánh giá</b>  
                    </div>
                    <span>Phú Yên</span>
                    <span></span>
                </div>
                <div class="border"></div>
                <div class="xephang">
                    <h4>Xếp hạng</h4>
                    <div class="row">
                        <span><i class="fas fa-hamburger"></i></span>
                        &nbsp Đồ ăn
                        <span class="xyz">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </div>
                    <div class="row">
                        <span><i class="fas fa-concierge-bell"></i></span>
                        &nbsp  Dịch vụ
                        <span class="xyz">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </div>
                    <div class="row">
                        <span><i class="far fa-gem"></i></span>
                        &nbsp Giá trị
                        <span class="xyz">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="info">
                
                <div class="img-prim">
                    <img src="/Travel-Source/img/images.jpg" class="imgslider">
                    <button class="btn-prev">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button class="btn-next">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </div>
                <div class="img-items">
                    <img src="/Travel-Source/img/images.jpg" class="imgslider">
                    <img src="/Travel-Source/img/images.jpg" class="imgslider">
                    <img src="/Travel-Source/img/images.jpg" class="imgslider">
                    <img src="/Travel-Source/img/images.jpg" class="imgslider">
                </div>
            </div>
        </div>
        
        <!------------------------------------>

        <?php require_once 'footer.php';?>
</body>
</html>