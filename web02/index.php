<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="images/jie.ico">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>小黎——个人主页</title>
    <script src="js/jquery.js"></script>
</head>
<body>


<div class="bar">
    <div class="topbar">
        <div class="topbarleft">
            <ul>
                <li><img src="images/logo.png"></li>
                <li> 我的首页</li>
                <li>个人信箱</li>
            </ul>
        </div>

        <div class="topbarright">
            <ul>
                <li><span><img src="images/设置(3).png"></span><span><a href="index2.html">管理网站</a></span></li>
                <li><span><img src="images/个人中心.png"></span><span>个人中心</span></li>
            </ul>
        </div>
    </div>
    <div class="barzhong">
          <div class="navbar">me
                <ul class="menu">
                     <li><a href="#" class="fa fa-facebook">执着</a></li>
                     <li><a href="#" class="fa fa-google-plus">善良</a></li>
                     <li><a href="#" class="fa fa-twitter">学生</a></li>
                     <li><a href="#" class="fa fa-linkedin">愤青</a></li>
                     <li><a href="#" class="fa fa-pinterest">电影</a></li>
                     <li><a href="#" class="fa fa-rss">动漫</a></li>
                     <li><a href="#" class="fa fa-instagram">web</a></li>
                     <li><a href="#" class="fa fa-skype">自由</a></li>
                     <li><a href="#" class="fa fa-github">幽默</a></li>
                </ul>
          </div>
    </div>
    <div class="barxia">
        <h4>你要配得上自己所受的苦</h4>
        <br>
        <h4>You deserve what you deserve</h4>
    </div>


    <div class="banner">
        <img src="images/jiaodian1.png"/>
        <img src="images/jiaodian2.png"/>
        <img src="images/jiaodian3.png"/>
        <img src="images/jiaodian4.png"/>
        <img src="images/jiaodian5.png"/>

        <div class="ctrlButton">
            <span class="current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a class="let"></a>
        <a class="rig"></a>


    </div>

    <script>
        <!-- 图片自己运动 -->
        var n=0;
        function changeImg(){
            if(n>3){n=0;}else{n=n+1}
            $(".ctrlButton span").removeClass("current").eq(n).addClass("current")
            $(".banner img").hide().eq(n).show();}
        <!-- 滚动时间 -->
        var timer=setInterval(changeImg,2000)
        $(".banner").hover(function(){
            clearInterval(timer)},function(){
            timer=setInterval(changeImg,2000)})

        <!-- 下面按钮 -->
        $(".ctrlButton span").click(
                function(){
                    n=$(".ctrlButton span").index(this);
                    $(".ctrlButton span").removeClass("current");
                    $(".ctrlButton span").eq(n).addClass("current");
                    $(".banner img").hide();
                    $(".banner img").eq(n).show();
                }
        )
        <!--左右按钮 -->
        $(".let").click(function(){
            if(n<0){n=4;}else{n=n-1}
            $(".ctrlButton span").removeClass("current").eq(n).addClass("current")
            $(".banner img").hide().eq(n).show();})
        $(".rig").click(function(){
            if(n>3){n=0;}else{n=n+1}
            $(".ctrlButton span").removeClass("current").eq(n).addClass("current")
            $(".banner img").hide().eq(n).show();})
    </script>


    <div class="zhong">
     <div class="bg"></div>
    <div class="content">
    <div class="nav" id="nav">
        <ul>
            <li >个人信息</li>
            <li>我的技能</li>
            <li>开发项目</li>
            <li>工作经验</li>
            <li>与我联系</li>
        </ul>
        <div class="nav_bg">
            <span></span>
        </div>
    </div>

   <ul id="content" >
       <li  id="parent">
           <div   class="img">
               <img src="images/1.jpg">
           </div>
           <div class="text">
               <h3>黄立杰</h3>
               <br></br>
               <h4>一个人最高的理想诗自我完善</h4>
               <br>
               <h4>The greatest ideal man can set before himself is self-perfection</h4>
           </div>
       </li>
       <li >
           <div id="parent1">
               <ul>
                   <li>
                       <div class="labe1">HTML</div>
                       <div class="load"><span class="load01"></span></div>
                   </li>
                   <li>
                       <div class="labe1">JavaScript</div>
                       <div class="load"><span class="load02"></span></div>
                   </li>
                   <li>
                       <div class="labe1">PHP</div>
                       <div class="load"><span class="load03"></span></div>
                   </li>
                   <li>
                       <div class="labe1">CSS3</div>
                       <div class="load"><span class="load04"></span></div>
                   </li>
                   <li>
                       <div class="labe1">PhotoShop</div>
                       <div class="load"><span class="load05"></span></div>
                   </li>

               </ul>
           </div>

       </li>
       <li class="content1">
           <h1>我的项目</h1>
           <div class="project01">
               <div class="p2">
                   <img src="images/php1.png" alt="">
                   <span></span>
                   <p>PHP是我最拿手的动态语言</p>
               </div>
               <div class="p7" >
                   <img src="images/css1.png" alt="">
                   <span></span>
                   <p>CSS是我最喜欢的样式</p>
               </div>
               <div class="p3">
                   <img src="images/html1.png" alt="">
                   <span></span>
                   <p>HTML5是我最擅长的框架</p>
               </div>
               <div class="p4">
                   <img src="images/js1.png" alt="">
                   <span></span>
                   <p>JavaScript是我最专注的脚本</p>
               </div>
           </div>
           <div class="project02">
               <div  class="p5">
                   <img src="images/php2.png" alt="">
                   <span></span>
                   <p></p>
               </div>
               <div class="p1">
                   <img src="images/css2.png" alt="">
                   <span></span>
                   <p></p>
               </div>
               <div class="p8">
                   <img src="images/html2.png" alt="">
                   <span></span>
                   <p></p>
               </div>
               <div class="p6">
                   <img alt="">
                   <span></span>
                   <div class="box">
                       <div class="front"></div>
                       <div class="back"></div>
                       <div class="lef"></div>
                       <div class="rgt"></div>
                       <div class="qian"></div>
                       <div class="hou"></div>
                   </div>
               </div>
           </div>
       </li>
       <li >
           <div id="content2" >
                 <div class="top1">
                     <div>教育经历</div>
                     <span>
                         <h4>2010年九月-2013年7月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;完成初中教育,毕业于富加中学 </h4>
                         <h4>2013年九月-2106年7月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;完成高中教育,毕业仁寿二中</h4>
                     </span>
                </div>
                <div  class="top2">
                    <div>工作经历</div>
                    <span>
                        <h4>2010年九月-2013年7月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;完成初中教育,毕业于富加中学 </h4>
                        <h4>2013年九月-2106年7月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;完成高中教育,毕业仁寿二中</h4>
                        <h4>2016年九月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 录取于泸州职业技术学院</h4>
                    </span>
                </div>
           </div>
       </li>
       <form action="" method="post">
       <li class="finer" id="finer">
           <input type="text" value=""  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请留下您的名称" id="text1" style="border-bottom:1px solid red;width:900px;height:30px;font-size: 14px; ">
           <br>
           <input type="text"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请留下您的邮箱地址"  style="border-bottom:1px solid red;width:900px;height:30px;font-size: 14px; ">
           <br>
           <textarea cols="120" rows="12" placeholder="&nbsp;请留下你的指导意见" style="border:1px solid red;font-size: 14px;width: 900px;height:180px; "></textarea>
           <input type="submit" value="发送信息" style="background:#ff8c00;color: white;border-radius: 10px;width: 90px;height: 30px;margin-left: 450px;  cursor: pointer;">
           <div class="imgs">
               <div class="img1">
                   <span></span>
               </div>
               <div  class="img2">
                   <span></span>
               </div>
               <div  class="img3">
                   <span></span>
               </div>
           </div>
       </li>
       </form>
   </ul>
