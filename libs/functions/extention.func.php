<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
 
/** 导航菜单**/
function is_parents($nowparentid,$nowcatid,$arr){
	$is_parents = 0;
	$arrchild = explode(",",$arr[$nowparentid][arrchildid]);
	foreach($arrchild as $v){
		if($v == $nowcatid) $is_parents = 1;
	}
	return $is_parents;
} 

/** 关于我们菜单**/
function my_get_page_content($catid){
	if(!empty($catid)){
		$page_db = pc_base::load_model('page_model');
						
		$r = $page_db->get_one(array('catid'=>$catid));
		
		if($r) return $r;
		else return '该栏目不存在';
	}else return '错误的或无catid值';
}

?>