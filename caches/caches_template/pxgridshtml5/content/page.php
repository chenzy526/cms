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
<h3 class="dotted_line"><?php echo $title;?></h3>
<?php echo $content;?>
</div><!-- END content_wrapper-->
<div class="bk10"></div>
<?php include template("content","footer"); ?>