</div>

    </div>


        <div class="footer">
            <div class="foot1">
                <h2 style="font-size: 30px;">小黎</h2>
                <p style="color:#fd9357">你不会懂得什么是放弃</p>
                <p style="margin-bottom:10px;">遇到困难的时候，无论多么艰辛，你依然会坚实的走好每一步。</p>
                <p style="color: #fc8846">谢谢你从未放弃那无所畏惧的自己</p>
                <p style="margin-bottom:10px;">Thank you for never giving up</p>
                <p style="color: #fc7c33">改变行为的方式不仅仅是知道正确的方法，我们还要去做这件事才行</p>
            </div>
            <div class="foot2">
                <h1>关于</h1>
                <p>关于永恒</p>
                <p>留言联系</p>
                <p>友情链接</p>
                <p>免责声明</p>
                <p>网站地图</p>
            </div>
            <div class="foot3">
                <h1>栏目</h1>
                <p>用户体验</p>
                <p>素材下载</p>
                <p>设计欣赏</p>
                <p>主题商店</p>
                <p>唯然灵感</p>
            </div>
            <div class="foot4">
                <h1>友链</h1>
                <p>前端观察</p>
                <p>手Q阅读</p>
                <P> FrozenUI </P>
                <P>摄影达人  </P>
                <p>MAKA     </p>
            </div>
            <div class="foot5">
                <h1>关注</h1>
                <p>Email:2272752599@qq.com</p>
                <div class="foot6">
                    <p>mic-blog:杰杰liruoanhao_3117</p>
                </div>
            </div>
            <div class="foot7">
                <p  id="shopping"  >订阅</p>
                <div></div>
            </div>
            <div class="foot8">
                <p>CopyRight 2016-2017@ <span class="footspan"> 小黎 </span> Theme by <span class="footspan">fovever</span> All all rights Reserved.  </p>
            </div>
        </div>


</div>
<div id="shopping_box">
   恭喜您，订阅成功！
    <img src="images/close.png" id="close">
</div>
<script src="js.js">
</script>



</body>
</html>