<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>喵小铺</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <!-- 快捷导航 -->
    <div class="shortcut">
        <div class="wrapper">
            <span class="shouye"><a href="index.php" style='color:#999999;text-shadow: 1px 1px 1px #999;font-size: 18px;
'>首页</a></span>
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
        <!-- 轮播图 -->
        <div class="lbt wrapper">
            <div class="lft">
                    <p>正在猫猫站溜达...</p>
                    <a href="#" class="huan">切换到狗狗站</a>
            </div>
        <div class="container">
            <div class="wrapper">
                <div id="slide">
                    <div class="item" style="background-image: url(./img/11.jpg);">
                    <div class="content">
                        <div class="name">MXP CAT</div>
                        <div class="des">珍惜生命，请勿弃养</div>
                            <a href="https://www.tajijin.cn/" target="_blank"><button>爱心捐赠</button></a>
                   </div>
                    </div>
                    <div class="item" style="background-image: url(./img/222.jpg);">
                        <div class="content">
                            <div class="name">MXP CAT</div>
                            <div class="des">珍惜生命，请勿弃养</div>
                            <a href="https://www.tajijin.cn/" target="_blank"><button>爱心捐赠</button></a>
                       </div>
                        </div>
                    <div class="item" style="background-image: url(./img/33.jpg);">
                        <div class="content">
                            <div class="name">MXP CAT</div>
                            <div class="des">珍惜生命，请勿弃养</div>
                            <a href="https://www.tajijin.cn/" target="_blank"><button>爱心捐赠</button></a>
                       </div>
                        </div>
                    <div class="item" style="background-image: url(./img/44.jpg);">
                        <div class="content">
                            <div class="name">MXP CAT</div>
                            <div class="des">珍惜生命，请勿弃养</div>
                            <a href="https://www.tajijin.cn/" target="_blank"><button>爱心捐赠</button></a>
                       </div>
                        </div>
                    <div class="item" style="background-image: url(./img/55.jpg);">
                        <div class="content">
                            <div class="name">MXP CAT</div>
                            <div class="des">珍惜生命，请勿弃养</div>
                            <a href="https://www.tajijin.cn/" target="_blank"><button>爱心捐赠</button></a>
                       </div>
                        </div>
                    <div class="item" style="background-image: url(./img/66.jpg);">
                        <div class="content">
                            <div class="name">MXP CAT</div>
                            <div class="des">珍惜生命，请勿弃养</div>
                            <a href="https://www.tajijin.cn/" target="_blank"><button>爱心捐赠</button></a>
                        </div>
                        </div>
                </div>
                <div class="buttons">
                    <div class="s-button">&lt;</div>
                    <div class="s-button">&gt;</div>
                </div>
            </div>
        </div>
    </div>
    <!-- 猫粮主食 -->
    <div class="goods wrapper">
        <!-- 头部 -->
        <div class="hd">
            <h2>猫咪主粮<span>进口猫粮</span></h2>
            <a href="#">查看更多</a>
        </div>
        <!-- 身体 -->
        <div class="bd">
            <ul>
                <a href="#" style="background-image: url(./imgs/c7af382bd18a1ee13121c0fb7d43877e.jpg);"></a>
                <a href="./shop.php">
                    <li>
                        <img src="./imgs/mg.jpg" alt="">
                        <div class="c33 ell">美国原装进口 Instinct生鲜本能百利猫粮/无谷系列 鸡肉配方全猫粮 11磅(5kg) </div>
                        <div class="c99 ell"> 中国B2C平台合作伙伴 高蛋白 易消化 生鲜肉涂层 更美味  </div>
                        <div class="price-box">
                            <span>￥468</span>
                            <span>￥628</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg1.jpg" alt="">
                        <div class="c33 ell">美国原装进口Instinct生鲜本能百利猫粮/生鲜系列 无谷鸡肉配方全猫粮 10磅(4.5kg)</div>
                        <div class="c99 ell"> 中国B2C平台合作伙伴 高蛋白 易消化 2种颗粒 生熟同享 冻干生鲜肉粒 营养兼美味  </div>
                        <div class="price-box">
                            <span>￥421</span>
                            <span>￥524</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg2.jpg" alt="">
                        <div class="c33 ell">【美国进口】素力高Solid Gold 无谷物抗敏全猫粮（鸡肉鸡蛋配方）12磅/5.4kg </div>
                        <div class="c99 ell">无谷无麸 42%蛋白含量帮助猫咪强身健体 增加免疫力  </div>
                        <div class="price-box">
                            <span>￥338</span>
                            <span>￥465</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg3.jpg" alt="">
                        <div class="c33 ell">加拿大原装进口纽顿nutram number 无谷低升糖系列 T24鲑鱼&鳟鱼配方猫粮 5.45kg</div>
                        <div class="c99 ell">低敏无谷配方 单一蛋白质 易吸收 安心食材 低糖健康 去骨鲜肉 口味鲜美 营养丰富 帮助排毒  </div>
                        <div class="price-box">
                            <span>￥568</span>
                            <span>￥788</span>
                        </div>
                    </li>
                </a>
                <a href="#" style="background-image: url(./imgs/4cf82c89f181e3e465689e71bcfdb249.jpg);";"></a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\ydl.jpg" alt="">
                        <div class="c33 ell">意大利原装进口Farmina 精华无谷系列 鸡肉配方添加石榴成猫粮 5kg</div>
                        <div class="c99 ell">98%动物蛋白 单一动物来源 低碳水摄入 强壮体魄	  </div>
                        <div class="price-box">
                            <span>￥425</span>
                            <span>￥538</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\ydk.jpeg" alt="">
                        <div class="c33 ell">美国原装进口卡比CANIDAE 无谷系列猫粮-元素鲜三文鱼 10lb</div>
                        <div class="c99 ell">80%肉含量 亲和肠胃 亮泽毛发 促进骨骼发育 强化消化系统  </div>
                        <div class="price-box">
                            <span>￥412</span>
                            <span>￥610</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\halo.jpg" alt="">
                        <div class="c33 ell">美国进口Halo自然光环 健美体态无谷散养鸡肉成猫粮10lb/4.5kg</div>
                        <div class="c99 ell">适合有体重困扰的猫咪 改善软便及便秘 低卡无谷配方   </div>
                        <div class="price-box">
                            <span>￥588</span>
                            <span>￥728</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\xxl.jpg" alt="">
                        <div class="c33 ell">新西兰原装进口 滋益巅峰Ziwi Peak 风干牛肉配方猫粮 400g</div>
                        <div class="c99 ell">新西兰原装进口 丰富肉含量 无麸无谷低敏护肠胃 双重风干适口性佳	  </div>
                        <div class="price-box">
                            <span>￥359</span>
                            <span>￥560</span>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <!-- 国产 -->
    <div class="goods wrapper" id="gcml">
        <!-- 头部 -->
        <div class="hd">
            <h2>猫咪主粮<span>国产猫粮</span></h2>
            <a href="#">查看更多</a>
        </div>
        <!-- 身体 -->
        <div class="bd">
            <ul>
                <a href="#" style="background-image: url(./imgs/c7af382bd18a1ee13121c0fb7d43877e.jpg);"></a>
                <a href="./shop.php">
                    <li>
                        <img src="./imgs/mg.jpg" alt="">
                        <div class="c33 ell">美国原装进口 Instinct生鲜本能百利猫粮/无谷系列 鸡肉配方全猫粮 11磅(5kg) </div>
                        <div class="c99 ell"> 中国B2C平台合作伙伴 高蛋白 易消化 生鲜肉涂层 更美味  </div>
                        <div class="price-box">
                            <span>￥468</span>
                            <span>￥628</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg1.jpg" alt="">
                        <div class="c33 ell">美国原装进口Instinct生鲜本能百利猫粮/生鲜系列 无谷鸡肉配方全猫粮 10磅(4.5kg)</div>
                        <div class="c99 ell"> 中国B2C平台合作伙伴 高蛋白 易消化 2种颗粒 生熟同享 冻干生鲜肉粒 营养兼美味  </div>
                        <div class="price-box">
                            <span>￥421</span>
                            <span>￥524</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg2.jpg" alt="">
                        <div class="c33 ell">【美国进口】素力高Solid Gold 无谷物抗敏全猫粮（鸡肉鸡蛋配方）12磅/5.4kg </div>
                        <div class="c99 ell">无谷无麸 42%蛋白含量帮助猫咪强身健体 增加免疫力  </div>
                        <div class="price-box">
                            <span>￥338</span>
                            <span>￥465</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg3.jpg" alt="">
                        <div class="c33 ell">加拿大原装进口纽顿nutram number 无谷低升糖系列 T24鲑鱼&鳟鱼配方猫粮 5.45kg</div>
                        <div class="c99 ell">低敏无谷配方 单一蛋白质 易吸收 安心食材 低糖健康 去骨鲜肉 口味鲜美 营养丰富 帮助排毒  </div>
                        <div class="price-box">
                            <span>￥568</span>
                            <span>￥788</span>
                        </div>
                    </li>
                </a>
                <a href="#" style="background-image: url(./imgs/4cf82c89f181e3e465689e71bcfdb249.jpg);";"></a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\ydl.jpg" alt="">
                        <div class="c33 ell">意大利原装进口Farmina 精华无谷系列 鸡肉配方添加石榴成猫粮 5kg</div>
                        <div class="c99 ell">98%动物蛋白 单一动物来源 低碳水摄入 强壮体魄	  </div>
                        <div class="price-box">
                            <span>￥425</span>
                            <span>￥538</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\ydk.jpeg" alt="">
                        <div class="c33 ell">美国原装进口卡比CANIDAE 无谷系列猫粮-元素鲜三文鱼 10lb</div>
                        <div class="c99 ell">80%肉含量 亲和肠胃 亮泽毛发 促进骨骼发育 强化消化系统  </div>
                        <div class="price-box">
                            <span>￥412</span>
                            <span>￥610</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\halo.jpg" alt="">
                        <div class="c33 ell">美国进口Halo自然光环 健美体态无谷散养鸡肉成猫粮10lb/4.5kg</div>
                        <div class="c99 ell">适合有体重困扰的猫咪 改善软便及便秘 低卡无谷配方   </div>
                        <div class="price-box">
                            <span>￥588</span>
                            <span>￥728</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\xxl.jpg" alt="">
                        <div class="c33 ell">新西兰原装进口 滋益巅峰Ziwi Peak 风干牛肉配方猫粮 400g</div>
                        <div class="c99 ell">新西兰原装进口 丰富肉含量 无麸无谷低敏护肠胃 双重风干适口性佳	  </div>
                        <div class="price-box">
                            <span>￥359</span>
                            <span>￥560</span>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <!-- 零食 -->
    <div class="goods wrapper" id="gcml">
        <!-- 头部 -->
        <div class="hd">
            <h2>猫咪零食<span>猫草薄荷</span></h2>
            <a href="#">查看更多</a>
        </div>
        <!-- 身体 -->
        <div class="bd">
            <ul>
                <a href="#" style="background-image: url(./imgs/c7af382bd18a1ee13121c0fb7d43877e.jpg);"></a>
                <a href="./shop.php">
                    <li>
                        <img src="./imgs/mg.jpg" alt="">
                        <div class="c33 ell">美国原装进口 Instinct生鲜本能百利猫粮/无谷系列 鸡肉配方全猫粮 11磅(5kg) </div>
                        <div class="c99 ell"> 中国B2C平台合作伙伴 高蛋白 易消化 生鲜肉涂层 更美味  </div>
                        <div class="price-box">
                            <span>￥468</span>
                            <span>￥628</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg1.jpg" alt="">
                        <div class="c33 ell">美国原装进口Instinct生鲜本能百利猫粮/生鲜系列 无谷鸡肉配方全猫粮 10磅(4.5kg)</div>
                        <div class="c99 ell"> 中国B2C平台合作伙伴 高蛋白 易消化 2种颗粒 生熟同享 冻干生鲜肉粒 营养兼美味  </div>
                        <div class="price-box">
                            <span>￥421</span>
                            <span>￥524</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg2.jpg" alt="">
                        <div class="c33 ell">【美国进口】素力高Solid Gold 无谷物抗敏全猫粮（鸡肉鸡蛋配方）12磅/5.4kg </div>
                        <div class="c99 ell">无谷无麸 42%蛋白含量帮助猫咪强身健体 增加免疫力  </div>
                        <div class="price-box">
                            <span>￥338</span>
                            <span>￥465</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\mg3.jpg" alt="">
                        <div class="c33 ell">加拿大原装进口纽顿nutram number 无谷低升糖系列 T24鲑鱼&鳟鱼配方猫粮 5.45kg</div>
                        <div class="c99 ell">低敏无谷配方 单一蛋白质 易吸收 安心食材 低糖健康 去骨鲜肉 口味鲜美 营养丰富 帮助排毒  </div>
                        <div class="price-box">
                            <span>￥568</span>
                            <span>￥788</span>
                        </div>
                    </li>
                </a>
                <a href="#" style="background-image: url(./imgs/4cf82c89f181e3e465689e71bcfdb249.jpg);";"></a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\ydl.jpg" alt="">
                        <div class="c33 ell">意大利原装进口Farmina 精华无谷系列 鸡肉配方添加石榴成猫粮 5kg</div>
                        <div class="c99 ell">98%动物蛋白 单一动物来源 低碳水摄入 强壮体魄	  </div>
                        <div class="price-box">
                            <span>￥425</span>
                            <span>￥538</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\ydk.jpeg" alt="">
                        <div class="c33 ell">美国原装进口卡比CANIDAE 无谷系列猫粮-元素鲜三文鱼 10lb</div>
                        <div class="c99 ell">80%肉含量 亲和肠胃 亮泽毛发 促进骨骼发育 强化消化系统  </div>
                        <div class="price-box">
                            <span>￥412</span>
                            <span>￥610</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\halo.jpg" alt="">
                        <div class="c33 ell">美国进口Halo自然光环 健美体态无谷散养鸡肉成猫粮10lb/4.5kg</div>
                        <div class="c99 ell">适合有体重困扰的猫咪 改善软便及便秘 低卡无谷配方   </div>
                        <div class="price-box">
                            <span>￥588</span>
                            <span>￥728</span>
                        </div>
                    </li>
                </a>
                <a href="./shop.php">
                    <li>
                        <img src=".\imgs\xxl.jpg" alt="">
                        <div class="c33 ell">新西兰原装进口 滋益巅峰Ziwi Peak 风干牛肉配方猫粮 400g</div>
                        <div class="c99 ell">新西兰原装进口 丰富肉含量 无麸无谷低敏护肠胃 双重风干适口性佳	  </div>
                        <div class="price-box">
                            <span>￥359</span>
                            <span>￥560</span>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <!-- 版权区域 -->
    <div class="footer">
        <img src="./img/bq.png" alt="">
        <p>Copyright ©2003 - 2019 安徽机电职业技术学院. All Rights Reserved   皖ICP备06003741号-1 皖公安网备34020302000113号</p>
    </div>
    
    <script src="./js/script.js"></script>
</body>
</html>