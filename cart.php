<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/cart.css">

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
            if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            echo "$username";
            } else {
            echo "请登录";
            }?>
            </a></li>
            <li><a href="cart.php">我的订单</a></li>
            <li><a href="#">帮助中心</a></li>
            <li><a href="#">客服中心</a></li>
            <li><a href="#">手机版<img src="./img/ewm.png" alt=""></a></li>
        </ul></div>
    </div>
    <div class="catbox">
        <table id="cartTable">
            <thead>
                <tr>
                    <th><input class="check-all check" type="checkbox"><span>全选</span></th>
                    <th>商品</th>
                    <th>单价</th>
                    <th>数量</th>
                    <th>小计</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr class="on">
                    <td class="checkbox"><input class="check-one check" type="checkbox"></td>
                    <td class="goods"><img src="./imgs/halo.jpg" alt=""><span>美国进口Halo自然光环  健美体态无谷散养鸡肉成猫粮10lb/4.5kg</span></td>
                    <td class="price">588</td>
                    <td class="count">
                        <span class="reduce">-</span>
                        <input class="count-input" type="text" value="1">
                        <span class="add">+</span>
                    </td>
                    <td class="subtotal">588</td>
                    <td class="operation">
                        <span class="delete">删除</span>
                    </td>
                </tr>
                <tr class="on">
                    <td class="checkbox"><input class="check-one check" type="checkbox"></td>
                    <td class="goods"><img src=".\imgs\xxl.jpg" alt=""><span>新西兰原装进口 滋益巅峰Ziwi Peak 风干牛肉配方猫粮 400g</span></td>
                    <td class="price">359</td>
                    <td class="count">
                        <span class="reduce">-</span>
                        <input class="count-input" type="text" value="1">
                        <span class="add">+</span>
                    </td>
                    <td class="subtotal">359</td>
                    <td class="operation">
                        <span class="delete">删除</span>
                    </td>
                </tr>
                <tr class="on">
                    <td class="checkbox"><input class="check-one check" type="checkbox"></td>
                    <td class="goods"><img src=".\imgs\ydk.jpeg" alt=""><span>美国原装进口卡比CANIDAE 无谷系列猫粮-元素鲜三文鱼 10lb</span></td>
                    <td class="price">412</td>
                    <td class="count">
                        <span class="reduce">-</span>
                        <input class="count-input" type="text" value="1">
                        <span class="add">+</span>
                    </td>
                    <td class="subtotal">412</td>
                    <td class="operation">
                        <span class="delete">删除</span>
                    </td>
                </tr>
                <tr class="on">
                    <td class="checkbox"><input class="check-one check" type="checkbox"></td>
                    <td class="goods"><img src=".\imgs\ydl.jpg" alt=""><span>意大利原装进口Farmina 精华无谷系列 鸡肉配方添加石榴成猫粮 5kg</span></td>
                    <td class="price">425</td>
                    <td class="count">
                        <span class="reduce">-</span>
                        <input class="count-input" type="text" value="1">
                        <span class="add">+</span>
                    </td>
                    <td class="subtotal">425</td>
                    <td class="operation">
                        <span class="delete">删除</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="foot" id="food">
        <!-- <div id="submitMessage" class="hidden">提交成功</div> -->
            <p class="submit">提交</p>
            <p>合计费用<span id="priceTotal">0</span>元</p>
            <p>已选中商品<span id="selectedTotal">0</span>件</p>
        </div>
    </div>
        <!-- 版权区域 -->
        <div class="footer">
        <img src="./img/bq.png" alt="">
        <p>Copyright ©2003 - 2019 安徽机电职业技术学院. All Rights Reserved   皖ICP备06003741号-1 皖公安网备34020302000113号</p>
    </div>
    <script src="./js/cart.js"></script>
</body>
</html>