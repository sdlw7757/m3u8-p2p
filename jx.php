<?php
if(empty($_GET['url'])){
    Header("Location:https://www.naikan.cc/");
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
<script src="jquery-1.7.2.min.js" type="text/javascript"></script>
</head>
<body style="overflow-y:hidden;">
<input type="hidden" id="u" value="<?php echo htmlspecialchars((isset($_GET["url"])?$_GET["url"]:""), ENT_QUOTES, 'UTF-8'); ?>">
<div style="margin:0px auto;width:100%;height:100%;">
    <iframe id="WANG" scrolling="no" allowtransparency="true" allowfullscreen="true" frameborder="0" src="" width="100%" height="100%"></iframe>
</div>
<script>
    var u = $("#u").val();
    function play(url) {
        $('#WANG').attr('src', decodeURIComponent(url)).show();
    }
    if (u.indexOf(".m3u8") != -1) {
        play('index1.php?url=' + encodeURIComponent(u));
    } else if (u.indexOf("/share/") != -1) {
        play(u);
    } else {
        play('https://www.xiaodigu.cc/dplayer/?url=' + encodeURIComponent(u));
    }
</script>
</body>
</html>
