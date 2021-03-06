<?php
    header("Content-type:text/html;charset=utf8");

    $imgsrc = $_GET['imgsrc'];
    $title = $_GET['title'];
    $price = $_GET['price'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../js/bootstrap.js" />

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #box {
            width: 352px;
            height: 352px;
            border: 1px solid #ccc;
            position: relative;
            
        }

        #big {
            width: 400px;
            height: 400px;
            border: 1px solid #ccc;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 360px;
            display: none;
        }

        #mask {
            width: 175px;
            height: 175px;
            background: paleturquoise;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0.3;
            display: none;
            cursor: move;
        }

        #small {
            position: relative;
        }

        #bigImg {
            position: absolute;
            left: 0;
            top: 0;
        }

        #bbox,
        #btn-t,
        .content,
        .main,
        .price,
        .other-goods {
            width: 1000px;
            margin: 0 auto;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }

        ul li {
            list-style: none;
        }

        .content img {
            float: left;
            width: 280px;
            height: 430px;
        }

        .con-right {
            width: 700px;
            float: right;
            margin-left: 20px;
        }

        h6 {
            text-align: center;
        }

        .cl {
            text-align: center;
            margin-top: 20px;
        }

        .main img {
            margin: 0 auto;
            width: 1000px;
        }

        .price h2 {
            font-size: 30px;
            font-weight: bold;
        }

        .price p {
            font-size: 25px;
        }

        .price p:nth-child(2) {
            margin-top: 20px;
        }

        .other-goods img {
            width: 245px;
        }

        .other-goods h4 {
            font-weight: bold;
            height: 40px;
            background: #cccccc;
            line-height: 40px;
            border: 1px solid #cccccc;
        }

        .other-goods a {
            width: 245px;
            display: inline-block;
            text-align: center;
            color: black;
        }

        .other-goods span {
            display: inline-block;
            width: 245px;
            text-align: left;
            color: red;
        }

        .other-goods {
            border: 1px solid #cccccc;
            margin-bottom: 30px;
        }

        #btn-t .btn{
            margin-right: 20px;
            float: right;
        }

        .cont{
            width:1000px;
            margin: 0 auto;
            position: relative;
        }
        #cont{
            width:192px;
            position: absolute;
            right:20px;
            bottom: 40px;
            font-size: 22px;
        }
        
    </style>
</head>

