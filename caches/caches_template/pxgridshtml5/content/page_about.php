<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div id="mid_caption"><!-- start mid_caption -->
  <div class="pages">
      <!-- Page Title -->
      <div id="page-title"> 
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c021dba32a2d9ab95323bae6225c4a15&sql=SELECT+%60catid%60%2C%60catname%60+FROM+%60phpcms_category%60+WHERE+catid+%3D+%24catid&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT `catid`,`catname` FROM `phpcms_category` WHERE catid = $catid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <h2><?php echo $r['catname'];?></h2>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      <div class="clear"></div>
      <div id="bolded-line"></div>
      </div>
      <!-- Page Title / End -->
    <div class="clear"></div>
  </div>
</div><!-- END mid_caption -->
<div id="content_wrapper"><!-- start content_wrapper-->
<!-- start sidebar-left -->
<div id="sidebar-left">
<div class="left-sidebar-block">	
<h3 class="dotted_line">About 关于</h3>	
<div class="tout news_categories">
<ul>
<?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
 <li<?php if($catid==$cid) { ?> class="prselected"<?php } ?>><a href="<?php echo $CATEGORYS[$cid]['url'];?>"><span><?php echo $CATEGORYS[$cid]['catname'];?></span><span class="symbol">></span></a></li>
<?php $n++;}unset($n); ?>
</ul>
</div>
</div>
</div>
<!-- END sidebar-left -->
<!-- start content -->
<?php if(!$content) { ?>
<?php if(is_array($my_page=my_get_page_content(2))) { ?>
<?php $my_title = $my_page[title];?>
<?php $my_content = $my_page[content];?>
<?php } else { ?>
<?php $my_content = $my_page;?>
<?php } ?>
<?php } ?>
<div class="content" id="prowidth">
<div id="main_column_left">
<h3 class="dotted_line"><?php if(isset($my_title)) { ?><?php echo $my_title;?><?php } else { ?><?php echo $title;?><?php } ?></h3>
<?php if($content) { ?>
<?php echo $content;?>
<?php } else { ?>
<?php echo $my_content;?>
<?php } ?>
</div>
</div>
</div>
<div class="bk10"></div>
<?php include template("content","footer"); ?>