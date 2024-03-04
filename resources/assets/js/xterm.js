const terminal = new Terminal();
terminal.open(document.getElementById('terminal'));
let socket;

function connectToWebSocket(sessionId) {
    socket = new WebSocket('ws://your-laravel-websocket-server/' + sessionId);

    socket.onopen = function(e) {
        console.log("Connection established");
    };

    socket.onmessage = function(event) {
        const data = JSON.parse(event.data);
        if (data.output) {
            terminal.write(data.output);
        }
    };

    
    terminal.onData(data => {
        socket.send(JSON.stringify({command: data}));
    });
}
