<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>
	<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
	<meta name="description" content="<?php echo ($post_excerpt); ?>">
    	<?php $portal_index_lastnews=2; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"不在创业就在创业的路上，也许孤独，【凌雪软件】有您的陪伴我们将不在孤独", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"虽然IT人很刻板，但【凌雪软件】也有幽默的一面，加入我们把一起实现自己最初的梦想", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"【凌雪软件】致力于软件行业，永远把技术和服务放在第一位，无论您是技术新人还是技术大牛，还是对技术一窍不通，我们童嫂无欺", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/tpl/simplebootx/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/tpl/simplebootx/Public/images/favicon.ico" type="image/x-icon">
    <link href="/tpl/simplebootx/Public/simpleboot/themes/cmf/theme.min.css" rel="stylesheet">
    <link href="/tpl/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/tpl/simplebootx/Public/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/tpl/simplebootx/Public/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/tpl/simplebootx/Public/css/style.css" rel="stylesheet">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>
	
    
    <script src="http://api.map.baidu.com/api?v=1.3"></script>
    
	<style>
	img{
	max-width: none;
	}
	</style>
</head>
<body class="body-white">
<?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/"><img src="/tpl/simplebootx/Public/images/logo.png"/></a>
       <div class="nav-collapse collapse" id="main-menu">
       	<?php
 $effected_id=""; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
		
		<ul class="nav pull-right" id="main-menu-user">
			<li class="dropdown user login">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <img src="/tpl/simplebootx//Public/images/headicon.png" class="headicon"/>
	            <span class="user-nicename"></span><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo u('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
          	</li>
          	<li class="dropdown user offline">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/tpl/simplebootx//Public/images/headicon.png" class="headicon"/>登录<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> &nbsp;微博登录</a></li>
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> &nbsp;QQ登录</a></li>
	               <li><a href="<?php echo u('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul>
          	</li>
		</ul>
		<div class="pull-right">
        	<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
				 <input type="text" class="" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>"/>
				 <input type="submit" class="btn btn-info" value="Go" style="margin:0"/>
			</form>
		</div>
       </div>
     </div>
   </div>
 </div>

<div class="section slice no-padding">
        <div id="mapCanvas" class="map-canvas no-margin" style="height:400px;">
        	<script type="text/javascript">
			   var map = new BMap.Map("mapCanvas");            // 创建Map实例
			var point = new BMap.Point("114.513289","36.767608");    // 创建点坐标
			map.centerAndZoom(point,15);                // 初始化地图,设置中心点坐标和地图级别。
			map.enableScrollWheelZoom();                  //启用滚轮放大缩小
			//添加缩放控件
			map.addControl(new BMap.NavigationControl());  
			map.addControl(new BMap.ScaleControl());  
			map.addControl(new BMap.OverviewMapControl()); 
			
			var marker = new BMap.Marker(point); // 创建标注 
			map.addOverlay(marker); // 将标注添加到地图中
			var infoWindow = new BMap.InfoWindow("凌雪软件<br/><span class=''>地址：河北省邯郸市永年县名关镇海城国际6001 Tel:17717762189</span>"); // 创建信息窗口对象
			marker.openInfoWindow(infoWindow);
			   </script>
        </div>
    </div>
<div class="container">
    <div class="row">
                    <div class="span6">
                        <h3 class="section-title">联系我们</h3>
                        <form class="form-light J_ajaxForm mt-20" role="form" method="post" action="<?php echo u('api/guestbook/addmsg');?>">
                            <div class="row">
                            	<div class="span3">
                                    <div class="form-group">
                                        <label>姓名</label>
                                		<input type="text" class="span3" placeholder="Your name" name="full_name">
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="form-group">
                                        <label>邮箱</label>
                                        <input type="email" class="span3" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>内容</label>
                                <textarea class="span6" id="message" placeholder="Write you message here..." style="height:100px;" name="msg"></textarea>
                            </div>
                             
                            <div class="row">
                            	<div class="span6">
                                    <div class="form-group">
		                                <label>验证码</label>
		                                <input type="text" class="span3" placeholder="please enter the code"  name="verify" autocomplete="off">
		                                <?php echo sp_verifycode_img('code_len=4&font_size=20&width=238&height=34&font_color=&background=','style="cursor: pointer;vertical-align: top;" title="点击获取"');?>
		                            </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary J_ajax_submit_btn">发送留言</button>
                        </form>
                    </div>
                    <div class="span6">
                        <div class="row">
                        	<div class="span3">
                                <h3 class="section-title">联系方式</h3>
                                <div class="contact-info">
                                    <h5>地址</h5>
                                    <p>河北省邯郸市永年县名关镇海城国际6001</p>
                                    
                                    <h5>邮箱</h5>
                                    <p><?php echo ($site_admin_email); ?></p>
                                    
                                    <h5>电话</h5>
                                    <p>17717762189</p>
                                </div>
                            </div>
                            <div class="span3">
                                <h3>Contact</h3>
                                <div class="contact-info">
                                    <h5>Address</h5>
                                    <p>HeBei Provience HanDan City YongNian Area</p>
                                    
                                    <h5>Email</h5>
                                    <p><?php echo ($site_admin_email); ?></p>
                                    
                                    <h5>Phone</h5>
                                    <p>17717762189</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="section-title">快捷交流</h3>
                        <p>
                       点击以下QQ图标，免加好友即时洽谈合作 QQ:642161679
                        </p>
                        <div class="social-media">
                            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=642161679&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:642161679:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
                        </div>
                    </div>
                </div>
   <br><br><br>
<!-- Footer
      ================================================== -->
      <hr>
<?php echo hook('footer');?>
      <div id="footer">
        <div class="links">
        <?php $links=sp_getlinks(); ?>
        <?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
        </div>
        <p>
        联系我们: Tel:13293067665 QQ:642161679 官方QQ群：凌雪软件 146710047 <br/>
        </p>
      </div>
      <div id="backtotop"><i class="fa fa-arrow-circle-up"></i></div>

      <?php echo ($site_tongji); ?>

</div>

<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/wind.js"></script>
    <script src="/tpl/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/statics/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.user.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.user.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>



</body>
</html>