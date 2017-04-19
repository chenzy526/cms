<?php
/**
 * 自定义的函数脚本文件。
 */

/**
 * 自定义分页函数
 * 
 * 这里定义的函数，请不要与系统核心里面定义的函数重名，否则会造成函数重复定义错误。
 *
 * @param $num 信息总数
 * @param $curr_page 当前分页
 * @param $perpage 每页显示数
 * @param $urlrule URL规则
 * @param $array 需要传递的数组，用于增加额外的方法
 * @return 分页
 */
function custom_pages($num, $curr_page, $perpage = 20, $urlrule = '', $array = array(),$setpages = 10) {
	if(defined('URLRULE') && $urlrule == '') {
		$urlrule = URLRULE;
		$array = $GLOBALS['URL_ARRAY'];
	} elseif($urlrule == '') {
		$urlrule = url_par('page={$page}');
	}
	$multipage = '';
	if($num > $perpage) {
		$page = $setpages+1;
		$offset = ceil($setpages/2-1);
		$pages = ceil($num / $perpage);
		if (defined('IN_ADMIN') && !defined('PAGES')) define('PAGES', $pages);
		$from = $curr_page - $offset;
		$to = $curr_page + $offset;
		$more = 0;
		if($page >= $pages) {
			$from = 2;
			$to = $pages-1;
		} else {
			if($from <= 1) {
				$to = $page-1;
				$from = 2;
			}  elseif($to >= $pages) {
				$from = $pages-($page-2);
				$to = $pages-1;
			}
			$more = 1;
		}
		$multipage .= '<li><a class="pageitem">'.$num.L('page_item').'</a></li>';
		if($curr_page>0) {
			$multipage .= ' <li><a href="'.pageurl($urlrule, $curr_page-1, $array).'" class="previous">'.L('previous').'</a></li>';
			if($curr_page==1) {
				$multipage .= '<li class="active"> <span>1</span></li>';
			} elseif($curr_page>6 && $more) {
				$multipage .= ' <li><a href="'.pageurl($urlrule, 1, $array).'">1</a>..</li>';
			} else {
				$multipage .= ' <li><a href="'.pageurl($urlrule, 1, $array).'">1</a></li>';
			}
		}
		for($i = $from; $i <= $to; $i++) {
			if($i != $curr_page) {
				$multipage .= ' <li><a href="'.pageurl($urlrule, $i, $array).'">'.$i.'</a></li>';
			} else {
				$multipage .= ' <li class="active"><span>'.$i.'</span></li>';
			}
		}
		if($curr_page<$pages) {
			if($curr_page<$pages-5 && $more) {
				$multipage .= '<li> <a href="'.pageurl($urlrule, $pages, $array).'">'.$pages.'..</a></li> <li><a href="'.pageurl($urlrule, $curr_page+1, $array).'" class="next">'.L('next').'</a></li>';
			} else {
				$multipage .= '<li><a href="'.pageurl($urlrule, $pages, $array).'">'.$pages.'</a></li> <li><a href="'.pageurl($urlrule, $curr_page+1, $array).'" class="next">'.L('next').'</a></li>';
			}
		} elseif($curr_page==$pages) {
			$multipage .= ' <li class="active"><span>'.$pages.'</span></li> <li><a href="'.pageurl($urlrule, $curr_page, $array).'" class="next">'.L('next').'</a></li>';
		} else {
			$multipage .= ' <li><a href="'.pageurl($urlrule, $pages, $array).'">'.$pages.'</a></li> <li><a href="'.pageurl($urlrule, $curr_page+1, $array).'" class="next">'.L('next').'</a></li>';
		}
	}
	return $multipage;
}

?>
