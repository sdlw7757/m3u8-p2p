<?php
if(empty($_GET['url'])){
    Header("Location:https://www.naikan.cc");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<title>我爱云解析</title>
<style type="text/css">
body,html{width:100%;height:100%;background:#000;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
</style>
<script charset="utf-8" src="jquery-1.7.2.min.js"></script>
</head>
<body style="overflow-y:hidden;">
<input type="hidden" id="u" value="<?php echo htmlspecialchars((isset($_GET["url"])?$_GET["url"]:""), ENT_QUOTES, 'UTF-8'); ?>">
<div style="margin:0px auto;width:100%;height:100%;">
    <iframe id="WANG" scrolling="no" allowtransparency="true" allowfullscreen="true" frameborder="0" src="" width="100%" height="100%"></iframe>
</div>
<script>
    var u = $("#u").val();
    var is_iPhone = navigator.userAgent.toLowerCase().match(/(phone|pad|pod|iPhone|iPod|ios|iPad)/i) != null;
    var is_mobile = navigator.userAgent.toLowerCase().match(/(Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i) != null;
    function play(url) {
        $('#WANG').attr('src', decodeURIComponent(url)).show();
    }
    if(is_iPhone){  //苹果手机调用官方DPlayer播放器
        play('dp/?url=' + encodeURIComponent(u));
    }else if(is_mobile){  //安卓手机调用CKPlayer-P2P播放器
        play('ck2/?url=' + encodeURIComponent(u));
    }else{ //电脑调用DPlayer-P2P播放器
        play('dp2/?url=' + encodeURIComponent(u));
    }
</script>
</body>
</html>
