<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/shop.css">

</head>

<body>
    <!-- 快捷导航 -->
    <div class="shortcut">
        <div class="wrapper">
            <span class="shouye"><a href="index.php" style='color:#999999;text-shadow: 1px 1px 1px #999;font-size: 18px;'>首页</a></span>
            <ul>
                <li><a href="denglu.html">用户：</a></li>
                <li><a href="#"><?php
                                session_start();
                                if (isset($_SESSION['username'])) {
                                    $username = $_SESSION['username'];
                                    echo "$username";
                                } else {
                                    echo "请登录";
                                } ?>
                    </a></li>
                <li><a href="cart.php">我的订单</a></li>
                <li><a href="#">帮助中心</a></li>
                <li><a href="#">客服中心</a></li>
                <li><a href="#">手机版<img src="./img/ewm.png" alt=""></a></li>
            </ul>
        </div>
    </div>
    <!-- 头部 -->
    <div class="header wrapper" style="background-color: #ffffff;">
        <img src="./img/logo.jpg" alt="">
        <div class="nav">
            <ul>
                <li><a href="more.php">主粮</a></li>
                <li><a href="more.php">零食</a></li>
                <li><a href="more.php">清洁</a></li>
                <li><a href="more.php">生活</a></li>
                <li><a href="more.php">保健</a></li>
                <li><a href="more.php">护理</a></li>
                <li><a href="more.php">玩具</a></li>
                <li><a href="more.php">洗浴</a></li>
                <li><a href="more.php">装扮</a></li>
                <li><a href="more.php">出行</a></li>
            </ul>
        </div>
        <div class="search">
            <div class="icon"></div>
            <div class="textInput">
                <input type="text" placeholder="请输入您要搜索的商品">
                <input type="submit" value="go" id="go" placeholder="">
                <div class="clear"></div>
            </div>
        </div>
        <div class="bjt"><img src="./img/22.jpg" alt=""></div>
    </div>
    <div class="wrapper">
        <div class="detail">
            <div class="detail-top">
                <span>美国原装进口 Instinct生鲜本能百利猫粮/无谷系列 鸡肉配方全猫粮 11磅(5kg)</span><br>
                <span>中国B2C平台合作伙伴 高蛋白 易消化 生鲜肉涂层 更美味</span>
            </div>
            <div class="detail-left">
                <div class="wrap">
                    <div class="biger" id="biger"></div>
                    <div class="imgs">
                        <div class="main" id="main">
                            <div class="mask" id="mask"></div>
                        </div>
                        <ul class="smaller" id="smaller"></ul>
                    </div>
                </div>

            </div>
            <div class="detail-right">
                <div class="box">
                    <div class="box-left">此商品参与“38节特惠”活动</div>
                    <div id="s">距活动结束仅剩:<span>59</span>秒</div>
                </div>
                <div class="box-bottom">活动特价:<span>448.00</span>
                    <p>原价628.00</p>
                </div>
                <div class="neurone">
                    <p>税费:<span>￥28.22</span>(已免税)</p>
                    <p>规格:<input type="radio" name="option" value="option1">2.2kg<input type="radio" name="option" value="option2">5.5kg
                    </p>
                    <p>数量:<input class="count-input" type="text" value="1">
                    </p>
                </div>
                <div class="car">加入购物车</div>
            </div>
        </div>
    </div>
    </div>
    <!-- 版权区域 -->
    <div class="footer">
        <img src="./img/bq.png" alt="">
        <p>Copyright ©2003 - 2019 安徽机电职业技术学院. All Rights Reserved 皖ICP备06003741号-1 皖公安网备34020302000113号</p>
    </div>
    <script src="./js/shop.js"></script>
    <script type="text/javascript" src="js/tools.js"></script>
    <script type="text/javascript" src="js/move.js"></script>
</body>

</html>