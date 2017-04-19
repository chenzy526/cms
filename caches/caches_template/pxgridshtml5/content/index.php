<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
 <!-- Slider Home -->
  <!-- Flexslider -->
   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7e92a2c49cd45d05ef0cf62d8b1d2f53&action=lists&catid=6&order=listorder+ASC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'listorder ASC','limit'=>'10',));}?>
      <div id="slider-home" class="row-fluid slider-home">
        <div class="pxgridssl">
          <div class="slider">
            <div id="main-slider" class="flexslider">
              <ul class="slides">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a></li>
                <?php $n++;}unset($n); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  <!-- End Flexslider -->
 <!-- End Slider home -->
<!-- start content -->
<div id="content_wrapper">
<div id="midcaption">
  <div class="BreakingNewsController easing" id="breakingnews2">
    <div class="bn-title"></div>
    <ul>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d8ba42b314b2ea2a8faf74beee123798&action=lists&catid=7&order=id+DESC&num=20&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'7','order'=>'id DESC','limit'=>'20',));}?>
    <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
      <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="bn-arrows"><span class="bn-arrows-left"></span><span class="bn-arrows-right"></span></div>  
  </div>
</div>
<div class="clearfix"></div>
<div id="lines" class="margin20"></div>
<div class="breadcrumbs">
<ul>
<!-- <li><span>项目/产品介绍</span></li> -->
<li><span><?php echo L('product_introduction')?></span></li>
</ul>
</div>
<div class="clear"></div>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b4e553b32c81649923f5dc140f4a9f4&action=lists&catid=8&thumb=1&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'8','thumb'=>'1','order'=>'id DESC','limit'=>'4',));}?>
<div class="content" id="width100">
	<div id="main_column">
      <div id="portfolio_box">
       <ul>
       <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
          <li>
		  <div class="image">
          <a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>"><img src="<?php echo thumb($v[thumb],220,140);?>" alt="<?php echo $v['title'];?>"></a>
		  </div>
          <div class="project_info">
            <h2><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>"><?php echo str_cut($v['title'],20);?></a></h2>
            <h3><?php echo str_cut($v['description'],30);?></h3>
          </div>
         </li>
         <?php $n++;}unset($n); ?>
         </ul><!--END ul-->
       </div>
</div>	
</div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<div class="clear"></div>
<div id="lines" class="margin20"></div>
<div class="indexpost">
<div class="postart">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=862e0980e6f352fe99abdbdabff2ad59&action=position&posid=18&catid=15&thumb=1&order=id+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$info = $content_tag->position(array('posid'=>'18','catid'=>'15','thumb'=>'1','order'=>'id DESC','limit'=>'1',));}?>
<div class="postartimg">
<ul class="grid">
  <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
  <li>
    <a href="<?php echo $v['url'];?>" role="button">
      <figure>
        <img class="img-responsive" src="<?php echo thumb($v[thumb],310,115);?>" alt="<?php echo $v['title'];?>">
        <figcaption>
          <span><?php echo str_cut($v['title'],70);?></span>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php $n++;}unset($n); ?>
</ul>
</div>
<div class="postlist">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7d53c0dc6e9e0c73f98743d6005fa359&action=lists&catid=15&order=id+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'15','order'=>'id DESC','limit'=>'5',));}?>
  <ul>
   <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
    <li><span>·</span><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],65);?></a></li>
    <?php $n++;}unset($n); ?>
  </ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>

<div class="postart">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2378eb8bd309ec5a85c3dba14c686aeb&action=position&posid=19&catid=16&thumb=1&order=id+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$info = $content_tag->position(array('posid'=>'19','catid'=>'16','thumb'=>'1','order'=>'id DESC','limit'=>'1',));}?>
<div class="postartimg">
<ul class="grid">
  <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
  <li>
    <a href="<?php echo $v['url'];?>" role="button">
      <figure>
        <img class="img-responsive" src="<?php echo thumb($v[thumb],310,115);?>" alt="<?php echo $v['title'];?>">
        <figcaption>
          <span><?php echo str_cut($v['title'],70);?></span>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php $n++;}unset($n); ?>
</ul>
</div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<div class="postlist">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7754722972a2ee88fca32fe52a3609be&action=lists&catid=16&order=id+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'16','order'=>'id DESC','limit'=>'5',));}?>
  <ul>
  <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
    <li><span>·</span><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],65);?></a></li>
  <?php $n++;}unset($n); ?>  
  </ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>

<div class="postart">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc8ef21db92a5ef27c90d53a11190323&action=position&posid=20&catid=17&thumb=1&order=id+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$info = $content_tag->position(array('posid'=>'20','catid'=>'17','thumb'=>'1','order'=>'id DESC','limit'=>'1',));}?>
<div class="postartimg">
<ul class="grid">
  <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
  <li>
    <a href="<?php echo $v['url'];?>" role="button">
      <figure>
        <img class="img-responsive" src="<?php echo thumb($v[thumb],310,115);?>" alt="<?php echo $v['title'];?>">
        <figcaption>
          <span><?php echo str_cut($v['title'],65);?></span>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php $n++;}unset($n); ?>
</ul>
</div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<div class="postlist">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8c3537e0bafebc17207408f6ae581a14&action=lists&catid=17&order=id+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'17','order'=>'id DESC','limit'=>'5',));}?>
  <ul>
  <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
    <li><span>·</span><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],70);?></a></li>
  <?php $n++;}unset($n); ?>
  </ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>
</div>
<div class="clear"></div>
<script type="text/javascript" src="<?php echo JS_PATH;?>pxgrids/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
$(document).ready(function(){$("a[data-id^='fancybox-linker']").fancybox({"overlayShow":true,"overlayColor":"#000","transitionIn":"elastic","transitionOut":"elastic","height":330,"width":500})});
</script>
<div class="linker">
<div class="breadcrumbs">
<ul>
<li><span><?php echo L('friendship_link')?></span></li>
</ul>
</div>
<div class="applylinker"><a href="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" class="iframe" data-id="fancybox-linker"><?php echo L('application_link')?></a></div>
<div class="clear"></div>
<div id="line"></div>
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=739cb3b8b3f695b2de63641e464db107&action=type_list&siteid=%24siteid&order=listorder+ASC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
    <ul>
      <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
      <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><?php echo $v['name'];?></a></li>
      <?php $n++;}unset($n); ?>
    </ul>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>
<?php include template("content","footer"); ?>