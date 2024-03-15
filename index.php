<?php require_once './conect.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <marquee>Hà Nội: 49 Thái Hà | 151 Lê Thanh Nghị và 63 Trần Thái Tông ● HCM: 158 - 160 Lý Thường Kiệt | 330-332 Võ Văn Tần ● Bắc Ninh: Số 4 Nguyễn Văn Cừ - Ninh Xá </marquee>

    <div class="header">

        <h1 class="logo">MiniShop</h1>

        <input placeholder="Searth the internet..." type="text" name="keyword" class="input">
        
        <ul class="menu-header">
            <button class="menu-btn">Hỗ trợ</button>
            <button class="menu-btn">Điều khoản</button>
            <li>
                <a href="index.php"><span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span></a>
            </li>
            <li>
                <a href="login.php"><span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span></a>
            </li>
            <li>
                <a href="#"><span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
            </li>
        </ul>
    </div>

    <div class="home-page">
        
        <ul class="menu-home">
            <li class="container"><button>Di động</button>
                <!-- <div class="menu-container-slide">
                    <ul>
                        <li><p>Galaxy S</p></li>
                        <li><p>Galaxy Z</p></li>
                        <li><p>Galaxy A</p></li>
                        <li><p>Galaxy M</p></li>
                    </ul>
                </div>
            </li> -->
            <li class="container"><button>TV&AV</button>
                <!-- <div class="menu-container-slide">
                    <ul>
                        <li><p>Neo QLED</p></li>
                        <li><p>QLED</p></li>
                        <li><p>OLED</p></li>
                    </ul>
                </div>
            </li> -->
            <li class="container"><button>Máy giặt</button>
                <!-- <div class="menu-container-slide">
                    <ul>
                        <li><p>Máy Giặt Cửa Trước</p></li>
                        <li><p>Máy Giặt Cửa Trên</p></li>
                        <li><p>Máy Giặt Kèm Sấy</p></li>
                    </ul>
                </div> -->
            </li>
            <li class="container"><button>Tủ lạnh</button>
                <!-- <div class="menu-container-slide">
                    <ul>
                        <li><p>Tủ Lạnh BESPOKE</p></li>
                        <li><p>Tủ Lạnh Multidoor</p></li>
                        <li><p>Tủ Lạnh Side by Side</p></li>
                    </ul>
                </div>
            </li> -->
            <li class="container"><button>Phụ kiện</button></li>
        </ul> 

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.samsung.com/is/image/samsung/assets/vn/2401/pfs/01-hd01-E3-kv-pc-1440x640.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.samsung.com/is/image/samsung/assets/vn/tvs/qled-tv/2023/highlights/2023-neo-qled-tv-f00-1-kv-pc.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.samsung.com/is/image/samsung/assets/vn/refrigerators/KV_01.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.samsung.com/is/image/samsung/assets/vn/washers-and-dryers/TUB_PC_1440x640.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.samsung.com/is/image/samsung/assets/vn/accessories/eco-friends/new/Eco-Friends-Kv-1440x344-Pc.jpg">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
                <i class="fa-solid fa-caret-up"></i>
                <span>prev</span>
            </div>
            <div class="swiper-button-next">
                <i class="fa-solid fa-caret-up"></i>
                <span>next</span>
            </div>
        </div>
    </div>

    <div class="product-show">
    <?php 
    $sql = "SELECT * FROM product";
    $result = mysqli_query( $conn, $sql );
    $id_product = 1;
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        echo"
        <div class='product-card'>
            <h6>".$id_product++."</h6>
            <img src=".$row['img_product'].">
            <h3>".$row['name_product']."</h3>
            <p>".$row['price']."</p>
            <button>Mua ngay <i class='fa-solid fa-cart-shopping'></i></button>
        </div>
        ";
    }
    ?>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>