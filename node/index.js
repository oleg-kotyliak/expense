var http = require('http'),
    express = require('express'),
    app = express(),
    bodyParser = require('body-parser'),
    db = require('./db.js'),
    Accounts = require('./schemas/accounts.js');

//for whole app
app.use(bodyParser.json());
app.use(express.static(__dirname +'/../'));


app.get('/test', function (req, res) {
    res.send(req);
});

app.post('/accounts', function (req, res) {
    console.log('Huston, we have data from UI.');
    console.log(req.body);
    res.json(req.body);
});

app.listen(3000, function () {
    console.log('Example app listening on port 3000!');
});


// var handleRequest = function(req, res) {
//     res.writeHead(200, {'Content-type': 'text/plain'});
//     res.end('Welcome to ExpenceDEV prod \n');
// }

// var record = new Accounts({
//     id: 2,
//     title: 'under the bed',
//     type: 'cash',
//     money: 9375
// });

// record.save(function (err) {
//     if (err) {
//         console.log(err);
//     } else {
//         console.log({status: 'success'});
//     }
// });

// Accounts.find().exec(function (err, res) {
//     if (err) {
//         console.log(err);
//     } else {
//         console.log(res);
//     }
// });

// var server = http.createServer(handleRequest);
// server.listen(3000, "localhost");