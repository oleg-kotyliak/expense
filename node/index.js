var http = require('http'),
    db = require('./db.js'),
    Accounts = require('./schemas/accounts.js');

var handleRequest = function(req, res) {
    res.writeHead(200, {'Content-type': 'text/plain'});
    res.end('Welcome to ExpenceDEV prod \n');
}

var record = new Accounts({
    id: 2,
    title: 'under the bed',
    type: 'cash',
    money: 9375
});

// record.save(function (err) {
//     if (err) {
//         console.log(err);
//     } else {
//         console.log({status: 'success'});
//     }
// });

Accounts.find().exec(function (err, res) {
    if (err) {
        console.log(err);
    } else {
        console.log(res);
    }
});

var server = http.createServer(handleRequest);
server.listen(3000, "localhost");