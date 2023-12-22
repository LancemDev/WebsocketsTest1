<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websockets Test</title>
</head>
<body>
   <script>
    var socket = new WebSocket('ws://localhost:6001'); // replace with your server url and port

    socket.onopen = function() {
        console.log('WebSocket is connected.');
    };

    socket.onerror = function(error) {
        console.log('WebSocket Error: ', error);
    };
   </script> 
</body>
</html>