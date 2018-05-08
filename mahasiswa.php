<html>
    <head>
        <script src="jquery-3.3.1.min.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            $(function(){
			$.ajax({
				url: 	"json.php",
				type:	"GET",
                dataType: "JSON",
				success: function(data){
					for(i=0; i<data.length; i++){
                        $('tbody').append('<tr><td>'+data[i].npm+
                                            '</td><td>'+data[i].nama+
                                            '</td><td>'+data[i].kelas+
                                            '</td><td>'+data[i].sesi+
                                            '</td></tr>');
                    }
				},
				error:	function(data){
					alert("Eror gabisa mroses");
				}
			});
	});		
	
        </script>
         </head>
        <body>
           <form action="" id="myform">
               <table border="1" cellspacing="0" width="100%">
                   <thead>
                       <tr>
                           <th>NPM</th>
                           <th>Nama</th>
                            <th>Kelas</th>
                             <th>Sesi</th>
                       </tr>
                   </thead>
                   <tbody></tbody>
               </table>
           </form>
        </body>
   
</html>
