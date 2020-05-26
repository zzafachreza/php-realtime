var socket = require('socket.io'),
	express = require('express'),
	https = require('https'),
	http= require('http'),
	logger = require('winston'),
	fs = require('fs');

logger.remove(logger.transports.Console);
logger.add(logger.transports.Console,{colorize:true,timestamp:true});




logger.info('Socket IO > listening PORT');

// https



var app = express();
var https_server = http.createServer(app).listen(3001,'localhost');

function emitNewOrder(https_server){

	var io = socket.listen(https_server);


	io.sockets.on('connection',function(socket){

		socket.on("abu_hanif",function(data){	


			io.emit("abu_hanif",data);
            // console.log(data)

		})

	});



}


emitNewOrder(https_server)
