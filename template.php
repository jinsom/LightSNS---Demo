<?php 
//论坛内页自定义模板
//==========一般情况判断移动端或电脑端分别引入对于的模板代码，当然如果你逻辑简单也可以写在这个页面
//==========用户是否有权限访问论坛的逻辑不需要你们再次判断了

if(wp_is_mobile()){//移动端

//这里可以写你移动端模板的逻辑

require('mobile.php');//我这里直接引入另一个文件，移动端模板写在另一个文件，这样方便维护


}else{//电脑端

//这里可以写你电脑端模板的逻辑

require('pc.php');//我这里直接引入另一个文件，电脑端模板写在另一个文件，这样方便维护


}