<body>

    <iframe src="./header.html" frameborder="0" width="100%" height="177px" scrolling="no"></iframe>

    <div id="bbox">
        <div id="box">
            <div id="small">
                <!--小图区-->
                <img src="<?php echo $imgsrc; ?>" alt="" width="350px" height="350px" />
                <div id="mask"></div>
                <!--遮罩层-->
            </div>
            <div id="big">
                <!--大图区-->
                <img src="<?php echo $imgsrc; ?>" alt="" id="bigImg" width="800px" height="800px" />
            </div>
        </div>
    </div>

    <div class="cont">
        <div id="cont">
            <p><?php echo $title; ?></p>
            <p><?php echo $price; ?></p>
        </div>
    </div>

    <div id="btn-t">
        <button class="btn btn-danger" id="btn1">查看购物车</button>
        <button class="btn btn-danger" id="btn2">加入购物车</button>
    </div>

    <div class="content">
        <h2>DETALLs商品详情</h2>
        <table class="table  table-bordered">
            <thead>
                <td>品牌</td>
                <td>商品名称</td>
                <td>商品清单</td>
                <td>规格参数</td>
                <td>材质</td>
            </thead>

            <tbody>
                <tr>
                    <td>丁摩</td>
                    <td>丁摩 重工钉珠重磅真丝衬衫V领宽松真丝上衣·黑色</td>
                    <td>上衣 1 件</td>
                    <td>尺码：S,M.L,XL,XXL</td>
                    <td>100%桑蚕丝</td>
                </tr>
            </tbody>
        </table>
        <h2>商品信息INFORMATION</h2>
       <img src="<?php echo $imgsrc; ?>" class="con-left">

        <div class="con-right">
            <span>商品信息/INEM INFO</span>
            <ul>
                <li>Brand/品牌：</li>
                <li>Name/品名：时尚上衣</li>
                <li>Number/款号：</li>
                <li>Price/吊牌价：</li>
                <li>Fabric/面料信息：</li>
                <li>面料成分：100%桑蚕丝</li>
                <li>注：不同颜色衣服请分开洗涤</li>
            </ul>
            <span>商品参数/PARAMETER</span>
            <table class="table ">
                <tr>
                    <td>厚薄指数：</td>
                    <td>薄</td>
                    <td>偏薄</td>
                    <td>适中</td>
                    <td>稍厚</td>
                </tr>
                <tr>
                    <td>弹力指数：</td>
                    <td>无弹</td>
                    <td>适中</td>
                    <td>弹力</td>
                    <td>超弹</td>
                </tr>
                <tr>
                    <td>修身指数：</td>
                    <td>紧身</td>
                    <td>修身</td>
                    <td>合体</td>
                    <td>宽松</td>
                </tr>
                <tr>
                    <td>柔软指数：</td>
                    <td>柔软</td>
                    <td>适中</td>
                    <td>稍硬</td>
                    <td>硬</td>
                </tr>
            </table>
            <h6>关于色差/Compoment</h6>
            <span>KAMILAN卡米兰商品图片均由专门摄影的设备和专门团队实物拍摄，
                但仍然无法保证不同显示器的差异，以及拍摄灯光和阳光的原因产生的色差</span>
        </div>
        <table class="table">
            <thead>
                <td>尺码</td>
                <td>前衣长</td>
                <td>后衣长</td>
                <td>肩宽</td>
                <td>胸围</td>
                <td>摆围</td>
                <td>袖长</td>
                <td>袖肥</td>
                <td>袖口</td>
            </thead>
            <tbody>
                <tr>
                    <td>S</td>
                    <td>54</td>
                    <td>61</td>
                    <td>37</td>
                    <td>92</td>
                    <td>89</td>
                    <td>47</td>
                    <td>30</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>54</td>
                    <td>61</td>
                    <td>37</td>
                    <td>92</td>
                    <td>89</td>
                    <td>47</td>
                    <td>30</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>54</td>
                    <td>61</td>
                    <td>37</td>
                    <td>92</td>
                    <td>89</td>
                    <td>47</td>
                    <td>30</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>XL</td>
                    <td>54</td>
                    <td>61</td>
                    <td>37</td>
                    <td>92</td>
                    <td>89</td>
                    <td>47</td>
                    <td>30</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>XXL</td>
                    <td>54</td>
                    <td>61</td>
                    <td>37</td>
                    <td>92</td>
                    <td>89</td>
                    <td>47</td>
                    <td>30</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>XXXL</td>
                    <td>54</td>
                    <td>61</td>
                    <td>37</td>
                    <td>92</td>
                    <td>89</td>
                    <td>47</td>
                    <td>30</td>
                    <td>19</td>
                </tr>
            </tbody>
        </table>
        <div class="cl">
            <span>测量单位：厘米/cm 温馨提示：因测量手势不同，会有1-3cm的误差</span>
        </div>
    </div>
    <div class="main">
        <img src="<?php echo $imgsrc; ?>" alt="">
        <img src="<?php echo $imgsrc; ?>" alt="">
        <img src="<?php echo $imgsrc; ?>" alt="">
    </div>
    <div class="price">
        <h2>价格说明</h2>
        <p>划线价格：指商品的专柜价，吊牌价，正品零售价，厂商指导价，
            或该产品曾经展示过的销售价等。并非原价，仅供参考</p>
        <p>未划线价格：指商品的专柜价，吊牌价，正品零售价，厂商指导价，
            或该产品曾经展示过的销售价等。并非原价，仅供参考</p>
    </div>
    <div class="other-goods">
        <h4>看看其他同类商品</h4>
        <img src="../images/img2.jpg" alt="">

        <img src="../images/img3.jpg" alt="">

        <img src="../images/img4.jpg" alt="">

        <img src="../images/img1.jpg" alt="">
        <a href="#">丁摩 简约休闲百搭纯色衬衣</a>
        <a href="#">丁摩 简约休闲百搭纯色衬衣</a>
        <a href="#">丁摩 简约休闲百搭纯色衬衣</a>
        <a href="#">丁摩 简约休闲百搭纯色衬衣</a>
        <span>￥249</span>
        <span>￥249</span>
        <span>￥249</span>
        <span>￥249</span>
    </div>
    <iframe src="./footer.html" frameborder="0" width="100%" height="458px" scrolling="no"></iframe>
    <iframe src="./sidebar.html" frameborder="0" height="60%" style="position:fixed;bottom:0;right:0;"></iframe>
</body>

</html>
<script src="../js/public.js"> </script>
<script src="../js/car.js"> </script>
<script src="../js/jquery.js"></script>
<script>
    var box = $id("box");
    var mask = $id("mask");
    var big = $id("big");
    var bigImg = $id("bigImg");
    var small = $id("small");
    $id("box").onmouseenter = function () {
        $id("mask").style.display = "block";
        $id("big").style.display = "block";
    }

    $id("box").onmouseleave = function () {
        $id("mask").style.display = "none";
        $id("big").style.display = "none";

    }
    $id("box").onmousemove = function (e) {
        var e = e || event;
        var l = e.clientX - $id("box").offsetLeft - $id("mask").offsetWidth / 2;
        var t = e.clientY - $id("box").offsetTop - $id("mask").offsetHeight / 2;
        //console.log(l,t)
        var maxL = $id("box").clientWidth - $id("mask").offsetWidth;
        var maxT = $id("box").clientHeight - $id("mask").offsetHeight;
        l = l < 0 ? 0 : (l > maxL ? maxL : l);
        t = t < 0 ? 0 : (t > maxT ? maxT : t);

        // console.log(t)

        $id("mask").style.left = l + "px";
        $id("mask").style.top = t + "px";

        //大图显示：
        // bigImgLeft / l = (大图的宽度-大图可视区宽度)/(小图宽度-mask的宽度) = 大图宽度/小图宽度 = 大图可视区宽度 / 小图可视区（mask）宽度

        $id("bigImg").style.left = -l * ($id("bigImg").offsetWidth / $id("small").offsetWidth) + "px";
        $id("bigImg").style.top = -t * ($id("bigImg").offsetHeight / $id("small").offsetHeight) + "px";
    }

    //查看购物车
    $id("btn1").onclick = function(){
        location.href = "./car.html";
    }

    //加入购物车
    var car = new Cart();
    $id("btn2").onclick = function(){
        //加入商品到购物车
        var product = {
            "imgsrc":$("#big>img").attr("src"),
            "title":$("#cont>p").eq(0).html(),
            "price":$("#cont>p").eq(1).html().split("￥")[1],
            "number":1
        }
        car.addCar(product);
        alert("已成功加入，请点击查看购物车查看");
    }

</script>