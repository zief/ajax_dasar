<html>
<head>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

<script type="text/javascript">
	$(function(){
		var i = 0;
		$('button').click(function(){
			$.ajax({
				url: 	"hitung.php",
				type:	"GET",
				data:	"count="+i,
				success: function(data){
					i = data;
					$('.tampil').append(" "+data);
				},
				error:	function(data){
					alert("Eror gabisa mroses");
				}
			});
		});
	});
</script>
<body>
	<button>Bilangan genap</button><br><br>
	<div class="tampil"></div>	
</body>		
</head>
</html>