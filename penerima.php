<?php

session_start();




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>PHP Realtime</title>
  </head>
  <body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
       <script src="push.min.js"></script>
       <script src="push.min.js.map"></script>
</head>
<body>
<div class="container">
	<h1>Pesan Masuk <?php 

			if (!empty($_POST)) {

			 $_SESSION['user'] = $_POST['user'];
			# code...
		}

	 ?> </h1>

	<form method="POST">
		<input type="text" name="user">
		<button type="submit">enter nama</button>
	</form>
	<div class="alert alert-success" role="alert" style="display: none">
  ada notifikasi baru
</div> 
<table class="table table-bordered">
<span id="user"><?php echo $_SESSION['user']; ?></span>
<thead>
		<tr>
		<td>Pesan</td>
		<td>Tanggal</td>
	</tr>
</thead>
	<tbody>
		
	</tbody>
</table>
</div>
</body>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script type="text/javascript">
	var socket = io.connect("http://1.1.26.116:3001");

	socket.on("abu_hanif",function(data){

		console.log(data);

		if($("#user").text()==data.user){



		$("tbody").append("<tr><td>"+data.pesan+"</td><td>"+data.waktu+"</td></tr>")


		$(".alert").show().text(data.pesan);

            setTimeout(function(){
              $(".alert").hide()
            },2000);

		}
	})
</script>
</html>