<?php 
//因为一些基本的参数在前面文件主题已经加载好了，不需要重新查询，可以直接用，直接写你的页面模板逻辑即可
//移动端结构比较特殊，可以基于我下面的结构去改动。
?>
<div data-page="post-single" class="page no-tabbar post-bbs">

<div class="navbar">
<div class="navbar-inner">
<div class="left"><a href="#" class="back link icon-only"><i class="jinsom-icon jinsom-fanhui2"></i></a></div>
<div class="center sliding">中间标题</div>
<div class="right"><a href="#" class="link icon-only">右上角</a></div>
</div>
</div>

<div class="page-content keep-toolbar-on-scroll">
<?php 
echo '当前论坛模板类型：'.$bbs_template.'</br>';//你可以根据这个值判断，不同类型输出不一样的模板
echo '当前用户ID是：'.$user_id.'</br>';//如果$user_id为0，则用户没有登录
echo '当前论坛的父级论坛ID是：'.$bbs_id.'</br>';
echo '当前论坛的论坛ID是：'.$loop_cat_id.'</br>';//可能是父级论坛，也可能是子论坛，$bbs_id获取到的必定是父级论坛
echo '当前论坛的子论坛ID是：'.$child_cat_id.'</br>';//如果为0则证明这个论坛没有子论坛

if($bbs_template=='test1'){
echo '这里是论坛测试模板1的移动端界面';
}else if($bbs_template=='test2'){
echo '这里是论坛测试模板2的移动端界面';	
}

//这里是页面的各种逻辑了，随便你发挥了
?>

</div>
</div>