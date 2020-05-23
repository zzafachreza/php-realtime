<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>

</body>
<script type="text/javascript">
	var socket = io.connect("http://1.1.26.116:3001");

	socket.on("abi",function(data){
		console.log(data);
	})
</script>
</html>