<html lang="zh-Hant-TW">
	<head>
		<meta charset="utf-8"><!--編碼-->
		<link rel="icon" href="../../image/logo.ico" type="image/黑暗堅果.ico"><!--商標-->
		</link>
		<!--標題-->
		<title>
			堅果網誌｜php抓取用戶IP｜$_SERVER['REMOTE_ADDR']
		</title>
		<link href="../../css/堅果網誌.css" rel="stylesheet" type="text/css"><!--排版(外部css)-->
	</head>
	<body id="canvas_div_no_cursor"><!--id用於隱藏游標-->
		<div class="back" title="上一頁" onclick="history.go(-1)"><!--上一頁-->
		</div>
		<div class="next" title="下一頁" onclick="history.go(1)"><!--下一頁-->
		</div>
		<div class="refresh" title="重新整理" onclick="window.location.reload()"><!--重新整理-->
		</div>
        <div class="title00"><!--上方標題欄-->
			<center><!--置中-->
				<a class="title0" href="../../堅果網誌.html" title="傳送回首頁">
					堅果網誌&nbsp;&nbsp;
				</a>
				<a>
					&nbsp;
				</a>
				<a href="../../post01/post.html" class="post01" title="傳送到文章">
					文章
				</a>
				<a>
					&nbsp;
				</a>
				<a href="../../image01/image.html" class="image01" title="傳送到圖片">
					圖片
				</a>
				<a>
					&nbsp;
				</a>
				<a href="../../music01/music.html" class="music01" title="傳送到音樂">
					音樂
				</a>
				<a>
					&nbsp;
				</a>
				<a href="../../video01/video.html" class="video01" title="傳送到影片">
					&nbsp;影片
				</a>
				<a>
					&nbsp;
				</a>
				<a href="../../tool01/tool.html" class="tool01" title="傳送到工具">
					工具
				</a>
				<a>
					&nbsp;
				</a>
				<a href="../../game01/game.html" class="game01" title="傳送到遊戲">
					&nbsp;遊戲
				</a>
			</center>
		</div>
		<div>
			<br>
			<br>
		</div>
		<article>
	<h2>php抓取用戶IP｜$_SERVER['REMOTE_ADDR']</h2>
	
	<h3>扇形</h3>
	<p>html:</p>
	<div class="codeblock" style="width:280px;">
	&lt;?php
		$guest_ip=$_SERVER['REMOTE_ADDR'];
		echo "您的IP是:".$guest_ip."&lt;br /&gt;";
	?&gt;
	</div>
	<p>效果:</p>
	<?php
		$guest_ip=$_SERVER['REMOTE_ADDR'];
		echo "您的IP是:".$guest_ip."<br />";
	?>
	
	
	
		</article>
		<a href="https://www.facebook.com/%E6%9A%97%E9%BB%91%E5%A0%85%E6%9E%9C-116935436375829"><div class="signature" title="傳送到暗黑堅果臉書粉絲專頁"><!--右下臉書連結-->
		</div></a>
		<img src="../../image/cursor.svg" id="im"/><!--堅果圖示(跟隨游標)-->
    </body>
</html>
<script type="text/javascript" src="../../js/堅果網誌.js">//學不會的東西(外部js)
</script>
