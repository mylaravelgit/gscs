<!DOCTYPE html>
<html style="font-size: 41.9688px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>大好时光</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
    <!--当网站添加到主屏幕快速启动方式，可隐藏地址栏，仅针对ios的safari-->
    <!-- ios7.0版本以后，safari上已看不到效果 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <!--将网站添加到主屏幕快速启动方式，仅针对ios的safari顶端状态条的样式  -->
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <!--忽略将页面中的数字识别为电话号码-->
    <meta content="telephone=no" name="format-detection">
    <!--忽略Android平台中对邮箱地址的识别 -->
    <meta name="format-detection" content="email=no">
    <!--winphone系统a、input标签被点击时产生的半透明灰色背景怎么去掉-->
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?776cc635d13a41f0f30ab5e417ddb3a1";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <script language="javascript" src="http://ddt.zoosnet.net/JS/LsJS.aspx?siteid=DDT63642922&amp;float=1&amp;lng=cn"></script>
    <script src="./files/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./files/swiper.js"></script>
    <script src="./files/js.js"></script>

    <!--banner-->
    <link rel="stylesheet" href="./files/layout.css" type="text/css">
    <script src="./files/jquery.min.js" type="text/javascript"></script>
    <script src="./files/hhSwipe.js"></script>

    <link href="./files/style.css" type="text/css" rel="stylesheet">

    <!--在线留言-->
    <script type="text/javascript" src="./files/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="./files/hm.message.jsonp.js"></script><script src="./files/jquery.cookie.min.js" type="text/javascript"></script>
    <script>
        function LeaveWord(a,s){
            LeaveWord_Js(a,s,38,1,4,5,23);

        }
    </script>
    <style>
        .boxTime .timeRate span {
            height: 4rem;
            line-height: 4rem;
            padding: 8px;
            color: #ffffff;
            font-weight: 400;
            font-size: 1.54rem;
            border-radius: 10px;
            background: linear-gradient(left,#1987fc, #5bc0ed 56%, #a4ffdc);
            background: -webkit-linear-gradient(left,#1987fc, #5bc0ed 56%, #a4ffdc);}
    </style>
</head>



<body onclick="openZoosUrl('chatwin');">
<!--top-->
<ul class="top">
    <li class="logo"><a href="javascript:void(0)"  target="_blank"><img src="./files/logo.png" alt="logo"></a></li>
    <a href="tel:400-850-0074"><li class="tel" style="font-size: 1.2rem; width: 30%; margin-left: 10%;"><img src="./files/tel.png" style="width: 100%;"></li>	</a>
    <div class="clear"></div>
</ul>
<!--banner-->
<div style="width:100%; ">

    <article style="width:100%;position: relative;">
        <!--scroll-->
        <div class="scroll relative" style="width:100%;">
            <div class="scroll_box" id="scroll_img" style="width: 100%; visibility: visible;">
                <ul class="scroll_wrap" style="width: 1343px;">
                    <li style="width: 1343px; left: 0px; transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);" data-index="0"><a href="javascript:void(0)"  target="_blank"><img src="./files/banner.png" width="100%"></a></li>


                    <!--          <li style="width:100%;"><a href="javascript:void(0)" onclick="doyoo.util.openChat('g=10076564');return false;" target="_blank"><img src="images/banner.png" width="100%" /></a></li>-->
                </ul>
            </div>
            <span class="scroll_position_bg opacity6" style="width: 0px;"></span>
            <ul class="scroll_position" id="scroll_position">

                <!--          <li><a href="javascript:void(0);">3</a></li>-->
            </ul>
        </div>
        <!--scroll-->
        <a href="javascript:void(0);" >
            <ul class="nav">
                <li>执照办理</li>
                <li style="border-bottom: 1px solid #e7f3ff">注册公司</li>
                <li>商标注册</li>
                <li>许可审批</li>
                <li>网站建设</li>
                <div class="clear"></div>
            </ul>
        </a>
    </article>

</div>

<script>
    var slider = Swipe(document.getElementById('scroll_img'), {
        auto: 5000,
        continuous: true,
        callback: function(pos) {
            var i = bullets.length;
            while (i--) {
                bullets[i].className = ' ';
            }
            bullets[pos].className = 'on';
        }
    });
    var bullets = document.getElementById('scroll_position').getElementsByTagName('li');
    $(function(){
        $('.scroll_position_bg').css({
            width:$('#scroll_position').width()
        });
    });
</script>


<!--数字滚动-->

<div class="pic">
    <div class="shuzi01">
        <div class="shuzi01_no">
            <div class="counter">
                <h2 class="timer count-title" id="count-number" data-to="80980" data-speed="1500">80,980</h2>
            </div>
            <span class="shuzi_wen">&nbsp;家</span>
            <div class="clear"></div>
        </div>

        <div class="shuzi01_text">企业已加入</div>
    </div>


    <div class="shuzi01">
        <div class="shuzi01_no">
            <div class="counter">
                <h2 class="timer count-title" id="count-number" data-to="86400" data-speed="1500">86400</h2>
            </div>
            <span class="shuzi_wen">&nbsp;个</span>
            <div class="clear"></div>
        </div>

        <div class="shuzi01_text">注册公司用户</div>
    </div>


    <div class="shuzi01">
        <div class="shuzi01_no">
            <div class="counter">
                <h2 class="timer count-title" id="count-number" data-to="80265" data-speed="1500">80265</h2>
            </div>
            <span class="shuzi_wen">&nbsp;家</span>
            <div class="clear"></div>
        </div>
        <div class="shuzi01_text">选择记账报税</div>
    </div>

    <div class="clear"></div>
</div>

<!--end-->
<img src="./files/banner05.png" style="width: 100%;margin-top: 1.0rem;margin-bottom: 1.0rem;display: block">
<!--小横幅--><!--end-->
<ul class="pro-box" style="border-bottom: 1px solid #eee;">
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro01.png"></a>
        <p>最新政策</p>
    </li>
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro02.png"></a>
        <p>注册流程</p>
    </li>
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro03.png"></a>
        <p>注册资料</p>
    </li>
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro04.png"></a>
        <p>注册费用</p>
    </li>
    <!--<li>
        <a href="javascript:void(0);" onclick="doyoo.util.openChat('g=10076564');return false;"><img src="images/pro05.png"></a>
        <p>注册资金</p>
    </li>-->
    <div class="clear"></div>
</ul>
<!--产品-->
<ul class="pro-box">
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro7.png"></a>
        <p>创业补贴</p>
    </li>
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro2.png"></a>
        <p>注册资金</p>
    </li>
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro5.png"></a>
        <p>公司取名</p>
    </li>
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro4.png"></a>
        <p>经营范围</p>
    </li>
    <!--<li>
        <a href="javascript:void(0);" onclick="doyoo.util.openChat('g=10076564');return false;"><img src="images/pro5.png"></a>
        <p>公司取名</p>
    </li>-->
    <div class="clear"></div>
</ul>
<ul class="pro-box" style="padding-bottom: 2rem;">
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro08.png"></a>
        <p>工商变更</p>
    </li>
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro1.png"></a>
        <p>代理记账</p>
    </li>
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro11.png"></a>
        <p>商标注销</p>
    </li>
    <!--<li>
        <a href="javascript:void(0);" onclick="doyoo.util.openChat('g=10076564');return false;"><img src="images/pro06.png"></a>
        <p>场地要求</p>
    </li>-->
    <li>
        <a href="javascript:void(0);" ><img src="./files/pro10.png"></a>
        <p>更多</p>
    </li>
    <div class="clear"></div>
</ul>
<!--创业须知：公司注册流程-->
<div class="title">
    <a href="javascript:void(0);" ><h1>注册流程4步走,<span>闪电办理</span></h1></a>
    <a href="javascript:void(0);" >

    </a>
</div>
<ul class="lc-content">
    <li class="liucheng1">
        <div class="top1">
            <a href="javascript:void(0);" ><img src="./files/liucheng-icon1.png"></a>
        </div>
        <img src="./files/lc-xh1.png" class="xuhao">
        <a href="javascript:void(0);" ><p>名称核准</p></a>
    </li>
    <li class="jiange">
        <img src="./files/jiantou.png">
    </li>
    <li class="liucheng2">
        <div class="top2">
            <a href="javascript:void(0);" ><img src="./files/lc-icon2.png"></a>
        </div>
        <img src="./files/lc-xh2.png" class="xuhao">
        <a href="javascript:void(0);" ><p>信息规范</p></a>
    </li>
    <li class="jiange">
        <img src="./files/jiantou.png">
    </li>
    <li class="liucheng3">
        <div class="top3">
            <a href="javascript:void(0);" ><img src="./files/lc-icon3.png"></a>
        </div>
        <img src="./files/lc-xh3.png" class="xuhao">
        <a href="javascript:void(0);" ><p>签注审批</p></a>
    </li>
    <li class="jiange">
        <img src="./files/jiantou.png">
    </li>
    <li class="liucheng4">
        <div class="top4">
            <a href="javascript:void(0);" ><img src="./files/lc-icon4.png"></a>
        </div>
        <img src="./files/lc-xh4.png" class="xuhao">
        <a href="javascript:void(0);" ><p>领照刻章</p></a>
    </li>
    <div class="clear"></div>
</ul>
<div class="lc-button">
    <a href="javascript:void(0);" ><div class="button1">注册流程咨询</div></a>
    <a href="javascript:void(0);" ><div class="button2">查询注册费用</div></a>
    <div class="clear"></div>
</div>

<div class="line"></div>
<!--end-->

<div class="boxTime bgColor">
    <p class="title text-center" style="color: #333333;font-size: 1.54rem;font-weight: 500;">限时申请最高<i style="padding: 0 4px;color: #2a93fa;font-size: 2.1rem;font-style: italic;font-weight: bold;">1000</i>元创业补贴</p>
    <p class="timeRate text-center" id="clock" style=" text-align: center;   font-weight: 400;font-size: 1.2rem;">还剩&nbsp;    <span id="t_d">1</span>天
        <span id="t_h">7</span>时
        <span id="t_m">19</span>分
        <span id="t_s">53</span>秒</p>
</div>

<script>
    function dateAdd(startDate) {
        startDate = new Date(startDate);
        startDate = +startDate + 2000*60*60*24; //1000*60*60*24
        startDate = new Date(startDate);
        var nextStartDate = startDate.getFullYear()+"/"+(startDate.getMonth()+1)+"/"+startDate.getDate();
        return new Date(nextStartDate);
    }
    function GetRTime(){
        var NowTime = new Date();
        var EndTime= dateAdd(NowTime);
        var t =EndTime.getTime() - NowTime.getTime();
        var d=Math.floor(t/1000/60/60/24);
        var h=Math.floor(t/1000/60/60%24);
        var m=Math.floor(t/1000/60%60);
        var s=Math.floor(t/1000%60);

        document.getElementById("t_d").innerHTML = d + "";
        document.getElementById("t_h").innerHTML = h + "";
        document.getElementById("t_m").innerHTML = m + "";
        document.getElementById("t_s").innerHTML = s + "";
    }
    setInterval(GetRTime,0);
</script>

<script src="./files/num.js"></script>


<!--滚动新闻-->
<!--滚动新闻-->





<!--手机核名-->
<h3 style="text-align: center;font-weight: bold;font-size: 1.54rem;color: #333333;padding: 0 0 .68rem; margin-top: 1.1rem;">人社局助力0元注册公司</h3>
<div style="width: 10%; margin-left: 45%; background-color: rgb(87, 169, 251); height:0.2rem;"></div>

<a href="javascript:void(0);" ><div style=" margin-bottom: 1rem;text-align: center;width: 60%; height:3rem;
		line-height: 3rem; margin: 0 auto;border-radius: 2.14rem;font-size: 1.54rem;color: #004c95;font-weight: 300;box-shadow: 4px 8px 20px rgba(109, 185, 254, 0.45);background: -webkit-linear-gradient(left,#1987fc,#a4ffdc);background: -moz-linear-gradient(left,#1987fc,#a4ffdc);background: -o-linear-gradient(left,#1987fc,#a4ffdc); margin-left:5%; margin-top:1rem; margin-left: 20%; ">点击领取</div></a>

<!--核名-->
<div class="hm-box" style="margin-top:1rem;">
    <div class="hm-bg">
        <div class="title">
            <a href="javascript:void(0);" ><h1 style="color: #fff;">注册第1步：名称核准</h1></a>
            <div class="smalltitle">
                <div class="icon"><img src="./files/huojian-icon.png"></div>
                <p style="color: #fff;">5分钟反馈核名结果</p>
                <div class="clear"></div>
            </div>
        </div>

        <div class="serch-bg">
            <form id="messageForm33" style="width: 80%; margin: 0 auto;">
                <div class="serch-border">
                    <div>
                        <input type="text" class="msg_text" id="986251" maxlength="11" name="msg_username" placeholder="请输入您的公司名称" value="" style="background-color: #fff; border-radius: 0.7rem;width: 100%; padding-bottom: 0.7rem; padding-top: 0.7rem; text-align: center; font-size: 1.2rem; margin-top: 1.5rem;">
                    </div>
                    <div>
                        <input type="text" class="msg_text" id="986252" maxlength="11" name="msg_userphone" placeholder="请输入您的电话号码" value="" style="background-color: #fff; border-radius: 0.7rem;width: 100%; padding-bottom: 0.7rem; padding-top: 0.7rem; text-align: center; font-size: 1.2rem; margin-top: 1.5rem;">
                    </div>
                    <div class="serch-botton">
                        <input type="button" id="Enter" name="Enter" onclick="$.msgSubmit(&#39;messageForm33&#39;);LeaveWord($(&#39;#986251&#39;).val(),$(&#39;#986252&#39;).val());" value="提交核名" style="background-color: #26388a; border-radius: 0.7rem;width: 100%; padding-bottom: 0.7rem; padding-top: 0.7rem; text-align: center; font-size: 1.2rem; margin-top: 1.5rem; color: #fff;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--question-->
<div class="question">
    <a href="javascript:void(0);" ><img src="./files/question.png"></a>
</div>

<div class="line"></div>


<!--注册第二步-->
<div class="title">
    <a href="javascript:void(0);" >
        <h1>注册第2步：确认<span>经营范围</span></h1>
    </a>
    <a href="javascript:void(0);" >
        <div class="smalltitle" style="width: 65%;">
            <div class="icon" style="width: 8%;"><img src="./files/shu-icon.png"></div>
            <p>2017年新版行业经验范围表述参考</p>
            <div class="clear"></div>
        </div>
    </a>
</div>

<div class="step2-content">
    <div class="step-left">
        <img src="./files/jyfwml-bg.png" class="step-left-bg">
        <div style="width: 90%; margin-left:5%;">
            <a href="javascript:void(0);" ><img src="./files/jyfwml.png" class="step-left-img"></a>
            <h1>经营范围目录</h1>
            <p>版本：2017年V03版<br>行业：57类行业大全<br>依据国民经济行业分类<br>工商局内部审批用目录</p>
            <a href="javascript:void(0);" ><div class="step2-button">在线预览</div></a>
        </div>
    </div>

    <div class="step-right">
        <a href="javascript:void(0);" >
        </a><div class="right1"><a href="javascript:void(0);" >
                <img src="./files/ybjyfw-bg.png" class="right1-bg">
            </a><a href="javascript:void(0);" ><img src="./files/xkjyfw.png" class="right-img"></a>
            <div class="right-content">
                <h1>一般经营范围</h1>
                <p>企业自主申请<br>依据国民经济......</p>
                <a href="javascript:void(0);" ><div class="step2-button-right">在线预览</div></a>
            </div>
            <div class="clear"></div>
        </div>

        <a href="javascript:void(0);" >
        </a><div class="right1" style="margin-top: 0.5rem;"><a href="javascript:void(0);" >
                <img src="./files/xkjyfw-bg.png" class="right2-bg">
            </a><a href="javascript:void(0);" ><img src="./files/ybjyfw.png" class="right-img"></a>
            <div class="right-content">
                <h1>许可经营范围</h1>
                <p>取得许可审批方可经营如：餐饮服务  </p>
                <a href="javascript:void(0);" ><div class="step2-button-right">在线预览</div></a>
            </div>
            <div class="clear"></div>
        </div>

    </div>
    <div class="clear"></div>
</div>

<!--question-->

<div class="title">
    <a href="javascript:void(0);" >
        <h1>免费规范行业经营范围</h1>
    </a>
    <a href="javascript:void(0);" >
        <div>
            <p style=" text-align: center;    color: #9e9e9e; font-size: 1rem;">已成功帮助48937人规范行业经营范围</p>
        </div>
    </a>
</div>
<!--<form  id="messageForm2">
    <div class="form" style="margin-top: 1.5rem;width: 90%; margin-left: 5%;">
        <div class="form-con">
            <span class="fc-title" style="font-size: 1.5rem; color: #666;">您的行业：</span>
            <select name="bns_type" style="font-size: 1.5rem; color: #474747; border: 1px solid #666;width: 70%; padding-top: 0.5rem; padding-bottom: 0.5rem; padding-left: 0.5rem; border-radius: 0.5rem;" type="text" class="msg_text" id="986203">
                <option value="">请选择行业类别</option>
                <option value="互联网、软件">互联网、软件</option>
                <option value="电子产品">电子产品</option>
                <option value="机械设备制造">机械设备制造</option>
                <option value="服装">服装</option>
                <option value="食品餐饮">食品餐饮</option>
                <option value="箱包">箱包</option>
                <option value="家居、建材">家居、建材</option>
                <option value="日化、洗护">日化、洗护</option>
                <option value="教育">教育</option>
                <option value="其他行业">其他行业</option>
            </select>
            <em class="select-icon"></em>
        </div>
        <div class="form-con" style="margin-top: 1.5rem;">
            <span class="fc-title" style="font-size: 1.5rem; color: #666;">手机号码：&nbsp;</span>
            <input   type="text" class="msg_text" id="986204" maxlength="11" name="msg_userphone" placeholder="请输入您的电话号码"  value="" style="font-size: 1.5rem; color: #474747; border: 1px solid #666;width: 68%; padding-top: 0.5rem; padding-bottom: 0.5rem; padding-left: 0.5rem; border-radius: 0.5rem;">
        </div>
                 <input type="button" name="Submit" onClick="$.msgSubmit('messageForm2');LeaveWord($('#986203').val(),$('#986204').val());" value="立即申请名额" >

    </div>
</form>-->
<!--手机核名-->
<form id="messagePost23">
    <div style="width: 90%;margin:0 auto; margin-top: 1.5rem;">
        <p style="font-size:1.7rem; color: rgb(102, 102, 102); float: left; margin-top: 0.3rem;">名称:</p>
        <input type="text" id="12354" name="msg_username" placeholder="请输入您的公司名称" style="width: 78%; font-size:1.5rem;color: rgb(102, 102, 102);text-align: left;  border: 1px solid #666; border-radius: 0.5rem; padding-bottom: 0.5rem; padding-top: 0.5rem; text-align: center;margin-left: 5%; ">
        <div class="clear"></div>
    </div>
    <div style="width: 90%;margin:0 auto; margin-top: 1.5rem;">
        <p style="font-size:1.7rem; color: rgb(102, 102, 102); float: left; margin-top: 0.3rem;">电话:</p>
        <input type="text" id="12355" name="msg_userphone" placeholder="请输入您的电话号码" value="" style="width: 78%; font-size:1.5rem;color: rgb(102, 102, 102);text-align: left;  border: 1px solid #666; border-radius: 0.5rem; padding-bottom: 0.5rem; padding-top: 0.5rem; text-align: center;margin-left: 5%; ">
        <div class="clear"></div>
    </div>

    <input type="button" name="Submit" onclick="$.msgSubmit(&#39;messagePost23&#39;);LeaveWord($(&#39;#12354&#39;).val(),$(&#39;#12355&#39;).val());" value="立即为我规范行业经营范围" class="M-btn_01" style="width: 90%;  background-color: rgb(43, 89, 181); color: #fff; text-align: center; color: 1rem; padding-bottom: 1rem; padding-top: 1rem; margin-left: 5%; border-radius: 0.5rem; margin-top: 1rem; font-size: 1.5rem;">
</form>
<!--step3-->
<!--question-->
<div class="question">
    <a href="javascript:void(0);" ><img src="./files/question2.png"></a>
</div>
<div class="line"></div>

<!--step3-->
<div class="title">
    <a href="javascript:void(0);" ><h1>注册第3步：确认<span>注册资金</span></h1></a>
    <a href="javascript:void(0);" >
        <div class="smalltitle" style="width: 68%;">
            <div class="icon" style="width: 8%;"><img src="./files/ren-icon.png"></div>
            <p>27类行业须实缴，24类行业认缴登记</p>
            <div class="clear"></div>
        </div>
    </a>
</div>
<div class="step3-content">
    <div class="step3-1">
        <div class="top-1">
            <a href="javascript:void(0);" ><div class="title-1">什么是<br>认缴制 </div></a>
        </div>
        <div class="bottom-1">
            <p>注册资金无需到账<br> 0元即可注册公司 </p>
            <a href="javascript:void(0);" ><div class="step3-button">详情查看</div></a>
        </div>
    </div>
    <div class="step3-1" style="margin-left: 2%; margin-right: 2%;">
        <div class="bottom-2">
            <p>27类行业须实缴<br> 实行认缴制登记 </p>
            <a href="javascript:void(0);" ><div class="step3-button">详情查看</div></a>
        </div>
        <div class="top-2">
            <a href="javascript:void(0);" ><div class="title-1">注册资金<br>多少区别</div></a>
        </div>
    </div>
    <div class="step3-1">
        <div class="top-3">
            <a href="javascript:void(0);" ><div class="title-1">哪些行业<br>需要实缴</div></a>
        </div>
        <div class="bottom-1">
            <p>注册资金体现公司实力对应公司责任 </p>
            <a href="javascript:void(0);" ><div class="step3-button">详情查看</div></a>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!--question-->
<div class="question" style="margin-top: 1rem;">
    <a href="javascript:void(0);" ><img src="./files/question3.png"></a>
</div>
<div class="line">
    <img src="./files/banner05.png" style="width: 100%;margin-top: 1.5rem;margin-bottom: 1.5rem;display: block">
</div>



<!--注册第四步-->
<div class="title">
    <a href="javascript:void(0);" ><h1>注册第4步：确认<span>注册地址</span></h1></a>
    <a href="javascript:void(0);" >
        <div class="smalltitle" style="width: 54%;">
            <div class="icon" style="width: 6%;"><img src="./files/dizhi-icon.png"></div>
            <p>注册地址不符合规范将被查封</p>
            <div class="clear"></div>
        </div>
    </a>
</div>
<ul class="step4-title">
    <li class="step4-01"></li>
    <li class="step4-02"><img src="./files/yanjing-icon.png"></li>
    <a href="javascript:void(0);" ><li class="step4-03">查看各区地址要求</li></a>
    <li class="step4-04"></li>
    <div class="clear"></div>
</ul>
<ul class="area">
    <a href="javascript:void(0);" >
        <li class="area1">
            <img src="./files/area01.png">
            <p>佛山</p>
        </li>
    </a>
    <a href="javascript:void(0);" >
        <li class="area1">
            <img src="./files/area02.png">
            <p>顺德</p>
        </li>
    </a>
    <a href="javascript:void(0);" >
        <li class="area1">
            <img src="./files/area03.png">
            <p>禅城</p>
        </li>
    </a>
    <a href="javascript:void(0);" >
        <li class="area1">
            <img src="./files/area04.png">
            <p>南海</p>
        </li>
    </a>
    <div class="clear"></div>
</ul>
<ul class="area">
    <a href="javascript:void(0);" >
        <li class="area1">
            <img src="./files/area05.png">
            <p>广州</p>
        </li>
    </a>
    <a href="javascript:void(0);" >
        <li class="area1">
            <img src="./files/area06.png">
            <p>深圳</p>
        </li>
    </a>
    <a href="javascript:void(0);" >
        <li class="area1">
            <img src="./files/area07.png">
            <p>东莞</p>
        </li>
    </a>
    <a href="javascript:void(0);" >
        <li class="area1">
            <img src="./files/area08.png">
            <p>其他</p>
        </li>
    </a>
    <div class="clear"></div>
</ul>

<!--question-->
<a href="javascript:void(0);" >
    <div class="question" style="margin-top: 1.5rem;">
        <img src="./files/question4.png">
    </div>
</a>
<div class="line"></div>

<!--注册完成后取得资料-->
<div class="title">
    <a href="javascript:void(0);" >
        <h1>注册完成后<span>取得资料</span></h1>
    </a>
</div>
<div class="zl-content">
    <!--<img src="images/city-bg.png" class="zl-bg">-->
    <div class="zl-table">
        <ul class="zl-left">
            <a href="javascript:void(0);" >
                <li class="zl-1">
                    <img src="./files/zhangcheng.png">
                    <p>公司章程</p>
                    <div class="clear"></div>
                </li>
            </a>
            <a href="javascript:void(0);" >
                <li class="zl-1" style="border-top:none; border-bottom: none;">
                    <img src="./files/xuzhi-icon.png">
                    <p>纳税人须知</p>
                    <div class="clear"></div>
                </li>
            </a>
            <a href="javascript:void(0);" >
                <li class="zl-1">
                    <img src="./files/zhang-icon.png">
                    <p>公财私章</p>
                    <div class="clear"></div>
                </li>
            </a>
        </ul>
        <div class="zl-right">
            <a href="javascript:void(0);" ><h1>营业执照</h1></a>
            <p>三证合一</p>
            <p>一证一码</p>
            <a href="javascript:void(0);" ><img src="./files/yinyezhizhao-icon.png"></a>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="line"></div>

<!--领取执照后必备事项-->
<div class="title">
    <a href="javascript:void(0);" ><h1>领取执照后<span>必备事项</span></h1></a>
    <a href="javascript:void(0);" >
        <div class="smalltitle" style="width:87%; margin: 0 auto;">
            <div class="icon" style="width:4%;"><img src="./files/shixiang.png"></div>
            <p>领取执照只是第一步，正常运营还得准备这些事项</p>
            <div class="clear"></div>
        </div>
    </a>
</div>
<div class="sx-content">
    <div class="sx-left">
        <a href="javascript:void(0);" ><div class="left-top"><p class="left-top-p">社保开户</p></div></a>
        <p style="margin-top: 0.5rem;" class="sx-left-p">专属VIP绿色通道,无需排队预约</p>
        <p class="sx-left-p"></p>
        <a href="javascript:void(0);" ><div class="sx-button">详情咨询</div></a>
    </div>
    <div class="sx-left" style="margin-left: 4%;">
        <a href="javascript:void(0);" ><div class="left-top2"><p class="left-top-p">税务报道</p></div></a>
        <p style="margin-top: 0.5rem;" class="sx-left-p">公司登记后须依法到税局报道我司免费提供</p>
        <p class="sx-left-p"></p>
        <a href="javascript:void(0);" ><div class="sx-button">详情咨询</div></a>
    </div>
    <div class="clear"></div>
</div>
<div class="sx-content">
    <div class="sx-left">
        <a href="javascript:void(0);" ><div class="left-top3"><p class="left-top-p">记账报税</p></div></a>
        <p style="margin-top: 0.5rem;" class="sx-left-p">税务规定企业必须按时记账报税，不报则罚款</p>
        <a href="javascript:void(0);" ><div class="sx-button">详情咨询</div></a>
    </div>
    <div class="sx-left" style="margin-left: 4%;">
        <a href="javascript:void(0);" ><div class="left-top4"><p class="left-top-p">年检年报</p></div></a>
        <p style="margin-top: 0.5rem;" class="sx-left-p">企业应每年6月31日前提交年报无需排队预约</p>
        <p class="sx-left-p"></p>
        <a href="javascript:void(0);" ><div class="sx-button">详情咨询</div></a>
    </div>
    <div class="clear"></div>
</div>

<!--question-->
<div class="question" style="margin-top: 1.5rem;">
    <a href="javascript:void(0);" ><img src="./files/question5.png"></a>
</div>
<div class="line">
    <img src="./files/banner05.png" style="width: 100%;margin-top: 1.5rem;margin-bottom: 1.5rem;display: block">
</div>


<!--问题-->
<div class="title">
    <a href="javascript:void(0);" ><h1>注册公司<span>常见问题</span></h1></a>
    <a href="javascript:void(0);" >
        <div class="smalltitle" style="width:66%; margin: 0 auto;">
            <div class="icon" style="width:8%;"><img src="./files/wenti-icon.png"></div>
            <p>创业乃大事，选择专业机构非常重要</p>
            <div class="clear"></div>
        </div>
    </a>
</div>
<div class="qs-smalltitle">
    <p>8年专注工商财税，为您解决创业难题</p>
</div>

<div class="qs1">
    <div class="qs1-left">
        <a href="javascript:void(0);" ><h1 class="qs1-left-h1">住宅地址可以注册公司吗？</h1></a>
        <p>住宅地址可以注册公司，但楼层高度不得超过27米部分行业如餐饮......</p>
        <a href="javascript:void(0);" ><div class="qs1-button">详情咨询</div></a>
    </div>
    <a href="javascript:void(0);" ><img src="./files/wenti1.png"></a>
    <div class="clear"></div>
</div>
<div class="qs1">
    <div class="qs1-left">
        <a href="javascript:void(0);" ><h1 class="qs1-left-h1">注册资金多少有什么区别？</h1></a>
        <p>注册资金体现公司实力,不宜过低，同时对应公司应承担经济......</p>
        <a href="javascript:void(0);" ><div class="qs1-button">详情咨询</div></a>
    </div>
    <a href="javascript:void(0);" ><img src="./files/wenti2.png"></a>
    <div class="clear"></div>
</div>
<div class="qs1">
    <div class="qs1-left">
        <a href="javascript:void(0);" ><h1 class="qs1-left-h1">注册公司需要提供哪些材料？</h1></a>
        <p>《企业设立申请书》,《法定代表人任职文件》......</p>
        <a href="javascript:void(0);" ><div class="qs1-button">详情咨询</div></a>
    </div>
    <a href="javascript:void(0);" ><img src="./files/wenti2.png"></a>
    <div class="clear"></div>
</div>
<!--question-->
<div class="question" style="margin-top: 1.5rem;">
    <a href="javascript:void(0);" ><img src="./files/question6.png"></a>
</div>
<div class="line"></div>

<!--small-->


<!--footer-->
<ul class="footer">
    <a href="javascript:void(0);" ><li class="footer-left">在线咨询</li></a>
    <a href="javascript:void(0);" >
    </a><a href="tel:4000-123-860"><li class="footer-right">电话咨询</li></a>

    <div class="clear"></div>
</ul>
<img src="./files/xinxi.gif" style="position: fixed;left:35%;bottom:1.2rem;width: 5.5%">
<!--footer-->


<script type="text/javascript" charset="utf-8" src="./files/10099093.js"></script><div id="doyoo_panel"></div>
<div id="doyoo_monitor"></div>
<div id="talk99_message"></div>
<div id="doyoo_share" style="display:none;"><iframe src="./files/s.html"></iframe></div>
<link rel="stylesheet" type="text/css" href="./files/oms.css">
<script type="text/javascript" src="./files/oms.js" charset="utf-8"></script>



</body></html>