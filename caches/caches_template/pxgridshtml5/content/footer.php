<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="bottom-block"><div class="wrapper"></div></div>
<!--start footer-->
<div id="footer">
  <!--start fcontent-->
  <div class="fcontent">
      <div class="fcontent-margin">
          <div class="one_third footer_3cols">
          <b>关注我们</b>
          <div class="separator40"></div>
          <!--start social-->
          <div id="social">
              <ul>
              <li><a href="http://weibo.com/234830630" target="_blank" id="sinaweibo">新浪微博</a></li>
              <li><a href="http://t.qq.com/pxgrids"   target="_blank" id="qqweibo">腾讯微博</a></li>
              <li><a href="http://user.qzone.qq.com/2303416339/" target="_blank" id="qzone">QQ空间</a></li>
              <li><a href="http://pxgrids.taobao.com/" id="taobao" target="_blank">像素格淘宝店</a></li>
              <li><a href="http://list.qq.com/cgi-bin/qf_invite?id=169d4dd5feb837a0db01b792f7b5f7098d21856c8fd9cbf9" target="_blank" id="rss">RSS</a></li>
              <li><a id="weixin" onmouseover="onMouseover()" onmouseout="onMouseout()" title="微信" href="javascript:void(0)"> 微信 </a></li>
              </ul>
              <div class="weixin-detail" id="weixin_detail" style="display: none;"><div class="weixin-qr"></div><span>微信扫一扫!</span></div>
          </div>
          <!--[END] social-->
          </div>
          <div class="one_third footer_3cols">
          <strong>关于像素格工作室</strong>
          <div class="separator40"></div>
          <p>由一群疯子创建的工作室，本作品永久免费给用户使用，采用请保留"像素格工作室"版权信息！</p>
          </div>
          <div class="one_third last footer_3cols_last">
          <b>联系方式</b>
          <div class="separator40"></div>
          <p>电话：010-1234567     传真：010-1234567</p>
          <p>地址：新纪元宇宙省银河市天朝县拆迁村地沟油街道</p>   
          </div>
          <!--start bottom-->
          <div id="bottom"> 
          <!-- 免费商用请保留像素格工作室版权，去除版权需缴纳版权费，以免产生版权纠纷，特此说明！联系QQ：2303416339-->
          <div id="copyright">Copyright <a href="http://www.pxgrids.com/" target="_blank">像素格工作室</a> &copy; 2003-<SCRIPT type=text/javascript>document.write(new Date().getFullYear());</SCRIPT> <script src="http://s9.cnzz.com/stat.php?id=5625716&amp;web_id=5625716" language="JavaScript"></script> Design by <a href="http://www.pxgrids.com/" target="_blank">像素格工作室</a></div>
          <div id="menu-footer">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c2327368a08a8ff3f34a0e4b6837b1c&action=category&catid=1&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
          <ul>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a></li>
          <?php $n++;}unset($n); ?>
          </ul>  
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
          <!--[END] bottom-->
     	 </div>
  		</div>
  </div>
  <!--[END] fcontent-->  
<!--[END] footer-->
<?php echo tjcode();?>
<?php echo runhook('glogal_footer')?>
<!--start TO TOP-->
<a href="#" id="toTop" style="display: inline; "><span id="toTopHover" style="opacity: 0; "></span>To Top</a>
	<script src="<?php echo JS_PATH;?>pxgrids/easing.js" type="text/javascript"></script>
	<script src="<?php echo JS_PATH;?>pxgrids/jquery.ui.totop.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
<!--END TO TOP-->
</body>
</html>

<!-- 
               像素格工作室-Pixel grid studio  www.pxgrids.com


                                  _oo8oo_
                                 o8888888o
                                 88" . "88
                                 (| -_- |)
                                 0\  =  /0
                               ___/'==='\___
                             .' \\|     |// '.
                            / \\|||  :  |||// \
                           / _||||| -:- |||||_ \
                          |   | \\\  -  /// |   |
                          | \_|  ''\- - -/''  |_/ |
                          \  .-\__  '-'  __/-.  /
                        ___'. .'  /- -.- -\  '. .'___
                     ."" '<  '.___\_<|>_/___.'  >' "".
                    | | :  `- \`.:`\ _ /`:.`/ -`  : | |
                    \  \ `-.   \_ __\ /__ _/   .-` /  /
                =====`-.____`.___ \_____/ ___.`____.-`=====
                                  `=- - -=`
 
 
               ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

                   佛祖保佑         永不宕机/永无bug


                                                                                                              
                          ┏┛┻━━━┛┻┓
                          ┃｜｜｜｜｜｜｜┃
                          ┃　　　━　　　┃
                          ┃　┳┛ 　┗┳ 　┃
                          ┃　　　　　　　┃
                          ┃　　　┻　　　┃
                          ┃　　　　　　　┃
                          ┗━┓　像　┏━┛
                          　　┃　素　┃　　
                          　　┃　格　┃　　
                          　　┃　工　┃　　
                          　　┃　作　┃
                          　　┃　室　┗━━━┓
                          　　┃  PIXEL GRID　┣┓
                          　　┃  pxgrids.com ┃
                          　　┗┓┓┏━┳┓┏┛
                          　　　┃┫┫　┃┫┫
                          　　　┗┻┛　┗┻┛

-->


