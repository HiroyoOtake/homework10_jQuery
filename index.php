<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <style type="text/css">
  div, p {
    margin: 0 0 0 10px;
    width: 100px;
    height: 100px;
    border: 1px solid #ccc;
    display: inline-block;
  }
  hr {
    border-color: #f8f8f8;
  }
  </style>

  <script>
  // ここに JavaScript を書く
	$(function() {
			$("#area2").css({'border':'solid 5px', 'color':'#DCDCDC'});	
			$(".square").css('background','#ccccff');	
			var newText = '宿題さん';
			// $(':text[name="name"]').val(newText);
			$('input[name="name"]').val(newText);
			$('[name="kana"]').css({'border':'solid 2px #ff3333', 'background':'#ffcccc'});	
			$('[name="address"]').prop('disabled', true);
			$('input[name="check"]').prop("checked",true);
			$('section > div:eq(2)').css({'border':'solid 5px', 'color':'#DCDCDC'});	
			$('div[class="square2"]').css('background','#ccccff');	
			var Date = '<?php echo date("Y-m-d H:i:s") ?>';
	});
  </script>

</head>
<body>
  <div id="area1"></div>
  <div id="area2"></div>
  <div id="area3"></div>
  <div id="area4"></div>

  <hr>

  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>

  <hr>

  名前: <input type="text" name="name"><br>
  カナ: <input type="text" name="kana"><br>
  住所: <input type="text" name="address"><br>
  チェック: <input type="checkbox" name="check"><br>

  <hr>

  <section id="container">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </section>

  <hr>

  <div class="square2"></div>
  <div class="square2"></div>
  <p class="square2"></p>
  <p class="square2"></p>

  <hr>

  <!-- 応用要件 -->
  <div class="label-box" data-label="label1"></div>
  <div class="label-box" data-label="label2"></div>
  <div class="label-box" data-label="label3"></div>
  <div class="label-box" data-label="label4"></div>


</body>
</html>
