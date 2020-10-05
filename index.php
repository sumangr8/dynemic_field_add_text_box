<?php //$con=mysqli_connect("localhost","root","","ajex_form"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
	<script src="jquery.js"></script>
	<!-- <script src="js1.js"></script>
	<script src="js2.js"></script> -->
</head>
<body>
<div class="container">
	<div class="col-xl-6">
		<form id="myform">
			<table class="table" id="mytable">
				<tr>
					<td>Name : <input type="text" name="name[]" id="name" class="form-control name_list"></td>
					<td><br><button name="add" id="add" class="btn btn-success">Add More</button></td>
				</tr>
			</table>
			<input type="button" name="submit" id="submit" value="submit" class="btn btn-primary">
		</form>
	</div>
</div>
<script src="jquery.js"></script>
<script>
	$(document).ready(function(){
		var i=1;
		$("#add").click(function(e){
			e.preventDefault();
			i++;
			$("#mytable").append('<tr id="'+i+'"><td>Name : <input type="text" name="name[]" id="name" class="form-control name_list"></td><td><br><button name="remove" id="'+i+'" class="btn btn-success btn_remove">X</button></td></tr>');
		});

		$(document).on("click",".btn_remove",function(){
			var id=$(this).attr("id");
			$("#row"+id+"").remove();
		});

		$("#submit").click(function(e){
			e.preventDefault();
			var data=$('#myform').serialize();
			// console.log(data);
			$.ajax({
				url : 'insert.php',
				type: 'POST',
				data:$('#myform').serialize(),
				success:function(data)
				{
					alert(data);
				}
			});
		});


	});
</script>
</body>
</html>