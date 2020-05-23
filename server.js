var socket = require('socket.io'),
	express = require('express'),
	https = require('https'),
	http= require('http'),
	logger = require('winston');

logger.remove(logger.transports.Console);
logger.add(logger.transports.Console,{colorize:true,timestamp:true});
logger.info('Socket IO > listening PORT');

// https

// var https_server = https.createServer({
// 	key:fs.readFileSync(''),
// 	cert:fs.readFileSync('')
// },app).listen(3000)


var app = express();
var https_server = http.createServer(app).listen(3001);

function emitNewOrder(https_server){
	var io = socket.listen(https_server);
	// 

	io.sockets.on('connection',function(socket){

		socket.on("new_order",function(data){

			io.emit("new_order",data);
		})

	});
}


emitNewOrder(https_server);