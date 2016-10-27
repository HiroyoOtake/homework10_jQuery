
  // ここに JavaScript を書く
	$(function() {
			// function test() {
			// alert("Hello");
			// }
			// test();
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
			// $('#area1').on('click',test);
			var label = $('.label-box').attr('data-label');
			$('.label-box').each(function(){
			$(document).on('ready',function(){
			$(".label-box").text(label)
			})});
	});
