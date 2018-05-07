<html>
    <head>
        <script src="jquery-3.3.1.min.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            $(function(){
		
		$('#myform').submit(function(){
			$.ajax({
				url: 	"simpan.php",
				type:	"POST",
				data:	$(this).serialize(),
				success: function(data){
					alert(data);
					$('[name=nama_lengkap]').val("");
					$('[name=email]').val("");
					
				},
				error:	function(data){
					alert("Eror gabisa mroses");
				}
			});
			return false;
		});
	});
        </script>
         </head>
        <body>
            Masukkan data!
            <form id="myform">
                <table>
                    <tr>
                        <td>
                            Nama Lengkap :
                        </td>
                        <td>
                            <input type="text" name="nama_lengkap"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email :
                        </td>
                        <td>
                            <input type="text" name="email" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button>
                                Simpan
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </body>
   
</html>
