<?php
require("./conect.php");

// session_start();
// if (empty($_SESSION['username'])) {
//     header('location: login.php');
//     exit;
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="#" />

</head>
<body>
    <marquee>Hà Nội: 49 Thái Hà | 151 Lê Thanh Nghị và 63 Trần Thái Tông ● HCM: 158 - 160 Lý Thường Kiệt | 330-332 Võ Văn Tần ● Bắc Ninh: Số 4 Nguyễn Văn Cừ - Ninh Xá </marquee>

    <div class="header">

        <h1 class="logo">MiniShop</h1>

        <form action="" method="GET">
        <input placeholder="Searth the internet..." type="text" name="search" class="input">
        </form>
    <?php
         if (isset($_REQUEST['ok'])) 
         {
             $search = addslashes($_GET['search']);
             if (empty($search)) {
                 echo "Yeu cau nhap du lieu vao o trong";
             } 
             else
             {
                 $query = "select * from user where username like '%$search%'";
                 mysqli_connect("localhost", "root", "vertrigo", "basic");
                 $sql = mysqli_query($conn, $query);
                 $num = mysqli_num_rows($sql);
                 if ($num > 0 && $search != "") 
                 {
                     echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
                     echo '<table border="1" cellspacing="0" cellpadding="10">';
                     while ($row = mysqli_fetch_assoc($sql)) {
                         echo '<tr>';
                             echo "<td>{$row['user_id']}</td>";
                             echo "<td>{$row['username']}</td>";
                             echo "<td>{$row['password']}</td>";
                             echo "<td>{$row['email']}</td>";
                             echo "<td>{$row['address']}</td>";
                         echo '</tr>';
                     }
                     echo '</table>';
                 } 
                 else {
                     echo "Khong tim thay ket qua!";
                 }
             }
         }
        
        ?>
        <ul class="menu-header">
            <button class="menu-btn">Hỗ trợ</button>
            <button class="menu-btn">Điều khoản</button>
            <li>
                <a href="./index.php"><span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span></a>
            </li>
            <li>
                <a href="./login.php"><span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span></a>
            </li>
            <li>
                <a href="#"><span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
            </li>
        </ul>
    </div>

    <div class="home-page">
        
        <ul class="menu-home">
            <li class="container"><button id="btn-phone" class="btn">Di động</button></li>
            <li class="container"><button id="btn-tv" class="btn">TV&AV</button></li>
            <li class="container"><button id="btn-washing" class="btn">Máy giặt</button></li>
            <li class="container"><button id="btn-fridge" class="btn">Tủ lạnh</button></li>
            <li class="container"><button id="btn-accessory" class="btn">Phụ kiện</button></li>
        </ul> 

        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                    $sql = "SELECT * FROM shop.slides";
                    $result = mysqli_query($conn, $sql);
                    $id_slides = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo"
                        <div class='swiper-slide'>
                        <h6>".$id_slides++."</h6>
                            <img src=".$row['img_slides'].">
                        </div>";
                    }
                ?>
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
    $sql = "SELECT * FROM shop.phone";
    $result = mysqli_query( $conn, $sql );
    $id_phone = 1;
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        echo"
        <div id='product-phone' class='product-card product-phone hidden'>
            <h6>".$id_phone++."</h6>
            <img src=".$row['img_phone'].">
            <h3>".$row['name_phone']."</h3>
            <p>".$row['price']."</p>
            <button>Mua ngay <i class='fa-solid fa-cart-shopping'></i></button>
        </div>
        ";
    }
    ?>  

    <?php 
    $sql = "SELECT * FROM shop.tv";
    $result = mysqli_query( $conn, $sql );
    $id_TV = 1;
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        echo"
        <div id='product-tv' class='product-card product-tv hidden'>
            <h6>".$id_TV++."</h6>
            <img src=".$row['img_TV'].">
            <h3>".$row['name_TV']."</h3>
            <p>".$row['price']."</p>
            <button>Mua ngay <i class='fa-solid fa-cart-shopping'></i></button>
        </div>
        ";
    }
    ?>  

    <?php 
    $sql = "SELECT * FROM shop.washing";
    $result = mysqli_query( $conn, $sql );
    $id_washing = 1;
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        echo"
        <div id='product-washing' class='product-card product-washing hidden'>
            <h6>".$id_washing++."</h6>
            <img src=".$row['img_washing'].">
            <h3>".$row['name_washing']."</h3>
            <p>".$row['price']."</p>
            <button>Mua ngay <i class='fa-solid fa-cart-shopping'></i></button>
        </div>
        ";
    }
    ?>  

    <?php 
    $sql = "SELECT * FROM shop.fridge";
    $result = mysqli_query( $conn, $sql );
    $id_fridge = 1;
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        echo"
        <div id='product-fridge' class='product-card product-fridge hidden'>
            <h6>".$id_fridge++."</h6>
            <img src=".$row['img_fridge'].">
            <h3>".$row['name_fridge']."</h3>
            <p>".$row['price']."</p>
            <button>Mua ngay <i class='fa-solid fa-cart-shopping'></i></button>
        </div>
        ";
    }
    ?>  

    <?php 
    $sql = "SELECT * FROM shop.accessory";
    $result = mysqli_query( $conn, $sql );
    $id_accessory = 1;
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        echo"
        <div id='product-accessory' class='product-card product-accessory hidden'>
            <h6>".$id_accessory++."</h6>
            <img src=".$row['img_accessory'].">
            <h3>".$row['name_accessory']."</h3>
            <p>".$row['price']."</p>
            <button>Mua ngay <i class='fa-solid fa-cart-shopping'></i></button>
        </div>
        ";
    }
    ?>  
    </div>
    
    <div class="show-popup" id="popup-ads">
            <img src="https://images.samsung.com/is/image/samsung/assets/vn/home/2024/Galaxy_A55-355G_Home_KV-banner_PC.jpg?imwidth=1366">
            <button class="close-show-popup" onclick="closeShowPopup()">[X]</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>