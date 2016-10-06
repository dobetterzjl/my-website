<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <script>
        window.addEventListener("load",function(){
            setTimeout(hideURLbar,0);

        },false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/index.css">
</head>
<body>
<!-- header开始 -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6  intr">
                <img src="images/1.jpg">
                <h3>张建丽</h3>
                <h4>web designer</h4>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 contacts">
                <h2>Contact</h2>
                <a href="#">1737289219@qq.com</a>
                <h4 class="margin"><i class="fa fa-phone fa-lg">  15776805420</i></h4>
                <h4>黑龙江大学</h4>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 follow">
                <h2>Follow</h2>
                <a href=""><i class="fa fa-qq fa-lg"></i></a>
                <a href=""><i class="fa fa-weibo fa-lg"></i></a>
                <a href=""><i class="fa fa-weixin fa-lg"></i></a>
                <a href=""><i class="fa fa-github fa-lg"></i></a>
                <a href=""><i class="fa fa-qq fa-lg"></i></a>
                <a href=""><i class="fa fa-qq fa-lg"></i></a>
            </div>
            <div class="col-md-3 col-sm-6  col-xs-6 visit">
                <h2>Visit</h2>
                <a href=""><span class="fa fa-github fa-5x"></span></a>
                <h4>welcome to my blog</h4>
            </div>
        </div>
    </div>
</header>
<!-- header结束 -->
<!-- 关于我开始 -->
<div id="introduce">
    <div class="container about">
        <h1>About me</h1>
        <div class="line2"></div>
        <img src="images/1.jpg">
        <p>张建丽<br/>
            黑龙江大学2014级计算机科学技术学院，物联网工程专业学生，
            获得全国大学生英语四级证书，曾加入青年志愿者协会，很好的锻炼了语言表达能力和团队协作能力
        </p>
        <p>
            大学期间一直学习方面一直主攻web前端方向，掌握一套科学合理有效的自学方法，前台方面能熟练应用html,css,javascript,jquery,ajax,react等技术，同时后台可以熟练掌握php,nodejs,ci框架和express框架等，参与了多个项目的编写，如：。。。。熟悉开发流程
        </p>

    </div>
</div>
<!-- 关于我结束 -->
<!-- my skills 开始 -->
<div id="skills">
    <div class="container skill">
        <h2>My Skills</h2>
        <div class="line2"></div>
        <div class="row">
            <div class="col-md-6 left">
                <div class="s2">
                    <p class="name">HTML/Css</p>
                    <div class="progress line">
                        <div class="progress-bar progress-bar-info" style="width:90%"></div>
                    </div>
                </div>
                <div class="s2">
                    <p class="name">html5/css3</p>
                    <div class="progress line">
                        <div class="progress-bar progress-bar-info" style="width:80%"></div>
                    </div>
                </div>
                <div class="s2">
                    <p class="name">JavaScript</p>
                    <div class="progress line">
                        <div class="progress-bar progress-bar-info" style="width:75%"></div>
                    </div>
                </div>
                <div class="s2">
                    <p class="name">jQuery</p>
                    <div class="progress line">
                        <div class="progress-bar progress-bar-info" style="width:70%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 right">
                <div class="s2">
                    <p class="name">NodeJS</p>
                    <div class="progress line">
                        <div class="progress-bar progress-bar-info" style="width:70%"></div>
                    </div>
                </div>
                <div class="s2">
                    <p class="name">PHP</p>
                    <div class="progress line">
                        <div class="progress-bar progress-bar-info" style="width:65%"></div>
                    </div>
                </div>
                <div class="s2">
                    <p class="name">BootStrap</p>
                    <div class="progress line">
                        <div class="progress-bar progress-bar-info" style="width:80%"></div>
                    </div>
                </div>
                <div class="s2">
                    <p class="name">AngularJs</p>
                    <div class="progress line">
                        <div class="progress-bar progress-bar-info" style="width:60%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- my skills 结束 -->
<!-- programme 开始 -->
<div id="programmes">
    <div class="container programme">
        <h2>My Portfolio</h2>
        <div class="line2"></div>
        <div class="tabs">
            <ul class="lists">
                <li class=" list list1 clickstyle">
                    <span>All</span>
                </li>
                <li class="list list2 listt">
                    <span>Elements</span>
                </li>
                <li class="list list3 listt">
                    <span>Templates</span>
                </li>
                <li class="list list4 listt">
                    <span>Trending</span>
                </li>
            </ul>
				<span>
				<div class="row rowa row1">
                    <div class="col-md-4 col-lg-4 imgs first">
                        <a href="">
                            <div class="img">

                                <img src="images/g1.jpg" class="image">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-lg-4 imgs">
                        <a href="">
                            <div class="img">

                                <img src="images/g2.jpg" class="image">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-lg-4 imgs ">
                        <a href="">
                            <div class="img">

                                <img src="images/g3.jpg" class="image">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>
                            </div>

                    </div>
                    </a>
                </div>
				<div class="row rowa row2">
                    <div class="col-md-4 col-lg-4 imgs">
                        <a href="">
                            <div class="img">

                                <img src="images/g4.jpg">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 imgs">
                        <a href="">
                            <div class="img">

                                <img src="images/g5.jpg">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 imgs last">
                        <a href="">
                            <div class="img">

                                <img src="images/g6.jpg">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
				<div class="row rowa row3">
                    <div class="col-md-4 col-lg-4 imgs">
                        <a href="">
                            <div class="img">
                                <img src="images/g7.jpg">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 imgs">
                        <a href="">
                            <div class="img">
                                <img src="images/g8.jpg">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 imgs">
                        <a href="">
                            <div class="img">
                                <img src="images/g9.jpg">
                                <div class="shade">
                                    <h4>Programme Title</h4>
                                    <small>Templates</small>
                                    <br/>
                                    <i class="fa fa-search fa-lg"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
				</span>
        </div>
    </div>
</div>
<!-- programme 结束 -->
<!-- contact 开始 -->
<!-- <div id="contacts">
    <div class="container contact">
        <h2>Contact me</h2>
        <div class="line2"></div>
            <div class="row rowi">
                <div class="col-md-4 col-sm-4 ">
                    <i class="fa fa-map-marker fa-lg"></i>
                    <h4>黑龙江大学</h4>
                    <h5>哈尔滨 南岗区学府路74号</h5>
                </div>
                <div class="col-md-4 col-sm-4 ">
                    <i class="fa fa-envelope-o fa-lg"></i>
                    <h4>hlju_zjl@163.com</h4>
                    <h5>1737289219@qq.com</h5>

                </div>
                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-phone fa-lg"></i>
                    <h4>+15251365220</h4>
                    <h5>+13005240116</h5>
                </div>
            </div>
            <form action="#" method="post">
                <input type="text" name="name"  value="your name" class="shuru"></input>
                <input type="text" name="email" value="your email" class="shuru"></input>
                <textarea name="message" >your message</textarea>
                <input type="submit" value="send message"></input>

            </form>
    </div>
</div> -->
<div class="contact">
    <div class="container">
        <h3>Contact</h3>
        <label class="line"></label>
        <div class="col-md-4 c-w3l">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <h4>黑龙江大学</h4>
            <h4>哈尔滨市，南岗区学府路74号</h4>
        </div>
        <div class="col-md-4 c-w3l c-mail">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <h4><a href="mailto:info@example.com">1737289219@qq.com</a></h4>
            <h4><a href="mailto:info@example.com">hljuzjl@163.com</a></h4>
        </div>
        <div class="col-md-4 c-w3l c-phn">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h4>+18044261158</h4>
            <h4>+17365481278</h4>
        </div>
        <div class="clearfix"></div>
        <form action="#" method="post">
            <input type="text" name="name" class="name" placeholder="Your Name" required="">
            <input type="text" name="email" class="email" placeholder="Your Email" required="">
            <textarea  name="your message" placeholder="Your Message"  required=""></textarea>
            <input type="submit" value="Send Message">
        </form>
    </div>
</div>
<!-- contact 开始 -->
<!-- footer 开始 -->
<div id="footer">
    <div class="container">
        <p>welcome to contact me ,signed by zjl</p>
    </div>
</div>
<!-- footer 结束 -->

<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/index.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


</body>
</html>