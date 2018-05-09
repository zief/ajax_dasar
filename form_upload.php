<html>
    <head>
        <script src="jquery-3.3.1.min.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            $(function(){
			$('#gambar').change(function(){
				var formdata = new FormData();
				var file = $('#gambar')[0].files[0];
				formdata.append("gambar", file);
			

			$.ajax({
				url: 	"upload.php",
				type:	"POST",
                data:	formdata,
                processData: false,
                contentType: false,
				success: function(data){
					$('.tampil').append("<img src='"+data+"' width='100'>");
				},
				error:	function(data){
					alert("Eror gabisa nyimpen");
				}
			});
			return false;
		});
	});		
	
        </script>
         </head>
        <body>
           <form enctype="multipart/form-data">Upload Gambar
           	<input type="file" name="gambar" id="gambar">
           </form>
           <br>
           <div class="tampil"> </div>
        </body>
   
</html>
