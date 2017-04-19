<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="renderer" content="webkit">
<meta name="author" content="Pixel grid studio">
<link rel="icon" type="image/ico" href="/favicon.ico">
<!--STYLESHEETS-->
<link href="<?php echo CSS_PATH;?>pxgrids/blue.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>pxgrids/flexslider/flexslider.css" rel="stylesheet" media="screen">
<link href="<?php echo CSS_PATH;?>pxgrids/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css">
<!--JAVASCRIPTS-->
<script type="text/javascript" src="<?php echo JS_PATH;?>pxgrids/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>pxgrids/jquery.flexslider-min.js"></script>
<!--[if IE 6]>
  <script src="<?php echo JS_PATH;?>pxgrids/killie6.js"></script>
<![endif]-->
</head>
<body>
<!--start header-wrapper-->
<div id="header-wrapper">
    <!--start header-->
    <div id="header">
      <div class="logoheader"><a href="<?php echo siteurl($siteid);?>" id="logo"></a></div>
          <!--导航开始-->
          <div id="navigation">
          <ul id="nav" class="dropmenu">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0abeb9912004474879e777dd9e6b6af6&action=category&catid=0&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
          <li <?php if(!$catid) { ?> class="current-menu-item"<?php } ?>><a href="<?php echo siteurl($siteid);?>">
              <!-- <span>首&nbsp;&nbsp;&nbsp;&nbsp;页</span> -->
              <span><?php echo L('home_page')?></span>
          </a>
          </li>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li <?php if(is_parents($r[catid],$catid,$CATEGORYS)&&$r[type]!=2) { ?> class="current-menu-item"<?php } ?>>
          <!-- <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?><?php if($r[catid]!=$CATEGORYS[$r[catid]][arrchildid]) { ?><span class="menuPlus">+</span><?php } ?></a> -->
          <a href="<?php echo $r['url'];?>"><?php echo L($r['catname'])?><?php if($r[catid]!=$CATEGORYS[$r[catid]][arrchildid]) { ?><span class="menuPlus">+</span><?php } ?></a>
          <!--二级下拉菜单-->
          <?php $nowcatid=$r[catid];?>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dd71a8a8978f5710f312e09e558d919d&action=category&catid=%24nowcatid&siteid=%24siteid&order=listorder+ASC&return=data1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data1 = $content_tag->category(array('catid'=>$nowcatid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
            <?php if(count($data1)>0) { ?>
              <ul class="sub-menu">
              <?php $n=1;if(is_array($data1)) foreach($data1 AS $v) { ?>
              <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?><?php if($v[catid]!=$CATEGORYS[$v[catid]][arrchildid]) { ?><span class="menuArrow">+</span><?php } ?></a>
              	<!--三级下拉菜单-->
                <?php $nowcatid=$v[catid];?>
          		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9b8fdebcbf8c4970d7298368cd1b04ff&action=category&catid=%24nowcatid&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$nowcatid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
            	<?php if(count($data2)>0) { ?>
              	<ul class="sub-menu">
             	<?php $n=1;if(is_array($data2)) foreach($data2 AS $s) { ?>
              	<li><a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a><?php if($s[catid]!=$CATEGORYS[$s[catid]][arrchildid]) { ?><span class="menuArrow">+</span><?php } ?></li>
              	<?php $n++;}unset($n); ?>     
              	</ul>
            	<?php } ?>
          		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              	<!--三级下拉菜单 END-->
              </li> 
              <?php $n++;}unset($n); ?>     
              </ul>
            <?php } ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		  <!--二级下拉菜单END-->
          </li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          <?php echo runhook('glogal_menu')?>
          <?php if($top_parentid) { ?>
          <?php } ?>
          </ul>
          </div>
          <!--导航结束-->
      </div>
    <!--[END] header-->
</div>
<!--[END] header-wrapper-->